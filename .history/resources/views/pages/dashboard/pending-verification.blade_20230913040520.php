<!DOCTYPE html>
<html
  lang="en"
  class=""
  style="--vh: 9.3px;"
>

  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8">
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    >
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >

    <title>Lineone - Error 404 v1</title>
    <link
      rel="icon"
      type="image/png"
      href="images/favicon.png"
    >

    <!-- CSS Assets -->
    <link
      rel="stylesheet"
      href="css/app.css"
    >

    <!-- Javascript Assets -->
    <script
      src="js/app.js"
      defer=""
    ></script>

    <!-- Fonts -->
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com"
    >
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin=""
    >
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    >
    <script>
      /**
       * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
       */
      localStorage.getItem("_x_darkMode_on") === "true" &&
        document.documentElement.classList.add("dark");
    </script>
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
        :style="$store.global.isDarkModeEnabled ? {backgroundImage : `url('./images/illustrations/ufo-bg-dark.svg')`} :{backgroundImage : `url('./images/illustrations/ufo-bg.svg')`}"
        class="grid w-full grow grid-cols-1 place-items-center bg-center"
        style="background-image: url(&quot;./images/illustrations/ufo-bg.svg&quot;);"
      >
        <div class="max-w-[26rem] text-center">
          <div class="w-full">
            <img
              class="w-full"
              x-show="!$store.global.isDarkModeEnabled"
              src="images/illustrations/ufo.svg"
              alt="image"
            >
            <img
              class="w-full"
              x-show="$store.global.isDarkModeEnabled"
              src="images/illustrations/ufo-dark.svg"
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
