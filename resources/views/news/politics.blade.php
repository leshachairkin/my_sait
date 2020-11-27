@extends('blocks.app')

@section('title')Политика@endsection

@section('content')
<div class="container border-secondary">
	<h2>Politics</h2>
        <img src="{{ asset('images/politics.jpg')}}" style="height: 400px; width: 500px">
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
</div>


@endsection