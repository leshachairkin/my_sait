@extends('auth.menu')

@section('contente')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-primary mt-3 mb-2" href="{{ route('personal') }}"> Back</a>
        </div>
    <form class="form-group" action="{{route('personal.avatar')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <strong>Image:</strong>
            <input type="file" name="image" class="form-control" placeholder="image">
        </div>
        <div class="col-xs-8 col-sm-12 col-md-10 text-center">
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </div>
    </form>
    </div>

@endsection
