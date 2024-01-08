<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Semi Govt Letter Sample</title>
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

    <!-- Header section -->
    <!-- Intruction No -->
    <x-pdf-instructionNo :instruction="'নির্দেশ নম্বর_১৩৯'" />
    
    <!-- Header -->
    {{-- <x-pdf-letterName :letterName="'আধা-সরকারি পত্রের নমুনা'" /> --}}
    <table class="text-center mt-10">
        <tr>
            <td><span class="font-bold">আধা-সরকারি পত্রের নমুনা</span></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="text-center">
                <span class="font-bold">( অফিসিয়াল প্যাড )</span>
            </td>
        </tr>
    </table>

    {{-- Sender Info --}}
    <table class="mt-40">
        <tr>
            <td class="w-70"></td>
            <td>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>পত্র প্রেরকের নাম</span></td>
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
    <!-- Date and Number Row -->
    <table class="mt-10">
        <tr>
            <td class="w-1px whitespace-nowrap">
                <span>আধা-সরকারি পত্র নম্বর</span>
            </td>
            <td class="w-15 border-bottom"></td>
            <td class="w-45"></td>
            <td class="w-20">
                <x-pdf-date />
            </td>
        </tr>
    </table>

    <!-- letter designation section -->
    <table class="mt-10">
        <tr>
            <td class=""><span>প্রিয়........./জনাব/মহোদয়,</span></td>
        </tr>
        <tr>
            <td class=""><span>(সম্ভাষণ স্বহস্তে লিখন)</span></td>
        </tr>
    </table>
    
    <!-- letter body -->
    <table class="mt-30">
        <tr>
            <td class="w-1px whitespace-nowrap">
                <span>পূর্বাপর উল্লেখপূর্বক পত্রের বিষয়বস্তু</span>
            </td>
            <td class="w-80 border-bottom"></td>
        </tr>
    </table>
    <table class="mt-10">
        <tr>
            <td class="w-5 border-bottom"></td>
            <td class="w-95 border-bottom"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-15 border-bottom"></td>
            <td class="w-1px">।</td>
            <td style="w-80"></td>
        </tr>
    </table>
    
    <!-- letter body ending -->
    <table class="mt-30">
        <tr>
            <td class="w-1px whitespace-nowrap">
                <span>সুনির্দিষ্ট প্রস্তাবনা</span>
            </td>
            <td class="w-95 border-bottom"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-20 border-bottom"></td>
            <td class="w-1px"><span>।</span></td>
            <td class="w-75"></td>
        </tr>
    </table>

    <!-- sender name -->
    <table class="mt-20 bt-10">
        <tr>
            <td class="w-20"><span>শুভেচ্ছান্তে/শ্রদ্ধান্তে,</span></td>
            <td class="w-80"></td>
            {{-- <td><span>(স্বহস্তে লিখন)</span></td> --}}
        </tr>
        <tr>
            <td class="w-10"><span>(স্বহস্তে লিখন)</span></td>
            <td class="w-90"></td>
        </tr>
    </table>

    <!-- sender signature -->
    <table class="mt-20 text-center">
        <tr>
            <td class="w-80"></td>
            <td class="w-20"><span>আন্তরিকভাবে আপনার</span></td>
        </tr>
    </table>
    <table class="mt-20">
        <tr>
            <td class="w-80"></td>
            <td class="w-20 border-bottom"></td>
        </tr>
    </table>
    <table>
        <tr class="mt-10">
            <td class="w-80"></td>
            <td class="w-20 text-center"><span>সাক্ষরকারীর নাম</span></td>
        </tr>
    </table>

    <!-- sender address -->
    <table class="mt-40">
        <tr>
            <td>
                <table>
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>প্রাপকের নাম</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px"><span>পদনাম</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>ঠিকানা</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
            </td>
            <td class="w-65"></td>
        </tr>
    </table> 

    <!-- Tikaa -->
    <table class="mt-40">
        <tr>
            <td class="w-20"><span>টীকা :</span></td>
            <td class="w-80"></td>
        </tr>
        
        
    </table>
    <table>
        <tr>
            <td class="w-5"></td>
            <td class="w-95"><span>(১)আধা-সরকারি পত্র আবশ্যিকভাবে ব্যক্তি নামে প্রেরণ
                করিতে হইবে।</span></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="w-5"></td>
            <td class="w-95"><span>(২)প্রযোজ্য ক্ষেত্রে আধা-সরকারি পত্রের অনুলিপি
                দেওয়া যাইবে। তবে মূলপত্রে অনুলিপি না লিখাই শ্র্রেয়।</span></td>
        </tr>
    </table>
    {{-- <table>
        <tr></tr>
    </table>
    <table style="text-align: left;">
        <tr>
            <td>
                <span>টীকা : </span>
            </td>
        </tr>
    </table>

    <table style="text-align: left;">
        <tr>
            <td style="width: 5%"></td>
            <td style="width: 1%; white-space: nowrap; text-align: left;">
                (১)
            </td>
            <td style="width: auto; text-align: left"> <span>আধা-সরকারি পত্র আবশ্যিকভাবে ব্যক্তি নামে প্রেরণ
                করিতে হইবে।</span></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 5%"></td>
            <td style="width: 1%; white-space: nowrap; text-align: left;">
                (২)
            </td>
            <td style="width: auto; text-align: left"><span></span></td>
        </tr>
    </table> --}}

</body>

</html>
