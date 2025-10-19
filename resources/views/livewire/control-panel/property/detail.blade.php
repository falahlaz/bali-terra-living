<x-main :page="$page">
    <x-card>
        <x-card.sm-title :title="$page"/>

        <x-card.body>
            <div
                class="bg-white space-y-6 p-5 sm:p-6"
            >
                <form wire:submit="update">
                    @csrf

                    <div class="grid grid-cols-3 gap-5 mb-5">
                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Category
                            </label>
                            <div
                                x-data="{ categoryIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="property_form.property_category_id"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="categoryIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="categoryIsOptionSelected = true"
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
                                Location
                            </label>
                            <div
                                x-data="{ locationIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="property_form.location_id"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="locationIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="locationIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    @foreach($locations as $location)
                                        <option
                                            wire:key="location-{{$location->id}}"
                                            value="{{ $location->id }}"
                                            class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                        >
                                            {{ $location->name }}
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
                            @error('property_form.location_id')
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
                    </div>

                    <div class="grid grid-cols-3 gap-5 mb-5">
                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Price
                            </label>
                            <input
                                wire:model="property_form.price"
                                type="number"
                                step="0.01"
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
                                Currency
                            </label>
                            <div
                                x-data="{ currencyIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="property_form.currency"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="currencyIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="currencyIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    <option
                                        value="IDR"
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        IDR
                                    </option>

                                    <option
                                        value="USD"
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        USD
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
                            @error('property_form.currency')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div x-data="{ negotiableSwitcherToggle: @entangle('property_form.price_negotiable') }">
                                <label
                                    for="negotiable"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="property_form.price_negotiable"
                                            type="checkbox"
                                            id="negotiable"
                                            class="sr-only"
                                        />
                                        <div
                                            class="block h-6 w-11 rounded-full"
                                            :class="negotiableSwitcherToggle ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'"
                                        ></div>
                                        <div
                                            :class="negotiableSwitcherToggle ? 'translate-x-full': 'translate-x-0'"
                                            class="shadow-theme-sm absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white duration-300 ease-linear"
                                        ></div>
                                    </div>

                                    Negotiable
                                </label>
                            </div>

                            @error('property_form.price_negotiable')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-5 mb-5">
                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Surface Area
                            </label>
                            <input
                                wire:model="property_form.surface_area"
                                type="number"
                                step="0.01"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.surface_area')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Building Area
                            </label>
                            <input
                                wire:model="property_form.building_area"
                                type="number"
                                step="0.01"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.building_area')
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
                                x-data="{ uomIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="property_form.uom"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="uomIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="uomIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    @foreach($unit_of_measurements as $unit_of_measurement)
                                        <option
                                            wire:key="uom-{{$unit_of_measurement->value}}"
                                            value="{{ $unit_of_measurement->value }}"
                                            class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                        >
                                            {{ $unit_of_measurement->asTitle() }}
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

                            @error('property_form.uom')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-5 mb-5">
                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Number of Rooms
                            </label>
                            <input
                                wire:model="property_form.rooms"
                                type="number"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.rooms')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Number of Bathrooms
                            </label>
                            <input
                                wire:model="property_form.bathrooms"
                                type="number"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.bathrooms')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Year Built
                            </label>
                            <input
                                wire:model="property_form.year_built"
                                type="number"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('property_form.year_built')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-5 mb-5">
                        <div>
                            <label for="short_description" class="block text-earth font-medium mb-3">Short
                                Description</label>
                            <input
                                wire:model="property_form.short_description"
                                type="text"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />
                            @error('property_form.short_description') <p
                                class="text-red-500 text-sm mt-1 italic">{{$message}}</p> @enderror
                        </div>

                        <div>
                            <label for="description" class="block text-earth font-medium mb-3">Description</label>
                            <textarea wire:model="property_form.description" id="description" rows="5"
                                      class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors resize-none"
                                      placeholder="Description"></textarea>
                            @error('property_form.description') <p
                                class="text-red-500 text-sm mt-1 italic">{{$message}}</p> @enderror
                        </div>

                        <div>
                            <label for="location_detail" class="block text-earth font-medium mb-3">Location
                                Detail</label>
                            <textarea wire:model="property_form.location_detail" id="location_detail" rows="5"
                                      class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors resize-none"
                                      placeholder="Jl. Raya Ubud No. 123, Gianyar, Bali 80571"></textarea>
                            @error('property_form.location_detail') <p
                                class="text-red-500 text-sm mt-1 italic">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-5 mb-5">
                        <div>
                            <div x-data="{ featuredSwitcherToggle: @entangle('property_form.featured') }">
                                <label
                                    for="featured"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="property_form.featured"
                                            type="checkbox"
                                            id="featured"
                                            class="sr-only"
                                        />
                                        <div
                                            class="block h-6 w-11 rounded-full"
                                            :class="featuredSwitcherToggle ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'"
                                        ></div>
                                        <div
                                            :class="featuredSwitcherToggle ? 'translate-x-full': 'translate-x-0'"
                                            class="shadow-theme-sm absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white duration-300 ease-linear"
                                        ></div>
                                    </div>

                                    Featured
                                </label>
                            </div>

                            @error('property_form.featured')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div x-data="{ prioritySwitcherToggle: @entangle('property_form.priority') }">
                                <label
                                    for="priority"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="property_form.priority"
                                            type="checkbox"
                                            id="priority"
                                            class="sr-only"
                                        />
                                        <div
                                            class="block h-6 w-11 rounded-full"
                                            :class="prioritySwitcherToggle ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'"
                                        ></div>
                                        <div
                                            :class="prioritySwitcherToggle ? 'translate-x-full': 'translate-x-0'"
                                            class="shadow-theme-sm absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white duration-300 ease-linear"
                                        ></div>
                                    </div>

                                    Priority
                                </label>
                            </div>

                            @error('property_form.priority')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div x-data="{ isActiveSwitcherToggle: @entangle('property_form.is_active') }">
                                <label
                                    for="is_active"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="property_form.is_active"
                                            type="checkbox"
                                            id="is_active"
                                            class="sr-only"
                                        />
                                        <div
                                            class="block h-6 w-11 rounded-full"
                                            :class="isActiveSwitcherToggle ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'"
                                        ></div>
                                        <div
                                            :class="isActiveSwitcherToggle ? 'translate-x-full': 'translate-x-0'"
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
                            <x-button.loading target="update"/>
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
                        <x-tables.cells.header title="Category"/>
                        <x-tables.cells.header title="Action"/>
                    </x-tables.header>

                    <x-tables.body>
                        @foreach($property->features as $feature)
                            <tr wire:key="property-feature-{{$feature->id}}">
                                <x-tables.cells.body :data="$loop->iteration"/>
                                <x-tables.cells.body :data="$feature->feature->name"/>
                                <x-tables.cells.body :data="$feature->feature->category"/>
                                <x-tables.cells.body>
                                    <x-button
                                        remove_icon_loading="true"
                                        target="deleteFeature({{ $feature->id }})"
                                        wire:click="deleteFeature({{ $feature->id }})"
                                        wire:confirm="Are you sure want to delete this feature?"
                                        with_icon="true"
                                        variant="danger"
                                        width="12"
                                        height="12"
                                        view-box="0 0 1024 1024"
                                        path="m896.8 159.024l-225.277.001V71.761c0-40.528-33.008-72.496-73.536-72.496H426.003c-40.528 0-73.52 31.968-73.52 72.496v87.264h-225.28c-17.665 0-32 14.336-32 32s14.335 32 32 32h44.015l74.24 739.92c3.104 34.624 32.608 61.776 67.136 61.776h398.8c34.528 0 64-27.152 67.088-61.472l74.303-740.24h44.016c17.68 0 32-14.336 32-32s-14.32-31.985-32-31.985zM416.482 71.762c0-5.232 4.271-9.505 9.52-9.505h171.984c5.248 0 9.536 4.273 9.536 9.505v87.264h-191.04zm298.288 885.44c-.16 1.777-2.256 3.536-3.376 3.536h-398.8c-1.12 0-3.232-1.744-3.425-3.84l-73.632-733.856H788.45z"
                                    >
                                        <x-button.loading target="deleteFeature({{ $feature->id }})"/>
                                    </x-button>
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
                    <div>
                        <label
                            class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                        >
                            Feature
                        </label>
                        <div
                            x-data="{ featureIsOptionSelected: false }"
                            class="relative z-20 bg-transparent"
                        >
                            <select
                                wire:model="feature_form.feature_id"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                :class="featureIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                @change="featureIsOptionSelected = true"
                            >
                                <option
                                    value=""
                                    class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                >
                                    Select Option
                                </option>

                                @foreach($features as $feature)
                                    <option
                                        wire:key="option-feature-{{$feature->id}}"
                                        value="{{ $feature->id }}"
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        {{ $feature->name }}
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
                        @error('feature_form.feature_id')
                        <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <x-button
                            text="Submit"
                            additional-class="mt-3"
                        >
                            <x-button.loading target="submitFeature"/>
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
                                <x-tables.cells.body>
                                    {{ $image->name }} @if($image->is_primary)
                                        <p class="text-red-500">*</p>
                                    @endif
                                </x-tables.cells.body>
                                <x-tables.cells.body-with-variant
                                    :variant="$image->is_active ? 'success' : 'danger'"
                                    :data="$image->is_active ? 'active' : 'inactive'"
                                />
                                <x-tables.cells.body>
                                    <x-button
                                        remove_icon_loading="true"
                                        target="toggleImageStatus({{ $image->id }})"
                                        wire:click="toggleImageStatus({{  $image->id }})"
                                        with_icon="true"
                                        width="12"
                                        height="12"
                                        :view-box="$image->is_active ? '0 0 32 32' : '0 0 1024 1024'"
                                        :variant="$image->is_active ? 'danger' : 'primary'"
                                        :path="$image->is_active ? 'M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5zm-3.78 5.78l-1.44 1.44L14.564 16l-3.782 3.78l1.44 1.44L16 17.437l3.78 3.78l1.44-1.437L17.437 16l3.78-3.78l-1.437-1.44L16 14.564l-3.78-3.782z' : 'M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0zm0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01zm204.336-636.352L415.935 626.944l-135.28-135.28c-12.496-12.496-32.752-12.496-45.264 0c-12.496 12.496-12.496 32.752 0 45.248l158.384 158.4c12.496 12.48 32.752 12.48 45.264 0c1.44-1.44 2.673-3.009 3.793-4.64l318.784-320.753c12.48-12.496 12.48-32.752 0-45.263c-12.512-12.496-32.768-12.496-45.28 0z'"
                                    >
                                        <x-button.loading target="toggleImageStatus({{$image->id}})"/>
                                    </x-button>

                                    <x-button
                                        remove_icon_loading="true"
                                        target="deleteImage({{ $image->id }})"
                                        wire:click="deleteImage({{ $image->id }})"
                                        wire:confirm="Are you sure want to delete this image?"
                                        with_icon="true"
                                        variant="danger"
                                        width="12"
                                        height="12"
                                        view-box="0 0 1024 1024"
                                        path="m896.8 159.024l-225.277.001V71.761c0-40.528-33.008-72.496-73.536-72.496H426.003c-40.528 0-73.52 31.968-73.52 72.496v87.264h-225.28c-17.665 0-32 14.336-32 32s14.335 32 32 32h44.015l74.24 739.92c3.104 34.624 32.608 61.776 67.136 61.776h398.8c34.528 0 64-27.152 67.088-61.472l74.303-740.24h44.016c17.68 0 32-14.336 32-32s-14.32-31.985-32-31.985zM416.482 71.762c0-5.232 4.271-9.505 9.52-9.505h171.984c5.248 0 9.536 4.273 9.536 9.505v87.264h-191.04zm298.288 885.44c-.16 1.777-2.256 3.536-3.376 3.536h-398.8c-1.12 0-3.232-1.744-3.425-3.84l-73.632-733.856H788.45z"
                                    >
                                        <x-button.loading target="deleteImage({{$image->id}})"/>
                                    </x-button>


                                    @if(!$image->is_primary)
                                        <x-button
                                            remove_icon_loading="true"
                                            target="togglePrimary({{ $image->id }})"
                                            wire:click="togglePrimary({{  $image->id }})"
                                            wire:confirm="Are you sure you want to make this image as primary?"
                                            with_icon="true"
                                            width="12"
                                            height="12"
                                            view-box="0 0 32 32"
                                            variant="secondary"
                                            path="M15.546 4.984a.5.5 0 0 1 .908 0l3.097 6.714a.5.5 0 0 0 .395.287l7.341.87a.5.5 0 0 1 .28.864l-5.427 5.02a.5.5 0 0 0-.15.464l1.44 7.251a.5.5 0 0 1-.735.534l-6.45-3.611a.5.5 0 0 0-.49 0l-6.45 3.61a.5.5 0 0 1-.735-.533l1.44-7.251a.5.5 0 0 0-.15-.465l-5.428-5.02a.5.5 0 0 1 .28-.863l7.342-.87a.5.5 0 0 0 .396-.287l3.096-6.714Z"
                                        >
                                            <x-button.loading target="togglePrimary({{ $image->id }})"/>
                                        </x-button>
                                    @endif
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
                            <x-button.loading target="submitImages"/>
                        </x-button>
                    </div>
                </form>
            </x-card.body>
        </x-card>
    </div>
</x-main>
