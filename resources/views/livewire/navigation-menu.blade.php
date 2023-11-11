<div x-data="{ open: false }" class="bg-mittelgruen">
	<div class="flex justify-between items-center p-4">
		<!-- Placeholder for Logo or Left-aligned content -->
		
		<!-- Hamburger Icon & Menu Content -->
		<div class="flex items-center">
			<!-- Hamburger Icon for small screens -->
			<div class="md:hidden">
				<button @click="open = !open">
					<x-heroicon-o-bars-3 class="text-white w-8 h-8 inline-block"/>
				</button>
			</div>
			
			<!-- Menu Content -->
			<div :class="{'block': open, 'hidden': !open}" class="  md:flex md:items-center md:justify-end">
				<!-- Insert menu links here -->
				<a href="/home" class="top-menu">Home</a>
				<a href="/about" class="top-menu">About</a>
				<!-- Add more links as needed -->
			</div>
		</div>
	</div>
</div>
