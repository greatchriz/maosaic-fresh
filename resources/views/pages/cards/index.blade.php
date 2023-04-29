<x-app-layout background="bg-white">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Your Cards ✨</h1>
            </div>

        </div>

        <div class="border-t border-slate-200">
            <div class="max-w-2xl m-auto mt-16 bg-slate-100 p-4 rounded-lg shadow-lg">
                {{-- add a div that will contain all the cards --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    {{-- loop through all the cards --}}
                    @foreach($cards as $card)
                        {{-- add a card component --}}
                        <x-credit-card :card="$card" />
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
