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
            font-family: "Nikosh", sans-serif;
            border-collapse: collapse;
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
            width: auto;
        }
        .border-bottom {
            border-bottom: 2px dotted #000;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        .text-left{
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
            margin-top: 10px;
        }
        .mt-15 {
            margin-top: 15px;
        }
        .mt-20 {
            margin-top: 20px;
        }
        .whitespace-nowrap {
            white-space: nowrap;
        }
    </style>
</head>

<body>
        

        <!-- Cromopottro -->
        
        <x-pdf-postscript/>

        <!-- Intruction No -->
        <x-pdf-instructionNo/>
        
        <!-- Header -->
        <x-pdf-letterName/>

        <!-- Govt. Ministry/Division Row Website-->
        <x-pdf-govtMinistryWeb/>
        
        <!-- Time And Date -->
        <table>
            <tr>
                <td class="w-20">
                    <x-pdf-no/>
                </td>
                <td class="w-60"></td>
                <td class="w-20">
                    <x-pdf-date/>
                </td>
            </tr>
        </table>
        <br />
        <!-- Poripotrro -->
        <table class="text-center">
            <tr>
                <td><span class="font-bold">পরিপত্র</span></td>
            </tr>
        </table>
        <!-- Bisoy -->
        <table>
            <tr>
                <td class="w-10"></td>
                <td class="w-3 text-right"><span>বিষয়:</span></td>
                <td class="w-45 border-bottom"><span></span></td>
                <td class="w-1">।</td>
                <td class="w-40"></td>
            </tr>
        </table>
        <!-- 1st Line -->
        <table class="mt-20">
            <tr>
                <td class="w-10"></td>
                <td class="w-80 border-bottom"></td>
                <td class="w-10"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 7%;"></td>
                <td style="width: 42%; border-bottom: 1px dashed #000;"><span></span></td>
                <td style="width: 3%;">।</td>
                <td style="width: auto;"></td>
            </tr>
        </table>
        <br />
        <!-- 2nd line -->
        <table>
            <tr>
                <td style="width: 7%;"></td>
                <td style="width: 2%; text-align: right;"><span>২।</span></td>
                <td style="width: 5%;"></td>
                <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                <td style="width: 7%;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 7%;"></td>
                <td style="width: 42%; border-bottom: 1px dashed #000;"><span></span></td>
                <td style="width: 3%;">।</td>
                <td style="width: 47%;"></td>
            </tr>
        </table>
        <br />
        <!-- 3rd line -->
        <table>
            <tr>
                <td style="width: 7%;"></td>
                <td style="width: 2%; text-align: right;"><span>৩।</span></td>
                <td style="width: 5%;"></td>
                <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                <td style="width: 7%;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 7%;"></td>
                <td style="width: 42%; border-bottom: 1px dashed #000;"><span></span></td>
                <td style="width: 3%;">।</td>
                <td style="width: 47%;"></td>
            </tr>
        </table>
        <br />
        <!-- 4th line -->
        <table>
            <tr>
                <td style="width: 7%;"></td>
                <td style="width: 2%; text-align: right;"><span>৪।</span></td>
                <td style="width: 3%;"></td>
                <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                <td style="width: 1%;">।</td>
                <td style="width: 7%;"></td>
            </tr>
        </table>
        <br />
        <br />
        <!-- Sender Info -->
        <table>
            <tr>
                <td style="width: 65%;"></td>
                <td style="text-align: left;">
                    <table>
                        <tr>
                            <td style="width: 1px; white-space: nowrap;"><span>স্বাক্ষর</span></td>
                            <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 1px; white-space: nowrap;"><span>নাম</span></td>
                            <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 1px; white-space: nowrap;"><span>পরিচিতি নম্বর (যদি থাকে)</span></td>
                            <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 1px; white-space: nowrap;"><span>পদনাম</span></td>
                            <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 1px; white-space: nowrap;"><span>ফোন</span></td>
                            <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 1px; white-space: nowrap;"><span>ফ্যাক্স</span></td>
                            <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 1px; white-space: nowrap;"><span>ই-মেইল</span></td>
                            <td style="width: auto; border-bottom: 1px dashed #000;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- Bitoron -->
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 10%"><span>বিতরণ :</span></td>
                <td style="width: 80%;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 5%; text-align: right;"><span>১ :</span></td>
                <td style="width: 25%; border-bottom: 1px dashed #000;"></td>
                <td style="width: 60%;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 5%; text-align: right;"><span>২ :</span></td>
                <td style="width: 25%; border-bottom: 1px dashed #000;"></td>
                <td style="width: 60%;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 10%;"></td>
                <td style="width: 5%; text-align: right;"><span>৩ :</span></td>
                <td style="width: 25%; border-bottom: 1px dashed #000;"></td>
                <td style="width: 60%;"></td>
            </tr>
        </table>
        <br />
        <!-- Page Number -->
        <table>
            <tr>
                <td rowspan="2" style="width: 5%;"></td>
                <td rowspan="2" style="width: 5%; text-align: right;"><span>১২</span></td>
                <td style="width: 5;"></td>
                <td rowspan="2" style="width: 25%;"></td>
                <td rowspan="2" style="width: 60%;"></td>
            </tr>
            <tr>
                <td style="border-top: 2px solid"></td>
            </tr>
        </table>
</body>

</html>