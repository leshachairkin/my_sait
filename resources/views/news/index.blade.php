@extends('blocks.app')

@section('title'){{$categoryName}} @endsection

@section('content')


<div class="container mb-4 mt-4">
    <div class="row">
        <div class="col-8">
            <h2 class="pl-3">{{$categoryName}}</h2>
    @foreach($news as $new)


   <div class="container mb-2">
       <a href="/news/show/{{$new->id}}" role="button">
    <img class="mb-3" style="width: 630px; height: 400px" src="{{ $new->image }}"></a>

        <p class="p-0 border-bottom border-info pb-2" style="width: 630px">{{Str::substr($new->news,0,150) . ' ' . '...'}}</p>
{{--       <hr class="bg-warning" style="width: 600px;">--}}
   </div>



{{--                <p><a class="btn btn-secondary" href="/news/show/{{$new->id}}" role="button">View details »</a></p>--}}
    @endforeach



 <div class="container">
     <div class="mx-auto" style="width: 200px;">
 {{ $news->links() }}
     </div>
 </div>

 </div>
@endsection


