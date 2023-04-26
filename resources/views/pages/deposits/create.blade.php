<x-app-layout background="bg-white">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <x-page-header header="Deposit" />



        <div class="border-t border-slate-200">

            <!-- Components -->
            <div class="space-y-8 mt-8">

                <!-- Input States -->
                <div>
                    <h2 class="text-2xl text-slate-800 font-bold mb-6">Select a Payment Method</h2>

                    <div class="grid grid-cols-12 gap-6 mb-3">

                        @foreach ($payment_methods as $payment_method)
                            <x-deposits.card :payment_method="$payment_method" />
                        @endforeach

                    </div>


                </div>



            </div>

        </div>

    </div>
</x-app-layout>
