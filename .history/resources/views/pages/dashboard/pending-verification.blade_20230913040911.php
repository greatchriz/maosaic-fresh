<!DOCTYPE html>
<html
  lang="en"
  class=""
  style="--vh: 9.3px;"
>

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

  <body
    x-data=""
    x-bind="$store.global.documentBody"
  >
    <!-- App preloader-->


    <!-- Page Wrapper -->
    <div
      id="root"
      class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
    >
      <main
        :style="$store.global.isDarkModeEnabled ? {backgroundImage : `url('/images/illustrations/ufo-bg-dark.svg')`} :{backgroundImage : `url('/images/illustrations/ufo-bg.svg')`}"
        class="grid w-full grow grid-cols-1 place-items-center bg-center"
        style="background-image: url('/images/illustrations/ufo-bg.svg');"
      >
        <div class="max-w-[26rem] text-center">
          <div class="w-full">
            <img
              class="w-full"
              x-show="!$store.global.isDarkModeEnabled"
              src="/images/illustrations/ufo.svg"
              alt="image"
            >
            <img
              class="w-full"
              x-show="$store.global.isDarkModeEnabled"
              src="/images/illustrations/ufo-dark.svg"
              alt="image"
              style="display: none;"
            >
          </div>
          <p class="pt-4 text-xl font-bold text-primary dark:text-accent">
            Account Under Processing </p>


          <p class="pt-4 text-sm font-semibold text-slate-800 dark:text-navy-50">
            Thank you for registering with Crown Agent, your trusted payment processing company.
          </p>
          <p class="pt-4 text-sm font-semibold text-slate-800 dark:text-navy-50">
            Your account is currently under processing, and our team is working diligently to verify your information
            and ensure a secure experience.
          </p>
          <p class="pt-4 text-sm font-semibold text-slate-800 dark:text-navy-50">
            This process may take up to [estimated time] to complete, depending on the volume of registrations. Please
            be patient, and we'll notify you as soon as your account is ready for use.
          </p>
          <p class="pt-4 text-sm font-semibold text-slate-800 dark:text-navy-50">
            In the meantime, feel free to explore our website and familiarize yourself with our services and features.
            If you have any urgent inquiries or need assistance, don't hesitate to contact our support team at [support
            email or phone number].
          </p>
          <p class="pt-4 text-sm font-semibold text-slate-800 dark:text-navy-50">
            Thank you for choosing Crown Agent for your payment processing needs. We look forward to serving you.
          </p>

          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <a  class="btn mt-8 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90"
                href="{{ route('logout') }}" @click.prevent="$root.submit();" @focus="open = true"
                @focusout="open = false">
                {{ __('Sign Out') }}
            </a>
          </form>
        </div>
      </main>
    </div>

    <!--
      This is a place for Alpine.js Teleport feature
      @see https://alpinejs.dev/directives/teleport
    -->
    <div id="x-teleport-target"></div>
    <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>


    <svg
      id="SvgjsSvg1001"
      width="2"
      height="0"
      xmlns="http://www.w3.org/2000/svg"
      version="1.1"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      xmlns:svgjs="http://svgjs.dev"
      style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"
    >
      <defs id="SvgjsDefs1002"></defs>
      <polyline
        id="SvgjsPolyline1003"
        points="0,0"
      ></polyline>
      <path
        id="SvgjsPath1004"
        d="M0 0 "
      ></path>
    </svg>
  </body>

</html>
