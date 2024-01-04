<x-guest>
	
	{{--show the code above in a loop which uses the https://github.com/mcamara/laravel-localization functions--}}
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		@if(LaravelLocalization::getCurrentLocale() == $localeCode)
			@include('aviso-legal-'.$localeCode)
		@endif
	@endforeach
	
	{{--if the current locale is another then the declared ones, show the english version.
	pseudocode: if getCurrentLocale not in getSupportedLocales then show the english version--}}
	
	
	{{-- Check if the current locale is not one of the supported locales, then show the English version --}}
	@php
		$currentLocale = LaravelLocalization::getCurrentLocale();
		$supportedLocales = array_keys(LaravelLocalization::getSupportedLocales());
	@endphp
	
	@if(!in_array($currentLocale, $supportedLocales))
		@include('aviso-legal-en')
	@endif

</x-guest>
