{{-- Beispiel: aufruf von aviso-legal.blade.php und ruft auf aviso-legal-de.blade.php  --}}
{{-- wird eingesetzt für Seiten, die komplett übersetzt vorliegen --}}

@php
	$urlName = __($pageName);
  $pageNameInEnglish = __('routes.'.$pageName, [], 'en'); //Fallback language (and in php code base is spanish!)
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
	<link rel="alternate" hreflang="x-default" href="{{ url('/en/' . $pageNameInEnglish) }}"/>
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		<link rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::localizeURL(Request::path(), $localeCode) }}" />
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