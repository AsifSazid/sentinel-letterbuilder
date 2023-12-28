<x-lbs-bn-master>
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-gray-900 opacity-75 fw-bold my-1 text-bangla fs-2x"><a href="{{route('bn.home')}}" class="text-gray-900">{{__('হোম')}}</a> &nbsp;{{__('/ কিভাবে ব্যবহার করে ')}}</h1>
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
                                                    {{-- {{__('Service Standard')}}</a> --}}সার্ভিস স্ট্যান্ডার্ড
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
                                                    {{-- {{__('Application Development Guidance')}} --}}অ্যাপ্লিকেশন উন্নয়ন নির্দেশিকা
                                                </a>
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