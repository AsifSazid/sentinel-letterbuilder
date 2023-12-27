<x-lbs-bn-master>
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-gray-900 opacity-75 fw-bold my-1 text-bangla fs-2x"><a href="{{route('bn.home')}}" class="text-gray-900">{{__('হোম')}}</a> &nbsp;{{__('/ যোগাযোগ ')}}</h1>
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
                    {{-- {{__('Contact Us')}} --}}যোগাযোগ করুন
                </h1>
            </div>
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-12">
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
                                        <!--begin::Body-->
                                        <div
                                            class="d-flex flex-column text-left pt-5 pb-7 mb-8 card-rounded">
                                            <span class="fw-bold text-gray-800 text-center fs-2x mb-8 text-bangla">
                                                {{-- {{ __('Get in Touch') }} --}}যোগাযোগ করুন
                                            </span>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.120334738318!2d90.37203927411558!3d23.77872887865108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c16df8d7f94b%3A0x48321391c16a15c6!2sAspire%20to%20Innovate%20(a2i)%20Programme!5e0!3m2!1sen!2sbd!4v1703664373203!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                        <!--end::Body-->
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