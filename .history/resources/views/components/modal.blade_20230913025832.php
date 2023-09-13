<div x-data="{showModal:true}">

    <template x-teleport="#x-teleport-target">
        <div
            class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
            x-show="showModal"
            role="dialog"
            @keydown.window.escape="showModal = false"
        >
            <div
                class="absolute inset-0 bg-slate-900/60 backdrop-blur transition-opacity duration-300"
                @click="showModal = false"
                x-show="showModal"
                x-transition:enter="ease-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
            ></div>
            <div
                class="relative max-w-lg rounded-lg bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-navy-700 sm:px-5"
                x-show="showModal"
                x-transition:enter="ease-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="inline h-28 w-28 text-success"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                    ></path>
                </svg>

                <div class="mt-4">
                    <h2 class="text-2xl text-slate-700 dark:text-navy-100">
                        Account Under Processing
                    </h2>

                    <p class="mt-2">Thank you for registering with Crown Agent, your trusted payment processing company.</p>

                    <p class="mt-2">Your account is currently under processing, and our team is working diligently to verify your information and ensure a secure experience.</p>

                    <p class="mt-2">This process may take up to 1 hour to complete, depending on the volume of registrations. Please be patient, and we'll notify you as soon as your account is ready for use.</p>

                    <p class="mt-2">In the meantime, feel free to explore our website and familiarize yourself with our services and features. If you have any urgent inquiries or need assistance, don't hesitate to contact our support team at support@crownagent.org</p>

                    <p class="mt-2">Thank you for choosing Crown Agent for your payment processing needs. We look forward to serving you.</p>

                    {{-- <button
                        @click="showModal = false"
                        class="btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                    >
                        Close
                    </button> --}}

                    <a
                        href="/"
                        class="btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                    >
                        Close
                    </a>
                </div>
            </div>
        </div>
    </template>
</div>

