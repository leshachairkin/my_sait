@extends('blocks.app')

{{--@section('title')Личный кабинет@endsection--}}

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="container">
    <div class="row">
        <div class="col-4">

            @foreach($name as $nam)
            <img class="mt-3" src="{{ ($nam->avatar) }}" style="height: 100px;width: 100px;border-radius: 50px;">

                <form class="form-group" action="{{route('personal.avatar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="image">
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 text-center">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
    </form>
    </div>
        <div class="col-7">
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
{{--                <th scope="col">Password</th>--}}
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$nam->name}}</td>
                <td>{{$nam->email}}</td>
                <td></td>
                <th>
                    <a class="px-2" href="{{route('personal.show',$nam->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16" style="color:green">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg></a>
                </th>
            </tr>
            </tbody>

        </table>
        @endforeach
    </div>

            <div class="nav-item">
                <a class="btn btn-sm btn-outline-primary" href="/logout">Выход</a>
            </div>
    </div>
</div>
</div>
@endsection
