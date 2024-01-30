<x-app-layout background="bg-white">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <x-page-header header="Send Email" />

        <div class="border-t border-slate-200">

            <!-- Components -->
            <div class="space-y-8 mt-8">

                <!-- Input Types -->
                <div>
                    <h2 class="text-2xl text-slate-800 font-bold mb-6">Input Types</h2>
                    <div class="grid gap-5 md:grid-cols-3">

                        <form action="/users/{{ $user->id }}/sendmail" method="POST">
                            @csrf
                            <div>
                                <!-- Start -->

                                <div>
                                    <label class="block text-sm font-medium mb-1" for="default">Email Subject</label>
                                    <input id="default" name="subject" class="form-input w-full" type="text" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium mb-1 mb-2" for="default">Email Text</label>
                                    <textarea class="form-input w-full" name="textbody" id="default" cols="30" rows="10"></textarea>
                                </div>
                                <!-- End -->

                                <!-- Start -->
                                <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white" type="submit">
                                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                    </svg>
                                    <span class="ml-2">Add Event</span>
                                </button>
                                <!-- End -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</x-app-layout>
