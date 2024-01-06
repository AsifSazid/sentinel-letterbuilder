@props(['text' => 'তথ্য দিন', 'bold' => ''])

<table>
    <tr>
        <td class="w-auto whitespace-nowrap {{ $bold}}" >
            <span>{{ $text }}</span>
        </td>
        <td class="border-bottom"></td>
    </tr>
</table>