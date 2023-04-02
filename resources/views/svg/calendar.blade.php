<svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
    <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
    <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
</svg>
