<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

  @include('inc.header')


@if(Request::is('/'))
  @include('inc.hero')
  @endif

<div class="container mt-5">
	<div class="row">
		<div class="col-8">
			@yield('content')
		</div>
<div class="col-4">
	@include('inc.aside')
</div>
</div>
</div>

	@include('inc.footer')
</body>
</html>