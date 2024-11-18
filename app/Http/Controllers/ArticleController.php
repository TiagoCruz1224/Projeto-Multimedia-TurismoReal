<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
	public function index()
    {
        $articles = Article::with(['categories', 'tags', 'author'])
            ->when(request('category_id'), function($query) {
                return $query->whereHas('categories', function($q) {
                    return $q->where('id', request('category_id'));
                });
            })
            ->when(request('tag_id'), function($query) {
                return $query->whereHas('tags', function($q) {
                    return $q->where('id', request('tag_id'));
                });
            })
            ->when(request('query'), function($query) {
                return $query->where('title', 'like', '%'.request('query').'%');
            })
            ->orderBy('id', 'desc')
            ->paginate(3);
        $all_categories = Category::get();
        $all_tags = Tag::get();
        return view('articles.index', compact('articles', 'all_categories', 'all_tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all() + ['user_id' => auth()->id()]);

        if (isset($request->categories)) {
            $article->categories()->attach($request->categories);
        }

        if ($request->tags != '') {
            $tags = explode(',', $request->tags);
            foreach ($tags as $tag_name) {
                $tag = Tag::firstOrCreate(['name' => $tag_name]);
                $article->tags()->attach($tag);
            }
        }

        if ($request->hasFile('articleImage')) {
			$article->addMedia($request->file('articleImage'))->toMediaCollection('articleImage');
		}

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article->load(['categories', 'tags', 'author']);
        $all_categories = Category::get();
        $all_tags = Tag::get();
        
        return view('articles.show', compact('article', 'all_categories', 'all_tags'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article apagado com sucesso');
    }
}
