	<!DOCTYPE html>
	<html lang="">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="csrf-token" content="{{ csrf_token() }}">

			<!-- Fonts -->
			<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

			<title>@yield('title')</title>

			<!-- start css -->
			{{ Html::style('/assets/css/common/bootstrap.css') }}
			{{ Html::style('/assets/css/common/bootstrap.min.css') }}
			{{ Html::style('/assets/css/common/bootstrap-grid.css') }}
			{{ Html::style('/assets/css/common/bootstrap-grid.min.css') }}
			{{ Html::style('/assets/css/common/bootstrap-datetimepicker.css') }}
			{{ Html::style('/assets/css/common/bootstrap-datetimepicker.min.css') }}
			{{ Html::style('/assets/css/common/common.css') }}
			{{ Html::style('/css/app.css') }}


			@yield('contentCss')
			<!-- end csss -->

			<!-- start js -->	
			{{ Html::script('/assets/js/common/jquery.js') }}
			{{ Html::script('/assets/js/common/bootstrap.js') }}
			{{ Html::script('/assets/js/common/bootstrap.min.js') }}
			{{ Html::script('/js/bootstrap-datetimepicker.js') }}
			{{ Html::script('/js/bootstrap-datetimepicker.min.js') }}
			{{ Html::script('/assets/js/common/common.js') }}

			@yield('contentJs')
			<!-- end js -->

		</head>
		<body>
			<div class="container-fluid">
				<!-- menu -->
				@include('layout.menu')

				<!-- end menu -->
				<div class="container-fluid">
					<!-- container -->
					<div class="row">
						<!-- leftbar -->
						<div class="col-md-3">
							@include('layout.left_bar')
						</div>
						<!-- end left bar -->
						<!-- content -->
						<div class="col-md-8">
							@yield('content')
						</div>
						<!-- end contain -->
					</div>
					<!-- encontainer -->
					</div>
				
			<!-- </div> -->
		</body>
	</html>