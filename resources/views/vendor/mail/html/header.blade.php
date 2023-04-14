@props(['url'])
<tr style="padding-right: 3px, padding-left: 3px">
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.svg" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>

<p>the office of the admistrator</p>
</td>
</tr>
