<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <link href='http://sonnetdp.github.io/nikosh/css/nikosh.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5 pb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="fw-bold fs-2x pt-10 pb-10 text-bangla">
                            নোটিশ
                        </h3>
                    </div>
                    <div class="card-body">
                        <div style="background-color: white; padding: 2%;">
                            <!-- Image -->
                            {{-- <table>
            <tr>
                <td style="text-align: center;"><img src="{{ asset('ui/frontend/assets/media/forms/govtlogo.png') }}" alt="" width="100" height="100"></td>
            </tr>
        </table> --}}
                            <!-- Header Govt -->
                            <x-pdf-govt />
                            {{-- <table>
            <tr>
                <td style="width: auto; text-align: center;"><span>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span></td>
            </tr>
        </table> --}}
                            {{-- Ministry --}}
                            <x-pdf-ministry />
                            {{-- <table>
            <tr>
                <td style="width: auto; text-align: center;"><span>মন্ত্রণালয়ের নাম লিখুন</span></td>
            </tr>
        </table> --}}

                            <!-- Headline -->
                            <table>
                                <tr>
                                    <td class="w-30 text-left"><span>ছবি আপলোড করুন/হেডিং লিখুন</span></td>
                                    <td class="w-40 text-center mt-5">
                                        <span>টেস্ট অফিস ফর নথি ভার্শন-২</span>
                                    </td>
                                    <td class="w-30 text-right"><span>ছবি আপলোড করুন/হেডিং লিখুন</span></td>
                                </tr>
                            </table>
                            {{-- <table>
            <tr>
                <td style="width: 44%; text-align: center;"><span>ছবি আপলোড করুন/হেডিং লিখুন</span></td>
                <td style="text-align: center; width: auto; white-space: nowrap; padding-top: 2px;">
                    <span>টেস্ট অফিস ফর নথি ভার্শন-২</span>
                </td>
                <td style="width: 44%; text-align: center;"><span>ছবি আপলোড করুন/হেডিং লিখুন</span></td>
            </tr>
        </table> --}}
                            <table>
                                <tr>
                                    <td class="text-center"><span>ব্যবস্থাপনা পরিচালক এর দপ্তর</span></td>
                                </tr>
                            </table>
                            <!-- Dott -->
                            <table class="text-center">
                                <tr>
                                    <td>......</td>
                                </tr>
                            </table>
                            <table class="text-center">
                                <tr>
                                    <td>......</td>
                                </tr>
                            </table>
                            {{-- <br /> --}}
                            <!-- Date -->
                            <table class="mt-10">
                                <tr>
                                    <td class="w-80"></td>
                                    <td class="w-20">
                                        <x-pdf-date />
                                    </td>
                                </tr>
                            </table>
                            {{-- <table>
        <tr>
            <td style="width: 70%;"></td>
            <td style="width: 3%;"><span>তারিখ:</span></td>
            <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
            <td style="width: 2%;"></td>
        </tr>
    </table> --}}
                            <!-- Number -->
                            <table>
                                <tr>
                                    <td class="w-10 font-bold"><span>নম্বর:</span></td>
                                    <td class="w-90"></td>
                                </tr>
                            </table>
                            {{-- <br /> --}}
                            <!-- Notice -->
                            <table class="mt-10">
                                <tr>
                                    <td class="text-center font-bold"><span style="">বিজ্ঞপ্তি/নোটিশ</span></td>
                                </tr>
                            </table>
                            <!-- Bisoy -->
                            <table>
                                <tr>
                                    <td class="w-5 font-bold whitespace-nowrap"><span>বিষয়:</span></td>
                                    <td class="w-10 border-bottom"><span></span></td>
                                    <td class="w-85"></td>
                                </tr>
                            </table>
                            {{-- <table>
        <tr>
            <td style="width: 8%;"></td>
            <td style="width: 5%;"><span>বিষয়:</span></td>
            <td style="width: 10%; border-bottom: 1px dashed #000;"><span></span></td>
            <td style="width: auto;"></td>
        </tr>
    </table> --}}
                            {{-- <br /> --}}
                            <table class="mt-10">
                                <tr>
                                    {{-- <td class="w-5"></td> --}}
                                    <td class="w-40"><span>('বিজ্ঞপ্তি লিখতে এখানে ক্লিক করুন')</span></td>
                                    {{-- <td class="w-5"></td> --}}
                                    <td class="w-60"></td>

                                    {{-- <td style="white-space: nowrap;">
                <span>('বিজ্ঞপ্তি লিখতে এখানে ক্লিক করুন')</span>
            </td> --}}
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary text-bangla">ডাউনলোড পিডিএফ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
