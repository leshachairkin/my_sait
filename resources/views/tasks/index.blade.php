<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>

	<div class="container">
		<ul class="list-group">

	@foreach($tasks as $task)
	<li class="list-group-item list-group-item-primary">
		<h3>{{ $task->body }}
			<form method="get" action="{{ action('TaskController@destroy', [$task->id]) }}">
	@csrf	
			
			<button type="submit" class="btn btn-danger float-right">Delete</button></h3>
		</form></li>
@endforeach
<form method="post" action="{{ action('TaskController@save') }}">
	@csrf
  
	<div class="form-group p-4">
   <input type="text" name="name" class="form-control border-dark">
   <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>


</body>
</html>