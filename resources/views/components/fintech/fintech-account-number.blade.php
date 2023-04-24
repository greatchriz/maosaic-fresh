@props(['image', 'title', 'content'])
<div class="col-span-full sm:col-span-6 xl:col-span-3 bg-white shadow-lg rounded-lg border border-slate-200">
    <div class="flex flex-col h-full">
        <!-- Card top -->
        <div class="grow p-5">
            <!-- Menu button -->
            {{-- <div class="relative">
                <div class="absolute top-0 right-0 inline-flex" x-data="{ open: false }">
                    <button
                        class="text-slate-400 hover:text-slate-500 rounded-full"
                        :class="{ 'bg-slate-100 text-slate-500': open }"
                        aria-haspopup="true"
                        @click.prevent="open = !open"
                        :aria-expanded="open"
                    >
                        <span class="sr-only">Menu</span>
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                            <circle cx="16" cy="16" r="2" />
                            <circle cx="10" cy="16" r="2" />
                            <circle cx="22" cy="16" r="2" />
                        </svg>
                    </button>
                    <div
                        class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                        @click.outside="open = false"
                        @keydown.escape.window="open = false"
                        x-show="open"
                        x-transition:enter="transition ease-out duration-200 transform"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-out duration-200"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        x-cloak
                    >
                        <ul>
                            <li>
                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                            </li>
                            <li>
                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                            </li>
                            <li>
                                <a class="font-medium text-sm text-rose-500 hover:text-rose-600 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <!-- Image + name -->
            <header>
                <div class="flex justify-center mb-3">
                    <a class="relative inline-flex items-start" href="#0">
                        <div class="absolute top-0 right-0 -mr-2 bg-white rounded-full shadow" aria-hidden="true">
                            <svg class="w-8 h-8 fill-current text-amber-500" viewBox="0 0 32 32">
                                <path d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                            </svg>
                        </div>
                        <img class="rounded-full" src="{{ $image }}" width="64" height="64" alt="" />
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a class="inline-flex text-slate-800 hover:text-slate-900" href="#0">
                        <h2 class="text-xl leading-snug justify-center font-semibold">{{ $title }}</h2>
                    </a>
                </div>
                <div class="flex justify-center items-center mb-3"> <span>{{ $content }}</span></div>
            </header>

        </div>

    </div>
</div>
