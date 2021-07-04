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

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category:</strong>
                    {{ $comment->category }}
                </div>
            </div>
            <hr>

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
        <button class="btn btn-success" type="button" title="create" data-bs-toggle="modal" data-bs-target="#exampleModal">Ответить на комментарии</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ответить на комментарии:</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
{{--                                                        <div class="row">--}}
                                                            <form action="{{route('commit.store', $comment->id)}}" method="POST">
                                                        <textarea name="commit"></textarea>
                                                            </form>
{{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" name="comment">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

    </div>
@endsection
