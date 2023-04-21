@props(['nav', 'title' => 'Page Title', 'type' => 'normal', 'active' => false])




    <a @class([
        'btn',
        'btn-primary text-light' => $active,
        'nav-link' => $type == 'normal',
        'login-btn mr-im' => $type == 'speclial',
    ])
    href="{{ route($nav) }}">{{ $title }}</a>


    {{-- <a class="btn @if(Request::path() == $nav){{ 'btn-primary text-light' }}@endif" href="{{ route($nav) }}">{{ $title }}</a> --}}
