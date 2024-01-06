<x-guest>
	
	@php
		$pageName = 'politica-privacidad';
    $metaDescription = __('Lee nuestra Política de Privacidad para entender cómo Martin Schenk S.L. recopila, usa y protege tus datos personales en nuestra plataforma.');
	@endphp
	
	@include('full-page-translate-includer', [
      'pageName' => $pageName,
      'metaDescription' => $metaDescription
  ])

</x-guest>