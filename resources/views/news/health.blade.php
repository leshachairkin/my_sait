@extends('blocks.app')

@section('title')Здоровье@endsection

@section('content')
    <div class="container">
        <h2>Health</h2>
        {{--        <img src="{{ asset('images/politics.jpg')}}" style="height: 400px; width: 500px">--}}
        @foreach($news as $new)
            <p>{{ $new->news }}</p>
        @endforeach
{{--        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>--}}
    </div>


@endsection
