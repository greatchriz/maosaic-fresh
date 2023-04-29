<x-app-layout background="bg-white">

    <x-modal-w-scroll-bar />




    <div class="p-3 sm:px-6 lg:px-8 py-3 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-2 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Your Card ✨</h1>
            </div>

        </div>

    </div>
    <div class="p-4 lg:px-8">
        <div class="max-w-sm mx-auto lg:max-w-none">

            <div class="text-slate-800 font-bold text-center mb-1">USDT (TRC 20)</div>
            <div class="text-xs text-center italic font-semibold">TUWKyCf9uFvs2dAJF8L7UkD3w5u6SVrwdy</div>

            <!-- Details -->
            <div class="drop-shadow-lg mt-12">
                <!-- Top -->
                <div class="bg-white rounded-t-xl px-5 pb-2.5 text-center">
                    <div class="mb-3 text-center">
                        <img
                            class="inline-flex w-12 h-12 rounded-full -mt-6"
                            src="{{ asset('images/tether.png') }}"
                            width="48"
                            height="48"
                            alt="Transaction 04"
                        />
                    </div>
                    <div class="text-2xl font-semibold text-emerald-500 mb-1">$3,000.00</div>
                    <div class="text-sm font-medium text-slate-800 mb-3">Credit Card Charge</div>
                    <div
                        class="text-xs inline-flex font-medium bg-slate-100 text-slate-500 rounded-full text-center px-2.5 py-1">
                        Pending</div>
                </div>
                <!-- Divider -->
                <div
                    class="flex justify-between items-center"
                    aria-hidden="true"
                >
                    <svg
                        class="w-5 h-5 fill-white"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M0 20c5.523 0 10-4.477 10-10S5.523 0 0 0h20v20H0Z" />
                    </svg>
                    <div class="grow w-full h-5 bg-white flex flex-col justify-center">
                        <div class="h-px w-full border-t border-dashed border-slate-200"></div>
                    </div>
                    <svg
                        class="w-5 h-5 fill-white rotate-180"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M0 20c5.523 0 10-4.477 10-10S5.523 0 0 0h20v20H0Z" />
                    </svg>
                </div>
                <!-- Bottom -->
                <div class="bg-white rounded-b-xl p-5 pt-2.5 text-sm space-y-3">
                    <div class="flex justify-between space-x-1">
                        <span class="italic">Address:</span>
                        <span class="font-medium text-slate-700 text-right">{{ $card->address }}</span>
                    </div>
                    <div class="flex justify-between space-x-1">
                        <span class="italic">Card Type:</span>
                        {{-- capitalize first character of a string --}}
                        <span class="font-medium text-slate-700 text-right">{{ ucfirst($card->type) }}</span>
                    </div>
                    <div class="flex justify-between space-x-1">
                        <span class="italic">Name:</span>
                        <span class="font-medium text-slate-700 text-right">{{ ucfirst($card->name) }}</span>
                    </div>

                </div>
            </div>

            <!-- Receipts -->
            <div class="mt-6">
                <div class="text-sm font-semibold text-slate-800 mb-2">Deposit Proof</div>
                {{-- create a div that will hold deposit_proof image --}}

                @if($card->deposit_proof)
                    <div class="flex justify-center p-3 border mb-2">
                        <img
                            class="inline-flex w-40 rounded-lg mt-6"
                            src="/images/deposit_proof/{{ $card->deposit_proof }}"
                            width="48"
                            height="48"
                            alt="Transaction 04"
                        />
                    </div>
                @endif
                {{-- create a div that will hold deposit_proof image --}}

                <!-- create a form that handles image upload -->

                <form
                    class="rounded bg-slate-100 border border-dashed border-slate-300 text-center px-5 py-8"
                    method="POST"
                    action="/deposit-proof-upload/{{ $card->id }}"
                    enctype="multipart/form-data"
                >

                    @csrf

                    <svg
                        class="inline-flex w-4 h-4 fill-slate-400 mb-3"
                        viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M8 4c-.3 0-.5.1-.7.3L1.6 10 3 11.4l4-4V16h2V7.4l4 4 1.4-1.4-5.7-5.7C8.5 4.1 8.3 4 8 4ZM1 2h14V0H1v2Z"
                        />
                    </svg>
                    {{-- create a file form element to upload deposit_proof image also create the error div and label --}}
                    <div class="mt-1">
                        <input
                            type="file"
                            name="deposit_proof"
                            class="block w-full bg-white border border-gray-300 rounded-md py-2 px-3 text-sm placeholder-gray-500 focus:outline-none focus:ring-emerald-500 focus:border-emerald-500"
                            placeholder="Upload Deposit Proof"
                        />
                        @error('deposit_proof')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>



                    <div class="mt-4">
                        <button
                            type="submit"
                            class="btn w-full bg-emerald-500 hover:bg-emerald-600 text-white"
                        >Upload</button>
                    </div>
                </form>
            </div>

            <!-- Download / Report -->
            <div class="flex items-center space-x-3 mt-6">
                <div class="w-1/2">
                    <button class="btn w-full border-slate-200 hover:border-slate-300 text-slate-600">
                        <svg
                            class="w-4 h-4 fill-current text-slate-400 shrink-0 rotate-180"
                            viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M8 4c-.3 0-.5.1-.7.3L1.6 10 3 11.4l4-4V16h2V7.4l4 4 1.4-1.4-5.7-5.7C8.5 4.1 8.3 4 8 4ZM1 2h14V0H1v2Z"
                            />
                        </svg>
                        <span class="ml-2">Complete</span>
                    </button>
                </div>
                <div class="w-1/2">
                    <button class="btn w-full border-slate-200 hover:border-slate-300 text-rose-500">
                        <svg
                            class="w-4 h-4 fill-current shrink-0"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M7.001 3h2v4h-2V3Zm1 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM15 16a1 1 0 0 1-.6-.2L10.667 13H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1ZM2 11h9a1 1 0 0 1 .6.2L14 13V2H2v9Z"
                            />
                        </svg>
                        <span class="ml-2">Cancel</span>
                    </button>
                </div>
            </div>

        </div>
    </div>


</x-app-layout>
