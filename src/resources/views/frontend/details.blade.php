<x-lbs-master>
    {{-- @dd($doc) --}}
    @php
        $features = $doc['features'];
        $versions = $doc['version_details'];
        $technologies = $doc['technologies'];
        $change_logs = $doc['change_logs'];
        $logo_locations = str_replace(" ", "-", strtolower($doc['doc_name']));
        $docId = $doc['doc_id'];
        // dd($versions);
    @endphp
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-gray-900 opacity-75 fw-bold my-1 fs-3"><a href="{{ route('home') }}"
                        class="text-gray-900">{{ __('Home') }}</a>
                    &nbsp;{{ __('/ All Templates /') }} {{ $doc['doc_name']}}</h1>
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
                        {{-- @dd($logo_locations.'.png') --}}
                        <div class="card flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-500px"
                            style="background-image:url('{{ asset('ui/frontend/assets/media/forms/'.$logo_locations.'.png') }} ')">
                            <!--begin::Body-->
                            <div class="card-body d-flex justify-content-between flex-column ps-xl-18" >
                                <!--begin::Heading-->
                                <h3 class="fw-bold text-gray-800 fs-2x mb-5 ms-n1">{{$doc['doc_name']}}</h3>
                                <!--end::Heading-->
                                <div class="row" style="vertical-align: top">
                                    <div class="col-xl-6" >
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque voluptates quia beatae totam error modi.</p>
                                    </div>
                                </div>
                                <!--begin::Action-->
                                <div class="mb-xl-10 mb-3">
                                    <a href='{{ route('pdfDownload', $docId = $doc['doc_id']) }}' class="btn btn-primary fw-semibold me-2" 
                                        >{{ __('Download') }}</a>
                                    {{-- <a href='#' class="btn btn-primary fw-semibold me-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">{{ __('Download') }}</a> --}}
                                    <a href="{{ route('web.preview', $docId = $doc['doc_id']) }}"
                                        class="btn btn-primary fw-semibold me-2"
                                        style="border: 1px solid rgba(255, 255, 255, 0.3)">{{ __('Preview') }}</a>
                                </div>
                                <!--begin::Action-->
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                    <!--end::Engage widget 6-->
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
                                <div class="separator separator-dashed"></div>
                                <ul class="pt-4">
                                    @forelse ($features as $feature)
                                        <li><span>{{$feature}}</span></li>
                                    @empty
                                        <li><span>{{__('No Feature Available')}}</span></li>    
                                    @endforelse
                                </ul>
                            </div>
                            <!--end: Card Body-->
                        </div>
                    </div>
                    <!--end::Features-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::how to use-->
                    <div class="card card-flush h-xl-100" id="kt_player_widget_2">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">{{ __('How to Use') }}</span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <div class="separator separator-dashed pt-2"></div>
                        <!--begin::Card body-->
                        <div class="card-body pt-7">
                            <!--begin::Row-->
                            <div class="row align-items-end gx-5 gx-xl-10">
                                <!--begin::Body-->
                                <div class="card-body pt-2 pb-4">
                                    <ul>
                                        <li><span>{{ __('Built on top of Vue JS 3.x with Vite JS compitible') }}</span>
                                        </li>
                                        <li><span>Built on top of Vue JS 3.x with Vite JS compitible</span></li>
                                        <li><span>Built on top of Vue JS 3.x with Vite JS compitible</span></li>
                                        
                                    </ul>
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::how to use-->
                </div>
                <!--end::Col-->
            </div>
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <div class="col-4">
                    <div class="card card-flush h-xl-100" id="kt_player_widget_2">
                        <!--begin::Header-->
                        <div class="card-header">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-gray-900">{{ __('Version Details') }}</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <div class="separator separator-dashed"></div>
                        <!--begin::Card body-->
                        <div class="card-body pt-4">
                            <!--begin::Section-->
                            @forelse ($versions as $key => $version)
                                <div class="row">
                                    <div class="col-5">
                                        <div class="text-left mb-5">
                                            <!--begin::Title-->
                                            <span class="opacity-75 fw-bold">{{ $key }}</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="text-left mb-5">
                                            <!--begin::Title-->
                                            <span class="opacity-75">{{$version}}</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </div>
                            @empty
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-left mb-5">
                                        <!--begin::Title-->
                                        <span class="opacity-75 fw-bold">{{ __('No Record Found') }}</span>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </div>
                            @endforelse
                            <!--end::Section-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <div class="col-4">
                    <div class="card h-xl-100" id="kt_list_widget_24">
                        <!--begin::Header-->
                        <div class="card-header border-0">
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
                        <div class="separator separator-dashed"></div>
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Item-->
                            <div class="row">
                                @forelse ($technologies as $technology)
                                    <div class="col-3 p-3">
                                        <div class="d-flex flex-stack">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-circle symbol-60px me-4">
                                                <img src="{{ asset('ui/frontend/assets') }}/media/logos/{{$technology}}.png"
                                                    class="" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-3 p-3">
                                        <div class="d-flex flex-stack">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-circle symbol-60px me-4">
                                                <span class="opacity-75 fw-bold">{{ __('No Record Found') }}</span>
                                            </div>
                                            <!--end::Symbol-->
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
                <div class="col-4">
                    <!--begin::Change Log-->
                    <div class="row pb-lg-8 pb-4">
                        <div class="card card-flush">
                            <!--begin::Header-->
                            <div class="card-header">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Change Log</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <div class="separator separator-dashed"></div>
                            <!--begin::Body-->
                            @forelse ($change_logs as $key => $change_log)
                                <div class="card-body pt-4 pb-4">
                                    <h4 class="fw-bold text-gray-500 mb-6">{{ $change_log }}</h4>
                                    <ul>
                                        <li><span>{{ $key }}</span></li>
                                    </ul>
                                </div>
                            @empty
                                <span class="opacity-75 fw-bold">{{ __('No Record Found') }}</span>
                            @endforelse
                            <!--end: Card Body-->
                        </div>
                    </div>
                    <!--end::Change Log-->
                </div>
                <div class="col-xl-12">
                    <!--begin::Other Letters-->
                    <div class="row pb-lg-12 pb-4">
                        <div class="card card-flush" id="kt_player_widget_2">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">{{ __('Other Letters') }}</span>
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
                                    <div class="col-sm-4 col-xxl-4">
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
                                                        class="text-gray-600 text-end fw-bold fs-6">{{ __('35') }}</span>
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
                                                    href="{{ route('web.preview', $docId = 4) }}">
                                                    {{ __('View Deatails') }}
                                                </a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Card widget 14-->
                                    </div>
                                    <div class="col-sm-4 col-xxl-4">
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
                                                            {{ __('Unofficial Note') }}
                                                        </span>
                                                        <span class="text-gray-500 mt-1 fw-bold fs-6">
                                                            {{ __('Total Download:') }}
                                                        </span>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Total-->
                                                    <span
                                                        class="text-gray-600 text-end fw-bold fs-6">{{ __('20') }}</span>
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
                                                    href="{{ route('web.preview', $docId = 5) }}">
                                                    {{ __('View Deatails') }}
                                                </a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Card widget 14-->
                                    </div>
                                    <div class="col-sm-4 col-xxl-4">
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
                                                        class="text-gray-600 text-end fw-bold fs-6">{{ __('63') }}</span>
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
                                                    href="{{ route('web.preview', $docId = 7) }}">
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
                    </div>
                    <!--end::Other Letters-->
                </div>
            </div>
        </div>
        <!--end::Post-->
    </div>
</x-lbs-master>
