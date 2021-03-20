
{{--<div class="container">--}}

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        <h6 class="my-0 fw-normal">Комментарии: {{ $item->id }}</h6>
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
            </div>
        </div>
    </div>



    {{--    <div class="form-group">--}}
{{--        <div class="bg-secondary" for="comment">Комментарии</div>--}}
{{--        @if(count($errors))--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <div class="alert alert-danger">{{$error}}</div>--}}
{{--            @endforeach--}}
{{--        @endif--}}
{{--        <form class="" action="{{ route('comment.store') }}" method="post">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="news_id" value="{{$item->id}}"/>--}}
{{--            <textarea class="form-control mb-2 mt-2" id="comment" name="comment" rows="3"--}}
{{--                      placeholder="Добавить комментарии"></textarea>--}}

{{--            --}}{{--            <div class="text-right">--}}
{{--            <button type="submit" class="btn btn-secondary mb-3">Отправить</button>--}}
{{--            --}}{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
    <div class="container">
        @if($item->comments->count())
            @foreach($item->comments as $comment)
                <div class="row border-bottom pt-3 pb-3">
                    <div class="row w-100">
                        <b>{{$comment->user->name}} ({{$comment->user->email}})</b>
                    </div>
                    <div class="row w-100">
                        {{ $comment->text }}
                    </div>
                </div>
            @endforeach

        @endif
    </div>
</div>






