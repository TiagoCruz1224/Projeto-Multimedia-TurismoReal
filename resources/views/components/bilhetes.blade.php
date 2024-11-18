<section class="bg-white pt-8 pb-32">
    <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full text-5xl font-bold leading-tight text-center text-gray-900">
            {{ __('about.Bilhetes') }}
        </h2>
        <div class="w-full mb-6">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($bilhetes as $bilhete)
                <div class="p-6 border border-gray-300 flex flex-col items-center rounded-lg shadow-lg h-full">
                    <div class="md:w-48 h-1/2">
                        <img class="h-32 w-full md:w-48" src="{{ $bilhete->imagem }}" alt="Imagem do bilhete">
                    </div>
                    <div class="p-6 flex flex-col items-center">
                        <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $bilhete->nome }}
                        </div>
                        @if (!$bilhete->descricao)
                            @php
                                //#047857->verde | #C3423F->vermelho
                                $hasAlojamento = $bilhete->alojamento ? '#047857' : '#C3423F';
                                $hasRefeicoes = $bilhete->refeicoes ? '#047857' : '#C3423F';
                                $hasTransporte = $bilhete->transporte ? '#047857' : '#C3423F';
                                $hasGuia = $bilhete->guia ? '#047857' : '#C3423F';
                            @endphp
                            <table class="mt-2 w-full">
                                <tr>
                                    <th class="px-4 py-2">Alojamento</th>
                                    <td class="px-4 py-2">
                                        <svg fill="{{ $hasAlojamento }}" width="20px" viewBox="0 0 50 50"
                                            version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg"
                                            overflow="inherit">
                                            <circle cx="25" cy="25" r="25" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2">Refeições</th>
                                    <td class="px-4 py-2">
                                        <svg fill="{{ $hasRefeicoes }}" width="20px" viewBox="0 0 50 50"
                                            version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg"
                                            overflow="inherit">
                                            <circle cx="25" cy="25" r="25" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2">Transporte</th>
                                    <td class="px-4 py-2">
                                        <svg fill="{{ $hasTransporte }}" width="20px" viewBox="0 0 50 50"
                                            version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg"
                                            overflow="inherit">
                                            <circle cx="25" cy="25" r="25" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2">Guia Turístico</th>
                                    <td class="px-4 py-2">
                                        <svg fill="{{ $hasGuia }}" width="20px" viewBox="0 0 50 50"
                                            version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg"
                                            overflow="inherit">
                                            <circle cx="25" cy="25" r="25" />
                                        </svg>
                                    </td>
                                </tr>
                            </table>
                            <div class="mt-2">
                                <p class="text-center text-gray-500">Preço: {{ $bilhete->preco }} €</p>
                                <form class="text-center" action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $bilhete->id }}">
                                    <input type="hidden" name="name" value="{{ $bilhete->nome }}">
                                    <input type="hidden" name="price" value="{{ $bilhete->preco }}">
                                    <input
                                        class="w-32 text-center h-3 text-gray-800 outline-none rounded border border-gray-600 py-3 my-2"
                                        type="number" name="qnt" min="1" max="10" value="1">
                                    <input type="hidden" name="img" value="{{ $bilhete->imagem }}">
                                    <button
                                        class="inline-block px-6 py-3 gradient text-white font-semibold rounded-lg shadow-md transform transition hover:scale-105 duration-300 ease-in-out">Comprar</button>
                                </form>
                            </div>
                        @else
                            <span class="my-14 font-bold">{{ $bilhete->descricao }}</span>
                            <a href="mailto:suporte.turismoreal@gmail.com"
                                class="inline-block px-6 py-3 gradient text-white font-semibold rounded-lg shadow-md  transform transition hover:scale-105 duration-300 ease-in-out">Suporte</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
