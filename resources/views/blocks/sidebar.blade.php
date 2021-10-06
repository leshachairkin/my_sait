
<div class="col-lg-5 col-sm-2 mt-2 p-0">
    <div class="container">
        <div class="card">
            <div class="card-header bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line></svg>{{date('l j F')}}</div>
        </div>
        <div class="card mt-2 border-0">
            <div class="card-header bg-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline></svg>Топ новостей</div>
            <div class="card-body p-0 mt-2">

                @foreach($topNews as $new)

                                                  <div class="container mt-2 border-bottom">
                    <div class="row mt-2">
                        <div class="col-lg-4 col-sm-2 ">
                            <a class="text-dark" href="/news/show/{{$new->id}}">
                                <img class="" src="{{ $new->image }}" style="width: 120px; height: 90px;"></div>
                        <div class="col-lg-8 col-sm-2">
                            <strong class="pl-2" style="color: sandybrown">{{$new->category->name}}</strong></a>
                            <div class="">{{Str::substr($new->news,0,70) . '...'}}</div>
{{--                                                                   <div class="">Views: {{$post->count_views}}</div>--}}

                        </div>
                    </div>
                    <hr class="border-info">
                                                  </div>
                @endforeach

            </div>
        </div>



        <div class="card mt-2 border-0">
            <div class="card-header bg-warning" style="border-radius:1em 0  1em 0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitch">
                    <path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7">

                    </path></svg>Последние комментарии:</div>

            <div class="card-body p-0">
                @foreach($commentMenu as $comm)

                <div class="row">

                    <div class="col-lg-2 col-sm-2 p-0">
                        <a href="/news/show/{{$comm->news->id}}" class="text-dark pl-3">
                        <img class="" src="{{ $comm->user->avatar }}" alt="" style="width: 80px; height: 80px;border-radius: 50%"></a>
                    </div>
                    <div class="col-lg-9 col-sm-2 mt-1">
                        <mark class="ml-3">{{$comm->user->name}}</mark>
                        <div class="mt-1 ml-5">{{$comm->text}}</div>
                        <div class="ml-1 pl-2" style="background-color: lightgray;border-radius: 10px">{{$comm->reply}}</div>

{{--                                                               <div class="">Views: {{$post->count_views}}</div>--}}
                    </div>

                    <div class="album py-2 bg-white">
                    </div>

                </div>
                    <hr class="border-info">

            @endforeach


    </div>

        </div>
    </div>
</div>
</div>
</div>

