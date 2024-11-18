<section class="bg-white pt-8 pb-32">
    <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full text-5xl font-bold leading-tight text-center text-gray-900">
            Merch
        </h2>
        <div class="w-full mb-6">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($merches as $merch)
                <div class="p-6 border border-gray-300 flex flex-col items-center rounded-lg shadow-lg h-full">
                    <div class="md:w-48 h-1/2">
                        <img class="h-32 w-full md:w-48" src="{{ $merch->imagem }}" alt="Imagem do bilhete">
                    </div>
                    <div class="p-6 flex flex-col items-center">
                        <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $merch->nome }}
                        </div>
                        <div class="mt-2">
                            <p class="text-center text-gray-500 font-bold">{{ $merch->descricao }} </p>
                            <p class="text-center text-gray-500 font-bold">Preço: {{ $merch->preco }} €</p>
                        </div>
                        <a href="mailto:suporte.turismoreal@gmail.com"
                            class="inline-block px-6 py-3 mt-3 gradient text-white font-semibold rounded-lg shadow-md  transform transition hover:scale-105 duration-300 ease-in-out">Suporte</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
