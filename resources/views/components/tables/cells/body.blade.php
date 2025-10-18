@props([
    'data' => null,
])

<td class="px-5 py-4 sm:px-6">
    <div class="flex items-center">
        <p class="text-gray-500 text-theme-sm dark:text-gray-400">
            {{ $data }}
            {{ $slot }}
        </p>
    </div>
</td>
