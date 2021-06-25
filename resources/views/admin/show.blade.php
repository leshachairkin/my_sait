@extends('admin.panel')

@section('content')


   <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>News:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('post.show')}}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $news->category ? $news->category->name: '' }}
            </div>
        </div>
        <hr>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>News:</strong>
                {{ $news->news}}
            </div>
        </div>
<hr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img class="mt-3" src="{{ $news->image }}" width="300px">
            </div>
        </div>


    </div>

   </div>
@endsection
