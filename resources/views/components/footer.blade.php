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
	<div class="flex items-center justify-center text-xs">
		<span>© 1999 - {{ $currentYear }}</span>
		<svg width="14" height="14" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg" class="mx-1">
			<path
					d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
		</svg>
		<span>Martin Schenk S.L., Madrid, {{ __('España') }}</span>
	</div>
</footer>
