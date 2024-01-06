<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meeting Minutes</title>
    <link href='http://sonnetdp.github.io/nikosh/css/nikosh.css' rel='stylesheet' type='text/css'>
    <style>
        table {
            width: 100%;
            table-layout: auto;
            font-family: "Nikosh", sans-serif;
            font-size: 16px;
            border-collapse: collapse;
        }

        .w-1px {
            width: 1px !important;
        }

        .w-1 {
            width: 1% !important;
        }

        .w-2 {
            width: 2% !important;
        }

        .w-3 {
            width: 3% !important;
        }

        .w-4 {
            width: 4% !important;
        }

        .w-5 {
            width: 5% !important;
        }

        .w-6 {
            width: 6% !important;
        }

        .w-7 {
            width: 7% !important;
        }

        .w-8 {
            width: 8% !important;
        }

        .w-9 {
            width: 9% !important;
        }

        .w-10 {
            width: 10% !important;
        }

        .w-11 {
            width: 11% !important;
        }

        .w-12 {
            width: 12% !important;
        }

        .w-13 {
            width: 13% !important;
        }

        .w-15 {
            width: 15% !important;
        }

        .w-18 {
            width: 18% !important;
        }

        .w-20 {
            width: 20% !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-30 {
            width: 30% !important;
        }

        .w-35 {
            width: 35% !important;
        }

        .w-40 {
            width: 40% !important;
        }

        .w-45 {
            width: 45% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-55 {
            width: 55% !important;
        }

        .w-60 {
            width: 60% !important;
        }

        .w-65 {
            width: 65% !important;
        }

        .w-70 {
            width: 70% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-80 {
            width: 80% !important;
        }

        .w-85 {
            width: 85% !important;
        }

        .w-90 {
            width: 90% !important;
        }

        .w-92 {
            width: 92% !important;
        }

        .w-95 {
            width: 95% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .border-bottom {
            border-bottom: 1px dotted #000 !important;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .vertial-align-top {
            vertical-align: top;
        }

        .font-bold {
            font-weight: bold;
        }

        .pt-10 {
            padding-top: 10px !important;
        }

        .pt-20 {
            padding-top: 20px !important;
        }

        .mt-5 {
            margin-top: 5px !important;
        }

        .mt-10 {
            margin-top: 10px !important;
        }

        .mt-15 {
            margin-top: 15px !important;
        }

        .mt-20 {
            margin-top: 20px !important;
        }

        .mt-25 {
            margin-top: 25px !important;
        }

        .mt-30 {
            margin-top: 30px !important;
        }

        .mt-40 {
            margin-top: 40px !important;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }

        .mb-20 {
            margin-bottom: 20px !important;
        }

        .ml-10 {
            margin-left: 10px !important;
        }

        .ml-15 {
            margin-left: 15px !important;
        }

        .ml-20 {
            margin-left: 20px !important;
        }

        .whitespace-nowrap {
            white-space: nowrap !important;
        }

        .opacity-10 {
            opacity: .1;
        }
    </style>
</head>

<body>
    {{-- Govt Logo --}}


    {{-- গণপ্রজাতন্ত্রী বাংলাদেশ সরকার --}}
    <x-pdf-govt />

    {{--  মন্ত্রণালয়ের নাম লিখুন --}}
    <x-pdf-textCenter :text="'মন্ত্রণালয়ের নাম লিখুন'" />

    {{-- টেস্ট অফিস --}}
    <table class="text-center">
        <tr>
            <td class="w-25"><span>বাম শিরোনাম</span></td>
            <td>
                <span>টেস্ট অফিস ফর নথি ভার্শন-২</span>
            </td>
            <td class="w-25"><span>ডান শিরোনাম</span></td>
        </tr>
    </table>

    {{--  ব্যবস্থাপনা পরিচালক এর দপ্তর --}}
    <x-pdf-textCenter :text="'ব্যবস্থাপনা পরিচালক এর দপ্তর'" />

    {{-- note body (class name should match to the existing internal css in head tag) --}}
    <x-pdf-textCenter :text="'......'" />
    <x-pdf-textCenter :text="'......'" />
    <x-pdf-textCenter :text="'......'" :bold="'font-bold'" /> {{-- if need more css property then add them in component.blade file first --}}


    <hr class="opacity-10">

    <!-- note details -->
    <table>
        <tr>
            <td class="w-auto">
                <x-pdf-textAndBorderBottom :text="'সভাপতি'" />
                <x-pdf-textAndBorderBottom :text="'সভার তারিখ'" />
                <x-pdf-textAndBorderBottom :text="'সভার সময়'" />
                <x-pdf-textAndBorderBottom :text="'স্থান'" />
                <x-pdf-textAndBorderBottom :text="'উপস্থিতি'" />
                <x-pdf-textAndBorderBottom :text="'সভাপতি'" />

            </td>
            <td class="w-60"></td>

        </tr>
    </table>

</body>

</html>
