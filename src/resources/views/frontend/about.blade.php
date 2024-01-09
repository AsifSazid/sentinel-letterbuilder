<x-lbs-master>
    <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-gray-900 opacity-75 fw-bold my-1 fs-3"><a href="{{route('home')}}" class="text-gray-900">{{__('Home')}}</a> &nbsp;{{__('/ About Us ')}}</h1>
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
                <h1 class="d-flex text-gray-800 fw-bold pt-4 pb-4" id="how_to_use">{{__('About Us')}}</h1>
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
                                            {{-- <span class="fw-bold text-gray-800 fs-3">{{__('The service standard
                                                helps to create and run great public services ...')}}</span> --}}
                                                <span class="fw-bold text-gray-800 fs-xl">
                                                    Compendium of Letter Builder Platform
                                                </span>
                                                <span class="text-gray-800 fs-lg mt-8 mb-8">
                                                    Letter Builder is an innovative platform designed to streamline and enhance communication within government offices, offering users the convenience of crafting and creating letters for both internal and external purposes. This platform is particularly valuable in the context of the government of Bangladesh's ambitious initiative, 'Smart Bangladesh,' aligned with the Vision 2041. The Government of Bangladesh launched a special program called A2i, which is essential in accelerating innovations in public service that are beneficial to citizens. By giving public servants the tools they need to expedite processes and convert government buildings into less paper-based workplaces.
                                                    In this transformative landscape, Letter Builder emerges as a valuable tool within the framework of 'Smart Bangladesh.' By offering an intuitive platform for crafting letters, it becomes an instrumental component in the drive towards a more efficient and interconnected government, ultimately enhancing the overall user experience.
                                                </span>
                                                <span><hr></span>
                                                <span class="fw-bold text-gray-800 fs-xl mt-8">
                                                    Significance of the Letter Builder Platform in Enhancing Government Communication
                                                </span>
                                                <span class="text-gray-800 fs-lg mt-8">
                                                    The Letter Builder platform holds pivotal importance in facilitating efficient communication within government offices. Its significance lies in providing a user-friendly interface for creating letters, streamlining both internal and external correspondence. In various administrative processes, Letter Builder expedites communication by reducing the time and manual effort typically associated with letter drafting. This platform aligns with the broader goals of enhancing administrative efficiency, contributing to a more responsive and organized governance structure. Particularly noteworthy is Letter Builder's role in the ongoing transition towards digital advancement, fostering paperless operations within the government. By empowering users to tailor letters to specific needs, the platform significantly elevates communication standards, playing a critical role in the modernization of government processes.
                                                    </span>
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
</x-lbs-master>