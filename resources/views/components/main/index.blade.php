<main>
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <div x-data="{ pageName: `{{ $page }}`}">
            <x-nav.breadcrumbs/>
        </div>

        {{$slot}}
    </div>
</main>
