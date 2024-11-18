@extends('articles')

@section('content')
    <div class="w-full pt-10 px-9 bg-white">
        <h2 class="text-5xl font-bold text-center items-center text-gray-900">
            {{ $article->title }}
        </h2>
        <div class="flex flex-col mt-10">
            <div class="w-full pr-4">
                <img src="{{ $article->getFirstMediaUrl('articleImage', 'main') }}" class="w-32 rounded" alt="divumbnail">
            </div>
            <div class="container mx-auto mt-5">
                <div class="w-full text-sm lg:text-base mb-6">
                    <div class="flex gap-2 items-center">
                        <div class="font-bold">Author:</div>
                        <div>{{ $article->author->name }}</div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="uppercase">Categories:</div>
                        <div>{!! $article->categories_links !!}</div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="uppercase">Tags:</div>
                        <div>{!! $article->tags_links !!}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-6">
            <p>{{ nl2br($article->article_text) }}</p>
        </div>
    </div>
@endsection
