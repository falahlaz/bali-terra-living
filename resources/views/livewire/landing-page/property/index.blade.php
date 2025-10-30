<div>
    <section class="pt-32 pb-16 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="font-serif text-5xl lg:text-6xl text-earth mb-6 text-balance">Available Properties</h1>
                <p class="text-lg lg:text-xl text-earth/60 leading-relaxed max-w-2xl mx-auto">
                    Explore our curated selection of premium villas, houses, and land in Bali's most sought-after
                    locations
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
                        <select id="type"
                                wire:model.live="category_id"
                                name="category_id"
                                class="w-full px-5 py-3 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">
                            <option value="">All Types</option>
                            @foreach($categories as $category)
                                <option
                                    @selected(Request::get('category_id') == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Location Filter -->
                    <div>
                        <label for="location" class="block text-earth font-medium mb-3">Location</label>
                        <select id="location"
                                wire:model.live="location_id"
                                name="location_id"
                                class="w-full px-5 py-3 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">
                            <option value="">All Locations</option>
                            @foreach($locations as $location)
                                <option
                                    @selected(Request::get('location_id') == $location->id) value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Price Range Filter -->
                    {{--                    <div>--}}
                    {{--                        <label for="price" class="block text-earth font-medium mb-3">Price Range</label>--}}
                    {{--                        <select id="price"--}}
                    {{--                                class="w-full px-5 py-3 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">--}}
                    {{--                            <option value="">All Prices</option>--}}
                    {{--                            <option value="0-500">Under $500K</option>--}}
                    {{--                            <option value="500-1000">$500K - $1M</option>--}}
                    {{--                            <option value="1000-2000">$1M - $2M</option>--}}
                    {{--                            <option value="2000">$2M+</option>--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}

                    <!-- Sort Options -->
                    {{--                    <div>--}}
                    {{--                        <label for="sort" class="block text-earth font-medium mb-3">Sort By</label>--}}
                    {{--                        <select id="sort"--}}
                    {{--                                class="w-full px-5 py-3 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">--}}
                    {{--                            <option value="newest">Newest</option>--}}
                    {{--                            <option value="price-low">Lowest Price</option>--}}
                    {{--                            <option value="price-high">Highest Price</option>--}}
                    {{--                            <option value="popular">Most Popular</option>--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}
                </div>

                <!-- Added reset filters button -->
                <div class="mt-6 flex justify-end">
                    <button
                        type="button"
                        wire:click="resetFilters"
                        class="block px-6 py-3 text-sage hover:text-earth font-medium transition-colors mr-3">
                        Reset Filters
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- PageProperties Grid -->
    <section class="px-6 lg:px-8 pb-24">
        <div class="max-w-7xl mx-auto">
            <!-- Results Count -->
            <div class="mb-8">
                <p class="text-earth/60 font-medium">Showing <span
                        class="text-earth font-bold">{{ $properties->total() }}</span> properties</p>
            </div>

            <!-- Property Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach($properties as $property)
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                        <!-- Image Container -->
                        <div class="relative overflow-hidden h-64">
                            <img src="{{ asset('storage/'.$property->images->first()?->path) }}"
                                 alt="{{ $property->images->first()?->name }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <!-- Added property type badge -->
                            <div
                                class="absolute top-4 right-4 bg-sage text-cream px-4 py-2 rounded-2xl text-sm font-medium">
                                {{ $property->category->name }}
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-8">
                            <h3 class="font-serif text-2xl text-earth mb-2">{{ $property->name }}</h3>
                            <p class="text-sage font-medium mb-4 flex items-center gap-2">
                                {{ $property->location->name }}
                            </p>

                            <!-- Property Details -->
                            <div class="grid grid-cols-3 gap-4 mb-6 pb-6 border-b border-sage/10">
                                <div>
                                    <p class="text-earth/60 text-sm mb-1">Surface Area</p>
                                    <p class="font-medium text-earth">{{ $property->formatted_surface_area }}</p>
                                </div>
                                <div>
                                    <p class="text-earth/60 text-sm mb-1">Bedrooms</p>
                                    <p class="font-medium text-earth">{{ $property->rooms }}</p>
                                </div>
                                <div>
                                    <p class="text-earth/60 text-sm mb-1">Bathrooms</p>
                                    <p class="font-medium text-earth">{{ $property->bathrooms }}</p>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="mb-6">
                                <p class="text-earth/60 text-sm mb-1">Price</p>
                                <p class="font-serif text-3xl text-sage font-bold">{{ $property->formatted_price }}</p>
                            </div>

                            <!-- View Details Button -->
                            <a href="{{ route('property.detail', $property) }}"
                               class="block w-full bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                                View Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $properties->links('pagination::landing-page') }}
        </div>
    </section>
</div>
