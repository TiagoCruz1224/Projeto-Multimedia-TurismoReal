<!--Nav-->
<nav id="header" class="w-full z-30 top-0 text-white">
    </div>
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                href="{{ url('/') }}">
                <img src="{{ asset('images/asset_3.png') }}" alt="{{ __('Logo') }}" width="200px">
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-black hover:text-yellow-400 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>{{ __('Menu') }}</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-gray-800 lg:bg-transparent text-black p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block text-white no-underline hover:text-gray-300 text-lg hover:text-underline py-2 px-4"
                        href="{{ url('/') }}">{{ __('navbar.Home') }}</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-white no-underline hover:text-gray-300 text-lg hover:text-underline py-2 px-4"
                        href="{{ url('/roteiro') }}">{{ __('navbar.Roteiro') }}</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-white no-underline hover:text-gray-300 text-lg hover:text-underline py-2 px-4"
                        href="{{ url('/articles') }}">{{ 'Blog' }}</a>
                </li>
                <li class="relative">
                    <button id="languageButton"
                        class="inline-block text-white no-underline hover:text-gray-300 text-lg hover:text-underline py-2 px-4">
                        {{ __('navbar.Línguas') }}
                    </button>
                    <div id="languagePopup" class="absolute hidden bg-white border rounded-lg mt-2 p-2">
                        <div class="flex">
                            <form method="get" action="{{ route('change.language', ['locale' => 'en']) }}">
                                <button type="submit" class="mr-2">
                                    <img src="/images/bandeiraa.png" alt="{{ __('navbar.English') }}" class="w-8 h-8">
                                </button>
                            </form>
                            <form method="get" action="{{ route('change.language', ['locale' => 'pt']) }}">
                                <button type="submit">
                                    <img src="/images/bandeira.jpg" alt="{{ __('navbar.Português') }}" class="w-8 h-8">
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
                @if (Route::has('login'))
                    @auth
                        <a class="inline-block text-white no-underline font-bold hover:text-gray-300 text-lg hover:text-underline py-2 px-4"
                            href="{{ url('/cart') }}">{{ __('navbar.Carrinho') }}</a>
                        <a class="inline-block text-white no-underline font-bold hover:text-gray-300 text-lg hover:text-underline py-2 px-4"
                            href="{{ url('/dashboard') }}">{{ __('navbar.Dashboard') }}</a>
                    @else
                        <a href="{{ route('login') }}" id="navAction"
                            class="mx-auto lg:mx-0 bg-white text-gray-800 text-lg font-semibold rounded-full mt-4 lg:mt-0 py-2 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            {{ __('navbar.Login') }}</a>&nbsp;&nbsp;
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" id="navAction2"
                                class="mx-auto lg:mx-0 bg-white text-gray-800 text-lg font-semibold rounded-full mt-4 lg:mt-0 py-2 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                {{ __('navbar.Register') }}</a>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const languageButton = document.getElementById('languageButton');
        const languagePopup = document.getElementById('languagePopup');

        languageButton.addEventListener('click', function() {
            languagePopup.style.display = (languagePopup.style.display === 'none') ? 'block' : 'none';
        });

        document.addEventListener('click', function(event) {
            if (!languageButton.contains(event.target) && !languagePopup.contains(event.target)) {
                languagePopup.style.display = 'none';
            }
        });
    });
</script>
