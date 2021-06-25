@extends('admin.panel')

@section('content')
    <div class="pull-right">
    <a class="btn btn-primary" href="{{route('post.show')}}"> Back</a>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-10">
        <form class="form-group" action="{{route('post.category')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <strong>AAD Category:</strong>
            <input type="text" name="name" class="form-control mt-2" placeholder="Name">
            <input type="text" name="url" class="form-control mt-2" placeholder="Url">
            <button class="btn btn-info mt-2" type="submit">add</button>
        </div>
        </form>
    </div>






@endsection
