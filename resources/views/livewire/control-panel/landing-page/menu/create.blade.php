<x-main :page="$page">
    <x-card>
        <x-card.sm-title :title="$page"/>

        <x-card.body>
            <div
                class="bg-white space-y-6 p-5 sm:p-6"
            >
                <form wire:submit="store">
                    @csrf

                    <div class="grid grid-cols-3 gap-5 mb-5">
                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Menu Location
                            </label>
                            <div
                                x-data="{ menuLocationIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="form.menu_location"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="menuLocationIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="menuLocationIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    @foreach($menu_locations as $menu_location)
                                        <option
                                            wire:key="menu-location-{{$menu_location->value}}"
                                            value="{{ $menu_location->value }}"
                                            class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                        >
                                            {{ $menu_location->asTitle() }}
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
                            @error('form.menu_location')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Parent
                            </label>
                            <div
                                x-data="{ parentIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="form.parent_id"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="parentIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="parentIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    @foreach($menus as $menu)
                                        <option
                                            wire:key="menu-{{$menu->id}}"
                                            value="{{ $menu->id }}"
                                            class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                        >
                                            {{ $menu->label }}
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
                            @error('form.parent_id')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Menu Target
                            </label>
                            <div
                                x-data="{ menuTargetIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="form.target"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="menuTargetIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="menuTargetIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    @foreach($menu_targets as $menu_target)
                                        <option
                                            wire:key="target-{{$menu_target->value}}"
                                            value="{{ $menu_target->value }}"
                                            class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                        >
                                            {{ $menu_target->asTitle() }}
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
                            @error('form.target')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Label
                            </label>
                            <input
                                wire:model="form.label"
                                type="text"
                                step="0.01"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('form.label')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                URL
                            </label>
                            <input
                                wire:model="form.url"
                                type="text"
                                step="0.01"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('form.url')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Icon
                            </label>
                            <input
                                wire:model="form.icon"
                                type="text"
                                step="0.01"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('form.icon')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Display Order
                            </label>
                            <input
                                wire:model="form.display_order"
                                type="number"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('form.display_order')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div x-data="{ isActiveSwitcherToggle: false }">
                                <label
                                    for="is_active"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="form.is_active"
                                            type="checkbox"
                                            id="is_active"
                                            class="sr-only"
                                            @change="isActiveSwitcherToggle = !isActiveSwitcherToggle"
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

                            @error('form.is_active')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="flex justify-end">
                        <x-button
                            text="Submit"
                            additional-class="mr-2"
                        >
                            <x-button.loading target="store"/>
                        </x-button>

                        <x-button
                            :href="route('cp.menus.index')"
                            variant="danger"
                            text="Back"
                        />
                    </div>
                </form>
            </div>
        </x-card.body>
    </x-card>
</x-main>
