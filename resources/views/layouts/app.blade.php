<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Andamios Arellano</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @stack('styles')
	<link href="/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="/admin/css/datepicker3.css" rel="stylesheet">
	<link href="/admin/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="/sweetalert/sweetalert.css">
	{{-- <link rel="stylesheet" href="/css/app.css"> --}}

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
  <script>
window.Laravel = {!! json_encode([
'csrfToken' => csrf_token(),
]) !!};
</script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Andamios</span>Arellano</a>

			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

		<ul class="nav menu">
			<li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><em class="fa fa-dashboard">&nbsp;</em> Panel</a></li>

			<li class="{{ request()->is('clientes/*','clientes') ? 'active' : '' }} "><a href="{{Route('clientes.index')}}">
				<em class="fa fa-users">&nbsp;</em> Clientes</a></li>

				<li class="parent {{ request()->is('contratos/*','contratos') ? 'active' : '' }}">
						<a data-toggle="collapse" href="#sub-item-3">
						<em class="fa fa-handshake-o">&nbsp;</em>
						 Contratos <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right">
							 <em class="fa fa-plus"></em></span>
						</a>
					<ul class="children collapse" id="sub-item-3">
						<li><a class="" href="{{Route('contratos.index')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Ver todos los contratos
						</a></li>
						<li><a class="" href="{{Route('contratos.create')}}">
							<span class="fa fa-arrow-right">&nbsp;</span> Hacer contrato
						</a></li>
					</ul>
				</li>

			<li class="parent {{ request()->is('cotizaciones/*','cotizaciones') ? 'active' : '' }} "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-usd">&nbsp;</em> Cotizaciones <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="{{Route('cotizaciones.index')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ver Cotizaciones
					</a></li>
					<li><a class="" href="{{Route('cotizaciones.create')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Hacer cotización
					</a></li>
				</ul>
			</li>





		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

@yield('header')

@yield('content')

		</div>

	<script src="/admin/js/jquery-1.11.1.min.js"></script>
	<script src="/admin/js/bootstrap.min.js"></script>
	<script src="/admin/js/chart.min.js"></script>
	<script src="/admin/js/chart-data.js"></script>
	<script src="/admin/js/bootstrap-datepicker.js"></script>
	<script src="/admin/js/custom.js"></script>
	<script src="\js\app.js"></script>

	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> --}}
	<script src="/sweetalert/sweetalert.min.js"></script>
	@stack('scripts')
	@include('clientes.create')
	{{-- @include('clientes.edit') --}}
  <script>
	@if (notify()->ready())
      swal({
        title: "{!! notify()->message() !!}",
        type: "{{ notify()->type() }}",
				@if(notify()->option('timer'))
                timer: {{ notify()->option('timer') }},
                showConfirmButton: false,
                //showCancelButton: true,
                //confirmButtonColor: '#987463',
                //confirmButtonText: 'Yes, sir',
                //cancelButtonText: 'Not at all'
            @endif
      });
			@endif
  </script>
</body>
</html>
