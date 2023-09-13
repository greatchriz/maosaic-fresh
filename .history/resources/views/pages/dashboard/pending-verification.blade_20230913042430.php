<x-app-layout background="bg-white">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="max-w-2xl m-auto mt-16">

            <div class="text-left px-4">
                <div class="inline-flex mb-8 justify-center">
                    <img src="{{ asset('images/404-illustration.svg') }}" width="176" height="176" alt="404 illustration" />
                </div>
                <div class="mb-6">
                    <p class="pt-4 text-lg font-semibold text-slate-800 dark:text-navy-50">
                      Thank you for registering with Crown Agent, your trusted payment processing company.
                    </p>
                    <p class="pt-4 text-lg font-semibold text-slate-800 dark:text-navy-50">
                      Your account is currently under processing, and our team is working diligently to verify your information and ensure a secure experience.
                    </p>
                    <p class="pt-4 text-lg font-semibold text-slate-800 dark:text-navy-50">
                      This process may take up to [estimated time] to complete, depending on the volume of registrations. Please be patient, and we'll notify you as soon as your account is ready for use.
                    </p>
                    <p class="pt-4 text-lg font-semibold text-slate-800 dark:text-navy-50">
                      In the meantime, feel free to explore our website and familiarize yourself with our services and features. If you have any urgent inquiries or need assistance, don't hesitate to contact our support team at [support email or phone number].
                    </p>
                    <p class="pt-4 text-lg font-semibold text-slate-800 dark:text-navy-50">
                      Thank you for choosing Crown Agent for your payment processing needs. We look forward to serving you.
                    </p>
                  </div>
                                  <a href="{{ route('home') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">Back To Dashboard</a>
            </div>

        </div>

    </div>
</x-app-layout>
