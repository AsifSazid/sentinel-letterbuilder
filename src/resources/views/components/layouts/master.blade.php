<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../" />
	<title>Letter Builder</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Metronic by Keenthemes" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="{{ asset('ui/frontend/assets')}}/media/logos/logo-dark.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="{{ asset('ui/frontend/assets')}}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('ui/frontend/assets')}}/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="{{ asset('ui/frontend/assets')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('ui/frontend/assets')}}/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('ui/frontend/assets')}}/css/carousal.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
	<!--begin::Theme mode setup on page load-->
	<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<x-lbs-header />
				<!--end::Header-->
					{{$slot}}
				<!--begin::Footer-->
				<x-lbs-footer />
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--end::Main-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-duotone ki-arrow-up">
			<span class="path1"></span>
			<span class="path2"></span>
		</i>
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->
	<!--begin::Javascript-->
	<script>var hostUrl = "{{ asset('ui/frontend/assets')}}/";</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="{{ asset('ui/frontend/assets')}}/plugins/global/plugins.bundle.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="{{ asset('ui/frontend/assets')}}/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="{{ asset('ui/frontend/assets')}}/js/widgets.bundle.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/carousal.bundle.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/custom/widgets.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/custom/apps/chat/chat.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/custom/utilities/modals/create-app.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/custom/utilities/modals/bidding.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/custom/utilities/modals/users-search.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>