<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        FAQ
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #047857 0%, #1c779e 100%);
        }

        .hero {
            position: relative;
            width: 100%;
            height: 60vh;
        }

        .imagem {
            position: absolute;
            background-image: url('{{ asset('images/ImagemEditada1.jpg') }}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 95%;
            width: 100vw;
            height: 100%;
            z-index: -1;
            opacity: 0.5;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 1);
            /* Ajuste o valor alpha (0.5) para definir a opacidade desejada */
            z-index: -1;
        }
    </style>
</head>

<body class="leading-normal tracking-normal bg-transparent gradient overflow-x-hidden"
    style="font-family: 'Source Sans Pro', sans-serif;">
    <x-navbarinv />
    <!-- Hero -->
    <div class="hero">
        <div class="imagem"></div>
        <div class="grid w-full text-center items-center p-60">
            <div class="">
                <h1 class="my-4 text-8xl font-bold leading-tight text-white">
                    FAQ
                </h1>
            </div>
        </div>
    </div>
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-900">
                FAQ - Turismo Real
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap flex-col gap-2">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="p-6 pb-0">
                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                            {{ __("faq.questions.question{$i}") }}
                        </h3>
                        <ul class="list-disc text-gray-800 text-xl font-medium pl-10">
                            <li>{{ __("faq.questions.answer{$i}") }}</li>
                        </ul>
                    </div>
                @endfor
            </div>
            <script>
                let prevScrollPos = window.pageYOffset;

                window.onscroll = function() {
                    const currentScrollPos = window.pageYOffset;

                    if (currentScrollPos === 0) {
                        // Página no topo, exibe o header
                        document.getElementById('header').style.top = '0';
                    } else {
                        // Página rolada para baixo, oculta o header
                        document.getElementById('header').style.top = '-100px'; // ou o valor da altura do seu header
                    }

                    prevScrollPos = currentScrollPos;
                };
            </script>
        </div>
    </section>
</body>

</html>
<script>
    let prevScrollPos = window.pageYOffset;

    window.onscroll = function() {
        const currentScrollPos = window.pageYOffset;

        if (currentScrollPos === 0) {
            // Página no topo, exibe o header
            document.getElementById('header').style.top = '0';
        } else {
            // Página rolada para baixo, oculta o header
            document.getElementById('header').style.top = '-100px'; // ou o valor da altura do seu header
        }

        prevScrollPos = currentScrollPos;
    };
</script>
</body>

</html>
