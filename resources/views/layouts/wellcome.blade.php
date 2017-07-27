<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		    <!-- Nov -->
		    @include('layouts.nav')
			<!--end nov -->
			{{-- Caroussel --}}
			@include('layouts.caro')
			{{-- End Caroussel --}}
			{{-- Caroussel --}}
			<div class="jumbotron">
				<h2>
					Hello, world!
				</h2>
				
				<p>
					@yield('isi')
				</p>
			</div>
		</div>
	</div>
	

    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/scripts.js"></script>
  </body>
</html>