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
                                Section
                            </label>
                            <div
                                x-data="{ sectionIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="form.page_section_id"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="sectionIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="sectionIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    @foreach($sections as $section)
                                        <option
                                            wire:key="section-{{$section->id}}"
                                            value="{{ $section->id }}"
                                            class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                        >
                                            {{ $section->page_name }}
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
                            @error('form.page_section_id')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Content Type
                            </label>
                            <div
                                x-data="{ contentTypeIsOptionSelected: false }"
                                class="relative z-20 bg-transparent"
                            >
                                <select
                                    wire:model="form.content_type"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                    :class="contentTypeIsOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="contentTypeIsOptionSelected = true"
                                >
                                    <option
                                        value=""
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                    >
                                        Select Option
                                    </option>

                                    @foreach($content_types as $content_type)
                                        <option
                                            wire:key="content-type-{{$content_type->value}}"
                                            value="{{ $content_type->value }}"
                                            class="text-gray-700 dark:bg-gray-900 dark:text-gray-400"
                                        >
                                            {{ $content_type->asTitle() }}
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
                            @error('form.content_type')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Content Key
                            </label>
                            <input
                                wire:model="form.content_key"
                                type="text"
                                step="0.01"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                            />

                            @error('form.content_key')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                            >
                                Content Value
                            </label>
                            <textarea wire:model="form.content_value" id="content_value" rows="5"
                                      class="w-full px-5 py-4 rounded-2xl border-2 border-sage/20 focus:border-sage focus:outline-none transition-colors resize-none"
                                      placeholder="Content Value"></textarea>
                            @error('form.content_value')
                            <p class="text-red-500 text-sm mt-1 italic">{{$message}}</p>
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

                    </div>

                    <div class="flex justify-end">
                        <x-button
                            text="Submit"
                            additional-class="mr-2"
                        >
                            <x-button.loading target="store"/>
                        </x-button>

                        <x-button
                            :href="route('cp.sections.index')"
                            variant="danger"
                            text="Back"
                        />
                    </div>
                </form>
            </div>
        </x-card.body>
    </x-card>
</x-main>
