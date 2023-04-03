<x-app-layout background="bg-white">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <x-page-header header="Deposit" />



        <div class="border-t border-slate-200">

            <!-- Components -->
            <div class="space-y-8 mt-8">



                <!-- Input States -->
                <div>
                    <h2 class="text-2xl text-slate-800 font-bold mb-6">Input States</h2>
                    <form action="make-deposit" method="post">
                        @csrf
                        <div class="grid gap-5 md:grid-cols-3">
                        @isset($loggedUser->cards)
                            @foreach ($loggedUser->cards as $card)
                                <x-card :card="$card"/>
                            @endforeach
                            @error('card_id')
                            <div class="text-xs mt-1 text-rose-500">{{ $message }}</div>
                            @enderror
                        @endisset




                        <!-- Add card button -->
                        <a href="{{ route('pay') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                            <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            <span class="xs:block ml-2">Add Card</span>
                        </a>

                        <div>
                            <label class="block text-sm font-medium mb-1" for="prefix">Amount</label>
                            <div class="relative">
                                <input id="prefix" class="form-input w-full pl-12" type="text" name="amount" />
                                <div class="absolute inset-0 right-auto flex items-center pointer-events-none">
                                    <span class="text-sm text-slate-400 font-medium px-3">$</span>
                                </div>
                            </div>
                            @error('amount')
                            <div class="text-xs mt-1 text-rose-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="m-1.5 text-right">
                            <!-- Start -->
                            <button class="btn border-slate-200 hover:border-slate-300 text-slate-600 bg-blue-700" type="submit">
                                <svg class="w-4 h-4 fill-current text-slate-200 shrink-0" viewBox="0 0 16 16">
                                    <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z" />
                                </svg>
                                <span class="ml-2 text-slate-200">Add Funds</span>
                            </button>
                            <!-- End -->
                        </div>


                        </div>
                    </form>

                </div>



            </div>

        </div>

    </div>
</x-app-layout>
