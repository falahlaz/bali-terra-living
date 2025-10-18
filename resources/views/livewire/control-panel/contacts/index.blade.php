<x-main :page="$page">
    <x-card>
        <x-card.sm-title title="User Contacts"/>

        <x-card.body>
            <x-tables.base>
                <x-tables.header>
                    <x-tables.cells.header title="No"/>
                    <x-tables.cells.header title="Contacted At"/>
                    <x-tables.cells.header title="Name"/>
                    <x-tables.cells.header title="Phone Number"/>
                    <x-tables.cells.header title="Interest"/>
                    <x-tables.cells.header title="Status"/>
                    <x-tables.cells.header title="Processed By"/>
                    <x-tables.cells.header title="Action"/>
                </x-tables.header>

                <x-tables.body>
                    @foreach($contacts as $contact)
                        <tr>
                            <x-tables.cells.body :data="$loop->iteration"/>
                            <x-tables.cells.body :data="$contact->created_at->toRfc1123String()"/>
                            <x-tables.cells.body :data="$contact->full_name"/>
                            <x-tables.cells.body :data="$contact->phone_number"/>
                            <x-tables.cells.body :data="$contact->interested_in"/>
                            <x-tables.cells.body-with-variant :data="$contact->status"/>
                            <x-tables.cells.body :data="$contact->admin?->name ?? '-'"/>
                            <x-tables.cells.body>
                                <x-button
                                    :href="route('cp.contacts.detail', [$contact->id])"
                                    with_icon="true"
                                    variant="primary"
                                    width="12"
                                    height="12"
                                    view-box="0 0 472 384"
                                    path="M235 32q79 0 142.5 44.5T469 192q-28 71-91.5 115.5T235 352T92 307.5T0 192q28-71 92-115.5T235 32zm0 267q44 0 75-31.5t31-75.5t-31-75.5T235 85t-75.5 31.5T128 192t31.5 75.5T235 299zm-.5-171q26.5 0 45.5 18.5t19 45.5t-19 45.5t-45.5 18.5t-45-18.5T171 192t18.5-45.5t45-18.5z"
                                />
                            </x-tables.cells.body>
                        </tr>
                    @endforeach
                </x-tables.body>
            </x-tables.base>
        </x-card.body>
    </x-card>
</x-main>
