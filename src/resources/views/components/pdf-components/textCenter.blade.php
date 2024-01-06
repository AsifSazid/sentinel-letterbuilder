@props(['text' => 'তথ্য দিন', 'bold' => ''])

<table>
    <tr>
        <td class="text-center whitespace-nowrap {{ $bold}}">
            <span>{{ $text }}</span>
        </td>
    </tr>
</table>
