@extends('blocks.app')
@section('title')Техналогии
@endsection

@section('content')
    <div class="container">
        <h2>Hi-tech</h2>
        {{--        <img src="{{ asset('/storage/uploads/vsxUVIHYwwi52Poe9A5Opz4Au1glHvXC03O6HmCw.jpeg')}}">--}}
        @foreach($news as $new)
            <p>{{ $new->news }}</p>
        @endforeach
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
@endsection

@s
