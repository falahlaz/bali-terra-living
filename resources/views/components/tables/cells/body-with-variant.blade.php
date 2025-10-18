@props([
    'variant' => 'success',
    'data' => '-'
])

@php
$baseClass = 'rounded-full px-2 py-0.5 text-theme-xs font-medium';
$variantClass = match($variant) {
    'success' => 'bg-green-50 text-green-700 dark:bg-green-500/15 dark:text-green-500',
    'danger' => 'bg-red-50 text-red-700 dark:bg-red-500/15 dark:text-red-500',
}
@endphp

<td class="px-5 py-4 sm:px-6">
    <div class="flex items-center">
        <p
            {{$attributes->merge(['class' => "$baseClass $variantClass"])}}
        >
            {{ $data }}
        </p>
    </div>
</td>
