@props(['url'])
<tr style="padding-right: 3px, padding-left: 3px">
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://crownagent.org/img/core-img/crownagent_logo.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
