@extends('admin.panel')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif





                        @if(count($errors))
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                        @endif


    <div class="pull-right">
        <a class="btn btn-primary" href="{{route('post.show',$news->id)}}"> Back</a>
    </div>
    <div class="alert alert-warning" role="alert">
        Редактировать
    </div>

<div class="container">
                    <form class="form-group" action="{{route('post.update',$news->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <div class="col-xs-12 col-sm-12 col-md-10">
                            <div class="form-group">
                                <strong>Category:</strong>
                                <input type="text" name="category_id" class="form-control" value="{{ $news->category ? $news->category->name: '' }}" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10">
                            <div class="form-group">
                                <strong>News:</strong>
                                <textarea class="form-control" style="height:150px" name="news" id="news" value="" placeholder="Detail">{{ $news->news }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 mt-2 mb-2">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <img class="mt-3" src="{{ $news->image }}" width="300px">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 text-center">
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                </div>
            </div>
        </form>

    </div>



@endsection
