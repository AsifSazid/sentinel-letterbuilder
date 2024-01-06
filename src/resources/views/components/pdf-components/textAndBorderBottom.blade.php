@props(['text' => 'তথ্য দিন', 'bold' => ''])

<table class="mt-5">
    <tr>
        <td class="w-auto whitespace-nowrap {{ $bold}}" >
            <span>{{ $text }}</span>
        </td>
        <td class="border-bottom"></td>
    </tr>
</table>