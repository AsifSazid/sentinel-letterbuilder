<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Office Order</title>
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

        .mt-35 {
            margin-top: 35px !important;
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

        .ml-30 {
            margin-left: 30px !important;
        }

        .ml-40 {
            margin-left: 40px !important;
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

    {{-- ক্রোড়পত্র / postscript --}}

    <x-pdf-postscript :postscript="'ক্রোড়পত্র_১৮'" />

    <!-- Intruction No / নির্দেশ নম্বর -->
    <x-pdf-instructionNo :instruction="'নির্দেশ নম্বর_১৩৮'" />

    {{-- letter name --}}
    <x-pdf-letterName :name="'অফিস আদেশের নমুনা'" />

    {{-- govt ministry web --}}
    <x-pdf-govtMinistryWeb />

    {{-- Date and Number Row  --}}
    <table>
        <tr>
            <td class="w-20">
                <x-pdf-no />
            </td>
            <td class="w-60"></td>
            <td class="w-20">
                <x-pdf-date />
            </td>
        </tr>
    </table>

    {{-- অফিস আদেশ --}}
    <table class="mt-20">
        <tr>
            <td>
                <x-pdf-textCenter :text="'অফিস আদেশ'" :bold="'font-bold'" />
            </td>
        </tr>
    </table>

    {{-- first underline  --}}
    <table class="mt-10">
        <tr>
            <td class="w-10"></td>
            <td class="w-90 border-bottom"></td>
        </tr>
    </table>
    {{-- second underline --}}
    <table>
        <tr>
            <td class="w-80 border-bottom"></td>
            <td>।</td>
            <td class="w-5"></td>
        </tr>
    </table>
    {{-- third underline --}}
    <table class="mt-35">
        <tr>
            <td class="w-10"></td>
            <td class="w-90 border-bottom"></td>
        </tr>
    </table>
    {{-- forth underline --}}
    <table>
        <tr>
            <td class="w-90 border-bottom"></td>
            <td>।</td>
            <td class="w-5"></td>
        </tr>
    </table>

    {{-- Sender info  --}}
    <table class="mt-30">
        <tr>
            <td class="w-65"></td>
            <td class="w-auto">
                <x-pdf-textAndBorderBottom :text="'স্বাক্ষর'" />
                <x-pdf-textAndBorderBottom :text="'নাম'" />
                <x-pdf-textAndBorderBottom :text="'পদনাম'" />
                <x-pdf-textAndBorderBottom :text="'ফোন'" />
                <x-pdf-textAndBorderBottom :text="'ফ্যাক্স'" />
                <x-pdf-textAndBorderBottom :text="'ই-মেইল'" />
            </td>
        </tr>
    </table>

    {{-- number  &  date --}}
    <table class="mt-20">
        <tr>
            <td class="w-20">
                <x-pdf-no />
            </td>
            <td class="w-60"></td>
            <td class="w-20">
                <x-pdf-date />
            </td>
        </tr>
    </table>

    {{-- অনুলিপি --}}
    <table class="mt-20 ml-40">
        <tr>
            <td>
                <span>অবগতি ও প্রয়োজনীয় (প্রযোজ্য ক্ষেত্রে) ব্যবস্থা গ্রহণের জন্য অনুলিপি প্রেরণ করা হইল: </span>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td>
                <x-pdf-textAndBorderBottom :text="'১।'" />
            </td>
            <td class="w-50"></td>
        </tr>
        <tr>
            <td>
                <x-pdf-textAndBorderBottom :text="'২।'" />
            </td>
            <td class="w-50"></td>
        </tr>
    </table>

    {{-- প্রেরণকারীর স্বাক্ষর --}}
    <table class="mt-20">
        <tr>
            <td class="w-65"></td>
            <td class="w-auto">
                <x-pdf-textAndBorderBottom :text="'প্রেরণকারীর স্বাক্ষর'" />
                <x-pdf-textAndBorderBottom :text="'নাম'" />
                <x-pdf-textAndBorderBottom :text="'পদনাম'" />
            </td>
        </tr>
    </table>
</body>

</html>
