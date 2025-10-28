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
                                Client Name
                            </label>
                            <input
                                wire:model="form.client_name"
                                type="text"
                                step="0.01"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('form.client_name')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Client Title
                            </label>
                            <input
                                wire:model="form.client_title"
                                type="text"
                                step="0.01"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('form.client_title')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Client Initial
                            </label>
                            <div
                                x-data="{ clientInitialIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="form.client_initials"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="clientInitialIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="clientInitialIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    <option
                                        value="Mr."
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Mr
                                    </option>

                                    <option
                                        value="Ms."
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Ms
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
                            @error('form.client_initials')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Rating
                            </label>
                            <input
                                wire:model="form.rating"
                                type="number"
                                max="5"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('form.rating')
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
                            <label
                                for="testimonial_text"
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Testimony
                            </label>
                            <textarea wire:model="form.testimonial_text" id="testimonial_text" rows="5"
                                      class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors resize-none"
                                      placeholder="Content Value"></textarea>
                            @error('form.testimonial_text')
                            <p class="text-red-500 text-sm mt-1 italic">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                            <div x-data="{ featuredSwitcherToggle: @entangle('form.featured') }">
                                <label
                                    for="featured"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="form.featured"
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

                            @error('form.featured')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div x-data="{ isActiveSwitcherToggle: @entangle('form.is_active') }">
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
                            text="Update"
                            additional-class="mr-2"
                        >
                            <x-button.loading target="store"/>
                        </x-button>

                        <x-button
                            :href="route('cp.testimonials.index')"
                            variant="danger"
                            text="Back"
                        />
                    </div>
                </form>
            </div>
        </x-card.body>
    </x-card>
</x-main>
