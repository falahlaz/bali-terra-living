<nav class="fixed top-0 left-0 right-0 bg-cream/95 backdrop-blur-sm shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="https://assets.baliterraliving.com/bali-terra-logo-transparent.png" alt="Bali Terra Living" class="h-12 w-auto">
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                @foreach($menus as $menu)
                    @if($menu->url === '#contact')
                        <a href="{{ $menu->url }}" class="bg-sage text-cream px-6 py-2.5 rounded-2xl hover:bg-earth transition-colors font-medium">{{ $menu->label }}</a>
                        @continue
                    @endif
                    <a href="{{ $menu->url }}" class="text-sage hover:text-earth transition-colors font-medium">{{ $menu->label }}</a>
                @endforeach
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-sage">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>
