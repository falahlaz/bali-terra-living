<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Terra Living - Premium Real Estate in Bali</title>
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
                <a href="#home" class="text-sage hover:text-earth transition-colors font-medium">Home</a>
                <a href="#about" class="text-sage hover:text-earth transition-colors font-medium">About Us</a>
                <a href="#properties" class="text-sage hover:text-earth transition-colors font-medium">Properties</a>
                <a href="#why" class="text-sage hover:text-earth transition-colors font-medium">Why Bali Terra</a>
                <a href="#articles" class="text-sage hover:text-earth transition-colors font-medium">Articles</a>
                <a href="#contact" class="bg-sage text-cream px-6 py-2.5 rounded-2xl hover:bg-earth transition-colors font-medium">Contact</a>
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

<!-- Hero Section -->
<!-- <CHANGE> Improved spacing and visual hierarchy -->
<section id="home" class="pt-32 pb-24 px-6 lg:px-8 min-h-screen flex items-center">
    <div class="max-w-7xl mx-auto w-full">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <h1 class="font-serif text-5xl lg:text-6xl xl:text-7xl text-earth leading-tight text-balance">
                    Discover Your <span class="text-sage">Paradise</span> in Bali
                </h1>
                <p class="text-lg lg:text-xl text-earth/70 leading-relaxed max-w-xl">
                    Experience sustainable luxury living in harmony with nature. Bali Terra Living offers premium real estate that connects you to the island's spiritual essence.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#properties" class="bg-sage text-cream px-8 py-4 rounded-2xl hover:bg-earth transition-all duration-300 font-medium inline-block shadow-lg hover:shadow-xl">
                        Explore Properties
                    </a>
                    <a href="#contact" class="border-2 border-sage text-sage px-8 py-4 rounded-2xl hover:bg-sage hover:text-cream transition-all duration-300 font-medium inline-block">
                        Schedule a Visit
                    </a>
                </div>
            </div>
            <!-- <CHANGE> Added descriptive image query for luxury Bali villa -->
            <div class="relative">
                <div class="absolute inset-0 bg-sage/10 rounded-2xl transform translate-x-4 translate-y-4"></div>
                <img src="https://assets.baliterraliving.com/contemporary-jungle-villa-canggu-with-natural-mate.png" alt="Luxury Bali Villa" class="relative rounded-2xl shadow-2xl w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<!-- <CHANGE> Cleaner layout with better spacing -->
<section id="about" class="py-24 px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 max-w-3xl mx-auto">
            <h2 class="font-serif text-4xl lg:text-5xl text-earth mb-6 text-balance">About Bali Terra Living</h2>
            <p class="text-lg lg:text-xl text-earth/60 leading-relaxed">
                Where luxury meets sustainability in the heart of Bali
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
            <div class="bg-cream p-10 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-sage/20 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-serif text-2xl text-earth mb-4">Sustainable Living</h3>
                <p class="text-earth/60 leading-relaxed">
                    Our properties are designed with eco-friendly materials and practices, honoring Bali's natural environment.
                </p>
            </div>

            <div class="bg-cream p-10 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-sage/20 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="font-serif text-2xl text-earth mb-4">Premium Design</h3>
                <p class="text-earth/60 leading-relaxed">
                    Each property features modern architecture blended seamlessly with traditional Balinese aesthetics.
                </p>
            </div>

            <div class="bg-cream p-10 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-sage/20 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-serif text-2xl text-earth mb-4">Spiritual Connection</h3>
                <p class="text-earth/60 leading-relaxed">
                    Experience the island's spiritual essence through thoughtfully designed spaces that promote peace and harmony.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- PageProperties Section -->
<!-- <CHANGE> Improved card design and spacing -->
<section id="properties" class="py-24 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 max-w-3xl mx-auto">
            <h2 class="font-serif text-4xl lg:text-5xl text-earth mb-6 text-balance">Featured Properties</h2>
            <p class="text-lg lg:text-xl text-earth/60 leading-relaxed">
                Discover our curated selection of premium villas and estates
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($properties as $property)
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/'.$property->images->first()?->path) }}" alt="Villa Serenity" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="font-serif text-2xl text-earth mb-2">{{ $property->name }}</h3>
                        <p class="text-sage font-medium mb-4">{{ $property->location }}</p>
                        <p class="text-earth/60 mb-6 leading-relaxed text-sm">
                            {{ $property->features->take(5)->map(fn ($feature) => $feature->name)->implode(' • ') }}
                        </p>
                        <a href="{{ route('property.detail', $property->id) }}" class="bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium inline-block w-full text-center">
                            View Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-16">
            <a href="{{ route('property.index') }}" class="border-2 border-sage text-sage px-8 py-4 rounded-2xl hover:bg-sage hover:text-cream transition-all duration-300 font-medium inline-block">
                View All Properties
            </a>
        </div>
    </div>
</section>

<!-- Why Bali Terra Section -->
<!-- <CHANGE> Improved layout balance and visual hierarchy -->
<section id="why" class="py-24 px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- <CHANGE> Added descriptive image query for Balinese architecture and nature -->
            <div class="relative order-2 lg:order-1">
                <div class="absolute inset-0 rounded-2xl transform -translate-x-4 translate-y-4"></div>
                <img src="https://assets.baliterraliving.com/bali-terra-logo-transparent.png" alt="Why Choose Us" class="relative rounded-2xl shadow-2xl w-full h-auto">
            </div>
            <div class="order-1 lg:order-2 space-y-8">
                <div>
                    <h2 class="font-serif text-4xl lg:text-5xl text-earth mb-6 text-balance">Why Choose Bali Terra Living</h2>
                    <p class="text-lg text-earth/60 leading-relaxed">
                        We're not just selling properties—we're offering a lifestyle that harmonizes luxury, sustainability, and spiritual connection.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-sage/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-xl text-earth mb-2">Prime Locations</h3>
                            <p class="text-earth/60 leading-relaxed">Carefully selected sites in Bali's most sought-after areas.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-sage/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-xl text-earth mb-2">Full Legal Support</h3>
                            <p class="text-earth/60 leading-relaxed">Expert guidance through Indonesian property regulations.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-sage/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-xl text-earth mb-2">Property Management</h3>
                            <p class="text-earth/60 leading-relaxed">Comprehensive maintenance and rental management services.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-sage/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-xl text-earth mb-2">Investment Potential</h3>
                            <p class="text-earth/60 leading-relaxed">Strong ROI in Bali's growing real estate market.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <CHANGE> Added new Testimonials section -->
<!-- Testimonials Section -->
<section id="testimonials" class="py-24 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 max-w-3xl mx-auto">
            <h2 class="font-serif text-4xl lg:text-5xl text-earth mb-6 text-balance">Trusted by Investors and Homeowners Worldwide</h2>
            <p class="text-lg lg:text-xl text-earth/60 leading-relaxed">
                Hear from our satisfied clients who found their dream properties with us
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-10 rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center gap-1 mb-6">
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                </div>
                <p class="text-earth/70 leading-relaxed mb-6 italic">
                    "The process was very professional and transparent. I found my dream land in a short time."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-sage/20 rounded-full flex items-center justify-center">
                        <span class="text-sage font-serif text-lg">JL</span>
                    </div>
                    <div>
                        <p class="font-medium text-earth">James L.</p>
                        <p class="text-sm text-earth/60">Investor from Sydney</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-10 rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center gap-1 mb-6">
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                </div>
                <p class="text-earth/70 leading-relaxed mb-6 italic">
                    "Bali Terra Living made our investment journey seamless. The team's expertise and attention to detail exceeded our expectations."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-sage/20 rounded-full flex items-center justify-center">
                        <span class="text-sage font-serif text-lg">SM</span>
                    </div>
                    <div>
                        <p class="font-medium text-earth">Sarah M.</p>
                        <p class="text-sm text-earth/60">Homeowner from London</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white p-10 rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center gap-1 mb-6">
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                </div>
                <p class="text-earth/70 leading-relaxed mb-6 italic">
                    "A truly exceptional experience. The villa we purchased is everything we dreamed of and more. Highly recommend!"
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-sage/20 rounded-full flex items-center justify-center">
                        <span class="text-sage font-serif text-lg">DK</span>
                    </div>
                    <div>
                        <p class="font-medium text-earth">David K.</p>
                        <p class="text-sm text-earth/60">Investor from Singapore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Articles Section -->
<!-- ... existing code ... -->
<section id="articles" class="py-24 px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 max-w-3xl mx-auto">
            <h2 class="font-serif text-4xl lg:text-5xl text-earth mb-6 text-balance">Latest Insights</h2>
            <p class="text-lg lg:text-xl text-earth/60 leading-relaxed">
                Explore our articles on Bali living, investment tips, and lifestyle guides
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <!-- <CHANGE> Added specific image query for investment guide article -->
            <article class="bg-cream rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
                <div class="overflow-hidden">
                    <img src="https://assets.baliterraliving.com/legal-documents-property-titles-indonesia.png" alt="Investment Guide Article" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <span class="text-sage text-sm font-medium uppercase tracking-wide">Investment Guide</span>
                    <h3 class="font-serif text-xl text-earth mt-3 mb-3 text-balance">The Ultimate Guide to Buying Property in Bali</h3>
                    <p class="text-earth/60 mb-6 leading-relaxed">
                        Everything you need to know about investing in Bali real estate as a foreigner.
                    </p>
                    <a href="#" class="text-sage hover:text-earth font-medium inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <!-- <CHANGE> Added specific image query for sustainability article -->
            <article class="bg-cream rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
                <div class="overflow-hidden">
                    <img src="https://assets.baliterraliving.com/property-investment-risk-management.png" alt="Sustainability Article" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <span class="text-sage text-sm font-medium uppercase tracking-wide">Sustainability</span>
                    <h3 class="font-serif text-xl text-earth mt-3 mb-3 text-balance">Sustainable Living in Paradise</h3>
                    <p class="text-earth/60 mb-6 leading-relaxed">
                        How Bali Terra Living integrates eco-friendly practices into luxury real estate.
                    </p>
                    <a href="#" class="text-sage hover:text-earth font-medium inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 3 -->
            <!-- <CHANGE> Added specific image query for Balinese culture article -->
            <article class="bg-cream rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
                <div class="overflow-hidden">
                    <img src="https://assets.baliterraliving.com/modern-beachfront-villa-seminyak-with-infinity-poo.png" alt="Culture Article" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <span class="text-sage text-sm font-medium uppercase tracking-wide">Lifestyle</span>
                    <h3 class="font-serif text-xl text-earth mt-3 mb-3 text-balance">Embracing Balinese Culture</h3>
                    <p class="text-earth/60 mb-6 leading-relaxed">
                        Discover the spiritual and cultural richness that makes Bali truly unique.
                    </p>
                    <a href="#" class="text-sage hover:text-earth font-medium inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Contact Section -->
<!-- <CHANGE> Improved form layout and spacing -->
<section id="contact" class="py-24 px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl lg:text-5xl text-earth mb-6 text-balance">Get in Touch</h2>
            <p class="text-lg lg:text-xl text-earth/60 leading-relaxed">
                Ready to find your dream property in Bali? Let's start the conversation.
            </p>
        </div>

        <form action="{{route('contact.store')}}" method="POST" class="bg-white p-10 lg:p-12 rounded-2xl shadow-lg space-y-6">
            @csrf
            @method('POST')
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-earth font-medium mb-3">Full Name</label>
                    <input name="full_name" type="text" id="name" value="{{old('full_name')}}" class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors" placeholder="John Doe">
                    @if($errors->has('full_name')) <p class="text-red-500 text-sm mt-1 italic">{{$errors->first('full_name')}}</p> @endif
                </div>
                <div>
                    <label for="email" class="block text-earth font-medium mb-3">Email Address</label>
                    <input name="email" type="email" id="email" value="{{old('email')}}" class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors" placeholder="john@example.com">
                    @if($errors->has('email')) <p class="text-red-500 text-sm mt-1 italic">{{$errors->first('email')}}</p> @endif
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="phone" class="block text-earth font-medium mb-3">Phone Number</label>
                    <input name="phone_number" type="tel" id="phone" value="{{old('phone_number')}}" class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors" placeholder="+62 123 456 7890">
                    @if($errors->has('phone_number')) <p class="text-red-500 text-sm mt-1 italic">{{$errors->first('phone_number')}}</p> @endif
                </div>
                <div>
                    <label for="interest" class="block text-earth font-medium mb-3">I'm Interested In</label>
                    <select name="interested_in" id="interest" class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">
                        <option value="">-- Select --</option>
                        <option @checked(old('interested_in', 'Buying a Villa')) value="Buying a Villa">Buying a Villa</option>
                        <option @checked(old('interested_in', 'Investment Opportunities')) value="Investment Opportunities">Investment Opportunities</option>
                        <option @checked(old('interested_in', 'Property Management')) value="Property Management">Property Management</option>
                    </select>
                    @if($errors->has('interested_in')) <p class="text-red-500 text-sm mt-1 italic">{{$errors->first('interested_in')}}</p> @endif
                </div>
            </div>

            <div>
                <label for="message" class="block text-earth font-medium mb-3">Message</label>
                <textarea name="message" id="message" rows="5" class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors resize-none" placeholder="Tell us about your dream property..."></textarea>
                @if($errors->has('message')) <p class="text-red-500 text-sm mt-1 italic">{{$errors->first('message')}}</p> @endif
            </div>

            <button type="submit" class="w-full bg-sage text-cream px-8 py-4 rounded-2xl hover:bg-earth transition-all duration-300 font-medium shadow-lg hover:shadow-xl">
                Send Message
            </button>
        </form>
    </div>
</section>

<!-- Footer -->
<!-- ... existing code ... -->
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
