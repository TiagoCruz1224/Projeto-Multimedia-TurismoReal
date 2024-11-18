<footer class="bg pt-10">
    <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row">
            <div class="flex-1 mb-6 text-white">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/asset_3.png') }}" alt="{{ __('footer.Logo') }}" width="200px">
                </a>
            </div>
            <div class="flex-1 ">
                <p class="uppercase text-red-200 md:mb-3 relative font-bold">
                    {{ __('footer.Links') }}
                </p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ url('/faq') }}"
                            class="no-underline hover:underline text-white hover:text-gray-800">{{ __('footer.FAQ') }}</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="mailto:suporte.turismoreal@gmail.com"
                            class="no-underline hover:underline text-white hover:text-gray-800">{{ __('footer.Support') }}</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-red-200 md:mb-3 relative font-bold">{{ __('footer.Legal') }}</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ url('/termos') }}"
                            class="no-underline hover:underline text-white hover:text-gray-800">{{ __('footer.Terms') }}</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ url('/privacidade') }}"
                            class="no-underline hover:underline text-white hover:text-gray-800">{{ __('footer.Privacy') }}</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-red-200 md:mb-3 relative font-bold">{{ __('footer.Social') }}</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.facebook.com/AgenciaTurismoReal/"
                            class="no-underline hover:underline text-white hover:text-gray-800">{{ __('footer.Facebook') }}</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.instagram.com/agenciaturismoreal/"
                            class="no-underline hover:underline text-white hover:text-gray-800">{{ __('footer.Instagram') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
