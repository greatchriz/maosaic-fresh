<div class="col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
    <div class="flex flex-col h-full">
        <!-- Card top -->
        <div class="grow p-5">
            <div class="flex justify-between items-start">
                <!-- Image + name -->
                <header>
                    <div class="flex mb-2">
                        <a class="relative inline-flex items-start mr-5" href="#0">

                            @if(!empty($member->profile_photo_url))
                                <img class="w-8 h-8 rounded-full" src="/storage/{{ $member->profile_photo_path }}" width="64" height="64"
                                alt="{{ $member->name }}" />

                            @else
                            <img class="w-8 h-8 rounded-full"  src="{{ asset('images/person.jpg') }}" width="64" height="64" alt="User" />
                            @endif
                        </a>
                        <div class="mt-1 pr-1">
                            <a class="inline-flex text-slate-800 hover:text-slate-900" href="#0">
                                <h2 class="text-xl leading-snug justify-center font-semibold">{{ $member->name }}</h2>
                            </a>
                            {{-- <div class="flex items-center"><span class="text-sm font-medium text-slate-400 -mt-0.5 mr-1">-&gt;</span> <span>{{ $member->location }}</span></div> --}}
                        </div>
                    </div>
                </header>
                <!-- Menu button -->
                <div class="relative inline-flex shrink-0" x-data="{ open: false }">
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
            </div>
            <!-- Bio -->

            <form action="users/{{ $member->id }}/balance" method="POST">
                @method('PUT')
                @csrf

                <div class="mt-2 flex">
                    <div class="">
                        <label class=" text-sm font-medium mb-1" for="default">Account Balance</label>
                        <input id="default" name="account_balance" class="form-input " type="text" value="{{ $member->account_balance }}" />

                    </div>
                    <!-- Start -->
                    <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white" type="submit">
                        <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="ml-2">Funds</span>
                    </button>
                    <!-- End -->
                </div>
            </form>

        </div>
        <!-- Card footer -->
        <div class="border-t border-slate-200">
            <div class="flex divide-x divide-slate-200r">
                <a class="block flex-1 text-center text-sm text-indigo-500 hover:text-indigo-600 font-medium px-3 py-4" href="/users/{{ $member->id }}/sendmail">
                    <div class="flex items-center justify-center">
                        <svg class="w-4 h-4 fill-current shrink-0 mr-2" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z" />
                        </svg>
                        <span>Send Email</span>
                    </div>
                </a>
                <a class="block flex-1 text-center text-sm text-slate-600 hover:text-slate-800 font-medium px-3 py-4 group" href="/users/{{ $member->id }}">
                    <div class="flex items-center justify-center">
                        <svg class="w-4 h-4 fill-current text-slate-400 group-hover:text-slate-500 shrink-0 mr-2" viewBox="0 0 16 16">
                            <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z" />
                        </svg>
                        <span>Edit Profile</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
