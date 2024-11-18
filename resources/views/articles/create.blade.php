@extends('articles')

@section('content')
    <div class="bg-white">
        <div class="flex justify-center">
            <div class="w-full lg:w-2/3 xl:w-1/2">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h2 class="text-3xl font-bold mb-6 text-center">Add new article</h2>

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                            Article title*
                        </label>
                        <input type="text" name="title" id="title" class="form-input w-full mb-4"
                            value="{{ old('title') }}" />

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="article_text">
                            Article text*
                        </label>
                        <textarea name="article_text" id="article_text" class="form-input w-full mb-4" rows="10">{{ old('article_text') }}</textarea>

                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Categories:
                        </label>
                        <div class="mb-4">
                            @foreach ($categories as $category)
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                        class="form-checkbox" />
                                    <span class="ml-2">{{ $category->name }}</span>
                                </label>
                            @endforeach
                        </div>

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">
                            Tags (comma-separated):
                        </label>
                        <input type="text" name="tags" id="tags" class="form-input w-full mb-4" />

                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Image:
                        </label>
                        <input type="file" name="articleImage" class="mb-4" />

                        <input type="submit" value="Save article"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
