 <section class="bg-white border-b py-8">
     <div class="container max-w-5xl mx-auto m-8">
         <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
             Roteiro
         </h2>
         <div class="flex flex-col gap-10 mt-10">
             @foreach ($roteiros as $roteiro)
                 <div class="flex w-100 gap-5">
                     <div class="flex flex-col w-1/2 p-4 gap-5 shadow-md rounded-md">
                         <h3 class="text-xl font-semibold text-center">{{ $roteiro->titulo }}</h3>
                         <p class="text-sm text-justify leading-7">{{ $roteiro->texto }}</p>
                     </div>
                     <div class="w-1/2 flex justify-center items-center">
                         <img src="{{ $roteiro->imagem }}" alt="{{ $roteiro->titulo }}" style="max-width: 280px"
                             class="rounded-xl flex justify-center items-center" />
                     </div>
                 </div>
             @endforeach

         </div>

 </section>
