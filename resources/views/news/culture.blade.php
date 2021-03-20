@extends('blocks.app')


@section('title')Культура@endsection

@section('content')
   <div class="container">
        <h2>Culture</h2>
        <img src="{{ asset ('image/culture.jpg')}}" style="height: 400px; width: 600px">
        @foreach($news as $new)
            <p>{{ $new->news }}</p>
       @endforeach
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
</div>
@endsection
