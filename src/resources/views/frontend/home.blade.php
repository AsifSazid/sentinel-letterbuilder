<x-lbs-master>
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-sm-8 col-xxl-8">
                        <div class="row">
                            <h1 class="d-flex text-gray-900 opacity-75 fs-2tx fw-bold my-4">
                                {{ __('Elevate Government Correspondence:') }}
                            </h1>
                            <h2 class="d-flex text-gray-900 opacity-75 fs-2x fw-bold my-1">
                                {{ __('Letter Builder - Where Time-Saving Solutions ') }}
                            </h2>
                            <h2 class="d-flex text-gray-900 opacity-75 fs-2x fw-bold my-1">
                                {{ __('Meet Precision in Communication Excellence!') }}
                            </h2>
                            <h2 class="d-flex text-gray-900 opacity-75 fs-xl my-1">
                                "Letter Builder" is a system for creating letters in various formats according to the
                                user's needs easily, in less time, using technology for online or external communication
                                in government offices.
                            </h2>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-sm-4 col-xxl-4">
                        <div class="a2i-no-repeat mb-7 opacity-75"
                            style="height: 180px; width: auto; background-image:url('{{ asset('ui/frontend/assets') }}/media/logos/a2i-logo.png'); background-position: center top; background-size: 20% auto;">
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
    {{-- Counter --}}
    <!--begin::Row-->
    <div class="d-flex flex-wrap flex-center justify-content-lg-between mx-auto w-xl-1000px">
        <!--begin::Item-->
        <div class="d-flex flex-column flex-center h-150px w-150px h-lg-200px w-lg-200px m-3 rounded-circle">
            <!--begin::Info-->
            <div class="mb-0">
                <!--begin::Value-->
                <div class="text-center">
                    <div class="fs-lg-2hx fs-2x fw-bold d-flex flex-center">
                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="46"
                            data-kt-countup-suffix="">
                            0</div>
                    </div>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="text-gray-600 fw-semibold fs-5 lh-0">
                        Ministries/Divisions
                    </span>
                    <!--end::Label-->
                </div>
            </div>
            <!--end::Info-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex flex-column flex-center h-150px w-150px h-lg-200px w-lg-200px m-3 rounded-circle">
            <!--begin::Info-->
            <div class="mb-0">
                <div class="text-center">
                    <!--begin::Value-->
                    <div class="fs-lg-2hx fs-2x fw-bold d-flex flex-center">
                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="12"
                            data-kt-countup-suffix="k+">0</div>
                    </div>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="text-gray-600 fw-semibold fs-5 lh-0">
                        Offices
                    </span>
                    <!--end::Label-->
                </div>
            </div>
            <!--end::Info-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex flex-column flex-center h-150px w-150px h-lg-200px w-lg-200px m-3 rounded-circle">
            <!--begin::Info-->
            <div class="mb-0">
                <div class="text-center">
                    <!--begin::Value-->
                    <div class="fs-lg-2hx fs-2x fw-bold d-flex flex-center">
                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="101"
                            data-kt-countup-suffix="k+">0</div>
                    </div>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="text-gray-600 fw-semibold fs-5 lh-0">
                        Users
                    </span>
                    <!--end::Label-->
                </div>
            </div>
            <!--end::Info-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex flex-column flex-center h-150px w-150px h-lg-200px w-lg-200px m-3 rounded-circle">
            <!--begin::Info-->
            <div class="mb-0">
                <div class="text-center">
                    <!--begin::Value-->
                    <div class="fs-lg-2hx fs-2x fw-bold d-flex flex-center">
                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="9"
                            data-kt-countup-suffix="">0</div>
                    </div>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="text-gray-600 fw-semibold fs-5 lh-0">
                        Templates
                    </span>
                    <!--end::Label-->
                </div>
            </div>
            <!--end::Info-->
        </div>
        <!--end::Item-->
    </div>

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <h1 class="d-flex text-gray-800 fw-bold pb-4" id="templates">{{ __('Templates') }}</h1>
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
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('2,630') }}</span>
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
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('17,035') }}</span>
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
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('2,630') }}</span>
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
                                <span class="text-gray-600 text-end fw-bold fs-6">{{ __('17,035') }}</span>
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
                <div class="col-sm-12 col-xxl-12 text-center">
                    <a href="{{ route('multipleTemplate') }}"
                        class="btn btn-primary btn-sm flex-shrink-0 ms-auto">{{ __('View More') }}</a>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <h1 class="d-flex text-gray-800 fw-bold pt-4 pb-4" id="how_to_use">{{ __('How To Use') }}</h1>
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
                                                    class="text-gray-800 text-hover-primary fs-1 fw-bold">
                                                    {{-- {{ __('Service Standard') }} --}}How Letter Builder Works
                                                </a>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div
                                            class="d-flex flex-column border border-1 border-gray-300 text-center pt-5 pb-7 mb-8 card-rounded">
                                            <span class="fw-bold text-gray-800 fs-xl">
                                                {{-- {{ __('The service standard helps to create and run great public services ...') }} --}}
                                                To use Letter Builder, government employees only need a web browser and
                                                an Internet connection. They go to the Letter Builder website and create
                                                a username and password. Once they sign in, they can create a new letter
                                                or edit an existing letter.
                                            </span>
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack mt-auto bd-highlight">
                                            <!--begin::Actions-->
                                            <a href="#" class="btn btn-primary btn-sm flex-shrink-0 ms-auto"
                                                data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_bidding">{{ __('View Details') }}</a>
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
                                                    class="text-gray-800 text-hover-primary fs-1 fw-bold">
                                                    {{-- {{ __('Application Development Guidance') }} --}}
                                                    The future of Letter Builder
                                                </a>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div
                                            class="d-flex flex-column border border-1 border-gray-300 text-center pt-5 pb-7 mb-8 card-rounded">
                                            <span class="fw-bold text-gray-800 fs-xl">
                                                {{-- {{ __('Guidance for application developers of applications which will be run on devices ...') }} --}}
                                                LetterBuilder is also aligned with Bangladesh Government's ambitious
                                                initiative, 'Smart Bangladesh,' Vision 2041. This platform helps in
                                                making government offices more efficient and effective, ultimately
                                                providing better services to citizens. Letter Builder is an innovative
                                                platform that is helping to make government communications easier, more
                                                efficient and effective, and will continue to do so in the future.
                                            </span>
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack mt-auto bd-highlight">
                                            <!--begin::Actions-->
                                            <a href="#" class="btn btn-primary btn-sm flex-shrink-0 ms-auto"
                                                data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_bidding">{{ __('View
                                                                                                                                                                                                                                                Details') }}</a>
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
            <!--begin::Carousel Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <div id="kt_carousel_2_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <!--begin::Heading-->
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <!--begin::Label-->
                        <span class="fs-4 fw-bold pe-2">Major e-government systems that make use of Letter
                            Builder</span>
                        <!--end::Label-->

                        <!--begin::Carousel Indicators-->
                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet">
                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="0" class="ms-1 active">
                            </li>
                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="1" class="ms-1"></li>
                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="2" class="ms-1"></li>
                        </ol>
                        <!--end::Carousel Indicators-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Carousel-->
                    <div class="carousel-inner pt-8">
                        <!--begin::Item-->
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center">
                                <a href="link-to-logo1">
                                    <img src="https://doptor-portal-admin-v2.bokhshi.com/images/platformimage/oL8ZybJ6D9MxVnWozhR8N7jOPrs0UpYr2zjGyptI.png"
                                        class="d-block img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <a href="https://www.nothi.gov.bd/login">
                                    <img src="https://www.nothi.gov.bd/img/nothi_logo_login.png"
                                        class="d-block img-fluid" height="20px" alt="...">
                                </a>

                            </div>
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Carousel-->


                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                </div>
            </div>
            <!--begin::Row-->
        </div>
        <!--end::Post-->
    </div>

</x-lbs-master>
