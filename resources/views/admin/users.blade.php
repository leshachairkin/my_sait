@extends('admin.panel')


@section('content')


    <div class="container">
        <div class="card border-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-1 col-sm-1">
                        ID
                    </div>
                    <div class="col-lg-2 col-sm-1">
                        Users
                    </div>
                    <div class="col-lg-3 col-sm-1">
                        Email
                    </div>
                    <div class="col-lg-3 col-sm-1">
                        Avatar
                    </div>
                    <div class="col-lg-2 col-sm-1">
                        Action
                    </div>
                </div>
            </div>

            <div class="card-body">

                @foreach($users as $user)
                <div class="row text-left mb-2">
                <div class="col-lg-1 col-sm-1">
                    {{$user->id}}
                </div>
                <div class="col-lg-2 col-sm-1">
                    {{$user->name}}
                </div>
                <div class="col-lg-3 col-sm-1">
                    {{$user->email}}
                </div>
                    <div class="col-lg-3 col-sm-1 mb-2">
                        <img class="" src="{{$user->avatar}}" style="width: 80px; height: 70px">
                    </div>
                    <div class="col-lg-2 col-sm-1">
                        <form action="{{route('view.users')}}" method="post" id="newsForm{{$user->id}}">
                            @csrf
                            <div class="form-check form-switch">
                                <input class="form-check-input " type="checkbox" {{$user->is_blocked == 1?'checked':''}} id="flexSwitchCheckDefault" onclick="document.getElementById('newsForm{{$user->id}}').submit();">
                                <input  name="name" type="hidden" value="{{$user->id}}">
                            </div>
                        </form>
                    </div>
{{--                <div class="col-lg-2 col-sm-1">--}}
{{--                    <button class="btn" type="submit" title="delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"style="color:red">--}}
{{--                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>--}}
{{--                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>--}}
{{--                        </svg></button>--}}
{{--                </div>--}}

            </div>
                    <hr>
                @endforeach

        </div>
    </div>

        <div class="container mt-2">
    {{ $users->links() }}
    </div>
@endsection
