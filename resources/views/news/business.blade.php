@extends('blocks.app')

@section('title')Бизнес @endsection

@section('content')
<div class="container">
	<h2>Business</h2>
        <img src="{{ asset('images/business.jpg')}}" style="height: 400px; width: 600px">
    
        @foreach($news as $new)
   <p>{{ $new->news }}</p>
@endforeach
<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
   <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
</div>


@endsection