@props([
    'text' => null,
    'href' => null,
    'variant' => 'bg-sage',
    'additionalClass' => '',
])

@php
    $baseClass = 'px-8 py-4 rounded-2xl transition-all duration-300 font-medium inline-block';
    $variantClass = match($variant) {
        'bg-sage' => 'bg-sage text-cream hover:bg-earth shadow-lg hover:shadow-xl',
        'bg-transparent' => 'border-2 border-sage text-sage hover:bg-sage hover:text-cream',
    }
@endphp

@if(!$href)
    <button
        {{$attributes->merge(['class' => "$baseClass $variantClass $additionalClass"])}}
    >
        {{$text}}
    </button>
@endif

@if($href)
    <a
        href="{{$href}}"
        {{$attributes->merge(['class' => "$baseClass $variantClass $additionalClass"])}}
    >
        {{$text}}
    </a>
@endif
