{{-- Footer Blade --}}
@php
	$linkUrl = config('url');
@endphp

<footer class="bg-dunkelgruen w-full flex flex-col items-center justify-center p-6 text-white text-sm">
	{{-- Company Logo --}}
	<div class="mb-4">
		<a href="{{ asset('/') }}">
			<img class="w-36 md:w-44 lg:w-52"
			     src="{{ asset('/img/logo-schenk-hell-transp-c1999-v8.svg') }}"
			     alt="{{ __('Martin Schenk S.L.') }}">
		</a>
	</div>
	
	{{-- Contact Information --}}
	<div class="mb-3 text-white">hola@martin-schenk.es {{ __('ó') }} (+34) 669 686 832</div>
	
	{{--languages--}}
	<div class="mb-3">
		@php
			//dd(LaravelLocalization::getCurrentLocale());
			$currentLocale = LaravelLocalization::getCurrentLocale();
		@endphp
		
		<div>
			
			@if($currentLocale == 'es')
				<span class="text-white mx-4">Español</span>
				<a class="underline mx-4 text-gruen hover:text-gray-300 cursor-pointer"
				   hreflang="{{ $currentLocale }}"
				   href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
					Inglés
				</a>
				<a class="underline mx-4 text-gruen hover:text-gray-300 cursor-pointer"
				   hreflang="{{ $currentLocale }}"
				   href="{{ LaravelLocalization::getLocalizedURL('de', null, [], true) }}">
					Alemán
				</a>
			@endif
			@if($currentLocale == 'en')
				<a class="underline mx-4 text-gruen hover:text-gray-300 cursor-pointer"
				   hreflang="{{ $currentLocale }}"
				   href="{{ LaravelLocalization::getLocalizedURL('es', null, [], true) }}">
					Spanish
				</a>
				<span class="text-white mx-4">English</span>
				<a class="underline mx-4 text-gruen hover:text-gray-300 cursor-pointer"
				   hreflang="{{ $currentLocale }}"
				   href="{{ LaravelLocalization::getLocalizedURL('de', null, [], true) }}">
					German
				</a>
			@endif
			
			@if($currentLocale == 'de')
				<a class="underline mx-4 text-gruen hover:text-gray-300 cursor-pointer"
				   hreflang="{{ $currentLocale }}"
				   href="{{ LaravelLocalization::getLocalizedURL('es', null, [], true) }}">
					Spanisch
				</a>
				<a class="underline mx-4 text-gruen hover:text-gray-300 cursor-pointer"
				   hreflang="{{ $currentLocale }}"
				   href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
					Englisch
				</a>
				<span class="text-white mx-4">Deutsch</span>
			@endif
		
		
		</div>
		
		{{--@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
			@php
				//dd($properties);
				if ($properties['name'] == 'English') $languageName = __('Inglés');
				if ($properties['name'] == 'German') $languageName = __('Alemán');
				if ($properties['name'] == 'Spanish') $languageName = __('Español');
				$languageName = __($properties['name']); //$properties['native']
			@endphp
			
			@if(LaravelLocalization::getCurrentLocaleNative() == $properties['native'])
				<span class="text-white mx-4">{{ LaravelLocalization::getCurrentLocaleNative() }}</span>
			@else
				<a class="underline mx-4 text-gruen hover:text-gray-300 cursor-pointer" hreflang="{{ $localeCode }}"
				   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
					--}}{{--{{ \App\Helpers\AppHelper::getTranslation('langName', $languageName) }}--}}{{--
					{{ $languageName }}
				</a>
			@endif
		@endforeach--}}
	</div>
	
	{{-- Legal Links --}}
	<div class="flex items-center justify-center mb-4">
		{{-- Legal Notice --}}
		<a class="underline mx-3 text-gruen hover:text-gray-300"
		   href="{{ $linkUrl }}aviso-legal">{{ __('Aviso Legal') }}</a>
		{{-- Privacy Policy --}}
		<a class="underline mx-3 text-gruen hover:text-gray-300"
		   href="{{ $linkUrl }}politica-privacidad">{{ __('Política de Privacidad') }}</a>
		{{-- Cookie Policy --}}
		<a class="underline mx-3 text-gruen hover:text-gray-300"
		   href="{{ $linkUrl }}politica-cookies">{{ __('Política de Cookies') }}</a>
	</div>
	
	{{-- Copyright --}}
	@php
		$currentYear = date('Y');
	@endphp
	<div class="text-xs text-center">
		© 1999 - {{ $currentYear }} Martin Schenk S.L., Madrid, España
	</div>
</footer>
