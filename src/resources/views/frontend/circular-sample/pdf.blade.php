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
            width: 1%;
        }

        .w-3 {
            width: 3%;
        }

        .w-5 {
            width: 5%;
        }

        .w-10 {
            width: 10%;
        }

        .w-15 {
            width: 15%;
        }

        .w-20 {
            width: 20%;
        }

        .w-25 {
            width: 25%;
        }

        .w-30 {
            width: 30%;
        }

        .w-35 {
            width: 35%;
        }

        .w-40 {
            width: 40%;
        }

        .w-45 {
            width: 45%;
        }

        .w-50 {
            width: 50%;
        }

        .w-55 {
            width: 55%;
        }

        .w-60 {
            width: 60%;
        }

        .w-65 {
            width: 6%;
        }

        .w-70 {
            width: 70%;
        }

        .w-75 {
            width: 75%;
        }

        .w-80 {
            width: 80%;
        }

        .w-85 {
            width: 85%;
        }

        .w-90 {
            width: 90%;
        }

        .w-95 {
            width: 95%;
        }

        .w-auto {
            width: auto !important;
        }

        .border-bottom {
            border-bottom: 2px dotted #000;
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
            padding-top: 10px;
        }

        .pt-20 {
            padding-top: 20px;
        }

        .mt-10 {
            margin-top: 5px;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mt-15 {
            margin-top: 15px;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .mt-30 {
            margin-top: 30px;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .whitespace-nowrap {
            white-space: nowrap;
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
                        <td class="w-1px"><span>স্বাক্ষর</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-5">
                    <tr>
                        <td class="w-1px"><span>নাম</span></td>
                        <td class="border-bottom"></td>
                    </tr>
                </table>
                <table class="mt-10">
                    <tr>
                        <td class="w-1px whitespace-nowrap"><span>পরিচিতি নম্বর (যদি থাকে)</span></td>
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
                        <td class="w-1px"><span>ই-মেইল</span></td>
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

</body>

</html>
