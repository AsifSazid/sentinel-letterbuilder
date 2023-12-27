<x-lbs-master>
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-gray-900 opacity-75 fw-bold my-1 fs-3"><a href="{{ route('home') }}"
                        class="text-gray-900">{{ __('Home') }}</a>
                    &nbsp;{{ __('/ All Templates ') }}{{ __('/ Semi Govt Letter Sample') }}</h1>
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
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Engage widget 6-->
                    <div class="row pb-lg-8 pb-4">
                        <div class="card flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-500px"
                            style="background-color:#020202;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/semi-govt-letter-sample.png">
                            <!--begin::Body-->
                            <div class="card-body d-flex justify-content-between flex-column ps-xl-18">
                                <!--begin::Heading-->
                                <h3 class="fw-bold text-white fs-2x mb-5 ms-n1">Semi Govt Letter Sample</h3>
                                <!--end::Heading-->
                                <!--begin::Action-->
                                <div class="mb-xl-10 mb-3">
                                    <a href='#' class="btn btn-primary fw-semibold me-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">{{ __('Download') }}</a>
                                    <a href="{{route('preview', $docId = 9)}}"
                                        class="btn btn-color-white bg-transparent btn-outline fw-semibold"
                                        style="border: 1px solid rgba(255, 255, 255, 0.3)">{{ __('Preview') }}</a>
                                </div>
                                <!--begin::Action-->
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                    <!--end::Engage widget 6-->
                    <!--begin::Version Details & Technology-->
                    <div class="row pb-lg-8 pb-4">
                        <div class="col-xl-6 p-0">
                            <div class="card card-flush h-xl-100" id="kt_player_widget_2">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <h3 class="card-title fw-bold text-gray-900">{{ __('Version Details') }}</h3>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Section-->
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="text-left mb-5">
                                                <!--begin::Title-->
                                                <span
                                                    class="opacity-75 fw-bold">{{ __('Last
                                                                                                                                                                                                                Update') }}</span>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="text-left mb-5">
                                                <!--begin::Title-->
                                                <span class="opacity-75">{{ __('8 November 2023') }}</span>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="text-left mb-5">
                                                <!--begin::Title-->
                                                <span
                                                    class="text-white opacity-75 fw-bold">{{ __('Published') }}</span>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="text-left mb-5">
                                                <!--begin::Title-->
                                                <span class="text-white opacity-75">{{ __('2 June 2020') }}</span>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Card body-->
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card h-xl-100" id="kt_list_widget_24">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">{{ __('Technology') }}</span>
                                    </h3>
                                    <!--begin::Toolbar-->
                                    {{-- <div class="card-toolbar">
                                        <a href="#"
                                            class="btn btn-sm btn-light">{{ __('View All Technology') }}</a>
                                    </div> --}}
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Item-->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="d-flex flex-stack">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-circle symbol-60px me-4">
                                                    <img src="{{ asset('ui/frontend/assets') }}/media/logos/html.png"
                                                        class="" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-stack">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-circle symbol-60px me-4">
                                                    <img src="{{ asset('ui/frontend/assets') }}/media/logos/css.png"
                                                        class="" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="d-flex flex-stack">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-circle symbol-60px me-4">
                                                    <img src="{{ asset('ui/frontend/assets') }}/media/logos/js.png"
                                                        class="" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                        </div>
                    </div>
                    <!--end::Version Details & Technology-->
                    <!--begin::Features-->
                    <div class="row pb-lg-8 pb-4">
                        <div class="card card-flush">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">{{ __('Features') }}</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2 pb-4">
                                <div class="separator separator-dashed my-5"></div>
                                <ul>
                                    <li><span>{{ __('Built on top of Vue JS 3.x with Vite JS compitible') }}</span>
                                    </li>
                                    <li><span>Built on top of Vue JS 3.x with Vite JS compitible</span></li>
                                    <li><span>Built on top of Vue JS 3.x with Vite JS compitible</span></li>
                                    <li><span>Built on top of Vue JS 3.x with Vite JS compitible</span></li>
                                    <li><span>Built on top of Vue JS 3.x with Vite JS compitible</span></li>
                                    <li><span>Built on top of Vue JS 3.x with Vite JS compitible</span></li>
                                </ul>
                            </div>
                            <!--end: Card Body-->
                        </div>
                    </div>
                    <!--end::Features-->
                    <!--begin::Change Log-->
                    <div class="row pb-lg-8 pb-4">
                        <div class="card card-flush">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Change Log</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2 pb-4">
                                <div class="separator separator-dashed my-5"></div>
                                <h4 class="fw-bold text-gray-500 mb-6">{{ __('Version 1.0 - Dec 30, 2023') }}</h4>
                                <ul>
                                    <li><span>{{ __('Initial Release') }}</span></li>
                                </ul>
                            </div>
                            <!--end: Card Body-->
                        </div>
                    </div>
                    <!--end::Change Log-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Video widget 2-->
                    <div class="card card-flush h-xl-100" id="kt_player_widget_2">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">{{ __('Related Letters') }}</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light">{{ __('View More') }}</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-7">
                            <!--begin::Row-->
                            <div class="row align-items-end gx-5 gx-xl-10">

                                <!--begin::Col-->
                                <div class="col-sm-12 col-xxl-12">
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
                                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                                        {{ __('Government Letter Sample') }}
                                                    </span>
                                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                                        {{ __('Total Download:') }}
                                                    </span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Total-->
                                                <span
                                                    class="text-gray-600 text-end fw-bold fs-6">{{ __('17,035') }}</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="card-footer d-flex flex-stack pt-0">
                                            <!--begin::Link-->
                                            <a href="{{ route('pdfDownload', $docId = '4') }}"
                                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                                {{ __('Download') }}
                                            </a>
                                            <!--end::Link-->
                                            <!--begin::Link-->
                                            <a class="btn btn-sm btn-light flex-shrink-0"
                                                href="{{ route('preview', $docId = 4) }}">
                                                {{ __('View Deatails') }}
                                            </a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Card widget 14-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row align-items-end gx-5 gx-xl-10">
                                <!--begin::Col-->
                                <div class="col-sm-12 col-xxl-12">
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
                                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                                        {{ __('Informal Note') }}
                                                    </span>
                                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                                        {{ __('Total Download:') }}
                                                    </span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Total-->
                                                <span
                                                    class="text-gray-600 text-end fw-bold fs-6">{{ __('2,630') }}</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="card-footer d-flex flex-stack pt-0">
                                            <!--begin::Link-->
                                            <a href="{{ route('pdfDownload', $docId = '5') }}"
                                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                                {{ __('Download') }}
                                            </a>
                                            <!--end::Link-->
                                            <!--begin::Link-->
                                            <a class="btn btn-sm btn-light flex-shrink-0"
                                                href="{{ route('preview', $docId = 5) }}">
                                                {{ __('View Deatails') }}
                                            </a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Card widget 14-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row align-items-end gx-5 gx-xl-10">
                                <!--begin::Col-->
                                <div class="col-sm-12 col-xxl-12">
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
                                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                                        {{ __('Notification Sample') }}
                                                    </span>
                                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                                        {{ __('Total Download:') }}
                                                    </span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Total-->
                                                <span
                                                    class="text-gray-600 text-end fw-bold fs-6">{{ __('2,630') }}</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="card-footer d-flex flex-stack pt-0">
                                            <!--begin::Link-->
                                            <a href="{{ route('pdfDownload', $docId = '7') }}"
                                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                                {{ __('Download') }}
                                            </a>
                                            <!--end::Link-->
                                            <!--begin::Link-->
                                            <a class="btn btn-sm btn-light flex-shrink-0"
                                                href="{{ route('preview', $docId = 7) }}">
                                                {{ __('View Deatails') }}
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
                        <!--end::Card body-->
                    </div>
                    <!--end::Video widget 2-->
                </div>
                <!--end::Col-->
            </div>
        </div>
        <!--end::Post-->
    </div>
</x-lbs-master>
