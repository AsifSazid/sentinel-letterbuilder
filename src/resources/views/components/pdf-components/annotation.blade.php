@props(['text' => 'টীকা প্রদান করুন', 'bold' => '', 'index' => 'ক্রমিক নং', 'leftWidth' => 'w-5'])

<table>
    <tr>
        <td class="{{ $leftWidth }}"></td>
        <td class="w-auto vertical-align-top"><span>{{ $index }}</span></td>
        <td>
            <span>
                {{ $text }}
            </span>
        </td>
    </tr>
</table>
