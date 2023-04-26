@props(['payment_method' => ''])

<div class="col-span-full sm:col-span-6 xl:col-span-3 bg-white shadow-lg rounded-lg border border-slate-200 hover:cursor-pointer">
    <div class="flex flex-col h-full">
        <!-- Card top -->
        <div class="grow p-5">

            <header>
                <div class="flex justify-center mb-3">
                    <a class="relative inline-flex items-start" href="/payment/{{ $payment_method->id }}">
                        <div class="absolute top-0 right-0 -mr-2 bg-white rounded-full shadow" aria-hidden="true">
                            <svg class="w-8 h-8 fill-current text-amber-500" viewBox="0 0 32 32">
                                <path d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                            </svg>
                        </div>
                        <img class="rounded-full" src="{{ $payment_method->image }}" width="64" height="64" alt="" />
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a class="inline-flex text-slate-800 hover:text-slate-900" href="/payment/{{ $payment_method->id }}">
                        <h2 class="text-xl leading-snug justify-center font-semibold">{{ $payment_method->name }}</h2>
                    </a>
                </div>
                {{-- check if content is available show the following div if not dont --}}


            </header>

        </div>

    </div>
</div>
