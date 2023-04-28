<x-app-layout background="bg-white">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <x-page-header header="Deposit" />



        <div class="border-t border-slate-200">

            <!-- Components -->
            <div class="space-y-8 mt-8">

                <!-- Input States -->
                <div>

                    <div class="grid grid-cols-12 gap-6 mb-3">

                        {{-- <x-deposits.card :payment_method="$payment_method" /> --}}

                    </div>

                    <form action="{{ route('deposit.store') }}" method="post">
                        @csrf
                        <div class="grid gap-5 md:grid-cols-3">

                            <x-deposits.crypto-currency.card />




                            <div class="m-1.5 text-right">
                                <x-buttons.add-button>Add Funds</x-buttons.add-button>

                            </div>


                        </div>
                    </form>
                    {{-- @endif --}}

                </div>



            </div>

        </div>

    </div>
</x-app-layout>
