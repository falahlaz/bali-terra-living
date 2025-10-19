@props([
    'text' => null,
    'href' => null,
    'variant' => 'primary',
    'with_icon' => false,
    'width' => '20',
    'height' => '20',
    'viewBox' => '0 0 20 20',
    'path' => '',
    'additionalClass' => '',
    'remove_icon_loading' => false,
    'target' => null,
])

@php
    $baseClass = 'inline-flex items-center gap-2 px-4 py-3 text-white transition rounded-lg shadow-theme-xs font-medium text-sm';
    $variantClass = match($variant) {
        'primary' => 'bg-brand-500 hover:bg-brand-600',
        'secondary' => 'bg-gray-500 hover:bg-gray-600',
        'success' => 'bg-green-500 hover:bg-green-600',
        'danger' => 'bg-red-400 hover:bg-red-500',
    }
@endphp

@if(!$href)
    <button
        {{$attributes->merge(['class' => "$baseClass $variantClass $additionalClass"])}}
    >
        {{$text}}

        @if ($with_icon)
            <svg
                @if($remove_icon_loading) wire:loading.remove @endif
            @if($target) wire:target="{{ $target }}" @endif
                class="fill-current"
                width="{{$width}}"
                height="{{$height}}"
                viewBox="{{$viewBox}}"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="{{$path}}"
                    fill=""
                />
            </svg>
        @endif

        {{ $slot }}
    </button>
@endif

@if($href)
    <a
        href="{{$href}}"
        {{$attributes->merge(['class' => "$baseClass $variantClass $additionalClass"])}}
    >
        {{$text}}

        @if ($with_icon)
            <svg
                @if($remove_icon_loading) wire:loading.remove @endif
            @if($target) wire:target="{{ $target }}" @endif
                class="fill-current"
                width="{{$width}}"
                height="{{$height}}"
                viewBox="{{$viewBox}}"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="{{$path}}"
                    fill=""
                />
            </svg>
        @endif
    </a>
@endif
