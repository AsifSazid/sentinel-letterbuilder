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

        .mt-30 {
            margin-top: 30px !important;
        }

        .mt-40 {
            margin-top: 40px !important;
        }

        .whitespace-nowrap {
            white-space: nowrap !important;
        }
    </style>
</head>

<body>
    {{-- postscript --}}

    <x-pdf-postscript :postscript="'ক্রোড়পত্র_২১'" />

    <!-- Intruction No -->
    <x-pdf-instructionNo :instruction="'নির্দেশ নম্বর_১৪১'" />

    <!-- Header section -->
    {{-- letter name --}}
    <x-pdf-letterName :name="'অনানুষ্ঠানিক নোটের নমুনা'" />

    <!-- Sender info section -->
    <table class="mt-20">
        <tr>
            <td class="w-9 vertial-align-top">
                প্রাপক:
            </td>
            <td class="w-60">
                <table>
                    <tr>
                        <td class="w-9 whitespace-nowrap">
                            <span>পদনাম</span>
                        </td>
                        <td class="w-25 border-bottom"></td>
                        <td class="w-65"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-18 whitespace-nowrap">
                            <span>অফিসের ঠিকানা</span>
                        </td>
                        <td class="w-35 border-bottom"></td>
                        <td class="w-45"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-8">
                            <span>বিষয়:</span>
                        </td>
                        <td class="w-90 border-bottom"></td>
                        <td class="w-5">।</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-20 whitespace-nowrap">
                            <span>সূত্র: (যদি থাকে)</span>
                        </td>
                        <td class="w-60 border-bottom"></td>
                        <td class="w-20"></td>
                    </tr>
                </table>
            </td>
            <td class="w-30"></td>
        </tr>
    </table>
    <!-- Letter body section -->
    <table class="mt-10">
        <tr>
            <td>
                <span>জনাব/মহোদয়</span>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-8"></td>
            <td class="w-1px whitespace-nowrap">
                <span>উপর্যুক্ত বিষয় ও সূর্ত্রের বরাতে নির্দেশক্রমে জানাইতেছি যে,</span>
            </td>
            <td class="border-bottom"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="border-bottom w-80 text-right">
                ।
            </td>
            <td></td>
        </tr>
    </table>
    <table class="mt-20">
        <tr>
            <td></td>
            <td class="border-bottom w-90">
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="border-bottom w-70 text-right">
                ।
            </td>
            <td></td>
        </tr>
    </table>
    {{-- personal details --}}
    <table class="mt-20">
        <tr>
            <td class="w-60"></td>
            <td class="w-auto">
                <table>
                    <tr>
                        <td class="whitespace-nowrap">
                            <span>আপনার বিশ্বস্ত</span>
                        </td>
                        <td></td>
                    </tr>
                </table>
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
                            <span>পরিচিতি নম্বর (যদি থাকে)</span>
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

    <!-- Date and Number Row -->
    <table class="mt-20">
        <tr>
            <td class="w-20">
                <x-pdf-no />
            </td>
            <td class="w-50"></td>
            <td class="w-30">
                <x-pdf-date />
            </td>
        </tr>
    </table>

    <table class="mt-20 text-center">
        <tr>
            <td class="w-1px whitespace-nowrap">
                <span>অবগতি ও প্রয়োজনীয় (প্রযোজ্য ক্ষেত্রে) ব্যবস্থা গ্রহণের
                    জন্য অনুলিপি প্রেরণ করা হইল: </span>
            </td>
        </tr>
    </table>


    <table>
        <tr>
            <td class="w-3 whitespace-nowrap">
                <span>১।</span>
            </td>
            <td class="border-bottom"></td>
            <td class="w-1px whitespace-nowrap">
                <span>
                    মন্ত্রণালয়/বিভাগ
                </span>
            </td>
            <td class="w-55"></td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="w-3 whitespace-nowrap">
                ২।
            </td>
            <td class="border-bottom"></td>
            <td class="w-55"></td>
        </tr>
    </table>

    {{-- signature --}}
    <table class="mt-10">
        <tr>
            <td class="w-65"></td>
            <td>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            স্বাক্ষর
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            নাম
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap">
                            পদনাম
                        </td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    {{-- terms --}}
    <table>
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
                    বেসরকারি ব্যক্তি অথবা প্রতিষ্ঠানের বরাবর লিখিত পত্রের ক্ষেত্রে সম্ভাষণে 'প্রিয় মহোদয়/মহোদয়গণ';
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
                    সমাপনান্তে 'আপনার/আপনাদের বিশ্বস্ত' সৌজন্য উক্তি লিখিতে হইবে; এবং
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
                    পত্রের গুরুত্ব অনুযায়ী প্রয়োজনবোধে নির্দেশ নম্বর ১৯ ও ২৫ অনুসারে ধরন চিহ্নিত করা যাইবে;
                </span>
            </td>
            <td></td>
        </tr>
    </table>


</body>

</html>
