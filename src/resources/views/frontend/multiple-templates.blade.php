<x-lbs-master>
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-gray-900 opacity-75 fw-bold my-1 fs-3"><a href="{{ route('home') }}"
                        class="text-gray-900">{{ __('Home') }}</a> &nbsp;{{ __('/ All Templates ') }}</h1>
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
                <h1 class="d-flex text-gray-800 fw-bold pb-4" id="templates">{{ __('All Templates') }}</h1>
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Notice') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('63') }}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{ route('pdfDownload', $docId = '1') }}"
                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{ __('Download') }}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 1) }}">
                                {{ __('View Deatails') }}
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Office Memo') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('35') }}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{ route('pdfDownload', $docId = '2') }}"
                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{ __('Download') }}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 2) }}">
                                {{ __('View Deatails') }}
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Circular Sample') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('20') }}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{ route('pdfDownload', $docId = '3') }}"
                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{ __('Download') }}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 3) }}">
                                {{ __('View Deatails') }}
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
                                href="{{ asset('ui/frontend/assets') }}/media/forms/official-letter.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/official-letter.png'); background-position: center top;">
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Official Letter') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('15') }}</span>
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
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 4) }}">
                                {{ __('View Deatails') }}
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
                                href="{{ asset('ui/frontend/assets') }}/media/forms/unofficial-note.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/unofficial-note.png'); background-position: center top;">
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Unofficial Note') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('24') }}</span>
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
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 5) }}">
                                {{ __('View Deatails') }}
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Meeting Minutes') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('13') }}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{ route('pdfDownload', $docId = '6') }}"
                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{ __('Download') }}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 6) }}">
                                {{ __('View Deatails') }}
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Notification Sample') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('17') }}</span>
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
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 7) }}">
                                {{ __('View Deatails') }}
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
                                href="{{ asset('ui/frontend/assets') }}/media/forms/office-order.png">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;background-image:url('{{ asset('ui/frontend/assets') }}/media/forms/office-order.png'); background-position: center top;">
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Office Order') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('75') }}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{ route('pdfDownload', $docId = '8') }}"
                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{ __('Download') }}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 8) }}">
                                {{ __('View Deatails') }}
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
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">
                                        {{ __('Semi Govt Letter Sample') }}
                                    </span>
                                    <span class="text-gray-500 mt-1 fw-bold fs-6">
                                        {{ __('Total Download:') }}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('38') }}</span>
                                <!--end::Total-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-stack pt-0">
                            <!--begin::Link-->
                            <a href="{{ route('pdfDownload', $docId = '9') }}"
                                class="btn btn-sm btn-primary flex-shrink-0 me-2">
                                {{ __('Download') }}
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light flex-shrink-0" href="{{ route('details', $docId = 9) }}">
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
        <!--end::Post-->
    </div>
</x-lbs-master>
