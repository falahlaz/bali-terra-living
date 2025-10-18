<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $property->name ?? 'Property Detail' }} - Bali Terra Living</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sage: '#8B9D83',
                        cream: '#F5F3EF',
                        earth: '#6B5D52',
                        gold: '#C9A961',
                    },
                    fontFamily: {
                        serif: ['Cinzel', 'serif'],
                        sans: ['Lato', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 10px 25px -10px rgba(0,0,0,0.08)',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-earth bg-cream">

<nav class="fixed top-0 left-0 right-0 bg-cream/95 backdrop-blur-sm shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex items-center">
                <img src="https://assets.baliterraliving.com/bali-terra-logo-transparent.png" alt="Bali Terra Living" class="h-12 w-auto">
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}#home" class="text-sage hover:text-earth transition-colors font-medium">Home</a>
                <a href="{{ url('/') }}#about" class="text-sage hover:text-earth transition-colors font-medium">About Us</a>
                <a href="{{ url('/') }}#properties" class="text-sage hover:text-earth transition-colors font-medium">Properties</a>
                <a href="{{ url('/') }}#why" class="text-sage hover:text-earth transition-colors font-medium">Why Bali Terra</a>
                <a href="{{ url('/') }}#articles" class="text-sage hover:text-earth transition-colors font-medium">Articles</a>
                <a href="{{ url('/') }}#contact" class="bg-sage text-cream px-6 py-2.5 rounded-2xl hover:bg-earth transition-colors font-medium">Contact</a>
            </div>
            <button class="md:hidden text-sage" aria-label="Open menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<header class="pt-32 pb-10 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col gap-4">
            <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl text-earth leading-tight text-balance">
                {{ $property->name ?? 'Untitled Property' }}
            </h1>
            <div class="flex flex-wrap items-center gap-3 text-earth/70">
                @if(!empty($property->type))
                    <span class="px-3 py-1 rounded-2xl bg-sage/15 text-sage text-sm font-medium capitalize">{{ $property->type }}</span>
                @endif
                @if(!empty($property->location_detail))
                    <span class="text-sm">{{ $property->location_detail }}</span>
                @endif
            </div>
        </div>
    </div>
</header>


<main class="pb-24 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto grid lg:grid-cols-12 gap-10">
        <section class="lg:col-span-8 space-y-10">
            Gallery
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                @php
                    $images = $property->images ?? [];
                    $firstImage = is_array($images) && count($images) ? $images[0] : null;
                @endphp

                @if($firstImage)
                    <div class="relative">
                        <img src="{{ $firstImage }}" alt="{{ $property->name ?? 'Property' }} main image" class="w-full h-[460px] object-cover">
                    </div>
                    @if(count($images) > 1)
                        <div class="p-4">
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                                @foreach(array_slice($images, 1) as $idx => $img)
                                    <div class="overflow-hidden rounded-xl group">
                                        <img src="{{ $img }}" alt="{{ $property->name ?? 'Property' }} gallery image {{ $idx+1 }}"
                                             class="w-full h-28 object-cover group-hover:scale-105 transition-transform duration-300">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @else
                    <div class="aspect-[16/9] bg-sage/10 flex items-center justify-center">
                        <span class="text-earth/60">No images available</span>
                    </div>
                @endif
            </div>

            <div class="bg-white rounded-2xl shadow-soft p-8 lg:p-10 space-y-8">
                @if(!empty($property->description))
                    <div class="space-y-4">
                        <h2 class="font-serif text-2xl md:text-3xl text-earth">Description</h2>
                        <p class="text-earth/70 leading-relaxed">
                            {{ $property->description }}
                        </p>
                    </div>
                @endif

                <div class="space-y-6">
                    <h3 class="font-serif text-xl md:text-2xl text-earth">Property Details</h3>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @if(!empty($property->surface_area))
                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Surface Area</p>
                                <p class="text-earth font-medium">{{ $property->surface_area }}</p>
                            </div>
                        @endif

                        @if(!empty($property->location_detail))
                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Location</p>
                                <p class="text-earth font-medium">{{ $property->location_detail }}</p>
                            </div>
                        @endif

                        @if(!empty($property->type) && in_array(strtolower($property->type), ['villa','house']))
                            @if(!empty($property->building_area))
                                <div class="bg-cream rounded-2xl p-4">
                                    <p class="text-earth/60 text-sm">Building Area</p>
                                    <p class="text-earth font-medium">{{ $property->building_area }}</p>
                                </div>
                            @endif
                            @if(!empty($property->rooms))
                                <div class="bg-cream rounded-2xl p-4">
                                    <p class="text-earth/60 text-sm">Rooms</p>
                                    <p class="text-earth font-medium">{{ $property->rooms }}</p>
                                </div>
                            @endif
                        @endif

                        @if(!empty($property->bathrooms))
                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Bathrooms</p>
                                <p class="text-earth font-medium">{{ $property->bathrooms }}</p>
                            </div>
                        @endif

                        @if(!empty($property->year_built))
                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Year Built</p>
                                <p class="text-earth font-medium">{{ $property->year_built }}</p>
                            </div>
                        @endif

                        @if(!empty($property->status))
                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Status</p>
                                <p class="text-earth font-medium capitalize">{{ $property->status }}</p>
                            </div>
                        @endif
                    </div>

                    @if(!empty($property->details) && is_array($property->details))
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($property->details as $label => $value)
                                @if(!empty($value))
                                    <div class="bg-cream rounded-2xl p-4">
                                        <p class="text-earth/60 text-sm">{{ is_string($label) ? ucwords(str_replace('_',' ',$label)) : 'Detail' }}</p>
                                        <p class="text-earth font-medium">{{ is_array($value) ? implode(', ', $value) : $value }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <aside class="lg:col-span-4">
            <div class="lg:sticky lg:top-28 space-y-6">
                <div class="bg-white rounded-2xl shadow-soft p-8">
                    @php
                        $currency = $property->currency ?? 'USD';
                        $price = $property->price ?? null;
                    @endphp
                    <p class="text-earth/60 text-sm mb-2">Price</p>
                    <div class="flex items-end gap-2 mb-6">
                        @if($price)
                            <span class="font-serif text-3xl md:text-4xl text-earth">
                                    {{ $currency }} {{ number_format($price, 0, '.', ',') }}
                                </span>
                        @else
                            <span class="text-earth/70">Contact for price</span>
                        @endif
                    </div>

                    <div class="grid gap-3">
                        @if(!empty($property->surface_area))
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-earth/60">Surface Area</span>
                                <span class="text-earth font-medium">{{ $property->surface_area }}</span>
                            </div>
                        @endif
                        @if(!empty($property->type))
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-earth/60">Property Type</span>
                                <span class="text-earth font-medium capitalize">{{ $property->type }}</span>
                            </div>
                        @endif
                        @if(!empty($property->location_detail))
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-earth/60">Location</span>
                                <span class="text-earth font-medium text-right">{{ $property->location_detail }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="mt-8 grid gap-3">
                        <a href="{{ url('/') }}#contact" class="bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                            Schedule a Visit
                        </a>
                        <a href="{{ url('/') }}#properties" class="border-2 border-sage text-sage px-6 py-3 rounded-2xl hover:bg-sage hover:text-cream transition-colors font-medium text-center">
                            Back to Properties
                        </a>
                    </div>
                </div>

                @if(!empty($property->highlights) && is_array($property->highlights))
                    <div class="bg-white rounded-2xl shadow-soft p-8">
                        <h3 class="font-serif text-xl text-earth mb-4">Highlights</h3>
                        <ul class="space-y-3 list-disc pl-5 text-earth/80">
                            @foreach($property->highlights as $item)
                                @if(!empty($item))
                                    <li>{{ $item }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </aside>
    </div>
</main>

<footer class="bg-earth text-cream py-16 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div>
                <img src="https://assets.baliterraliving.com/bali-terra-logo-transparent.png" alt="Bali Terra Living" class="h-12 w-auto mb-6 brightness-0 invert">
                <p class="text-cream/70 leading-relaxed">
                    Premium real estate in harmony with Bali's natural beauty and spiritual essence.
                </p>
            </div>

            <div>
                <h4 class="font-serif text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="#home" class="text-cream/70 hover:text-cream transition-colors">Home</a></li>
                    <li><a href="#about" class="text-cream/70 hover:text-cream transition-colors">About Us</a></li>
                    <li><a href="#properties" class="text-cream/70 hover:text-cream transition-colors">Properties</a></li>
                    <li><a href="#articles" class="text-cream/70 hover:text-cream transition-colors">Articles</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-serif text-lg mb-6">Contact</h4>
                <ul class="space-y-3 text-cream/70">
                    <li>Jl. Raya Ubud, Bali</li>
                    <li>Indonesia 80571</li>
                    <li>+62 361 123 4567</li>
                    <li>info@baliterraliving.com</li>
                </ul>
            </div>

            <div>
                <h4 class="font-serif text-lg mb-6">Follow Us</h4>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 bg-cream/20 rounded-2xl flex items-center justify-center hover:bg-cream/30 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-cream/20 rounded-2xl flex items-center justify-center hover:bg-cream/30 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-4.358-.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.059 1.689.073 4.849.073 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.057-1.69-.073-4.949-.073zm0-2.163c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-cream/20 rounded-2xl flex items-center justify-center hover:bg-cream/30 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-cream/20 pt-8 text-center text-cream/60">
            <p>&copy; 2025 Bali Terra Living. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
