@props([
    'additionalClasses' => '',
])

@php
$baseClass = 'rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]'
@endphp

<div
    {{$attributes->merge(['class' => "$baseClass $additionalClasses"])}}
>
    {{$slot}}
</div>
