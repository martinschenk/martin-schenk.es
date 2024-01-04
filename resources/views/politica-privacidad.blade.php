<x-guest>
	
	@php
		$pageName = 'politica-privacidad';
    $metaDescription = __('Lee nuestra Política de Privacidad para entender cómo Martin Schenk S.L. recopila, usa y protege tus datos personales en nuestra plataforma.');
	@endphp
	
	{{-- meta description fuer layout--}}
	@section('meta_description')
		<meta name="description"
		      content="{{ $metaDescription }}">
	@endsection
	
	
	{{-- meta description fuer layout--}}
	@section('social_meta_tags')
		<!-- leave this section empty if you don't want social media tags on this page -->
	@endsection
	
	
	{{-- hreflang für layout --}}
	@section('hreflang')
		<link rel="alternate" hreflang="x-default" href="{{ url('/en/' . $pageName) }}"/>
		@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
			<link rel="alternate" hreflang="{{ $localeCode }}"
			      href="{{ config('app.url') }}/{{ $localeCode }}/{{ $pageName }}"/>
		@endforeach
	@endsection
	
	
	{{-- lokalisierte seite einbinden --}}
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		@if(LaravelLocalization::getCurrentLocale() == $localeCode)
			@include($pageName.'-'.$localeCode)
		@endif
	@endforeach
	
	
	{{-- Check if the current locale is not one of the supported locales, then show the English version --}}
	@php
		$currentLocale = LaravelLocalization::getCurrentLocale();
		$supportedLocales = array_keys(LaravelLocalization::getSupportedLocales());
	@endphp
	@if(!in_array($currentLocale, $supportedLocales))
		@include($pageName.'-en')
	@endif

</x-guest>