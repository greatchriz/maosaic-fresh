@props(['nav' => 'dashboard'])


<!-- Inbox -->
<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(Request::path() == $nav){{ 'bg-slate-900' }}@endif">

    {{ $slot }}

</li>
