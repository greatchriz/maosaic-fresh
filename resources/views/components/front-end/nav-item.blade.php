@props(['nav'])

<li class="nav-item m-1">
    <a class="nav-link btn @if(Request::path() == $nav){{ 'btn-primary text-light' }}@endif" href="{{ route($nav) }}">{{ ucfirst($nav) }}</a>
</li>
