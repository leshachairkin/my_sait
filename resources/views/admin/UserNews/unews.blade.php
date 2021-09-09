@extends('admin.panel')


@section('content')

   <div class="container">
       <div class="card border-0 bg-info">
           <div class="card-header">
               <div class="row">
                   <div class="col-2">
                        date
                   </div>
                   <div class="col-2">
                       user
                   </div>
                   <div class="col-2">
                       description
                   </div>
                   <div class="col-4">
                       news
                   </div>
                   <div class="col-1">
                       image
                   </div>
                   <div class="col-1">
                       action
                   </div>
               </div>
           </div>
           <div class="card-body bg-light">
               @foreach($userNews as $news)
{{--{{dd($userNews)}}--}}
               <div class="row">
                   <div class="col-2">
                       {{$news->created_at}}
                   </div>
                   <div class="col-2">
                       {{$news->user_id}}
                   </div>
                   <div class="col-2">
                       {{$news->category_id}}
                   </div>
                   <div class="col-4">
                       {{Str::substr($news->userNews,0,80) . "..."}}
                   </div>
                   <div class="col-1">
                       <img src="{{$news->UserImg}}" style="height: 80px; width: 80px">
                   </div>
                   <div class="col-1">
                       <a class="px-3" href="{{route('view_news.edit', $news->id)}}" title="views"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                               <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                               <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                           </svg></a>
                   </div>

               </div>
                   <hr>
               @endforeach
           </div>
       </div>
   </div>

   <div class="container mt-2">
       <div class="row">
           {{ $userNews->links() }}
       </div>

@endsection
