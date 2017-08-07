<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body class="hold-transition skin-green-light layout-top-nav">
	<div class="wrapper">
		<header class="main-header">
			@include('includes.header')
		</header>
		<div class="content-wrapper">
			<div class="container">
				@yield('content')
			</div>
			<!-- /.container -->
		</div>
		<footer class="main-footer">
			@include('includes.footer')
			<style>
* {
    margin: 0;
}
html, body {
    height: 100%;
}
.wrapper {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    margin: 0 auto -155px; /* the bottom margin is the negative value of the footer's height */
}
.footer, .push {
    height: 155px; /* .push must be the same height as .footer */
}
</style>
		</footer>
	</div>
<!-- ./wrapper -->
</body>
</html>