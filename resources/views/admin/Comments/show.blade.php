@extends('admin.panel')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Comments:</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('commit')}}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>News:</strong>
                    {{ $comment->news->news}}
                </div>
            </div>
            <hr>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Comments:</strong>
                    {{ $comment->text}}
                    <div class="container" style="background-color:seashell; border-radius: 10px; color: lightslategrey">
                        {{$comment->reply}}
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User:</strong>
                    {{ $comment->user->name}}
                </div>
            </div>
            <hr>

        </div>
        <a href="{{route('admin.create')}}"><button class="btn btn-success" type="button" title="create" data-bs-toggle="modal" data-bs-target="#exampleModal">Ответить на комментарии</button></a>


    </div>
@endsection
