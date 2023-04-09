<x-app-layout background="bg-white">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <x-page-header header="Transfer" />



        <div class="border-t border-slate-200">

            <!-- Components -->
            <div class="space-y-8 mt-8">



                <!-- Input States -->
                <div>
                    <form action="/make-transfer" method="post">
                        @csrf
                        <div class="grid gap-5 md:grid-cols-3">

                            <div>
                                <!-- Start -->
                                <div>
                                    <label class="block text-sm font-medium mb-1" for="bank_name">Beneficiary Bank Name</label>
                                    <input name="bank_name" id="bank_name" class="form-input w-full" type="text" />
                                    @error('bank_name')
                                        <div class="text-xs mt-1 text-rose-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End -->
                            </div>

                            <div>
                                <!-- Start -->
                                <div>
                                    <label class="block text-sm font-medium mb-1" for="account_number">Beneficiary Account Number</label>
                                    <input name="account_number" id="account_number" class="form-input w-full" type="text" />
                                    @error('account_number')
                                        <div class="text-xs mt-1 text-rose-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End -->
                            </div>


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

                            <div>
                                <!-- Start -->
                                <div>
                                    <label class="block text-sm font-medium mb-1" for="naration">Naration</label>
                                    <input name="naration" id="naration" class="form-input w-full" type="text" />
                                </div>
                                <!-- End -->
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
