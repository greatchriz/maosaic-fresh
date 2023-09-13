<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link
        href="/dash/style.css"
        rel="stylesheet"
    >

    <link
        href="/dash/css/vendors/flatpickr.min.css"
        rel="stylesheet"
    >
    <link
        href="/dash/css/vendors/flatpickr.min.css"
        rel="stylesheet"
    >
    <link
        href="/dash/style.css"
        rel="stylesheet"
    >

    <!-- Styles -->
    @livewireStyles

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        {{-- replicate the code above with mix instead of vite --}}

</head>

<body class="font-inter antialiased bg-slate-100 text-slate-600" :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex h-screen overflow-hidden">

        <x-app.sidebar />

        <!-- Content area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if ($attributes['background']) {{ $attributes['background'] }} @endif"
            x-ref="contentarea">

            <x-app.header />

            <main>

                <x-modal />
              {{-- create a component tag for modal component --}}


                 {{-- <div x-data="{showModal:false}">
                                    <button
                                        @click="showModal = true"
                                        class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                                    >
                                        Backdrop Blur
                                    </button>

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
                                                        Success Message
                                                    </h2>
                                                    <p class="mt-2">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Consequuntur dignissimos soluta totam?
                                                    </p>
                                                    <button
                                                        @click="showModal = false"
                                                        class="btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                                                    >
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div> --}}


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
                                                    Success Message
                                                </h2>
                                                <p class="mt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Consequuntur dignissimos soluta totam?
                                                </p>
                                                <button
                                                    @click="showModal = false"
                                                    class="btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                                                >
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>

              {{-- END modal component --}}


                <!-- if the page session has success then import success component -->


                @if (session('success'))
                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="px-4 py-2 rounded-sm text-sm bg-emerald-500 text-white">
                            <div class="flex w-full justify-between items-start">
                                <div class="flex">
                                    <svg class="w-4 h-4 shrink-0 fill-current opacity-80 mt-[3px] mr-3"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" />
                                    </svg>
                                    <div class="font-medium"> {{ session('success') }}</div>
                                </div>
                                <button class="opacity-70 hover:opacity-80 ml-3 mt-[3px]" @click="open = false">
                                    <div class="sr-only">Close</div>
                                    <svg class="w-4 h-4 fill-current">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                @endif

                {{ $slot }}
            </main>

        </div>

    </div>

    @livewireScripts


    <div class="gtranslate_wrapper"></div>
    <script>
        window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","alt_flags":{"en":"usa"}}
    </script>
    <script
        src="https://cdn.gtranslate.net/widgets/latest/float.js"
        defer
    ></script>

    <script src="//code.tidio.co/plgg58xxs1n7vnhhrljafy4zrsvs8nhk.js" async></script>

    <script
        type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
    ></script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64ffc069b1aaa13b7a764f0c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <script src="/dash/js/vendors/alpinejs.min.js" defer></script>
    <script src="/dash/js/vendors/chart.js"></script>
    <script src="/dash/js/vendors/moment.js"></script>
    <script src="/dash/js/vendors/chartjs-adapter-moment.js"></script>
    <script src="/dash/js/fintech-charts.js"></script>
    <script src="/dash/js/vendors/flatpickr.js"></script>
    <script src="/dash/js/flatpickr-init.js"></script>
</body>

</html>
