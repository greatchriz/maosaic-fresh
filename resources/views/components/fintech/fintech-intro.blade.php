<div class="flex flex-col col-span-full bg-white shadow-lg rounded-lg border border-slate-200">
    <div class="px-5 py-6">

        <div class="md:flex md:justify-between md:items-center">
            <!-- Left side -->
            <div class="flex items-center mb-4 md:mb-0">
                <!-- Avatar -->
                <div class="mr-4">
                    <img class="inline-flex rounded-full" src="{{ asset('images/user-64-14.jpg') }}" width="64" height="64" alt="User" />
                </div>
                <!-- User info -->
                <div class="">
                    <div class="mb-2">Hey <strong class="font-medium text-slate-800">{{ $loggedUser->name }}</strong> 👋, this is your current balance:</div>
                    <div class="text-3xl font-bold text-emerald-500">${{ $loggedUser->account_balance }}.00</div>

                    <a href="/users/{{ $loggedUser->id }}/withdraw" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        {{-- <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"/>
                        </svg> --}}
                        <svg class="w-6 h-6 fill-current  shrink-0"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="payment-method"><path d="M60.7773,32.0645,55,35.5743V31.0962l3.1685-1.9214a1.0163,1.0163,0,0,0,.3359-1.375l-3.6157-5.9482a1.0015,1.0015,0,0,0-1.373-.3359L46.121,26H36.2779l13.3-8.08a1.0146,1.0146,0,0,0,.3354-1.374L47.8359,13.127a1.0009,1.0009,0,0,0-1.3735-.335L24.7221,26H11.0547L44.6816,5.5713h0a3.0047,3.0047,0,0,1,4.1221,1.0049l12.98,21.3662A3.0254,3.0254,0,0,1,60.7773,32.0645ZM53,31.8223V56a3.0033,3.0033,0,0,1-3,3H5a3.0033,3.0033,0,0,1-3-3V31a3.0033,3.0033,0,0,1,3-3H50a3.04,3.04,0,0,1,2.9072,2.2941A6.4157,6.4157,0,0,1,53,31.8223ZM27,49a1.0007,1.0007,0,0,0,0-2A1.0007,1.0007,0,0,0,27,49Zm-3,0a1.0007,1.0007,0,0,0,0-2A1.0007,1.0007,0,0,0,24,49Zm-7,0a1.0007,1.0007,0,0,0,0-2A1.0007,1.0007,0,0,0,17,49Zm-4-1a1.0007,1.0007,0,0,0,2,0A1.0007,1.0007,0,0,0,13,48ZM7,43h6a1,1,0,0,0,1-1V36a1,1,0,0,0-1-1H7a1.0374,1.0374,0,0,0-1,1v6a1.0293,1.0293,0,0,0,.9979,1Zm3,5a1.0007,1.0007,0,0,0,2,0A1.0007,1.0007,0,0,0,10,48Zm37,4a1,1,0,0,0-1-1H9a1,1,0,0,0,0,2H46A1,1,0,0,0,47,52ZM31,48a1.0007,1.0007,0,0,0-2,0A1.0007,1.0007,0,0,0,31,48Zm3,0a1.0007,1.0007,0,0,0-2,0A1.0007,1.0007,0,0,0,34,48Zm3,0a1.0007,1.0007,0,0,0-2,0A1.0007,1.0007,0,0,0,37,48Zm3,0a1.0007,1.0007,0,0,0-2,0A1.0007,1.0007,0,0,0,40,48Zm3,0a1.0007,1.0007,0,0,0-2,0A1.0007,1.0007,0,0,0,43,48Zm3,0a1.0007,1.0007,0,0,0-2,0A1.0007,1.0007,0,0,0,46,48Zm0-12H28a1.0006,1.0006,0,0,0,0,2H46A1.0006,1.0006,0,0,0,46,36Zm0-3H33a1.0006,1.0006,0,0,0,0,2H46A1.0006,1.0006,0,0,0,46,33ZM9.9628,41H12V40H10.5112A3.3464,3.3464,0,0,1,9.9628,41ZM8,40.1763a1.5833,1.5833,0,0,0,.6665-1.0649A1.8556,1.8556,0,0,0,8,37.9435ZM10.4383,38H12V37H9.8419A4.0537,4.0537,0,0,1,10.4383,38Z" data-name="22 payment method"></path></svg>
                        <span class="hidden xs:block ml-2">Withdraw</span>
                    </a>
                </div>


            </div>
            <!-- Right side -->
            <ul class="shrink-0 flex flex-wrap justify-end md:justify-start -space-x-3 -ml-px">
                <li>
                    <a class="block" href="#0">
                        <img class="w-9 h-9 rounded-full" src="{{ asset('images/company-icon-01.svg') }}" width="36" height="36" alt="Account 01" />
                    </a>
                </li>
                <li>
                    <a class="block" href="#0">
                        <img class="w-9 h-9 rounded-full" src="{{ asset('images/company-icon-02.svg') }}" width="36" height="36" alt="Account 02" />
                    </a>
                </li>
                <li>
                    <a class="block" href="#0">
                        <img class="w-9 h-9 rounded-full" src="{{ asset('images/company-icon-03.svg') }}" width="36" height="36" alt="Account 03" />
                    </a>
                </li>
                <li>
                    <a class="block" href="#0">
                        <img class="w-9 h-9 rounded-full" src="{{ asset('images/company-icon-04.svg') }}" width="36" height="36" alt="Account 04" />
                    </a>
                </li>
                <li>
                    <button class="flex justify-center items-center w-9 h-9 rounded-full bg-white border border-slate-200 hover:border-slate-300 text-indigo-500 shadow-sm transition duration-150">
                        <span class="sr-only">Add new user</span>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                    </button>
                </li>
            </ul>
        </div>

    </div>
</div>
