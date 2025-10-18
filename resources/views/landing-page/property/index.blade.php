<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Properties - Bali Terra Living</title>
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
                }
            }
        }
    </script>
</head>
<body class="font-sans text-earth bg-cream">

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 bg-cream/95 backdrop-blur-sm shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="https://assets.baliterraliving.com/bali-terra-logo-transparent.png" alt="Bali Terra Living" class="h-12 w-auto">
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-sage hover:text-earth transition-colors font-medium">Home</a>
                <a href="/#about" class="text-sage hover:text-earth transition-colors font-medium">About Us</a>
                <a href="/properties" class="text-sage hover:text-earth transition-colors font-medium">Properties</a>
                <a href="/#why" class="text-sage hover:text-earth transition-colors font-medium">Why Bali Terra</a>
                <a href="/#articles" class="text-sage hover:text-earth transition-colors font-medium">Articles</a>
                <a href="/#contact" class="bg-sage text-cream px-6 py-2.5 rounded-2xl hover:bg-earth transition-colors font-medium">Contact</a>
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

<!-- Page Header -->
<section class="pt-32 pb-16 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="font-serif text-5xl lg:text-6xl text-earth mb-6 text-balance">Available Properties</h1>
            <p class="text-lg lg:text-xl text-earth/60 leading-relaxed max-w-2xl mx-auto">
                Explore our curated selection of premium villas, houses, and land in Bali's most sought-after locations
            </p>
        </div>
    </div>
</section>

<!-- Filters and Sort Section -->
<section class="px-6 lg:px-8 pb-12">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white p-8 rounded-2xl shadow-md">
            <div class="grid md:grid-cols-4 gap-6 items-end">
                <!-- Property Type Filter -->
                <div>
                    <label for="type" class="block text-earth font-medium mb-3">Property Type</label>
                    <select id="type" class="w-full px-5 py-3 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">
                        <option value="">All Types</option>
                        <option value="villa">Villa</option>
                        <option value="house">House</option>
                        <option value="land">Land</option>
                    </select>
                </div>

                <!-- Location Filter -->
                <div>
                    <label for="location" class="block text-earth font-medium mb-3">Location</label>
                    <select id="location" class="w-full px-5 py-3 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">
                        <option value="">All Locations</option>
                        <option value="ubud">Ubud</option>
                        <option value="canggu">Canggu</option>
                        <option value="sanur">Sanur</option>
                        <option value="seminyak">Seminyak</option>
                        <option value="uluwatu">Uluwatu</option>
                    </select>
                </div>

                <!-- Price Range Filter -->
                <div>
                    <label for="price" class="block text-earth font-medium mb-3">Price Range</label>
                    <select id="price" class="w-full px-5 py-3 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">
                        <option value="">All Prices</option>
                        <option value="0-500">Under $500K</option>
                        <option value="500-1000">$500K - $1M</option>
                        <option value="1000-2000">$1M - $2M</option>
                        <option value="2000">$2M+</option>
                    </select>
                </div>

                <!-- Sort Options -->
                <div>
                    <label for="sort" class="block text-earth font-medium mb-3">Sort By</label>
                    <select id="sort" class="w-full px-5 py-3 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">
                        <option value="newest">Newest</option>
                        <option value="price-low">Lowest Price</option>
                        <option value="price-high">Highest Price</option>
                        <option value="popular">Most Popular</option>
                    </select>
                </div>
            </div>

            <!-- Added reset filters button -->
            <div class="mt-6 flex justify-end">
                <button class="text-sage hover:text-earth font-medium transition-colors">Reset Filters</button>
            </div>
        </div>
    </div>
</section>

<!-- Properties Grid -->
<section class="px-6 lg:px-8 pb-24">
    <div class="max-w-7xl mx-auto">
        <!-- Results Count -->
        <div class="mb-8">
            <p class="text-earth/60 font-medium">Showing <span class="text-earth font-bold">12</span> properties</p>
        </div>

        <!-- Property Cards Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Property Card 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                <!-- Image Container -->
                <div class="relative overflow-hidden h-64">
                    <img src="https://assets.baliterraliving.com/luxury-bali-villa-with-infinity-pool-overlooking-r.png" alt="Villa Serenity" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <!-- Added property type badge -->
                    <div class="absolute top-4 right-4 bg-sage text-cream px-4 py-2 rounded-2xl text-sm font-medium">Villa</div>
                </div>

                <!-- Card Content -->
                <div class="p-8">
                    <h3 class="font-serif text-2xl text-earth mb-2">Villa Serenity</h3>
                    <p class="text-sage font-medium mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                        </svg>
                        Ubud, Bali
                    </p>

                    <!-- Property Details -->
                    <div class="grid grid-cols-3 gap-4 mb-6 pb-6 border-b border-sage/10">
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Surface Area</p>
                            <p class="font-medium text-earth">350m²</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bedrooms</p>
                            <p class="font-medium text-earth">3</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bathrooms</p>
                            <p class="font-medium text-earth">4</p>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="mb-6">
                        <p class="text-earth/60 text-sm mb-1">Price</p>
                        <p class="font-serif text-3xl text-sage font-bold">$850K</p>
                    </div>

                    <!-- View Details Button -->
                    <a href="/properties/1" class="block w-full bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Property Card 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                <div class="relative overflow-hidden h-64">
                    <img src="https://assets.baliterraliving.com/uluwatu-villa-luxury-cliff-ocean-view.png" alt="Ocean Breeze Estate" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-sage text-cream px-4 py-2 rounded-2xl text-sm font-medium">Villa</div>
                </div>

                <div class="p-8">
                    <h3 class="font-serif text-2xl text-earth mb-2">Ocean Breeze Estate</h3>
                    <p class="text-sage font-medium mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                        </svg>
                        Canggu, Bali
                    </p>

                    <div class="grid grid-cols-3 gap-4 mb-6 pb-6 border-b border-sage/10">
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Surface Area</p>
                            <p class="font-medium text-earth">500m²</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bedrooms</p>
                            <p class="font-medium text-earth">4</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bathrooms</p>
                            <p class="font-medium text-earth">5</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="text-earth/60 text-sm mb-1">Price</p>
                        <p class="font-serif text-3xl text-sage font-bold">$1.2M</p>
                    </div>

                    <a href="/properties/2" class="block w-full bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Property Card 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                <div class="relative overflow-hidden h-64">
                    <img src="https://assets.baliterraliving.com/luxury-ubud-villa-with-traditional-balinese-archit.png" alt="Jungle Retreat" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-sage text-cream px-4 py-2 rounded-2xl text-sm font-medium">Villa</div>
                </div>

                <div class="p-8">
                    <h3 class="font-serif text-2xl text-earth mb-2">Jungle Retreat</h3>
                    <p class="text-sage font-medium mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                        </svg>
                        Sanur, Bali
                    </p>

                    <div class="grid grid-cols-3 gap-4 mb-6 pb-6 border-b border-sage/10">
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Surface Area</p>
                            <p class="font-medium text-earth">280m²</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bedrooms</p>
                            <p class="font-medium text-earth">2</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bathrooms</p>
                            <p class="font-medium text-earth">3</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="text-earth/60 text-sm mb-1">Price</p>
                        <p class="font-serif text-3xl text-sage font-bold">$625K</p>
                    </div>

                    <a href="/properties/3" class="block w-full bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Property Card 4 - Land -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                <div class="relative overflow-hidden h-64">
                    <img src="https://assets.baliterraliving.com/modern-beachfront-villa-seminyak-with-infinity-poo.png" alt="Prime Land Plot" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-gold text-earth px-4 py-2 rounded-2xl text-sm font-medium">Land</div>
                </div>

                <div class="p-8">
                    <h3 class="font-serif text-2xl text-earth mb-2">Prime Land Plot</h3>
                    <p class="text-sage font-medium mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                        </svg>
                        Seminyak, Bali
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-6 pb-6 border-b border-sage/10">
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Surface Area</p>
                            <p class="font-medium text-earth">1,200m²</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Zoning</p>
                            <p class="font-medium text-earth">Residential</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="text-earth/60 text-sm mb-1">Price</p>
                        <p class="font-serif text-3xl text-sage font-bold">$450K</p>
                    </div>

                    <a href="/properties/4" class="block w-full bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Property Card 5 - House -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                <div class="relative overflow-hidden h-64">
                    <img src="https://assets.baliterraliving.com/contemporary-jungle-villa-canggu-with-natural-mate.png" alt="Modern Family Home" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-sage text-cream px-4 py-2 rounded-2xl text-sm font-medium">House</div>
                </div>

                <div class="p-8">
                    <h3 class="font-serif text-2xl text-earth mb-2">Modern Family Home</h3>
                    <p class="text-sage font-medium mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                        </svg>
                        Uluwatu, Bali
                    </p>

                    <div class="grid grid-cols-3 gap-4 mb-6 pb-6 border-b border-sage/10">
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Surface Area</p>
                            <p class="font-medium text-earth">420m²</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bedrooms</p>
                            <p class="font-medium text-earth">4</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bathrooms</p>
                            <p class="font-medium text-earth">3</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="text-earth/60 text-sm mb-1">Price</p>
                        <p class="font-serif text-3xl text-sage font-bold">$950K</p>
                    </div>

                    <a href="/properties/5" class="block w-full bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Property Card 6 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                <div class="relative overflow-hidden h-64">
                    <img src="https://assets.baliterraliving.com/luxury-bali-villa-with-infinity-pool-overlooking-r.png" alt="Tropical Paradise Villa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-sage text-cream px-4 py-2 rounded-2xl text-sm font-medium">Villa</div>
                </div>

                <div class="p-8">
                    <h3 class="font-serif text-2xl text-earth mb-2">Tropical Paradise Villa</h3>
                    <p class="text-sage font-medium mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                        </svg>
                        Ubud, Bali
                    </p>

                    <div class="grid grid-cols-3 gap-4 mb-6 pb-6 border-b border-sage/10">
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Surface Area</p>
                            <p class="font-medium text-earth">380m²</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bedrooms</p>
                            <p class="font-medium text-earth">3</p>
                        </div>
                        <div>
                            <p class="text-earth/60 text-sm mb-1">Bathrooms</p>
                            <p class="font-medium text-earth">4</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="text-earth/60 text-sm mb-1">Price</p>
                        <p class="font-serif text-3xl text-sage font-bold">$920K</p>
                    </div>

                    <a href="/properties/6" class="block w-full bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                        View Details
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center items-center gap-2">
            <button class="px-4 py-2 rounded-2xl border-2 border-sage/20 text-sage hover:bg-sage hover:text-cream transition-colors">Previous</button>
            <button class="px-4 py-2 rounded-2xl bg-sage text-cream font-medium">1</button>
            <button class="px-4 py-2 rounded-2xl border-2 border-sage/20 text-sage hover:bg-sage hover:text-cream transition-colors">2</button>
            <button class="px-4 py-2 rounded-2xl border-2 border-sage/20 text-sage hover:bg-sage hover:text-cream transition-colors">3</button>
            <button class="px-4 py-2 rounded-2xl border-2 border-sage/20 text-sage hover:bg-sage hover:text-cream transition-colors">Next</button>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-earth text-cream py-16 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div>
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/bali-terra-logo-transparent-TM1vuBT4eUNURBHA3ghodlV5xJknUb.png" alt="Bali Terra Living" class="h-12 w-auto mb-6 brightness-0 invert">
                <p class="text-cream/70 leading-relaxed">
                    Premium real estate in harmony with Bali's natural beauty and spiritual essence.
                </p>
            </div>

            <div>
                <h4 class="font-serif text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-cream/70 hover:text-cream transition-colors">Home</a></li>
                    <li><a href="/#about" class="text-cream/70 hover:text-cream transition-colors">About Us</a></li>
                    <li><a href="/properties" class="text-cream/70 hover:text-cream transition-colors">Properties</a></li>
                    <li><a href="/#articles" class="text-cream/70 hover:text-cream transition-colors">Articles</a></li>
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
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-4.358-.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.059 1.689.073 4.849.073 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.057-1.69-.073-4.949-.073zm0-2.163c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764z"/>
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
