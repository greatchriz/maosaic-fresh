@aware(['link' => 'dashboard', 'title' => 'Dashboard'])



<a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(Request::path() == $link){{ 'hover:text-slate-200' }}@endif" href="{{ route($link) }}">
    <div class="flex items-center">
        @if($link == 'dashboard')
         @include('svg.dashboard')
        @elseif($link == 'calendar')
         @include('svg.calendar')
         @elseif($link == 'campaigns')
         @include('svg.campaigns')
         @elseif($link == 'deposit.create')
         @include('svg.deposit')
         @elseif($link == 'transfer')
         @include('svg.transfer')
         @elseif($link == 'community')
         @include('svg.community')
         @elseif($link == 'deposit.index')
         @include('svg.community')
         @elseif($link == 'cards.create')
            @include('svg.community')
         @endif
        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $title }}</span>

    </div>
</a>

