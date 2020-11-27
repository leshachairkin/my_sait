@extends('blocks.app')


@section('title')Культура@endsection

@section('content')
   <div class="container">
        <h2>Culture</h2>
        <img src="{{ asset('images/culture.jpg')}}" style="height: 400px; width: 600px">
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
</div>
@endsection