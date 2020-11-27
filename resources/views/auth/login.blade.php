@extends('blocks.app')

@section('content')
<div class="container">
<div class="row justify-content-center mb-5 mt-5">
	<form action="{{ route('login') }}" method="post">
		@csrf
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword3">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>
</div>
</div>
@endsection