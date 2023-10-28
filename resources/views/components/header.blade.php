{{-- Split the `$headertitle` into an array of words. --}}
@php
    $words = explode(' ', $headertitle);

    // Check if there are more than 4 words in the title.
    if (count($words) > 4) {
        // Insert a responsive line-break after the fourth word.
        array_splice($words, 4, 0, '<span class="sm:inline md:hidden lg:hidden xl:hidden 2xl:hidden"><br></span>');
        $headerTitleModified = implode(' ', $words);
    } else {
        $headerTitleModified = $headertitle;
    }
@endphp

<header class="fixed top-0 left-0 w-full h-20 bg-mittelgruen z-50 flex items-center">
    {{--logo--}}
    <a href="{{ asset('/') }}" class="ml-4">
        <img class="w-28 sm:w-28 md:w-44 lg:w-48 xl:w-52 2xl:w-56"
             src="{{ asset('/img/logo-schenk-hell-transp-1999-2023v7.svg') }}"
             alt="{{ __('Martin Schenk S.L.') }}">
    </a>
</header>

<!-- image under fixed header, which fills rest of screen -->
<div class="relative h-screen mt-20">
    {{--robot image--}}
    <div class="bg-robot-yellow-1 absolute inset-0 bg-no-repeat bg-cover bg-top">
        <div class="absolute inset-0 flex items-center justify-center">
            <!-- Your text goes here -->
            <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text-white">
                {!! $headerTitleModified !!}
            </h1>
        </div>
    </div>
</div>

