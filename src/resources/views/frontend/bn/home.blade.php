<x-lbs-bn-master>
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xxl-8">
                        <div class="row">
                            <h1 class="d-flex text-gray-900 opacity-75 fs-2tx fw-bold my-4 text-bangla">
                                {{-- {{__('Elevate Government Correspondence:')}} --}}
                                সরকারি চিঠিপত্র উন্নত করন:
                            </h1>
                            <h2 class="d-flex text-gray-900 opacity-75 fs-2x fw-bold my-1 text-bangla">
                                {{-- {{__('Letter Builder - Where Time-saving Solutions Meet Precision')}} --}}
                                লেটার বিল্ডার - যেখানে সময় সাশ্রয়ী সমাধানগুলি যথার্থতা পূরণ করে
                             </h2>
                            <h2 class="d-flex text-gray-900 opacity-75 fs-2x fw-bold my-1 text-bangla"> 
                                {{-- {{__('in Communication Excellence!')}} --}}
                                কমিউনিকেশন এক্সিলেন্সে!
                            </h2>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xxl-4">
                        <div class="a2i-no-repeat mb-7 opacity-75"
                            style="height: 180px; width: auto; background-image:url('{{ asset('ui/frontend/assets') }}/media/logos/a2i-logo.png'); background-position: right top; background-size: 20% auto;">
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <h1 class="d-flex text-gray-800 fw-bold pb-4 text-bangla" id="templates">
                    {{-- {{__('Templates')}} --}}টেমপ্লেট
                </h1>
            </div>
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-sm-6 col-xxl-3">
                    <!--begin::Card widget 14-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body text-center pb-5">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                href="{{ asset('ui/frontend/assets') }}/media/forms/notice.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/notice.png'); background-position: center top;">
                                </div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-end flex-stack mb-1">
                                <!--begin::Title-->
                                <div class="text-start">
                                    <span
                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block text-bangla">
                                        {{-- {{__('Notice')}} --}}নোটিশ
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6 text-bangla">
                                        {{-- {{__('Total Download:')}} --}} মোট ডাউনলোড 
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{__('2,630')}}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{route('pdfDownload', $docId="1")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 1)}}">
                                {{__('বিস্তারিত দেখুন')}}
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xxl-3">
                    <!--begin::Card widget 14-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body text-center pb-5">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                href="{{ asset('ui/frontend/assets') }}/media/forms/office-memo.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/office-memo.png'); background-position: center top;">
                                </div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-end flex-stack mb-1">
                                <!--begin::Title-->
                                <div class="text-start">
                                    <span
                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block text-bangla">
                                        {{-- {{__('Office Memo')}} --}}অফিস স্মারক
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6 text-bangla">
                                        {{-- {{__('Total Download:')}} --}}মোট ডাউনলোড 
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{__('17,035')}}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{route('pdfDownload', $docId="2")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 2)}}">
                                {{__('বিস্তারিত দেখুন')}}
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xxl-3">
                    <!--begin::Card widget 14-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body text-center pb-5">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                href="{{ asset('ui/frontend/assets') }}/media/forms/circular-sample.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/circular-sample.png'); background-position: center top;>
                                </div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-end flex-stack mb-1">
                                <!--begin::Title-->
                                <div class="text-start">
                                    <span
                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block text-bangla">
                                        {{-- {{__('Circular Sample')}} --}}পরিপত্রের নমুনা 
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6 text-bangla">
                                        {{-- {{__('Total Download:')}} --}}মোট ডাউনলোড 
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{__('2,630')}}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{route('pdfDownload', $docId="3")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 3)}}">
                                {{__('বিস্তারিত দেখুন')}}
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xxl-3">
                    <!--begin::Card widget 14-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body text-center pb-5">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                href="{{ asset('ui/frontend/assets') }}/media/forms/meeting-minutes.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/meeting-minutes.png'); background-position: center top;>
                                </div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-end flex-stack mb-1">
                                <!--begin::Title-->
                                <div class="text-start">
                                    <span
                                        class="fw-bold text-bangla text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{-- {{__('Meeting Minutes')}} --}}সভার কার্যবিবরণী
                                    </span>
                                    <span class="text-gray-500 text-bangla mt-1 fw-bold fs-6">
                                        {{-- {{__('Total Download:')}} --}} মোট ডাউনলোড 
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{__('17,035')}}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{route('pdfDownload', $docId="6")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 6)}}">
                                {{__('বিস্তারিত দেখুন')}}
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
                <div class="col-sm-12 col-xxl-12 text-center">
                    <a href="{{route('bn.multipleTemplate')}}" class="btn btn-primary btn-sm flex-shrink-0 ms-auto text-bangla">
                        {{-- {{__('View More')}} --}}আরো দেখুন

                    </a>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <h1 class="d-flex text-gray-800 fw-bold pt-4 pb-4 text-bangla" id="how_to_use">
                    {{-- {{__('How To Use')}} --}}যেভাবে ব্যবহার করব
                </h1>
            </div>
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Card widget 15-->
                    <div class="card card-flush h-xl-90">
                        <!--begin::Body-->
                        <div class="card-body py-9">
                            <!--begin::Row-->
                            <div class="row gx-9 h-100">
                                <!--begin::Col-->
                                <div class="col-sm-12">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column h-100">
                                        <!--begin::Header-->
                                        <div class="mb-7">
                                            <!--begin::Title-->
                                            <div class="mb-6">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-1 fw-bold text-bangla">
                                                    {{-- {{__('Service Standard')}} --}}সার্ভিস স্ট্যান্ডার্ড
                                                </a>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div
                                            class="d-flex flex-column border border-1 border-gray-300 text-center pt-5 pb-7 mb-8 card-rounded">
                                            <span class="fw-bold text-gray-800 fs-3 text-bangla">
                                                {{-- {{__('The service standard helps to create and run great public services ...')}} --}}
                                                পরিষেবার মান পাবলিক পরিষেবা তৈরি করতে এবং চালাতে সাহায্য করে…
                                            </span>
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack mt-auto bd-highlight">
                                            <!--begin::Actions-->
                                            <a href="#" class="btn btn-primary btn-sm flex-shrink-0 ms-auto text-bangla"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_bidding">
                                                {{-- {{__('View Details')}} --}}বিস্তারিত দেখুন
                                            </a>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 15-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Card widget 15-->
                    <div class="card card-flush h-xl-90">
                        <!--begin::Body-->
                        <div class="card-body py-9">
                            <!--begin::Row-->
                            <div class="row gx-9 h-100">
                                <!--begin::Col-->
                                <div class="col-sm-12">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column h-100">
                                        <!--begin::Header-->
                                        <div class="mb-7">
                                            <!--begin::Title-->
                                            <div class="mb-6">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-1 fw-bold text-bangla">
                                                    {{-- {{__('Application Development Guidance')}}</a> --}}
                                                    অ্যাপ্লিকেশন উন্নয়ন নির্দেশিকা
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div
                                            class="d-flex flex-column border border-1 border-gray-300 text-center pt-5 pb-7 mb-8 card-rounded">
                                            <span class="fw-bold text-gray-800 fs-3 text-bangla">
                                                {{-- {{__('Guidance for application developers of applications which will be run on devices ...')}} --}}
                                                অ্যাপ্লিকেশনগুলির অ্যাপ্লিকেশন বিকাশকারীদের জন্য নির্দেশিকা যা ডিভাইসগুলিতে চালানো হবে …
                                                </span>
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack mt-auto bd-highlight">
                                            <!--begin::Actions-->
                                            <a href="#" class="btn btn-primary btn-sm flex-shrink-0 ms-auto text-bangla"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_bidding">
                                                {{-- {{__('View Details')}} --}}বিস্তারিত দেখুন
                                            </a>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 15-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Post-->
    </div>
</x-lbs-bn-master>