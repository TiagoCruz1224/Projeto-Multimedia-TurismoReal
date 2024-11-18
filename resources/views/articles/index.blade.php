@extends('articles')

@section('content')
    <div class="bg-white pt-8 pb-32">
        <div class="container flex gap-24 mx-auto m-4 pt-24">
            <div class="col-md-8 w-full">
                <div class="card">
                    @if (session()->has('success'))
                        <div class="font-bold text-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card-header">Newest articles!!</div>
                    <div class="card-body">
                        <table class="shadow-lg bg-white w-full">
                            @forelse ($articles as $article)
                                <tr class="space-y-4">
                                    <td class="border w-52 px-8 py-4">
                                        <img src="{{ $article->getFirstMediaUrl('articleImage', 'thumb') }}" />
                                    </td>
                                    <td class="border px-8 py-4">
                                        <a href="{{ route('articles.show', $article->id) }}"
                                            class="text-lg leading-relaxed">
                                            <h2 class="text-3xl pb-5">{{ $article->title }}</h2>
                                        </a>
                                        <p class="text-lg leading-relaxed">
                                            <b>Author:</b> {{ $article->author->name }}
                                        </p>
                                        <p class="text-lg leading-relaxed">
                                            <b>Categories:</b>
                                        <ul class="list-disc ml-6">
                                            @foreach ($article->categories as $category)
                                                <li>
                                                    <a href="{{ route('articles.index') }}?category_id={{ $category->id }}"
                                                        class="text-blue-500 hover:underline">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        </p>
                                        <p class="text-lg leading-relaxed">
                                            <b>Tags:</b>
                                        <ul class="list-disc ml-6">
                                            @foreach ($article->tags as $tag)
                                                <li>
                                                    <a href="{{ route('articles.index') }}?tag_id={{ $tag->id }}"
                                                        class="text-blue-500 hover:underline">{{ $tag->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        </p>
                                        <p class="text-lg leading-relaxed">
                                            {{ substr($article->article_text, 0, 200) }}...
                                            <a href="{{ route('articles.show', $article->id) }}"
                                                class="text-blue-500 hover:underline">Read full article</a>
                                        </p>
                                        @can('delete-article', $article)
                                            <!-- Adicione o botão de exclusão aqui -->
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="pt-8">
                                        <hr />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-lg leading-relaxed">No articles yet.</td>
                                </tr>
                            @endforelse
                        </table>

                        {{ $articles->links() }}

                    </div>
                </div>
            </div>
            <div class="col-md-4 flex flex-col mt-4">
                @include('articles.sidebar')
            </div>
        </div>
    </div>
@endsection
