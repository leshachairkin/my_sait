@extends('admin.panel')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{route('post.show')}}"> Back</a>
    </div>
    </div>

{{-- <div class="container">--}}

        <div class="container">

            <div class="flex-row">
                <div class="col-lg-4 col-sm-2 mb-2">
                    @if(count($errors))
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                </div>
                    <div class="col-lg-2 col-sm-2 mb-2">
                        <a href="{{route('post.category')}}"><button class="btn btn-success" type="submit">add category:</button></a>
                </div>
                </div>
                </div>

    <div class="container">
                <form class="form-group" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-xs-12 col-sm-12 col-md-10">
                        <select class="form-select" name="category_id" aria-label="select example">
                            <option selected>Выбрать категорию</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" id="{{$category->url}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10">
                        <div class="form-group">
                            <strong>News:</strong>
                            <textarea class="form-control" style="height:150px" name="news" id="news" value="" placeholder="Detail"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="image">
                            <img class="mt-3" src="" width="300px">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 text-center">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </form>
               </div>

            </div>



{{-- </div>--}}





@endsection
