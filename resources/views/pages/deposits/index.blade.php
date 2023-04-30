<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-5">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Deposits ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Search form -->
                <x-search-form placeholder="Search by Transaction ID…" />

                <!-- Create invoice button -->
                <a href="/deposit/create" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">Create Deposit</span>
                </a>

            </div>

        </div>

        <!-- More actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-5">

            <!-- Left side -->
            <div class="mb-4 sm:mb-0">
                <ul class="flex flex-wrap -m-1">
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-transparent shadow-sm bg-indigo-500 text-white duration-150 ease-in-out">All <span class="ml-1 text-indigo-200">{{ $deposits_count }}</span></button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-slate-200 hover:border-slate-300 shadow-sm bg-orange-500 text-white duration-150 ease-in-out">Pending <span class="ml-1 text-white">{{ $pending_deposits_count }}</span></button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-slate-200 hover:border-slate-300 shadow-sm bg-green-500 text-white duration-150 ease-in-out">Confirmed <span class="ml-1 text-white">{{ $confirmed_deposits_count }}</span></button>
                    </li>

                </ul>
            </div>

            <!-- Right side -->
            {{-- <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Delete button -->
                <x-actions.delete-button />

                <!-- Dropdown -->
                <x-date-select />

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

            </div> --}}

        </div>

        <!-- Table -->
        <x-deposits.deposits-table :deposits="$deposits" :count="$deposits_count" />

        <!-- Pagination -->
        <div class="mt-8">
            {{$deposits->links()}}
        </div>

    </div>
</x-app-layout>
