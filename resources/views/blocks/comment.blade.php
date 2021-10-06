


    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card mb-4 shadow-sm" style="width: 600px">
                    <div class="card-header bg-secondary text-white">
                        <h6 class="my-0 fw-normal">Комментарии:</h6>
                    </div>
                        @if(count($errors))
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                @endif
                    <div class="card-body border border-secondary">
                       <form method="post" action="{{ route('comment.store') }}">
                           @csrf
                           <input type="hidden" name="news_id" value="{{$item->id}}"/>
                        <textarea class="alert-secondary w-100 h-50 mb-2 p-2" style="outline: none" name="comment" id="comment" placeholder="Добавить комментарии"></textarea>
                        <div class="container d-grid gap-2 d-md-flex justify-content-md-end p-2">

                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Отправить</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container mb-2">--}}
{{--    @if($item->comments->count())--}}
{{--        @foreach($item->comments as $comment)--}}



{{--            <div class="card border-0">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--            <div class="col-lg-2">--}}
{{--                {{Auth::user()->avatar}}--}}
{{--                {{$user->avatar}}--}}
{{--                <img class="" src="" style="height: 80px;width: 80px;border-radius: 50px;">--}}
{{--            </div>--}}
{{--            <div class="col-lg-8">--}}
{{--                {{Auth::user()->name}}--}}
{{--                <h6 class="">:<small class="px-3" style="color: darkgray; ">{{$comment->created_at}}</small></h6>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5">--}}
{{--                {{ $comment->text }}--}}
{{--                <div class="container" style="background-color:seashell; color: lightslategrey">--}}
{{--                    {{$comment->reply}}--}}
{{--                </div>--}}
{{--                <div class="d-grid gap-2 d-md-flex justify-content-md-end">--}}
{{--                    <a class=""><button class="btn btn-sm">Ответить</button></a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <hr class="bg-info">--}}
{{--            --}}
{{--            @endforeach--}}

{{--        @endif--}}

{{--    </div>--}}







