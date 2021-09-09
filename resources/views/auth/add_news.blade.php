@extends('auth.menu')

@section('contente')

    <div class="container">
<div class="row">
    <div class="col-8">
<form class="form-group" action="{{route('add_news.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
{{--<div class="form-group">--}}
{{--        <label class="mt-2">Выбрать категорию:</label>--}}
{{--        <select class="form-control mt-2" aria-label="select example">--}}
{{--            <option selected>Выбрать категорию</option>--}}
{{--        </select>--}}
{{--    </div>--}}
    <div class="form-group">
        <div class="form-group mt-2">
            <label>Описание:</label>
            <input name="category_id" class="form-control">
        </div>
    <div class="form-group">
    <label class="mt-2">Добавить новости:</label>
        <textarea class="form-control" name="userNews" style="height: 150px"></textarea>
    </div>
    <div class="form-group">
        <label>Выбрать изображение:</label>
        <input type="file" name="image" class="form-control" placeholder="image">
        <img class="mt-3" src="" width="300px">
    </div>
    <button class="btn btn-info" type="submit">Добавить</button>
</form>
    </div>
</div>
    </div>

@endsection
