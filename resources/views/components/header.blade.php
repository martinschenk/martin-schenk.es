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

{{-- The header section of the webpage. --}}
<header>

    {{-- The header section has a background image (`robot4.png`) aligned to the right.
         The background color is set to `#22C0A2`. The minimum and maximum height of this section is set to 120px. --}}
    <section class="bg-no-repeat bg-right w-full flex justify-center items-center relative" style="background-image: url('{{ asset('/img/robot4.png') }}'); background-color: #22C0A2; min-height: 120px; max-height: 120px; background-size: auto 100%;">

        {{-- A hyperlink containing the logo of the site, positioned in the top-left corner. --}}
        <a href="{{ asset('/') }}" style="position: absolute; top: 5px; left: 5px;">
            <img class="w-24 md:w-30 lg:w-36 xl:42 mt-3 ml-5" src="{{ asset('/img/logo-schenk-dunkel-transp-1999-2023v3.svg') }}" alt="{{ __('Martin Schenk S.L. desde 1999') }}">
        </a>

        {{-- A centered text section for the header title. --}}
        <div class="text-center">
            {{-- Display the modified header title (`$headertitleModified`), which may include a line-break.
                 The text size adjusts based on the screen size. --}}
            <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl mt-1 mb-0 text-gray-100 ">
                {!! $headertitleModified !!}
            </h1>
        </div>
    </section>

</header>
