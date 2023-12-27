<x-lbs-bn-master>
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-gray-900 opacity-75 fw-bold my-1 text-bangla fs-2x"><a href="{{route('bn.home')}}" class="text-gray-900">{{__('হোম')}}</a> &nbsp;{{__('/ সমস্ত টেমপ্লেট ')}}</h1>
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
                    {{-- {{__('All Templates')}} --}}সমস্ত টেমপ্লেট
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
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/circular-sample.png'); background-position: center top;">
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
                                href="{{ asset('ui/frontend/assets') }}/media/forms/government-letter-sample.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/government-letter-sample.png'); background-position: center top;">
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
                                        {{-- {{__('Government Letter Sample')}} --}}সরকারি পত্রের নমুনা 
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
                            <a href="{{route('pdfDownload', $docId="4")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 4)}}">
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
                                href="{{ asset('ui/frontend/assets') }}/media/forms/informal-note.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/informal-note.png'); background-position: center top;">
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
                                        {{-- {{__('Informal Note')}} --}}অনানুষ্ঠানিক নোট
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
                            <a href="{{route('pdfDownload', $docId="5")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 5)}}">
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
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/meeting-minutes.png'); background-position: center top;">
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
                <!--begin::Col-->
                <div class="col-sm-6 col-xxl-3">
                    <!--begin::Card widget 14-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body text-center pb-5">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                href="{{ asset('ui/frontend/assets') }}/media/forms/notification-sample.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/notification-sample.png'); background-position: center top;">
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
                                        {{-- {{__('Notification Sample')}} --}}প্রজ্ঞাপনের নমুনা 
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
                            <a href="{{route('pdfDownload', $docId="7")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 7)}}">
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
                                href="{{ asset('ui/frontend/assets') }}/media/forms/office-order-sample.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/office-order-sample.png'); background-position: center top;">
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
                                        {{-- {{__('Office Order Sample')}} --}}অফিস আদেশের নমুনা 
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6 text-bangla">
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
                            <a href="{{route('pdfDownload', $docId="8")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 8)}}">
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
                                href="{{ asset('ui/frontend/assets') }}/media/forms/semi-govt-letter-sample.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/semi-govt-letter-sample.png'); background-position: center top;">
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
                                        {{-- {{__('Semi Govt Letter Sample')}} --}}আধা-সরকারি পত্রের নমুনা 
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6 text-bangla">
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
                            <a href="{{route('pdfDownload', $docId="9")}}" class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{__('ডাউনলোড')}}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{route('bn.details', $docId = 9)}}">
                                {{__('বিস্তারিত দেখুন')}}
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Post-->
    </div>
</x-lbs-bn-master>