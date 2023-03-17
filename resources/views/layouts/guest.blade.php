<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('/assets/img/logostiper.ico') }}" />
    <link rel="icon" href="{{ URL::asset('/assets/img/logostiper.ico') }}" type="image/x-icon"/>
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

	<!-- Styles -->
            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])

	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
	<style>

        .img-foot{
            margin-left: auto;
            margin-right: auto;
        }

        .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #ffffff;
  color: white;
  text-align: center;
        }

		[data-toggle=buttons]>.btn input[type=radio],
		[data-toggle=buttons]>.btn-group>.btn input[type=radio],
		[data-toggle=buttons]>.btn input[type=checkbox],
		[data-toggle=buttons]>.btn-group>.btn input[type=checkbox] {
			position: absolute;
			clip: rect(0, 0, 0, 0);
			pointer-events: none
		}

		/* .input-group {
	position: relative;
	display: table;
	border-collapse: separate
} */

		.input-group[class*=col-] {
			float: none;
			padding-right: 0;
			padding-left: 0
		}

		.input-group .form-control {
			position: relative;
			z-index: 2;
			float: left;
			width: 100%;
			margin-bottom: 0
		}


		.input-group-addon,
		.input-group-btn,
		.input-group .form-control {
			display: table-cell
		}


		.input-group-addon,
		.input-group-btn {
			width: 2%;
			height: 1px;

			vertical-align: middle
		}

		.input-group-addon {
			padding: 6px 12px;
			font-size: 14px;
			font-weight: 400;
			line-height: 1;
			color: black;
			text-align: center;
			background-color: #eee;
			border: 1px solid #ccc;
			border-radius: 4px
		}

		.input-group-addon.input-sm {
			padding: 5px 10px;
			font-size: 12px;
			border-radius: 3px
		}

		.input-group-addon.input-lg {
			padding: 10px 16px;
			font-size: 18px;
			border-radius: 6px
		}

		.glyphicon-eye-open:before {
			content: "\e105"
		}

		.glyphicon-eye-close:before {
			content: "\e106"
		}
	</style>

	<!-- Scripts -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
	<script src="{{ mix('js/app.js') }}" defer></script>
	<script type="text/javascript">
		$("#password").password('toggle');
	</script>
</head>

<body>
	<div class="font-sans text-gray-900 antialiased">
		{{ $slot }}
	</div>

</body>

</html>
