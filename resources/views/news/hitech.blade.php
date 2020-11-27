@extends('blocks.app')

@section('title')Техналогии
@endsection

@section('content')
<div class="container">
        <h2>Hi-tech</h2>
        <img src="{{ asset('images/hitech1.jpg')}}">
         @foreach($news as $new)
   <p>{{ $new->news }}</p>
@endforeach
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    
        <h2>Hi-tech</h2>
        <img src="{{ asset('images/hitech.jpg')}}">
         @foreach($news as $new)
   <p>{{ $new->news }}</p>
@endforeach
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
@endsection