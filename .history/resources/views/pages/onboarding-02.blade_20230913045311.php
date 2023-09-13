<x-empty-layout>
    <main class="bg-slate-100">

        <div class="relative flex">

            <!-- Content -->
            <div class="w-full">

                <div class="min-h-screen h-full flex flex-col after:flex-1">



                    <div class="px-4 py-8">
                        <div class="max-w-md mx-auto">

                            <div class="text-center px-4">
                                <div class="inline-flex mb-8">
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
                                                  <a href="{{ route('dashboard') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">Back To Dashboard</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>
</x-empty-layout>
