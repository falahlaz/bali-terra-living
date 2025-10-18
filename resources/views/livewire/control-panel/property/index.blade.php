<x-main :page="$page">
    <x-card>
        <x-card.sm-title :title="$page"/>

        <x-card.body>
            <div class="flex justify-end mb-3">
                <x-button
                    :href="route('cp.properties.create')"
                    with_icon="true"
                    width="12"
                    height="12"
                    view-box="0 0 24 24"
                    path="M13 4v7h7v2h-7v7h-2v-7H4v-2h7V4h2Z"
                    text="Add"
                />
            </div>

            <x-tables.base>
                <x-tables.header>
                    <x-tables.cells.header title="No"/>
                    <x-tables.cells.header title="Name"/>
                    <x-tables.cells.header title="Category"/>
                    <x-tables.cells.header title="Price"/>
                    <x-tables.cells.header title="Location"/>
                    <x-tables.cells.header title="Is Active"/>
                    <x-tables.cells.header title="Action"/>
                </x-tables.header>

                <x-tables.body>
                    @foreach($properties as $property)
                        <tr wire:key="property-{{$property->id}}">
                            <x-tables.cells.body :data="$loop->iteration"/>
                            <x-tables.cells.body :data="$property->name"/>
                            <x-tables.cells.body :data="$property->category->name"/>
                            <x-tables.cells.body :data="$property->price"/>
                            <x-tables.cells.body :data="$property->location ?? '-'"/>
                            <x-tables.cells.body-with-variant :variant="$property->is_active ? 'success' : 'danger'" :data="$property->is_active ? 'Active' : 'Inactive'"/>
                            <x-tables.cells.body>
                                <x-button
                                    :href="route('cp.properties.detail', [$property->id])"
                                    with_icon="true"
                                    variant="primary"
                                    width="12"
                                    height="12"
                                    view-box="0 0 1025 1023"
                                    path="M896.428 1023h-768q-53 0-90.5-37.5T.428 895V127q0-53 37.5-90t90.5-37h576l-128 127h-384q-27 0-45.5 19t-18.5 45v640q0 27 19 45.5t45 18.5h640q27 0 45.5-18.5t18.5-45.5V447l128-128v576q0 53-37.5 90.5t-90.5 37.5zm-576-464l144 144l-208 64zm208 96l-160-159l479-480q17-16 40.5-16t40.5 16l79 80q16 16 16.5 39.5t-16.5 40.5z"
                                />
                            </x-tables.cells.body>
                        </tr>
                    @endforeach
                </x-tables.body>
            </x-tables.base>
        </x-card.body>
    </x-card>
</x-main>
