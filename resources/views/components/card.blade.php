@props(['card'])
<!-- Card 1 -->
<label class="relative block cursor-pointer text-left w-full">
    <input type="radio" name="card_id" class="peer sr-only" value="{{ $card->id }}" checked />
    <div class="p-4 rounded border border-slate-200 hover:border-slate-300 shadow-sm duration-150 ease-in-out">
        <div class="grid grid-cols-12 items-center gap-x-2">
            <!-- Card -->
            <div
                class="col-span-6 order-1 sm:order-none sm:col-span-3 flex items-center space-x-4 lg:sidebar-expanded:col-span-6 xl:sidebar-expanded:col-span-3">

                @if($card->type == 'master')
                    <x-master-logo />
                @elseif($card->type == 'visa')
                    <x-visa-logo />
                @endif

                <div>
                    <div class="text-sm font-medium text-slate-800"></div>
                    <div class="text-xs">{{ Str::of($card->card_number)->mask('*', 0, -4) }}</div>
                </div>
            </div>
            <!-- Name -->
            <div
                class="col-span-6 order-2 sm:order-none sm:col-span-3 text-left sm:text-center lg:sidebar-expanded:hidden xl:sidebar-expanded:block">
                <div class="text-sm font-medium text-slate-800 truncate">{{ $card->user->name }}</div>
            </div>
            <!-- Card limits -->
            <div
                class="col-span-6 order-1 sm:order-none sm:col-span-4 text-right sm:text-center lg:sidebar-expanded:col-span-6 xl:sidebar-expanded:col-span-4">
                <div class="text-sm">$780,00 / $20,000</div>
            </div>
            <!-- Card status -->
            <div
                class="col-span-6 order-2 sm:order-none sm:col-span-2 text-right lg:sidebar-expanded:hidden xl:sidebar-expanded:block">
                <div
                    class="text-xs inline-flex font-medium bg-emerald-100 text-emerald-600 rounded-full text-center px-2.5 py-1">
                    Active</div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 border-2 border-transparent peer-checked:border-indigo-400 rounded pointer-events-none"
        aria-hidden="true"></div>
</label>
