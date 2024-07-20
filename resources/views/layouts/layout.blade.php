<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	@include("partials.css")
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		@include("partials.header")

		<!-- Header Mobile -->

		<!-- Modal Search -->
        @include('partials.header_search')
	</header>

	<!-- Sidebar -->
	@include('partials.aside')
	@include('partials.cart')
    @yield('content')


	<!-- Slider -->



	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
        @include('partials.footer')
	</footer>


	<!-- Back to top -->
	@include('partials.back_to_top')

	<!-- Modal1 -->
    @include('partials.modal')
    @include('partials.js')
</body>
</html>