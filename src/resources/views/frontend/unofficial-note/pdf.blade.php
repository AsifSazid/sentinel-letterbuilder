<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unofficial Note</title>
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

        .whitespace-nowrap {
            white-space: nowrap !important;
        }
    </style>
</head>

<body>
    {{-- ক্রোড়পত্র / postscript --}}

    <x-pdf-postscript :postscript="'ক্রোড়পত্র_২১'" />

    <!-- Intruction No / নির্দেশ নম্বর-->
    <x-pdf-instructionNo :instruction="'নির্দেশ নম্বর_১৪১'" />

    {{-- letter name --}}
    <x-pdf-letterName :name="'অনানুষ্ঠানিক নোটের নমুনা'" />

    {{-- মন্ত্রণালয়/বিভাগ --}}
    <table class="mt-40">
        <tr>
            <td class="w-70"></td>
            <td class="w-15 border-bottom"></td>
            <td class="text-lef w-5 whitespace-nowrap"><span>মন্ত্রণালয়/বিভাগ</span></td>
        </tr>
    </table>
    {{-- শাখা/অধিশাখা --}}
    <table class="">
        <tr>
            <td class="w-70"></td>
            <td class="w-15 border-bottom"></td>
            <td class="text-lef w-5 whitespace-nowrap"><span>শাখা/অধিশাখা</span></td>
        </tr>
    </table>

    <!-- বিষয়-->
    <table class="mt-10">
        <tr>
            <td class="w-6">
                <span>বিষয় :</span>
            </td>
            <td class="w-50 border-bottom"></td>
            <td><span>।</span></td>
        </tr>
    </table>
    <!-- সূত্র-->
    <table class="mt-10">
        <tr>
            <td class="w-15 whitespace-nowrap">
                <span>সূত্র : (যদি থাকে)</span>
            </td>
            <td class="w-40 border-bottom"></td>
            <td></td>
        </tr>
    </table>
    <!-- নোটের বিষয়বস্তু-->
    <table class="mt-10">
        <tr>
            <td class="w-18 whitespace-nowrap">
                <span>নোটের বিষয়বস্তু বর্ণনা</span>
            </td>
            <td class="w-80 border-bottom"></td>
        </tr>
    </table>
    <!-- dotted underline-->
    <table class="mt-25">
        <tr>
            <td class="border-bottom"></td>
        </tr>
    </table>
    <!-- dotted underline-->
    <table>
        <tr>
            <td class="w-25 border-bottom"></td>
            <td><span>।</span></td>
        </tr>
    </table>

    <!-- প্রস্তাবনা -->
    <table class="mt-15">
        <tr>
            <td class="w-8 whitespace-nowrap">
                <span>প্রস্তাবনা </span>
            </td>
            <td class="w-92 border-bottom"></td>
        </tr>
    </table>
    <!-- dotted underline-->
    <table>
        <tr>
            <td class="w-40 border-bottom"></td>
            <td><span>।</span></td>
        </tr>
    </table>
    {{-- writter official info --}}
    <table class="mt-30">
        <tr>
            <td class="w-65"></td>
            <td class="w-auto">
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            <span>স্বাক্ষর</span>
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            <span>নাম</span>
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            <span>পদনাম</span>
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            <span>ফোন</span>
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            <span>ফ্যাক্স</span>
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            <span>ই-মেইল</span>
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- প্রাপকের পদনাম-->
    <table class="mt-10">
        <tr>
            <td class="w-13">
                <span>প্রাপকের পদনাম </span>
            </td>
            <td class="w-20 border-bottom"></td>
            <td></td>
        </tr>
    </table>
    <!-- ঠিকানা-->
    <table class="mb-20">
        <tr>
            <td class="w-6">
                <span>ঠিকানা</span>
            </td>
            <td class="w-25 border-bottom"></td>
            <td class="border-bottom w-2"></td>
            <td></td>
        </tr>
    </table>
    {{-- horizontal row --}}
    <hr>

    <!-- ইউ.ও.নোট নম্বর / তারিখ -->
    <table>
        <tr>
            <td class="w-15"><span>ইউ.ও.নোট নম্বর:</span></td>
            <td class="border-bottom"></td>
            <td class="w-20 border-bottom"></td>
            <td class="w-35"></td>
            <td class="w-7"><span>তারিখ:</span></td>
            <td class="w-15 border-bottom"><span></span></td>
        </tr>
    </table>

    {{-- টীকা --}}
    <table class="mt-30">
        <tr>
            <td>
                <span>টীকা :</span>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-5"></td>
            <td class="w-4 whitespace-nowrap"><span>(১)</span></td>
            <td class="whitespace-nowrap">
                <span>
                    অনানুষ্ঠানিক নোট নোটশিটে প্রেরণ করিতে হয়;
                </span>
            </td>
            <td></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-5"></td>
            <td class="w-4 whitespace-nowrap"><span>(২)</span></td>
            <td class="whitespace-nowrap">
                <span>
                    অভ্যন্তরীণ পরামর্শ/যোগাযোগের জন্য ইউ ও নোট ব্যবহৃত হয়;
                </span>
            </td>
            <td></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-5"></td>
            <td class="w-4 whitespace-nowrap"><span>(৩)</span></td>
            <td class="whitespace-nowrap">
                <span>
                    অনানুষ্ঠানিক নোট মূলত পত্র হিসাবেই ব্যবহৃত হয়, নোটশিট হিসাবে নহে; এবং
                </span>
            </td>
            <td></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-5"></td>
            <td class="w-4 whitespace-nowrap"><span>(৪)</span></td>
            <td class="whitespace-nowrap">
                <span>
                    প্রয়োজনে অনানুষ্ঠানিক নোটের অনুলিপি প্রেরণ করা যাইবে।
                </span>
            </td>
            <td></td>
        </tr>
    </table>


</body>

</html>
