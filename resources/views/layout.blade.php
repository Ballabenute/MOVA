<!DOCTYPE>
<html>
<head>
	<title>@yield('title')</title>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
	<div style="display: inline-flex;">
		<div style="padding-left: 50px; padding-top: 35px;">
			<a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">Home</a>
		</div>
		<div style="padding-left: 50px; padding-top: 35px;">
			<a href="{{ url('/basic') }}" class="btn btn-xs btn-info pull-right">Basic</a>
		</div>
		<div style="padding-left: 50px; padding-top: 35px;">
			<a href="{{ url('/ageEducationAnalisis') }}" class="btn btn-xs btn-info pull-right">Age/Education Analisis</a>
		</div>
		<div style="padding-left: 50px; padding-top: 35px;">
			<a href="{{ url('/ageStatusAnalisis') }}" class="btn btn-xs btn-info pull-right">Age/Status Analisis</a>
		</div>
		<div style="padding-left: 50px; padding-top: 35px;">
			<a href="{{ url('/educationStatusAnalisis') }}" class="btn btn-xs btn-info pull-right">Education/Status Analisis</a>
		</div>
	</div>
	<br>
	<br>
	<br>
	@yield('content')
</body>
</html>