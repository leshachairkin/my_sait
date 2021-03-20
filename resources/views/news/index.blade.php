@extends('blocks.app')

@section('title'){{$categoryName}} @endsection

@section('content')


<div class="container mb-4">
    <div class="row">
        <div class="col-8">
{{--    <div class="card p-4">--}}
    @foreach($news as $new)

	<h2>{{$categoryName}}</h2>
   <div class="container mb-2">
{{--            <div class="card-body col-10">--}}
    <img class="" style="width: 100%; height: 100%" src="{{ $new->image }}">

        <p class="p-2">{{ $new->news }}</p>
   </div>
{{--   </div>--}}
{{--   </div>--}}
    @endforeach
<p><a class="btn btn-secondary" href="/news/show/{{$new->id}}" role="button">View details »</a></p>
 <div class="container">
     <div class="mx-auto" style="width: 200px;">
 {{ $news->links() }}
     </div>
 </div>
 </div>
@endsection


