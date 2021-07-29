@extends('blocks.app')

@section('title')  @endsection

@section('content')
    <div class="container">
            <h2>{{$item->name}}</h2>
            <img src="{{ $item->image }}">
        <p>{{ $item->news }}</p>
<div class="row">
    @include('blocks/comment')
</div>
    </div>
@endsection




