<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Vdes')
<img src="https://vdes.com/img/notification-logo.png" class="logo" alt="Vdes Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
