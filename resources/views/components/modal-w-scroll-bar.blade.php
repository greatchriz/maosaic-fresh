<!-- Modal w/ Scroll Bar -->
<div class="m-1.5">
    <!-- Start -->
    <div x-data="{ modalOpen: true }">
        {{-- <button
            class="btn bg-indigo-500 hover:bg-indigo-600 text-white"
            @click.prevent="modalOpen = true"
            aria-controls="scrollbar-modal"
        >Modal w/ Scroll Bar</button> --}}
        <!-- Modal backdrop -->
        <div
            class="fixed inset-0 bg-slate-900 bg-opacity-30 z-50 transition-opacity"
            x-show="modalOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-out duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            aria-hidden="true"
            x-cloak
        ></div>
        <!-- Modal dialog -->
        <div
            id="scrollbar-modal"
            class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
            role="dialog"
            aria-modal="true"
            x-show="modalOpen"
            x-transition:enter="transition ease-in-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in-out duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4"
            x-cloak
        >
            <div
                class="bg-white rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-[400px]"
                @click.outside="modalOpen = false"
                @keydown.escape.window="modalOpen = false"
            >
                <!-- Modal header -->
                <div class="sticky top-0 px-5 py-3 bg-white border-b border-slate-200">
                    <div class="flex justify-between items-center">
                        <div class="font-semibold text-slate-800 ">Withdrawal Instruction</div>
                        <button
                            class="text-slate-400 hover:text-slate-500"
                            @click="modalOpen = false"
                        >
                            <div class="sr-only">Close</div>
                            <svg class="w-4 h-4 fill-current">
                                <path
                                    d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Modal content -->
                <div class="px-5 py-4">
                    <div class="text-sm">
                        <div class="space-y-2">
                            <p>To withdraw from your account you need to apply for the Mastercard to able you make any transactons.
                                The Mastercard charge cost is $3000 and the payment can be done Using USTD Trc20
                                </p>
                            <p>Once that's done you can get your virtual Mastercard and create your own pin and can complete your transactons duly.
                                In other cases due to customers demand for easy transactions and less stress because of distance we added crypto bank USDT to the payment method.
                                We assure you Good and less stressful transactions, follow the procedures below:
                                Copy your Crypto bank USDT Trc20 wallet address and make the card purchase deposit it will automatically show on your card view.</p>
                            <p>Buy USDT from platforms like
                                Crypto.com and deposit in our crypto bank address given BELOW , then submit a screenshot of deposit here. Once we confirm that, the MasterCard activation will be automatically and the pin activation link will be send to your email and from there you set up your MasterCard and get your pin .
                                The company is not here to bargain with you. Is against the policy so follow the instructions we have given. The pin can be used for specific transactions once your MasterCard is active.
                                The MasterCard fee is $3000 and is paid to your crypto bank USDT address. Then submit a screenshot here .
                                Copy your Crypto bank input deposit address On your account dashboard .</p>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="sticky bottom-0 px-5 py-4 bg-white border-t border-slate-200">
                    <div class="flex flex-wrap justify-end space-x-2">
                        <button
                            class="btn-sm border-slate-200 hover:border-slate-300 text-white bg-emerald-600"
                            @click="modalOpen = false"
                        >Proceed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</div>
