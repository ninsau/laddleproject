<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laddle')
<img src="https://www.laddle.io/logo/3.png" class="logo" alt="Laddle Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
