@extends('auth.menu')

{{--@section('title')Личный кабинет@endsection--}}

@section('contente')

{{--    @if ($message = Session::get('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            <p>{{ $message }}</p>--}}
{{--        </div>--}}
{{--    @endif--}}

<div class="container">
    <div class="row">
        <div class="col-3">
{{--            {{\App\User::find(Auth::user()->id)->avatar}}--}}
           <a href="{{route('image_s.avatar')}}"> <img class="mt-3" src="{{$user->avatar}}" style="height: 100px;width: 100px;border-radius: 50px;"></a>


{{--                <form class="form-group" action="{{route('personal.avatar')}}" method="POST" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <strong>Image:</strong>--}}
{{--                            <input type="file" name="image" class="form-control" placeholder="image">--}}
{{--                        </div>--}}
{{--                    <div class="col-xs-8 col-sm-12 col-md-10 text-center">--}}
{{--                        <button type="submit" class="btn btn-primary mt-2">Submit</button>--}}
{{--                    </div>--}}
{{--    </form>--}}
    </div>
        <div class="col-6">
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <td scope="col">Name</td>
                <td scope="col">Email</td>
{{--                <th scope="col">Password</th>--}}
                <td scope="col">Action</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td></td>
                <th>
                    <a class="px-2" href="{{route('personal.show',$user->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16" style="color:green">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg></a>
                </th>
            </tr>
            </tbody>

        </table>

    </div>

{{--            <form class="form-group" method="POST" action="{{route('delete.avatar', Auth::user()->avatar)}}">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <button class="btn" type="submit" title="delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"style="color:red">--}}
{{--                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>--}}
{{--                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>--}}
{{--                </svg></button>--}}
{{--            </form>--}}


{{--            <div class="nav-item">--}}
{{--                <a class="btn btn-sm btn-outline-primary mb-2" href="/logout">Выход</a>--}}
{{--            </div>--}}
    </div>
</div>
</div>
@endsection
