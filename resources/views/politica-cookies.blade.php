<x-guest>
	
	{{-- hier seitenname eingeben--}}
	@php
		$pageName = 'politica-cookies';
    $metaDescription = __('Conoce la Política de Cookies de Martin Schenk S.L.: Información sobre cómo utilizamos las cookies para mejorar tu experiencia en nuestra web.');
	@endphp
	
	
	@include('full-page-translate-includer', [
      'pageName' => $pageName,
      'metaDescription' => $metaDescription
  ])

</x-guest>