@extends('admin.panel')


@section('content')


    <div class="container">
        <div class="card">
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
                        action
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
                    <div class="col-lg-3 col-sm-1">
                        <img src="{{$user->avatar}}" style="width: 100px; height: 70px">
                    </div>
                <div class="col-lg-2 col-sm-1">
                    action
                </div>
            </div>
                    <hr>
                @endforeach
        </div>
    </div>
    {{ $users->links() }}
@endsection
