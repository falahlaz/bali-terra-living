<x-main :page="$page">
    <x-card>
        <x-card.sm-title title="Landing Page Menu"/>

        <x-card.body>
            <div
                class="bg-white space-y-6 p-5 sm:p-6"
            >
                <form wire:submit="store">
                    @csrf
                    <div class="grid grid-cols-3 gap-5">
                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Title
                            </label>
                            <input
                                wire:model="form.name"
                                type="text"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Redirect
                            </label>
                            <input
                                wire:model="form.redirect"
                                type="text"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Is Active
                            </label>
                            <div x-data="{ switcherToggle: false }">
                                <label
                                    for="toggle1"
                                    class="flex cursor-pointer items-center gap-3 text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                >
                                    <div class="relative">
                                        <input
                                            wire:model="form.is_active"
                                            type="checkbox"
                                            id="toggle1"
                                            class="sr-only"
                                            @change="switcherToggle = !switcherToggle"
                                        />
                                        <div
                                            class="block h-6 w-11 rounded-full"
                                            :class="switcherToggle ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'"
                                        ></div>
                                        <div
                                            :class="switcherToggle ? 'translate-x-full': 'translate-x-0'"
                                            class="shadow-theme-sm absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white duration-300 ease-linear"
                                        ></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-button
                            text="Submit"
                            additional-class="mr-2"
                        >
                            <svg
                                wire:loading
                                wire:target="store"
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
                            :href="route('cp.landing-pages.menu.index')"
                            variant="danger"
                            text="Back"
                        />
                    </div>
                </form>
            </div>
        </x-card.body>
    </x-card>
</x-main>
