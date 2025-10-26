<footer class="bg-earth text-cream py-16 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div>
                <img src="{{ $brands->get('image-url')->setting_value }}" alt="{{ $brands->get('image-alt')->setting_value }}" class="h-12 w-auto mb-6 brightness-0 invert">
                <p class="text-cream/70 leading-relaxed">
                    {{ $brands->get('description')->setting_value }}
                </p>
            </div>

            <div>
                <h4 class="font-serif text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    @foreach($quick_links as $quick_link)
                        <li><a href="{{ $quick_link->url }}" class="text-cream/70 hover:text-cream transition-colors">{{ $quick_link->title }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="font-serif text-lg mb-6">Contact</h4>
                <ul class="space-y-3 text-cream/70">
                    <li>{{ $contacts->get('address')->setting_value }}</li>
                    <li>{{ $contacts->get('country')->setting_value }}</li>
                    <li><a href="mailto:{{ $contacts->get('email')->setting_value }}" class="hover:text-cream transition-colors">{{ $contacts->get('email')->setting_value }}</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-serif text-lg mb-6">Follow Us</h4>
                <div class="flex gap-4">
                    @foreach($social_links as $social_link)
                        <a target="_blank" href="{{ $social_link->url }}" class="w-10 h-10 bg-cream/20 rounded-2xl flex items-center justify-center hover:bg-cream/30 transition-colors">
                            {!! $social_link->icon !!}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="border-t border-cream/20 pt-8 text-center text-cream/60">
            <p>{!! $brands->get('copyright')->setting_value !!}</p>
        </div>
    </div>
</footer>
