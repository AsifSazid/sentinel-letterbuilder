<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circular Sample</title>
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

        .w-3 {
            width: 3% !important;
        }

        .w-5 {
            width: 5% !important;
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

        .w-auto {
            width: auto !important;
        }

        .border-bottom {
            border-bottom: 2px dotted #000 !important;
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


    <!-- Cromopottro -->

    <x-pdf-postscript />

    <!-- Intruction No -->
    <x-pdf-instructionNo />

    <!-- Header -->
    <x-pdf-letterName />

    <!-- Govt. Ministry/Division Row Website-->
    <x-pdf-govtMinistryWeb />

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
    <!-- Poripotrro -->
    <table class="text-center mt-10">
        <tr>
            <td><span class="font-bold">পরিপত্র</span></td>
        </tr>
    </table>
    <!-- Bisoy -->
    <table>
        <tr>
            <td class="w-10"></td>
            <td class="w-3 text-right"><span>বিষয়:</span></td>
            <td class="w-45 border-bottom"></td>
            <td class="w-1">।</td>
            <td class="w-40"></td>
        </tr>
    </table>
    <!-- 1st Line -->
    <table class="mt-30">
        <tr>
            <td class="w-10"></td>
            <td class="w-80 border-bottom"></td>
            <td class="w-10"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-5"></td>
            <td class="w-40 border-bottom"></td>
            <td class="w-1">।</td>
            <td class="w-55"></td>
        </tr>
    </table>

    <!-- 2nd line -->
    <table class="mt-30">
        <tr>
            <td class="w-1 text-left"><span>২।</span></td>
            <td class="w-90 border-bottom"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-70 border-bottom"><span></span></td>
            <td class="w-5">।</td>
            <td class="w-25"></td>
        </tr>
    </table>
    <!-- 3rd line -->
    <table class="mt-30">
        <tr>
            <td class="w-1 text-left"><span>৩।</span></td>
            <td class="w-90 border-bottom"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-25 border-bottom"><span></span></td>
            <td class="w-5">।</td>
            <td class="w-70"></td>
        </tr>
    </table>
    <!-- 4th line -->
    <table class="mt-30">
        <tr>
            <td class="w-1 text-left"><span>৪।</span></td>
            <td class="w-95 border-bottom"></td>
            <td class="w-1">।</td>
        </tr>
    </table>

    <!-- Sender Info -->
    <table class="mt-40">
        <tr>
            <td class="w-70"></td>
            <td>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>স্বাক্ষর</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px"><span>নাম</span></td>
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
                        <td class="w-1px whitespace-nowrap"><span>পদনাম</span></td>
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
    <!-- Bitoron -->
    <table class="mt-10">
        <tr>
            <td class="w-1px whitespace-nowrap"><span>বিতরণ :</span></td>
        </tr>
    </table>
    <table class="mt-5">
        <tr>
            <td class="w-5"></td>
            <td class="w-1px text-left"><span>১।</span></td>
            <td class="w-25 border-bottom"></td>
            <td class="w-70"></td>
        </tr>
    </table>
    <table class="mt-10">
        <tr>
            <td class="w-5"></td>
            <td class="w-1px text-left"><span>২।</span></td>
            <td class="w-25 border-bottom"></td>
            <td class="w-70"></td>
        </tr>
    </table>
    <table class="mt-10">
        <tr>
            <td class="w-5"></td>
            <td class="w-1px text-left"><span>৩।</span></td>
            <td class="w-25 border-bottom"></td>
            <td class="w-70"></td>
        </tr>
    </table>
    <!-- Page Number -->
    <table class="mt-10">
        <tr>
            <td class="w-4 text-left"><span>১২---</span></td>
            <td style="w-4"></td>
            <td class="w-2"></td>
            <td class="w-90"></td>
        </tr>
        <tr>
            {{-- <td style="border-top: 2px solid"></td> --}}
        </tr>
    </table>

</body>

</html>
