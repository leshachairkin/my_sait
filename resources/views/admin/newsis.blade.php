@extends('admin.panel')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <a href="{{route('post.store')}}"><button type="button" class="btn btn-success mb-2" style="border-radius: 20px">
                <img class="text-light" src="{{asset('images/plus-icon.jpg')}}" style="width: 30px;height: 30px;">Добавить новости</button></a>
    </div>

    <div class="container">
        <div class="card mb-3 border-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-2 col-sm-1">
                        category
                    </div>
                    <div class="col-lg-2 col-sm-1">
                        date
                    </div>
                    <div class="col-lg-2 col-sm-1">
                        image
                    </div>
                    <div class="col-lg-4 col-sm-2">
                        news
                    </div>
                    <div class="col-lg-2 col-sm-1">
                        action
                    </div>

                </div>

            </div>
            <div class="card-body">
                @foreach($news as $new)

                    <div class="row text-left mb-2">

                        <div class="col-lg-2 col-sm-1" id="category">
                            {{$new->category ? $new->category->name: ''}}

                        </div>
                        <div class="col-lg-2 col-sm-1" id="date">
                            {{$new->created_at}}
                        </div>
                        <div class="col-lg-2 col-sm-1">
                            <img src="
                       {{$new->image}}"
                                 style="height: 80px; width: 100px">
                        </div>
                        <div class="col-lg-4 col-sm-2" id="news">
                            {{Str::substr($new->news,0,100)}}
                        </div>

                        <div class="col-lg-2 col-sm-1 mt-2">
                            <form action="{{ route('post.destroy',$new->id) }}" method="POST">
{{--                                @foreach($posts as $post)--}}

                            <a class="px-3" href="{{route('post.edit',$new->id)}}" title="edit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16" style="color:green">--}}
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg></a>



                                    @csrf
                                    @method('DELETE')
                                   <button class="btn" type="submit" title="delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"style="color:red">--}}
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                       </svg></button>
{{--                                <a class="px-3" href="" title="delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"style="color:red">--}}
{{--                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>--}}
{{--                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>--}}
{{--                                </svg></a>--}}
{{--                                @endforeach--}}

                            <a class="px-3" href="{{route('post.views', $new->id)}}" title="views"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg></a>
                            </form>
                        </div>


                    </div>
                    <hr>
                @endforeach

            </div>


        </div>

    </div>
    <div class="container">
        <div class="row">
    {{ $news->links() }}
    </div>
    </div>
@endsection
