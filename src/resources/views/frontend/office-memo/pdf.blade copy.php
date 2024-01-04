<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Memo</title>
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
        <!-- Image -->
        {{-- <table>
            <tr>
                <td style="text-align: center;"><img src="{{ asset('ui/frontend/assets/media/forms/govtlogo.png') }}" alt="" width="100" height="100"></td>
            </tr>
        </table> --}}
    
        <!-- Header Govt-->
        <table>
            <tr>
                <td style="width: auto; text-align: center;"><span>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span></td>
            </tr>
        </table>
        <!-- Header Ministry-->

        <table>
            <tr>
                <td style="width: auto; text-align: center;"><span>মন্ত্রণালয়ের নাম লিখুন</span></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: auto; text-align: center;"><span>টেস্ট অফিস</span></td>
            </tr>
        </table>
        <!-- Headline -->
        <table>
            <tr>
                <td style="width: 40%; text-align: center;"><span>বাম শিরোনাম</span></td>
                <td style="text-align: center; width: auto; white-space: nowrap;">
                    <span>শাখা-১</span>
                </td>
                <td style="width: 40%; text-align: center;"><span>ডান শিরোনাম</span></td>
            </tr>
        </table>
        <!-- Dott -->
        <table style="text-align: center;">
            <tr>
                <td>......</td>
            </tr>
        </table>
        <table style="text-align: center;">
            <tr>
                <td>......</td>
            </tr>
        </table>
        <!-- Smarok And Date -->
        <table style="width: 100%;">
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 55%;"></td>
                <td style="width: 5%;"><span>তারিখ:</span></td>
                <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
                <td style="width: 10%;"></td>
            </tr>
        </table>
        <!-- Smarok -->
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 10%; font-weight: bold;"><span>স্মারক নম্বর:</span></td>
                <!-- <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td> -->
                <td style="width: auto;"></td>
            </tr>
        </table>        
        <!-- Bisoy -->
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 5%; font-weight: bold;"><span>বিষয়:</span></td>
                <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <!-- Sutrro -->
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 11%; padding-top: 1px;"><span>সূত্র:</span>&nbsp;<span>(যদি থাকে)</span></td>
                <td style="width: 12%; border-bottom: 1px dashed #000;"><span></span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <!-- SK -->
        <!-- <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="color: rgb(111, 191, 218); white-space: nowrap;">
                    ✏️ [সম্পাদন করুন]
                </td>
            </tr>
        </table> -->
        <!-- Sutrro -->
        <table>
            <tr>
                <td style="width: 15%;"></td>
                <td style="width: 11%;"><span>পত্রের বিষয়বস্তু</span></td>
                <td style="width: 40%; border-bottom: 1px dashed #000;"><span></span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <br />
        <!-- Name -->
        <table>
            <tr>
                <td style="width: 70%;"></td>
                <td style="width: 20%; text-align: center;"><span>মোঃ মাহবুব আহমেদ চৌধুরী</span></td>
                <td style="width: 10%;"></td>
            </tr>
            <tr>
                <td style="width: 70%;"></td>
                <td style="width: 20%; text-align: center;"><span>প্রজেক্ট সহকারী</span></td>
                <td style="width: 10%;"></td>
            </tr>
            <tr>
                <td style="width: 70%;"></td>
                <td style="width: 20%; text-align: center;"><span>০১৭১৯৯৫১৮৬৪</span></td>
                <td style="width: 10%;"></td>
            </tr>
        </table>       
        <!-- Bitoron -->
        <table style="width: 100%;">
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 22%;"><span style="font-weight: bold;">বিতরণ(জ্যেষ্ঠতার ক্রমানুসারে নয়):</span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 12%;"></td>
                <td style="width: 50%;"><span>১। চীপ টেকনোলজি অফিসার, ব্যবস্থাপনা পরিচালক এর দপ্তর, টেস্ট অফিস এবং</span></td>
                <td style="width: auto;"></td>
            </tr>
            <tr>
                <td style="width: 12%;"></td>
                <td style="width: 40%;"><span>২। সহকারী পরিচালক, লোড টেস্টিং শাখা, টেস্ট অফিস।</span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <!-- Dristi Akharshon -->
        <table style="width: 100%;">
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 22%;"><span style="font-weight: bold;">দৃষ্টি আকর্ষণ:</span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 12%;"></td>
                <td style="width: 50%;"><span style="padding-top: 2px;">সিনিয়র সফটওয়্যার ইঞ্জিনিয়ার, ব্যবস্থাপনা পরিচালক এর দপ্তর, টেস্ট অফিস।</span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <!-- Smarok Number And Date -->
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 15%;"><span style="font-weight: bold;">স্মারক নম্বর:</span>&nbsp;<span>/১ (১)</span></td>
                <td style="width: 50%;"></td>
                <td style="width: 5%;">তারিখ:</td>
                <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
                <td style="width: 10%;"></td>
            </tr>
        </table>
        <!-- Sodoy Gaterthe -->
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 22%;"><span style="font-weight: bold;"><span>সদয় জ্ঞাতার্থে/জ্ঞাতার্থে:</span></span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 12%;"></td>
                <td style="width: 50%;"><span style="padding-top: 2px;">১। চীপ টেকনোলজি অফিসার-১, ব্যবস্থাপনা পরিচালক এর দপ্তর, টেস্ট অফিস।</span></td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <!-- Name 2-->
        <table>
            <tr>
                <td style="width: 70%;"></td>
                <td style="width: 20%; text-align: center;"><span>মোঃ মাহবুব আহমেদ চৌধুরী</span></td>
                <td style="width: 10%;"></td>
            </tr>
            <tr>
                <td style="width: 70%;"></td>
                <td style="width: 20%; text-align: center;"><span>প্রজেক্ট সহকারী</span></td>
                <td style="width: 10%;"></td>
            </tr>
        </table>
</body>

</html>