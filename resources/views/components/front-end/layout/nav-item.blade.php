@props(['nav' => '', 'title' => ''])

<li class="nav-item m-1">
    <a class="nav-link btn @if(Request::path() == $nav){{ 'btn-primary text-light' }}@endif" href="{{ route($nav) }}">{{ $title }}</a>
</li>
