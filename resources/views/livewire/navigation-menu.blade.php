<div x-data="{ open: false }" class="fixed w-full z-50">
	<div class="flex items-center justify-end p-4 h-20">
		<!-- Hamburger Icon for small screens -->
		<button @click="open = !open" class="md:hidden z-50">
			<x-heroicon-o-bars-3 class="text-white w-8 h-8"/>
		</button>
		
		<!-- Menu Content -->
		<div :class="{'flex': open, 'hidden': !open}"
		     class="top-14 md:top-2 flex-col items-center w-full absolute md:flex md:flex-row md:items-center md:justify-end md:w-auto bg-mittelgruen md:bg-transparent">
			
			<!-- Menu links -->
			<a href="{{ LaravelLocalization::localizeUrl('/') }}"
			   class="top-menu  md:w-auto text-center p-4"
			   @click="open = false">
				{{ __('Home') }}
			</a>
			<a href="{{ LaravelLocalization::localizeUrl('/#services') }}"
			   class="top-menu  md:w-auto text-center p-4"
			   @click="open = false">
				{{ __('Servicios') }}
			</a>
			<a href="{{ LaravelLocalization::localizeUrl('/#portfolio') }}"
			   class="top-menu  md:w-auto text-center p-4"
			   @click="open = false">
				{{ __('Portfolio') }}
			</a>
			<a href="{{ LaravelLocalization::localizeUrl('/#technologies') }}"
			   class="top-menu  md:w-auto text-center p-4"
			   @click="open = false">
				{{ __('Tecnología') }}
			</a>
			<!-- Add more links as needed -->
		</div>
	</div>
</div>
