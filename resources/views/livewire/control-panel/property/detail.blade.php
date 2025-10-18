<x-main :page="$page">
    <x-card>
        <x-card.sm-title :title="$page"/>

        <x-card.body>
            <div
                class="bg-white space-y-6 p-5 sm:p-6"
            >
                <form wire:submit="update">
                    @csrf
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Category
                            </label>
                            <div
                                x-data="{ isOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="property_form.property_category_id"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="isOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="isOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    @foreach($categories as $category)
                                        <option
                                            wire:key="property-category-{{$category->id}}"
                                            @selected($property->property_category_id === $category->id)
                                            value="{{ $category->id }}"
                                            class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                        >
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span
                                    class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400"
                                >
                                    <svg
                                        class="stroke-current"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396"
                                            stroke=""
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </span>
                            </div>

                            @error('property_form.property_category_id')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Name
                            </label>
                            <input
                                wire:model="property_form.name"
                                type="text"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.name')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Price
                            </label>
                            <input
                                wire:model="property_form.price"
                                type="number"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.price')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Width
                            </label>
                            <input
                                wire:model="property_form.width"
                                type="number"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.width')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Unit of Measure
                            </label>
                            <div
                                x-data="{ isOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="property_form.uom"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="isOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="isOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    <option
                                        @selected($property->uom === 'meter')
                                        value="meter"
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Meter
                                    </option>
                                </select>
                                <span
                                    class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400"
                                >
                                    <svg
                                        class="stroke-current"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396"
                                            stroke=""
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </span>
                            </div>

                            @error('property_form.uom')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Location
                            </label>
                            <input
                                wire:model="property_form.location"
                                type="text"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.location')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div x-data="{ switcherToggle1: @entangle('property_form.is_active') }">
                                <label
                                    for="toggle1"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="property_form.is_active"
                                            type="checkbox"
                                            id="toggle1"
                                            class="sr-only"
                                        />
                                        <div
                                            class="block h-6 w-11 rounded-full"
                                            :class="switcherToggle1 ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'"
                                        ></div>
                                        <div
                                            :class="switcherToggle1 ? 'translate-x-full': 'translate-x-0'"
                                            class="shadow-theme-sm absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white duration-300 ease-linear"
                                        ></div>
                                    </div>
                                    Is Active
                                </label>
                            </div>

                            @error('property_form.is_active')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-button
                            text="Update"
                            additional-class="mr-2"
                        >
                            <svg
                                wire:loading
                                wire:target="update"
                                class="fill-current animate-spin"
                                width="12"
                                height="12"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.384 0-9.75 4.366-9.75 9.75s4.366 9.75 9.75 9.75v-2.438A7.312 7.312 0 1 1 19.313 12h2.437c0-5.384-4.366-9.75-9.75-9.75Z"
                                    fill=""
                                />
                            </svg>
                        </x-button>

                        <x-button
                            :href="route('cp.properties.index')"
                            variant="danger"
                            text="Back"
                        />
                    </div>
                </form>
            </div>
        </x-card.body>
    </x-card>

    <div class="flex items-start mt-5">
        <x-card additional-classes="w-2/3 m-2">
            <x-card.sm-title title="Features"/>

            <x-card.body>
                <x-tables.base>
                    <x-tables.header>
                        <x-tables.cells.header title="No"/>
                        <x-tables.cells.header title="Name"/>
                        <x-tables.cells.header title="Is Active"/>
                        <x-tables.cells.header title="Action"/>
                    </x-tables.header>

                    <x-tables.body>
                        @foreach($property->features as $feature)
                            <tr wire:key="property-feature-{{$feature->id}}">
                                <x-tables.cells.body :data="$loop->iteration"/>
                                <x-tables.cells.body :data="$feature->name"/>
                                <x-tables.cells.body-with-variant
                                    :variant="$feature->is_active ? 'success' : 'danger'"
                                    :data="$feature->is_active ? 'active' : 'inactive'"
                                />
                                <x-tables.cells.body>
                                    <x-button
                                        wire:click="editFeature({{$feature}})"
                                        with_icon="true"
                                        variant="primary"
                                        width="12"
                                        height="12"
                                        view-box="0 0 1025 1023"
                                        path="M896.428 1023h-768q-53 0-90.5-37.5T.428 895V127q0-53 37.5-90t90.5-37h576l-128 127h-384q-27 0-45.5 19t-18.5 45v640q0 27 19 45.5t45 18.5h640q27 0 45.5-18.5t18.5-45.5V447l128-128v576q0 53-37.5 90.5t-90.5 37.5zm-576-464l144 144l-208 64zm208 96l-160-159l479-480q17-16 40.5-16t40.5 16l79 80q16 16 16.5 39.5t-16.5 40.5z"
                                    />

                                    <x-button
                                        wire:click="deleteFeature({{$feature}})"
                                        wire:confirm="Are you sure want to delete this feature?"
                                        with_icon="true"
                                        variant="danger"
                                        width="12"
                                        height="12"
                                        view-box="0 0 1024 1024"
                                        path="m896.8 159.024l-225.277.001V71.761c0-40.528-33.008-72.496-73.536-72.496H426.003c-40.528 0-73.52 31.968-73.52 72.496v87.264h-225.28c-17.665 0-32 14.336-32 32s14.335 32 32 32h44.015l74.24 739.92c3.104 34.624 32.608 61.776 67.136 61.776h398.8c34.528 0 64-27.152 67.088-61.472l74.303-740.24h44.016c17.68 0 32-14.336 32-32s-14.32-31.985-32-31.985zM416.482 71.762c0-5.232 4.271-9.505 9.52-9.505h171.984c5.248 0 9.536 4.273 9.536 9.505v87.264h-191.04zm298.288 885.44c-.16 1.777-2.256 3.536-3.376 3.536h-398.8c-1.12 0-3.232-1.744-3.425-3.84l-73.632-733.856H788.45z"
                                    />
                                </x-tables.cells.body>
                            </tr>
                        @endforeach
                    </x-tables.body>
                </x-tables.base>
            </x-card.body>
        </x-card>

        <x-card additional-classes="w-1/3 m-2">
            <x-card.sm-title title="Add Feature"/>

            <x-card.body>
                <form wire:submit="submitFeature">
                    @csrf
                    <div class="grid grid-cols-2 gap-5">

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Name
                            </label>
                            <input
                                wire:model="feature_form.name"
                                type="text"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />
                        </div>

                        <div>
                            <div x-data="{ switcherToggle2: @entangle('feature_form.is_active') }">
                                <label
                                    for="toggle2"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="feature_form.is_active"
                                            type="checkbox"
                                            id="toggle2"
                                            class="sr-only"
                                        />
                                        <div
                                            class="block h-6 w-11 rounded-full"
                                            :class="switcherToggle2 ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'"
                                        ></div>
                                        <div
                                            :class="switcherToggle2 ? 'translate-x-full': 'translate-x-0'"
                                            class="shadow-theme-sm absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white duration-300 ease-linear"
                                        ></div>
                                    </div>
                                    Is Active
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-button
                            text="Submit"
                            additional-class="mt-3"
                        >
                            <svg
                                wire:loading
                                wire:target="submitFeature"
                                class="fill-current animate-spin"
                                width="12"
                                height="12"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.384 0-9.75 4.366-9.75 9.75s4.366 9.75 9.75 9.75v-2.438A7.312 7.312 0 1 1 19.313 12h2.437c0-5.384-4.366-9.75-9.75-9.75Z"
                                    fill=""
                                />
                            </svg>
                        </x-button>
                    </div>
                </form>
            </x-card.body>
        </x-card>
    </div>

    <div class="flex items-start mt-5">
        <x-card additional-classes="w-2/3 m-2">
            <x-card.sm-title title="Images"/>

            <x-card.body>
                <x-tables.base>
                    <x-tables.header>
                        <x-tables.cells.header title="No"/>
                        <x-tables.cells.header title="Name"/>
                        <x-tables.cells.header title="Is Active"/>
                        <x-tables.cells.header title="Action"/>
                    </x-tables.header>

                    <x-tables.body>
                        @foreach($property->images as $image)
                            <tr wire:key="property-image-{{$image->id}}">
                                <x-tables.cells.body :data="$loop->iteration"/>
                                <x-tables.cells.body :data="$image->name"/>
                                <x-tables.cells.body-with-variant
                                    :variant="$image->is_active ? 'success' : 'danger'"
                                    :data="$image->is_active ? 'active' : 'inactive'"
                                />
                                <x-tables.cells.body>
                                    <x-button
                                        wire:click="toggleImageStatus({{$image}})"
                                        with_icon="true"
                                        width="12"
                                        height="12"
                                        view-box="0 0 472 384"
                                        path="M235 32q79 0 142.5 44.5T469 192q-28 71-91.5 115.5T235 352T92 307.5T0 192q28-71 92-115.5T235 32zm0 267q44 0 75-31.5t31-75.5t-31-75.5T235 85t-75.5 31.5T128 192t31.5 75.5T235 299zm-.5-171q26.5 0 45.5 18.5t19 45.5t-19 45.5t-45.5 18.5t-45-18.5T171 192t18.5-45.5t45-18.5z"
                                    />

                                    <x-button
                                        wire:click="deleteImage({{$image}})"
                                        wire:confirm="Are you sure want to delete this image?"
                                        with_icon="true"
                                        variant="danger"
                                        width="12"
                                        height="12"
                                        view-box="0 0 1024 1024"
                                        path="m896.8 159.024l-225.277.001V71.761c0-40.528-33.008-72.496-73.536-72.496H426.003c-40.528 0-73.52 31.968-73.52 72.496v87.264h-225.28c-17.665 0-32 14.336-32 32s14.335 32 32 32h44.015l74.24 739.92c3.104 34.624 32.608 61.776 67.136 61.776h398.8c34.528 0 64-27.152 67.088-61.472l74.303-740.24h44.016c17.68 0 32-14.336 32-32s-14.32-31.985-32-31.985zM416.482 71.762c0-5.232 4.271-9.505 9.52-9.505h171.984c5.248 0 9.536 4.273 9.536 9.505v87.264h-191.04zm298.288 885.44c-.16 1.777-2.256 3.536-3.376 3.536h-398.8c-1.12 0-3.232-1.744-3.425-3.84l-73.632-733.856H788.45z"
                                    />
                                </x-tables.cells.body>
                            </tr>
                        @endforeach
                    </x-tables.body>
                </x-tables.base>
            </x-card.body>
        </x-card>

        <x-card additional-classes="w-1/3 m-2">
            <x-card.sm-title title="Add Images"/>

            <x-card.body>
                <form wire:submit="submitImages">
                    @csrf

                    <livewire:dropzone
                        wire:model="image_form.images"
                        :rules="['image','mimes:png,jpeg','max:10420']"
                        :multiple="true"/>

                    @error('image_form.images')
                    <p class="text-red-500 italic text-sm">{{ $message }}</p>
                    @enderror

                    <div class="flex justify-end">
                        <x-button
                            text="Submit"
                            additional-class="mt-3"
                        >
                            <svg
                                wire:loading
                                wire:target="submitImages"
                                class="fill-current animate-spin"
                                width="12"
                                height="12"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.384 0-9.75 4.366-9.75 9.75s4.366 9.75 9.75 9.75v-2.438A7.312 7.312 0 1 1 19.313 12h2.437c0-5.384-4.366-9.75-9.75-9.75Z"
                                    fill=""
                                />
                            </svg>
                        </x-button>
                    </div>
                </form>
            </x-card.body>
        </x-card>
    </div>
</x-main>
