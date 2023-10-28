{{-- Split the `$headertitle` into an array of words. --}}
@php
    $words = explode(' ', $headertitle);

    // Check if there are more than 4 words in the title.
    if (count($words) > 4) {
        // Insert a responsive line-break after the fourth word.
        array_splice($words, 4, 0, '<span class="sm:inline md:hidden lg:hidden xl:hidden 2xl:hidden"><br></span>');
        $headertitleModified = implode(' ', $words);
    } else {
        $headertitleModified = $headertitle;
    }
@endphp

    <!-- The header is set to be 100% of the viewport height, making it fullscreen. -->
<!-- 'relative' sets the position relative so we can use absolute positioning within this element. -->
<!-- 'bg-no-repeat' ensures the background image doesn't repeat. -->
<!-- 'bg-cover' ensures the background image covers the entire header. -->
<!-- 'bg-center' ensures the background image is centered. -->
<header class="header-bg relative h-screen bg-no-repeat bg-cover bg-center bg-image-url"
        style="background-color: #2D8471;">

    <!-- 'absolute top-5 left-5' positions the logo at the top-left corner. -->
    <!-- This anchor tag contains the site's logo. -->
    <a href="{{ asset('/') }}" class="absolute top-5 left-5">
        <!-- The image adjusts its size based on the screen size. -->
        <img class="w-20 md:w-30 lg:w-36 xl:w-42 mt-3 ml-5"
             src="{{ asset('/img/logo-schenk-hell-transp-1999-2023v7.svg') }}"
             alt="{{ __('Martin Schenk S.L. desde 1999') }}">
    </a>

    <!-- 'flex items-center justify-center h-full' -->
    <!-- This makes a flexbox container that vertically and horizontally centers its child. -->
    <!-- 'h-full' ensures it takes up the full height of its parent, helping in centering. -->
    <div class="flex items-center justify-center h-full">

        <!-- The text is centered using 'text-center'. -->
        <div class="text-center">
            <!-- Text size changes based on the screen size. -->
            <!-- 'text-white' sets the text color to white. -->
            <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text-white">
                <!-- Output the modified header title which may contain a responsive line-break. -->
                {!! $headertitleModified !!}
            </h1>
        </div>
    </div>

</header>

