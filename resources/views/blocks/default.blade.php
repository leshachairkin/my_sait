@extends('blocks.app')

@section('content')
    <div class="container">
        <h1>Загрузка изображения</h1>

        <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
{{--            {{ csrf_field() }}--}}
         @csrf
            <div class="form-group">
                <input type="file" name="image">
            </div>
            <input class="btn btn-default" type="submit" value="Загрузить">
        </form>

        @isset($path)
            <img class="img-fluid" src="/storage{{$path}}">
        @endisset
    </div>
@endsection
