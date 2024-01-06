<x-guest>
	
	{{-- hier seitenname eingeben--}}
	@php
		$pageName = 'aviso-legal';
    $metaDescription = __('Descubre las políticas y términos legales de Martin Schenk S.L. Conoce nuestros compromisos y derechos en la prestación de servicios web especializados.');
	@endphp
	
	
	@include('full-page-translate-includer', [
      'pageName' => $pageName,
      'metaDescription' => $metaDescription
  ])

</x-guest>