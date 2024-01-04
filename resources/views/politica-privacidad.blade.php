<x-guest>
	
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		@if(LaravelLocalization::getCurrentLocale() == $localeCode)
			@include('politica-privacidad-'.$localeCode)
		@endif
	@endforeach
	
	
	{{-- Check if the current locale is not one of the supported locales, then show the English version --}}
	@php
		$currentLocale = LaravelLocalization::getCurrentLocale();
		$supportedLocales = array_keys(LaravelLocalization::getSupportedLocales());
	@endphp
	
	@if(!in_array($currentLocale, $supportedLocales))
		@include('politica-privacidad-en')
	@endif

</x-guest>