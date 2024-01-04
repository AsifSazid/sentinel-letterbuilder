<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Sample</title>
    <link href='http://sonnetdp.github.io/nikosh/css/nikosh.css' rel='stylesheet' type='text/css'>
    <style>
        table {
            width: 100%;
            table-layout: auto;
            font-family: "Nikosh", sans-serif;
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

        .w-10 {
            width: 10% !important;
        }

        .w-15 {
            width: 15% !important;
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

        .w-100 {
            width: 100% !important;
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

        .dashed-line {
            width: 5%;
            border-top: 2px dashed black;
            text-align: right;
        }
    </style>
</head>

<body>
    {{-- <table>
            <tr>
                <td style="width: 100%; text-align: center;"><span>৯২</span></td>
            </tr>
        </table> --}}

    <!-- Cromopottro -->
    {{-- <x-pdf-postscript /> --}}
    <table class="text-right">
        <tr>
            <td><span class="font-bold">ক্রোড়পত্র_২২</span></td>
        </tr>
        <tr>
            <td><span class="font-bold">(নির্দেশ নম্বর_১৪৩)</span></td>
        </tr>
    </table>
    {{-- <table style="width: 95%; text-align: right;">
        <tr>
            <td><span style="font-weight: bold;">ক্রোড়পত্র_২২</span></td>
        </tr>
        <tr>
            <td><span style="font-weight: bold;">(নির্দেশ নম্বর_১৪৩)</span></td>
        </tr>
    </table> --}}

    <!-- Header -->
    <table>
        <tr>
            <td class="text-center"><span class="font-bold">প্রজ্ঞাপনের নমুনা</span></td>
        </tr>
    </table>
    {{-- <table>
        <tr>
            <td style="text-align: center;">
                <span style="font-weight: bold;">প্রজ্ঞাপনের নমুনা</span>
            </td>
        </tr>
    </table> --}}

    <!-- GovtMinWeb -->
    <x-pdf-govtMinistryWeb />
    <!-- Govt. -->
    {{-- <table>
        <tr>
            <td style="text-align: center; padding-top: 10px;">
                <span style="font-weight: bold;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
            </td>
        </tr>
    </table> --}}
    <!-- Ministry/Division Row -->
    {{-- <table>
        <tr>
            <td style="width: 40%;"></td>
            <td style="text-align: right; width: auto; white-space: nowrap;"><span>মন্ত্রণালয়/বিভাগ:</span></td>
            <td style="width: 5%; border-bottom: 1px dashed #000;"></td>
            <td style="width: 42%;"></td>
        </tr>
    </table> --}}
    <!-- Website Row -->
    {{-- <table>
        <tr>
            <td style="text-align: right;">
                <table style="width: 100%; line-height: 1;">
                    <tr>
                        <td style="width: 44%;"></td>
                        <td style="text-align: right; width: auto; white-space: nowrap;"><span>www</span></td>
                        <td style="width: 5%; border-bottom: 1px dashed #000;"></td>
                        <td style="width: 44%;"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table> --}}

    <!-- Time And Date -->
    <!-- Time And Date -->
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
    {{-- <table style="width: 100%;">
        <tr>
            <td style="width: 7%;"></td>
            <td style="width: 3%;"><span>নম্বর:</span></td>
            <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
            <td style="width: auto;"></td>
            <td style="width: 3%;"><span>তারিখ:</span></td>
            <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
            <td style="width: 7%;"></td>
        </tr>
    </table>
    <br /> --}}

    <!-- Proggapon Section -->
    <table class="mt-10">
        <tr>
            <td class="text-center"><span class="font-bold">প্রজ্ঞাপন</span></td>
        </tr>
    </table>
    {{-- <table style="text-align: center;">
        <tr>
            <td>
                <span style="font-weight: bold;">প্রজ্ঞাপন</span>
            </td>
        </tr>
    </table>
    <br /> --}}

    <!-- New Line -->
    <table class="mt-30">
        <tr>
            <td class="w-5"></td>
            <td class="w-95 border-bottom"></td>
        </tr>
    </table>
    <table class="mt-10">
        <tr>
            <td class="w-100 border-bottom"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-20 border-bottom"></td>
            <td class="w-1px">।</td>
            <td class="w-80"></td>
        </tr>
    </table>
    {{-- <table class="mt-10">
        <tr>
            <td class="w-5"></td>
            <td class="w-95 border-bottom"></td>
        </tr>
    </table>
    <table class="mt-10">
        <tr>
            <td class="w-95 border-bottom"></td>
        </tr>
    </table>
    <table class="mt-10">
        <tr>
            <td class="w-20 border-bottom"></td>
            <td class="w-1px">।</td>
            <td class="w-80"></td>
        </tr>
    </table> --}}
    {{-- <table>
        <tr>
            <td style="width: 12%;"></td>
            <td style="width: 1px; white-space: nowrap;"></td>
            <td style="border-bottom: 1px dashed #000; width: auto;"></td>
            <td style="width: 6%;"></td>
        </tr>
    </table> --}}
    {{-- <table>
        <tr>
            <td style="width: 7%;"></td>
            <td style="width: 1px; white-space: nowrap;"><br /></td>
            <td style="border-bottom: 1px dashed #000; width: auto;"></td>
            <td style="width: 6%;"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 7%;"></td>
            <td style="border-bottom: 1px dashed #000; width: 25%; text-align: right;">।</td>
            <td style="width: 70%;"></td>
        </tr>
    </table> --}}
    <!-- Space -->
    {{-- <br />
    <br /> --}}

    <!-- New Line 2 -->
    <table class="mt-30">
        <tr>
            <td class="w-5"></td>
            <td class="w-95 border-bottom"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-35 border-bottom"></td>
            <td class="w-1px">।</td>
            <td class="w-65"></td>
        </tr>
    </table>
    {{-- <table>
        <tr>
            <td style="width: 12%;"></td>
            <td style="width: 1px; white-space: nowrap;"></td>
            <td style="border-bottom: 1px dashed #000; width: auto;"></td>
            <td style="width: 6%;"></td>
        </tr>
    </table> --}}
    {{-- <table>
        <tr>
            <td style="width: 7%;"></td>
            <td style="border-bottom: 1px dashed #000; width: 25%; text-align: right;">।</td>
            <td style="width: 70%;"></td>
        </tr>
    </table> --}}

    {{-- <br /> --}}
    <!-- President -->
    <table class="mt-10">
        <tr>
            <td class="w-70"></td>
            <td class="w-30 text-center"><span>রাষ্ট্রপতির আদেশক্রমে,</span></td>
        </tr>
    </table>
    <table class="mt-30">
        <tr>
            <td class="w-70"></td>
            <td class="w-30 text-center"><span>স্বাক্ষর</span></td>
        </tr>
    </table>

    {{-- <table style="text-align: right;">
        <tr>
            <td colspan="3">
                <table>
                    <tr>
                        <td style="width: 66%;"></td>
                        <td style="width: 20%;"><span>রাষ্ট্রপতির আদেশক্রমে,</span></td>
                        <td style="width: 14%;"></td>
                    </tr>
                </table>
                <br />
            </td>
        </tr>
        <tr>
            <td style="width: 70%;"></td>
            <td style="width: 10%; text-align: right;"><span>স্বাক্ষর</span></td>
            <td style="width: 18%;"></td>
        </tr>
    </table> --}}
    <!-- Sender info -->
    <table class="mt-10">
        <tr>
            <td class="w-70"></td>
            <td>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>স্বাক্ষরকারী কর্মকর্তার নাম</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>পদনাম</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>পরিচিতি নম্বর (যদি থাকে)</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px"><span>ফোন</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px"><span>ফ্যাক্স</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>ই-মেইল</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    {{-- <table>
        <tr>
            <td style="width: 65%;"></td>
            <td style="text-align: left;">
                <table>
                    <tr>
                        <td style="width: 1px; white-space: nowrap;"><span>স্বাক্ষরকারী কর্মকর্তার নাম</span></td>
                        <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                        <td style="width: 22%;"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="width: 1px; white-space: nowrap;"><span>পদনাম</span></td>
                        <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                        <td style="width: 22%;"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="width: 1px; white-space: nowrap;"><span>পরিচিতি নম্বর (যদি থাকে)</span></td>
                        <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                        <td style="width: 22%;"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="width: 1px; white-space: nowrap;"><span>ফোন</span></td>
                        <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                        <td style="width: 22%;"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="width: 1px; white-space: nowrap;"><span>ফ্যাক্স</span></td>
                        <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                        <td style="width: 22%;"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="width: 1px; white-space: nowrap;"><span>ই-মেইল</span></td>
                        <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                        <td style="width: 22%;"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table> --}}
    {{-- <br /> --}}

    <!-- Time And Date -->
    <table class="mt-10">
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
    {{-- <table>
        <tr>
            <td style="width: 7%;"></td>
            <td style="width: 3%;"><span>নম্বর:</span></td>
            <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
            <td style="width: auto;"></td>
            <td style="width: 3%;"><span>তারিখ:</span></td>
            <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
            <td style="width: 14%;"></td>
        </tr>
    </table>
    <br /> --}}

    <!-- Onilipi Likha -->
    <table class="mt-10">
        <tr>
            <td class="w-80 white-space: nowrap">অনুলিপি সদয় অবগতি ও প্রয়োজনীয় ব্যবস্থা গ্রহণের
                    জন্য প্রেরণ করা হইলো :</span>
            </td>
            <td class="w-20"></td>
        </tr>
    </table>
    {{-- <table>
        <tr>
            <td style="width: 7%;"></td>
            <td>
                <span style="width: 1px; white-space: nowrap;">অনুলিপি সদয় অবগতি ও প্রয়োজনীয় ব্যবস্থা গ্রহণের
                    জন্য প্রেরণ করা হইলো :</span>
            </td>
        </tr>
    </table> --}}
    {{-- <br /> --}}

    <!-- Point -->
    <table class="mt-10">
        <tr>
            <td class="w-1px whitespace-nowrap"><span>১।</span></td>
            <td class="w-50 border-bottom"></td>
            <td class="w-50"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-1px whitespace-nowrap"><span>২।</span></td>
            <td class="w-50 border-bottom"></td>
            <td class="w-50"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-1px whitespace-nowrap"><span>৩।</span></td>
            <td class="w-90"><span>উপ-নিয়ন্ত্রক, বাংলাদেশ সরকারি মুদ্রণালয়, মুদ্রণ ও প্রকাশনা অধিদপ্তর, তেজগাঁও,
                ঢাকা, বাংলাদেশ গেজেটে প্রকাশের অনুরোধসহ।</span></td>
        </tr>
    </table>
    {{-- <table>
        <tr>
            <td style="width: 7%;"></td>
            <td style="width: 1%;"><span>৩।</span></td>
            <td style="width: auto;"><span>উপ-নিয়ন্ত্রক, বাংলাদেশ সরকারি মুদ্রণালয়, মুদ্রণ ও প্রকাশনা অধিদপ্তর, তেজগাঁও,
                    ঢাকা, বাংলাদেশ গেজেটে প্রকাশের অনুরোধসহ।</span></td>
            <td style="width: 6%;"></td>
        </tr>
    </table>
    <br /> --}}

    <!-- Letter Terms -->
    <table class="mt-10">
        <tr>
            <td class="w-5"></td>
            <td class="w-15"><span>টীকা :</span> </td>
            <td class="w-80"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-10"></td>
            <td class="w-90">
                <span>(১) প্রজ্ঞাপন রাষ্ট্রপতির আদেশক্রমে জারি হইবে; এবং</span>
            </td>
        </tr>
        <tr>
            <td class="w-10"></td>
            <td class="w-90">
                <span>(২) প্রজ্ঞাপন গেজেটে প্রকাশ করিতে হইবে।</span>
            </td>
        </tr>
    </table>
    {{-- <table style="text-align: left;">
        <tr>
            <td style="width: 11%"></td>
            <td colspan="2" style="width: 90%;"><span>টীকা : </span> </td>
        </tr>
        <tr>
            <td style="width: 10%;"></td>
            <td style="width: 5%;"></td>
            <td style="width: 85%;">
                <span>(১) প্রজ্ঞাপন রাষ্ট্রপতির আদেশক্রমে জারি হইবে; এবং</span>
            </td>
        </tr>
        <tr>
            <td style="width: 10%;"></td>
            <td style="width: 5%;"></td>
            <td style="width: 85%;">
                <span>(২) প্রজ্ঞাপন গেজেটে প্রকাশ করিতে হইবে।</span>
            </td>
        </tr>
    </table> --}}
</body>

</html>
