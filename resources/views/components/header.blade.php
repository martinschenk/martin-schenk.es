<!-- Header -->
<header
    class="fixed top-0 left-0 w-full bg-mittelgruen z-50 flex items-center justify-start h-[80px] max-h-[80px] py-2">
    <!-- Logo -->
    <a href="{{ asset('/') }}" class="ml-4">
        <img class="w-28 sm:w-28 md:w-34 lg:w-40 xl:w-44 2xl:w-48"
             src="{{ asset('/img/logo-schenk-hell-transp-1999-2023v7.svg') }}"
             alt="{{ __('Martin Schenk S.L.') }}">
    </a>
</header>

<div class="flex flex-col md:flex-row md:items-start bg-mittelgruen mt-20 h-[600px]"> <!-- Add a fixed height here -->
    <!-- Header Text -->
    <div class="flex items-center justify-center h-full md:w-1/4 md:ml-20">
        <h1 class="text-2xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-3xl text-white">
            {!! $headertitle !!}
        </h1>
    </div>

    <!-- Image -->
    <div class="relative flex-grow md:w-3/4 h-[600px]"> <!-- Set a maximum height -->
        <picture>
            <source media="(min-width: 1536px)" srcset="{{ asset('img/robot-yellow-2-1536w.jpg') }}">
            <source media="(min-width: 1280px)" srcset="{{ asset('img/robot-yellow-2-1280w.jpg') }}">
            <source media="(min-width: 1024px)" srcset="{{ asset('img/robot-yellow-2-1024w.jpg') }}">
            <source media="(min-width: 768px)" srcset="{{ asset('img/robot-yellow-2-768w.jpg') }}">
            <img src="{{ asset('img/robot-yellow-2-640w.jpg') }}" class="w-full h-full object-cover object-top">
            <!-- Use object-cover and h-full -->
        </picture>
    </div>

</div>



