<div>
   <!-- Header -->
   <header
      class="fixed top-0 left-0 w-full bg-mittelgruen  flex items-center justify-start h-20 py-2">
      <!-- Logo -->
      <a href="{{ asset('/') }}" class="ml-4">
         <img class="w-28 sm:w-28 md:w-34 lg:w-40 xl:w-44 2xl:w-48" w
              src="{{ asset('/img/logo-schenk-hell-transp-c1999-v8.svg') }}"
              alt="{{ __('Martin Schenk S.L.') }}">
      </a>
   </header>

   <div class="flex flex-col md:flex-row md:items-start bg-mittelgruen mt-20 md:h-[600px]">
      <!-- Header Text -->
      <div class="flex items-center justify-center md:h-full md:w-1/4 md:ml-20">
         <h2
            class="mt-0 mb-2 leading-normal text-2xl sm:text-3xl md:text-4xl md:leading-snug lg:text-5xl lg:leading-snug xl:text-5xl xl:leading-snug 2xl:text-5xl 2xl:leading-snug text-white ">

            {!! $headertitle !!}
         </h2>
      </div>

      <!-- Image -->
      <div class="relative flex-grow md:w-3/4 md:h-[600px]">
         <picture>
            <source media="(min-width: 1536px)" srcset="{{ asset('img/robot-yellow-2-1536w.jpg') }}">
            <source media="(min-width: 1280px)" srcset="{{ asset('img/robot-yellow-2-1280w.jpg') }}">
            <source media="(min-width: 1024px)" srcset="{{ asset('img/robot-yellow-2-1024w.jpg') }}">
            <source media="(min-width: 768px)" srcset="{{ asset('img/robot-yellow-2-768w.jpg') }}">
            <img src="{{ asset('img/robot-yellow-2-640w.jpg') }}" class="w-full h-full object-cover object-top">
         </picture>
      </div>


   </div>
</div>


