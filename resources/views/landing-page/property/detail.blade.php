<x-landing-page.layouts.app>
    <header class="pt-32 pb-10 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col gap-4">
                <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl text-earth leading-tight text-balance">
                    {{ $property->name ?? 'Untitled Property' }}
                </h1>
                <div class="flex flex-wrap items-center gap-3 text-earth/70">
                    @if(!empty($property->type))
                        <span
                            class="px-3 py-1 rounded-2xl bg-sage/15 text-sage text-sm font-medium capitalize">{{ $property->type }}</span>
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
                    @if($property->images->first())
                        <div class="relative">
                            <img src="{{ asset('storage/'.$property->images->first()?->path) }}"
                                 alt="{{ $property->name ?? 'Property' }} main image"
                                 class="w-full h-[460px] object-cover">
                        </div>
                        @if($property->images->count() > 1)
                            <div class="p-4">
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                                    @foreach($property->images as $image)
                                        <div class="overflow-hidden rounded-xl group">
                                            <img src="{{ asset('storage/'.$image->path) }}"
                                                 alt="{{ $property->name ?? 'Property' }} gallery image {{ $loop->iteration }}"
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
                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Surface Area</p>
                                <p class="text-earth font-medium">{{ $property->surface_area }}</p>
                            </div>

                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Location</p>
                                <p class="text-earth font-medium">{{ $property->location_detail }}</p>
                            </div>

                            @if($property->has_building_area)
                                <div class="bg-cream rounded-2xl p-4">
                                    <p class="text-earth/60 text-sm">Building Area</p>
                                    <p class="text-earth font-medium">{{ $property->building_area }}</p>
                                </div>
                                <div class="bg-cream rounded-2xl p-4">
                                    <p class="text-earth/60 text-sm">Rooms</p>
                                    <p class="text-earth font-medium">{{ $property->rooms }}</p>
                                </div>
                            @endif

                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Bathrooms</p>
                                <p class="text-earth font-medium">{{ $property->bathrooms }}</p>
                            </div>
                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Year Built</p>
                                <p class="text-earth font-medium">{{ $property->year_built }}</p>
                            </div>
                            <div class="bg-cream rounded-2xl p-4">
                                <p class="text-earth/60 text-sm">Status</p>
                                <p class="text-earth font-medium capitalize">{{ $property->status }}</p>
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($property->details as $detail)
                                <div class="bg-cream rounded-2xl p-4">
                                    <p class="text-earth/60 text-sm">{{ Str::title($detail->detail_key) }}</p>
                                    <p class="text-earth font-medium">{{ $detail->detail_value }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <aside class="lg:col-span-4">
                <div class="lg:sticky lg:top-28 space-y-6">
                    <div class="bg-white rounded-2xl shadow-soft p-8">
                        <p class="text-earth/60 text-sm mb-2">Price</p>
                        <div class="flex items-end gap-2 mb-6">
                            @if($property->price)
                                <span class="font-serif text-3xl md:text-4xl text-earth">
                                    {{ $property->formatted_price_full }}
                                </span>
                            @else
                                <span class="text-earth/70">Contact for price</span>
                            @endif
                        </div>

                        <div class="grid gap-3">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-earth/60">Surface Area</span>
                                <span class="text-earth font-medium">{{ $property->formatted_surface_area }}</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-earth/60">Property Type</span>
                                <span
                                    class="text-earth font-medium capitalize">{{ $property->category?->name ?? '-' }}</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-earth/60">Location</span>
                                <span
                                    class="text-earth font-medium text-right">{{ $property->location_detail ? $property->location->name .' - '. $property->location_detail : $property->location->name }}</span>
                            </div>
                        </div>

                        <div class="mt-8 grid gap-3">
                            <a href="{{ route('home.index') }}#contact"
                               class="bg-sage text-cream px-6 py-3 rounded-2xl hover:bg-earth transition-colors font-medium text-center">
                                Schedule a Visit
                            </a>
                            <a href="{{ route('property.index') }}"
                               class="border-2 border-sage text-sage px-6 py-3 rounded-2xl hover:bg-sage hover:text-cream transition-colors font-medium text-center">
                                Back to Properties
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-soft p-8">
                        <h3 class="font-serif text-xl text-earth mb-4">Highlights</h3>
                        <ul class="space-y-3 list-disc pl-5 text-earth/80">
                            @foreach($property->features as $feature)
                                <li>{{ $feature->feature->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</x-landing-page.layouts.app>
