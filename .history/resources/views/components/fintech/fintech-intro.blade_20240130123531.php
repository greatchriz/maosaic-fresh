<div class="flex flex-col col-span-full bg-white shadow-lg rounded-lg border border-slate-200">
    <div class="px-5 py-6">

        <div class="md:flex md:justify-between md:items-center">
            <!-- Left side -->
            <div class="flex items-center mb-4 md:mb-0">
                <!-- Avatar -->
                <div class="mr-4">
                @if(!empty($loggedUser->profile_photo_url))
                <img class="w-8 h-8 rounded-full" src="/dash/images/user-avatar-32.png" width="64" height="64"
                alt="{{ Auth::user()->name }}" />

                @else
                <img class="w-8 h-8 rounded-full" src="/storage/{{ Auth::user()->profile_photo_path }}" width="32" height="32"
            alt="{{ Auth::user()->name }}" />
                @endif
                </div>
                <!-- User info -->
                <div class="">
                    <div class="mb-2">Hey <strong class="font-medium text-slate-800">{{ $loggedUser->name }}</strong> 👋, Welcome to Crown Agent.</div>



                    <a href="/user/profile" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        {{-- <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"/>
                        </svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" hieght="24px" width="24px" id="upload"><path d="M8.71,7.71,11,5.41V15a1,1,0,0,0,2,0V5.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-4-4a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-4,4A1,1,0,1,0,8.71,7.71ZM21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Z"></path></svg>
                        <span class=" xs:block ml-2">Upload Image</span>
                    </a>
                </div>


            </div>

        </div>

    </div>
</div>
