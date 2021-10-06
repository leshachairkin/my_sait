@extends('blocks.app')

@section('title') @endsection

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-lg-6 p-0">
            <h2>{{$item->name}}</h2>

              <img src="{{ $item->image }}" style="width: 630px;height: 400px">

    <p class="text-left mt-3 p-0" style="width:630px ">{{ $item->news }}</p>

        <hr class="bg-left" style="width: 630px;">
        <div class="container mb-2 bg-left">

            <div class="row">
                <div class="col-2 text-left p-0" style="color: gray">
                    {{$item->user ? $item->user->name: ''}}
                </div>
                <div class="col- text-left" style="color: gray">
                    <small>{{$item->created_at}}</small>
                </div>
                <div class="col-3">

                </div>
                <div class="col-4 text-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/><span class="badge text-info">{{$item->count_views}}</span>
                    </svg>
                    {{--                                      </div>--}}
                    {{--                                      <div class="col-2 text-right">--}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/><span class="badge text-info">{{$item->comments->count()}}</span>
                    </svg>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            @if(auth()->check())
                @include('blocks/comment')

            @else
                <small class="text-info pl-3">Уважаемый посетитель, Вы зашли на сайт как незарегистрированный пользователь.
                    Мы рекомендуем Вам зарегистрироваться либо зайти на сайт под своим именем.</small>
            @endif
{{--                <hr class="bg-left" style="width: 600px;">--}}
        </div>

        <div class="container mb-2 p-0 ">
            <h3 class="mb-3">Комментарии</h3>
            @if($item->comments->count())
                @foreach($item->comments as $comment)


                    <div class="card border-0">
                        <div class="card-body p-0" style="width: 630px">
                            <div class="row">
                                <div class="col-lg-2">
                                    {{--                {{Auth::user()->avatar}}--}}
                                    {{--            $user->avatar    --}}
                                    <img class="" src="{{$comment->user->avatar}}" style="height: 80px;width: 80px;border-radius: 50px;">
                                </div>
                                <div class="col-lg-8">
                                    {{--                {{Auth::user()->name}}--}}
                                    <h6 class="">{{$comment->user->name}}:<small class="px-3" style="color: darkgray; ">{{$comment->created_at}}</small></h6>
                                    {{--            </div>--}}
                                    {{--            <div class="col-lg-5">--}}
                                    {{ $comment->text }}

                                    <div class="container" style="background-color:seashell; color: lightslategrey">
                                        {{$comment->reply}}
                                    </div>
                                        @if(auth()->check())
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <form class="form" action="{{route('reply_story')}}" method="post">
                                            @csrf
                                        <input class="" type="text" name="reply">
                                        <a class=""><button class="btn btn-sm" style="position: absolute">Ответить</button></a>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr class="bg-info bg-left" style="width: 630px">

                    </div>


                @endforeach

            @endif
            <div class="p-0">
            <small class="text-info p-0">Посетители, находящиеся в группе Гости, не могут оставлять комментарии в данной новости.</small>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
@endsection




