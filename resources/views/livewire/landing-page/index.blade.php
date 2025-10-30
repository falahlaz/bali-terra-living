<div>
    <!-- Hero Section -->
    <!-- <CHANGE> Improved spacing and visual hierarchy -->
    <section id="home" class="pt-32 pb-24 px-6 lg:px-8 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <h1 class="font-serif text-5xl lg:text-6xl xl:text-7xl text-earth leading-tight text-balance">
                        {!! $sections->get('hero')->getContent('title') !!}
                    </h1>
                    <p class="text-lg lg:text-xl text-earth/70 leading-relaxed max-w-xl">
                        {{ $sections->get('hero')->getContent('description') }}
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <x-landing-page.buttons :href="$sections->get('hero')->getContent('property-button-link')"
                                                :text="$sections->get('hero')->getContent('property-button-text')"/>
                        <x-landing-page.buttons :href="$sections->get('hero')->getContent('contact-button-link')"
                                                variant="bg-transparent"
                                                :text="$sections->get('hero')->getContent('contact-button-text')"/>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-sage/10 rounded-2xl transform translate-x-4 translate-y-4"></div>
                    <img src="{{ $sections->get('hero')->getContent('hero-image-url') }}"
                         alt="{{ $sections->get('hero')->getContent('hero-image-alt') }}"
                         class="relative rounded-2xl shadow-2xl w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <x-landing-page.sections id="about" additional-class="bg-white">
        <x-landing-page.sections.title
            :title="$sections->get('about')->getContent('title')"
            :description="$sections->get('about')->getContent('description')"
        />

        <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
            @foreach($about_cards as $about_card)
                <div class="bg-cream p-10 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 bg-sage/20 rounded-2xl flex items-center justify-center mb-6">
                        {!! $about_card->icon_content !!}
                    </div>
                    <h3 class="font-serif text-2xl text-earth mb-4">{{ $about_card->title }}</h3>
                    <p class="text-earth/60 leading-relaxed">
                        {{ $about_card->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </x-landing-page.sections>

    <x-landing-page.sections id="properties">
        <x-landing-page.sections.title
            :title="$sections->get('properties')->getContent('title')"
            :description="$sections->get('properties')->getContent('description')"
        />

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($properties as $property)
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/'.$property->images->first()?->path) }}" alt="Villa Serenity"
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="font-serif text-2xl text-earth mb-2">{{ $property->name }}</h3>
                        <p class="text-sage font-medium mb-4">{{ $property->location->name }}</p>
                        <p class="text-earth/60 mb-6 leading-relaxed text-sm">
                            {{ $property->features->take(5)->map(fn ($feature) => $feature->feature->name)->implode(' • ') }}
                        </p>
                        <x-landing-page.buttons :href="route('property.detail', $property->slug)" text="View Details"
                                                additional-class="w-full text-center"/>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-16">
            <x-landing-page.buttons
                :href="route('property.index')"
                :text="$sections->get('properties')->getContent('view-all-button-text')"
                variant="bg-transparent"
            />
        </div>
    </x-landing-page.sections>

    <x-landing-page.sections id="why" additional-class="bg-white">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- <CHANGE> Added descriptive image query for Balinese architecture and nature -->
            <div class="relative order-2 lg:order-1">
                <div class="absolute inset-0 rounded-2xl transform -translate-x-4 translate-y-4"></div>
                <img src="{{ $sections->get('why')->getContent('image-url') }}"
                     alt="{{ $sections->get('why')->getContent('image-alt') }}"
                     class="relative rounded-2xl shadow-2xl w-full h-auto">
            </div>
            <div class="order-1 lg:order-2 space-y-8">
                <div>
                    <h2 class="font-serif text-4xl lg:text-5xl text-earth mb-6 text-balance">{{ $sections->get('why')->getContent('title') }}</h2>
                    <p class="text-lg text-earth/60 leading-relaxed">
                        {{ $sections->get('why')->getContent('description') }}
                    </p>
                </div>

                <div class="space-y-6">
                    @foreach($benefits as $benefit)
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-sage/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                                {!! $benefit->icon_content !!}
                            </div>
                            <div>
                                <h3 class="font-serif text-xl text-earth mb-2">{{ $benefit->title }}</h3>
                                <p class="text-earth/60 leading-relaxed">{{ $benefit->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-landing-page.sections>

    <x-landing-page.sections id="testimonials">
        <x-landing-page.sections.title
            :title="$sections->get('testimonials')->getContent('title')"
            :description="$sections->get('testimonials')->getContent('description')"
        />

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            @foreach($testimonials as $testimonial)
                <div class="bg-white p-10 rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center gap-1 mb-6">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                            <svg class="w-5 h-5 text-gold fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-earth/70 leading-relaxed mb-6 italic">
                        "{{ $testimonial->testimonial_text }}"
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-sage/20 rounded-full flex items-center justify-center">
                            <span
                                class="text-sage font-serif text-lg">{{ $testimonial->acronym }}</span>
                        </div>
                        <div>
                            <p class="font-medium text-earth">{{ $testimonial->client_initials ?? '' }} {{ $testimonial->client_name }}</p>
                            <p class="text-sm text-earth/60">{{ $testimonial->client_title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-landing-page.sections>

    <x-landing-page.sections id="articles" additional-class="bg-white">
        <x-landing-page.sections.title
            :title="$sections->get('articles')->getContent('title')"
            :description="$sections->get('articles')->getContent('description')"
        />

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <!-- <CHANGE> Added specific image query for investment guide article -->
            <article
                class="bg-cream rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
                <div class="overflow-hidden">
                    <img src="https://assets.baliterraliving.com/legal-documents-property-titles-indonesia.png"
                         alt="Investment Guide Article"
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <span class="text-sage text-sm font-medium uppercase tracking-wide">Investment Guide</span>
                    <h3 class="font-serif text-xl text-earth mt-3 mb-3 text-balance">The Ultimate Guide to Buying
                        Property in Bali</h3>
                    <p class="text-earth/60 mb-6 leading-relaxed">
                        Everything you need to know about investing in Bali real estate as a foreigner.
                    </p>
                    <a href="#" class="text-sage hover:text-earth font-medium inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <!-- <CHANGE> Added specific image query for sustainability article -->
            <article
                class="bg-cream rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
                <div class="overflow-hidden">
                    <img src="https://assets.baliterraliving.com/property-investment-risk-management.png"
                         alt="Sustainability Article"
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <span class="text-sage text-sm font-medium uppercase tracking-wide">Sustainability</span>
                    <h3 class="font-serif text-xl text-earth mt-3 mb-3 text-balance">Sustainable Living in
                        Paradise</h3>
                    <p class="text-earth/60 mb-6 leading-relaxed">
                        How Bali Terra Living integrates eco-friendly practices into luxury real estate.
                    </p>
                    <a href="#" class="text-sage hover:text-earth font-medium inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 3 -->
            <!-- <CHANGE> Added specific image query for Balinese culture article -->
            <article
                class="bg-cream rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
                <div class="overflow-hidden">
                    <img
                        src="https://assets.baliterraliving.com/modern-beachfront-villa-seminyak-with-infinity-poo.png"
                        alt="Culture Article"
                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <span class="text-sage text-sm font-medium uppercase tracking-wide">Lifestyle</span>
                    <h3 class="font-serif text-xl text-earth mt-3 mb-3 text-balance">Embracing Balinese Culture</h3>
                    <p class="text-earth/60 mb-6 leading-relaxed">
                        Discover the spiritual and cultural richness that makes Bali truly unique.
                    </p>
                    <a href="#" class="text-sage hover:text-earth font-medium inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </x-landing-page.sections>

    <x-landing-page.sections id="contact">
        <x-landing-page.sections.title
            :title="$sections->get('contact')->getContent('title')"
            :description="$sections->get('contact')->getContent('description')"
        />

        <form wire:submit="storeContactSubmission" class="bg-white p-10 lg:p-12 rounded-2xl shadow-lg space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-earth font-medium mb-3">Full Name</label>
                    <input wire:model="contactSubmissionForm.full_name" type="text" id="name"
                           class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors"
                           placeholder="John Doe">
                    @error('contactSubmissionForm.full_name')
                        <p class="text-red-500 text-sm mt-1 italic">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-earth font-medium mb-3">Email Address</label>
                    <input wire:model="contactSubmissionForm.email" type="email" id="email"
                           class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors"
                           placeholder="john@example.com">
                    @error('contactSubmissionForm.email')
                    <p class="text-red-500 text-sm mt-1 italic">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="phone" class="block text-earth font-medium mb-3">Phone Number</label>
                    <input wire:model="contactSubmissionForm.phone_number" type="tel" id="phone"
                           class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors"
                           placeholder="+62 123 456 7890">
                    @error('contactSubmissionForm.phone_number')
                    <p class="text-red-500 text-sm mt-1 italic">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="interest" class="block text-earth font-medium mb-3">I'm Interested In</label>
                    <select wire:model="contactSubmissionForm.interested_in" id="interest"
                            class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors">
                        <option value="">-- Select --</option>
                        <option value="Buying a Villa">Buying a
                            Villa
                        </option>
                        <option value="Investment Opportunities">
                            Investment Opportunities
                        </option>
                        <option value="Property Management">
                            Property Management
                        </option>
                    </select>
                    @error('contactSubmissionForm.interested_in')
                    <p class="text-red-500 text-sm mt-1 italic">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="message" class="block text-earth font-medium mb-3">Message</label>
                <textarea wire:model="contactSubmissionForm.message" id="message" rows="5"
                          class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors resize-none"
                          placeholder="Tell us about your dream property..."></textarea>
                @error('contactSubmissionForm.message')
                <p class="text-red-500 text-sm mt-1 italic">{{$message}}</p>
                @enderror
            </div>

            <button type="submit"
                    class="w-full bg-sage text-cream px-8 py-4 rounded-2xl hover:bg-earth transition-all duration-300 font-medium shadow-lg hover:shadow-xl">
                Send Message

                <x-button.loading target="storeContactSubmission"/>
            </button>
        </form>

        <div x-data="{ open: @entangle('showWhatsAppModal') }"
             x-show="open"
             x-cloak
             class="fixed inset-0 z-50 overflow-y-auto"
             aria-labelledby="modal-title"
             role="dialog"
             aria-modal="true">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-earth/75 transition-opacity"
                 x-show="open"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 wire:click="closeModal"></div>

            <!-- Modal content -->
            <div class="flex min-h-full items-center justify-center p-4">
                <div class="relative transform overflow-hidden rounded-3xl bg-white shadow-2xl transition-all w-full max-w-lg"
                     x-show="open"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                    <!-- Close button -->
                    <button wire:click="closeModal" class="absolute top-4 right-4 text-earth/40 hover:text-earth transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="p-8 lg:p-10 text-center">
                        <!-- Success icon -->
                        <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                            <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif text-3xl text-earth mb-4" id="modal-title">
                            Message Sent Successfully!
                        </h3>

                        <!-- Description -->
                        <p class="text-earth/70 text-lg leading-relaxed mb-8">
                            Thank you for reaching out. We've received your message and will get back to you soon.
                            For immediate assistance, feel free to chat with us on WhatsApp!
                        </p>

                        <!-- WhatsApp button -->
                        <a href="https://wa.me/{{ $contacts->get('phone-number')->setting_value }}?text=Hi%2C%20I%27m%20interested%20in%20Bali%20Terra%20Living%20properties"
                           target="_blank"
                           class="inline-flex items-center justify-center gap-3 bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-2xl transition-all duration-300 font-medium shadow-lg hover:shadow-xl w-full mb-4">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Continue on WhatsApp
                        </a>

                        <!-- Close button -->
                        <button wire:click="closeModal"
                                class="w-full bg-cream text-earth px-8 py-4 rounded-2xl hover:bg-sage/10 transition-all duration-300 font-medium">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-landing-page.sections>
</div>
