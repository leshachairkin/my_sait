@extends('admin.panel')


@section('content')

    <div class="container">

        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('unews.show')}}">Back</a>
        </div>

        <div class="row">
{{--            @foreach($userNews as $news)--}}
{{--            {{dd($userNews)}}--}}
            <div class="form-group">
                <div class="form-group mt-2">
              <strong>User:</strong>
                        {{$userNews->user->name}}
                    <hr>
                </div>
                <div class="form-group mt-2">
               <strong>Category:</strong>
                    {{$userNews->category_id}}
                    <hr>
                </div>
                <div class="form-group mt-2">
               <strong>News:</strong>
                    {{$userNews->userNews}}
                    <hr>
                </div>
                <div class="form-group mt-2">
               <strong>Image:</strong>
                    <img src="{{$userNews->UserImg}}" style="width: 300px; height: 150px">
                </div>
            </div>
{{--            @endforeach--}}
        </div>

        <div class="container mt-4 text-center">
            <div class="row">
                <div class="col-4">
             <button class="btn btn-success">Редактировать</button>
                </div>
                <div class="col-4">
                    <a href=""><button class="btn btn-info">Опубликовать</button></a>
                </div>
                <div class="col-4">
                    <button class="btn btn-danger">Удалить</button>
                </div>
            </div>
        </div>

    </div>

@endsection
