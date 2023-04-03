@aware(['nav' => 'dashboard'])


<a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(Request::path() == $nav){{ 'hover:text-slate-200' }}@endif" href="{{ route($nav) }}">
    <div class="flex items-center">
        @if($nav == 'dashboard')
         @include('svg.dashboard')
        @elseif($nav == 'calendar')
         @include('svg.calendar')
         @elseif($nav == 'campaigns')
         @include('svg.campaigns')
         @elseif($nav == 'deposit')
         @include('svg.deposit')
         @elseif($nav == 'transfer')
         @include('svg.transfer')
         @elseif($nav == 'community')
         @include('svg.community')
         @endif
        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $nav }}</span>

    </div>
</a>

