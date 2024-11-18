<div class="container max-w-5xl mx-auto m-8">
    <h2 class="w-full text-5xl font-bold leading-tight text-center text-gray-900">
        {{ __('about.Sobre Nós') }}
    </h2>

    <div class="w-full mb-6">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    <div class="flex flex-wrap">
        @foreach ($sections as $section)
            <div class="w-5/6 sm:w-1/2 p-8">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    {{ $section->section_title }}
                </h3>
                <p class="text-gray-900 mb-8">
                    {{ $section->section_content }}
                </p>
            </div>
        @endforeach
    </div>
</div>
