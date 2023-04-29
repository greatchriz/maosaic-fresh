<x-app-layout background="bg-white">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Request a card ✨</h1>
            </div>

            @if($loggedUser->hasCard())
                <!-- Right: Actions -->
                <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-1">

                    <!-- Add board button -->
                    <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        <svg
                            class="w-4 h-4 fill-current opacity-50 shrink-0"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"
                            />
                        </svg>
                        <span class="ml-1">View cards</span>
                    </button>

                </div>

            @endif


        </div>

        <div class="border-t border-slate-200">
            <div class="max-w-2xl m-auto mt-16 bg-slate-100 p-4 rounded-lg shadow-lg">

                {{-- card request form --}}
                <form action="{{ route('cards.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <div class="mt-1">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ $user->name }}"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                placeholder="Enter your name"
                            />
                        </div>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">
                            Phone Number
                        </label>
                        <div class="mt-1">
                            <input
                                type="text"
                                name="phone_number"
                                id="phone_number"
                                value="{{ old('phone_number') }}"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                placeholder="Enter your phone number"
                            />
                        </div>
                        @error('phone_number')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">
                            Address
                        </label>
                        <div class="mt-1">
                            <input
                                type="text"
                                name="address"
                                id="address"
                                value="{{ old('address') }}"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                placeholder="Enter your address"
                            />
                        </div>
                        @error('address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- create a select input for the card type --}}
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700">
                            Card Type
                        </label>
                        <div class="mt-1">
                            <select
                                name="type"
                                id="type"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            >
                                <option value="">Select a card type</option>
                                <option value="visa">Visa</option>
                                <option value="mastercard">Mastercard</option>
                                <option value="verve">Verve</option>
                            </select>
                        </div>
                        @error('type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- import add button component here and make the button to be on the left--}}
                    <div class="flex justify-end">
                        <x-buttons.add-button>
                            Request
                        </x-buttons.add-button>
                    </div>


                </form>

            </div>
        </div>

    </div>
</x-app-layout>
