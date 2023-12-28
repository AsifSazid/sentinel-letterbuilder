<div id="kt_header" class="header align-items-stretch mb-5 mb-lg-10" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <div class="container-xxl d-flex align-items-center">
        <!--begin::Heaeder menu toggle-->
        <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px"
                id="kt_header_menu_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>
        <!--end::Heaeder menu toggle-->
        <!--begin::Header Logo-->
        <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
            <a href="{{ route('bn.home') }}">
                <img alt="Logo" src="{{ asset('ui/frontend/assets') }}/media/logos/logo-dark-green.png"
                    class="logo-default opacity-50 h-25px" />
                <img alt="Logo" src="{{ asset('ui/frontend/assets') }}/media/logos/logo-sticky.png"
                    class="logo-sticky h-25px" />
            </a>
        </div>
        <!--end::Header Logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0"
                        id="#kt_header_menu" data-kt-menu="true">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start" class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="{{ route('bn.home') }}" class="menu-link">
                                <span class="menu-link py-3">
                                    <span class="menu-title opacity-75 text-bangla fs-2x">{{ __('হোম ') }}</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start" class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="{{ route('bn.multipleTemplate') }}" class="menu-link">
                                <span class="menu-link py-3">
                                    <span class="menu-title opacity-75 text-bangla fs-2x">{{ __('টেমপ্লেট') }}</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <a href="{{ route('bn.howToUse') }}" class="menu-link">
                                <span class="menu-link py-3">
                                    <span
                                        class="menu-title opacity-75 text-bangla fs-2x">{{ __('যেভাবে ব্যবহার করব') }}</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <a href="{{ route('bn.aboutUs') }}" class="menu-link">
                                <span class="menu-link py-3">
                                    <span
                                        class="menu-title opacity-75 text-bangla fs-2x">{{ __('আমাদের সম্পর্কে') }}</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <a href="{{ route('bn.contactUs') }}" class="menu-link">
                                <span class="menu-link py-3">
                                    <span class="menu-title opacity-75 text-bangla fs-2x">{{ __('যোগাযোগ') }}</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::Toolbar wrapper-->
            <div class="topbar d-flex align-items-stretch flex-shrink-0">
                <!--begin::Quick links-->
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Menu wrapper-->
                    {{-- <div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px"
                        data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-element-11 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div> --}}
                    <!--begin::Menu-->
                    {{-- <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                            style="background-image:url('{{ asset('ui/frontend/assets') }}/media/misc/menu-header-bg-custom.jpg')">
                            <!--begin::Title-->
                            <h3 class="text-white fw-semibold mb-3">{{__('Quick Links')}}</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin:Nav-->
                        <div class="row g-0">
                            <!--begin:Item-->
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="ki-duotone ki-dollar fs-3x text-primary mb-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                    <span class="fs-7 text-gray-500">eCommerce</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                    <i class="ki-duotone ki-sms fs-3x text-primary mb-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                    <span class="fs-7 text-gray-500">Console</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                    <i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                    <span class="fs-7 text-gray-500">Pending Tasks</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="col-6">
                                <a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                    <i class="ki-duotone ki-briefcase fs-3x text-primary mb-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                    <span class="fs-7 text-gray-500">Latest cases</span>
                                </a>
                            </div>
                            <!--end:Item-->
                        </div>
                        <!--end:Nav-->
                    </div> --}}
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Quick links-->
                <!--begin::Theme mode-->
                @php
                    $currentUrl = $_SERVER['REQUEST_URI'];
                    $urlWillBe = substr($currentUrl, 3);
                @endphp
                <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0"
                    id="#kt_header_menu" data-kt-menu="true">
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <div class="menu-item px-3 my-0">
                            <a href="{{ url($currentUrl) }}" class="menu-link px-3 py-2">
                                <span class="menu-title">BN</span>
                            </a>
                        </div>
                        <span>/</span>
                        <div class="menu-item px-3 my-0">
                            <a href="{{ url($urlWillBe) }}" class="menu-link px-3 py-2">
                                <span class="menu-title">EN</span>
                            </a>
                        </div>
                        <!--end:Menu link-->
                    </div>
                </div>
                <!--end::Theme mode-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
