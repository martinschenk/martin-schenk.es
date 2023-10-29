{{-- Split the `$headertitle` into an array of words. --}}
@php
    $words = explode(' ', $headertitle);

    // Check if there are more than 4 words in the title.
    if (count($words) > 6) {
        // Insert a responsive line-break after the fourth word.
        array_splice($words, 6, 0, '<span class="sm:inline md:hidden lg:hidden xl:hidden 2xl:hidden"><br></span>');
        $headerTitleModified = implode(' ', $words);
    } else {
        $headerTitleModified = $headertitle;
    }
@endphp

    <!-- Header -->
<header class="fixed top-0 left-0 w-full h-[80px] bg-mittelgruen z-50 flex items-center justify-start py-2">
    <!-- Logo -->
    <a href="{{ asset('/') }}" class="ml-4">
        <img class="w-28 sm:w-28 md:w-34 lg:w-40 xl:w-44 2xl:w-48"
             src="{{ asset('img/logo-schenk-hell-transp-1999-2023v7.svg') }}"
             alt="{{ __('Martin Schenk S.L.') }}">
    </a>

    <!-- Header text -->
    <div class="absolute inset-x-0 bottom-0 flex items-center justify-center mt-2">
        <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text-white">
            {!! $headerTitleModified !!}
        </h1>
    </div>
</header>

<!-- image under fixed header, which fills rest of screen -->
<div class="relative h-screen mt-20" xxstyle="min-height: calc(100vh - 80px);">
    <picture class="absolute inset-0 object-cover object-top w-full h-full">
        <source media="(min-width: 1536px)" srcset="{{ asset('img/robot-yellow-2-1536w.jpg') }}">
        <source media="(min-width: 1280px)" srcset="{{ asset('img/robot-yellow-2-1280w.jpg') }}">
        <source media="(min-width: 1024px)" srcset="{{ asset('img/robot-yellow-2-1024w.jpg') }}">
        <source media="(min-width: 768px)" srcset="{{ asset('img/robot-yellow-2-768w.jpg') }}">
        <img src="{{ asset('img/robot-yellow-2-640w.jpg') }}"
             class="absolute inset-0 object-cover object-top w-full h-full">  <!-- added w-full h-full here -->
    </picture>
</div>

