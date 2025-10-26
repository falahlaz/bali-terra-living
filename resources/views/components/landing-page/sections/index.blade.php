@props([
    'id' => '',
    'baseClass' => 'py-24 px-6 lg:px-8',
    'additionalClass' => '',
])

<section @if($id) id="{{$id}}" @endif {{$attributes->merge(['class' => "$baseClass $additionalClass"])}}>
    <div class="max-w-7xl mx-auto">
        {{ $slot }}
    </div>
</section>
