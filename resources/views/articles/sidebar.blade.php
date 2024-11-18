<div class="card">
    <div class="card-header font-bold">Search by keyword</div>

    <div class="card-body border px-8 py-4">
        <form action="{{ route('articles.index') }}" method="GET" class="flex">
            <input type="text" name="query" placeholder="Enter a keyword here..." value="{{ request('query') }}"
                class="form-input flex-1" />
            <button type="submit"
                class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button>
        </form>
    </div>
</div>

<br />

<div class="card">
    <div class="card-header font-bold">Categories</div>

    <div class="card-body border px-8 py-4">
        <ul>
            @foreach ($all_categories as $category)
                <li>
                    <a href="{{ route('articles.index') }}?category_id={{ $category->id }}"
                        class="text-blue-500 hover:underline">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<br />

<div class="card">
    <div class="card-header font-bold">Tags</div>

    <div class="card-body border px-8 py-4">
        <ul>
            @foreach ($all_tags as $tag)
                <li>
                    <a href="{{ route('articles.index') }}?tag_id={{ $tag->id }}"
                        class="text-blue-500 hover:underline">{{ $tag->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<br />


<div class="card-body">
    <form action="{{ route('articles.create') }}" method="GET">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add
            new article</button>
    </form>
</div>
</div>
