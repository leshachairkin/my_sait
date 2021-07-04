@extends('auth.menu')


@section('contente')

    <div class="container">

        <div class="card border-0">
            <div class="card-header">
                <div class="row">
                <div class="col-lg-3">
                    Category
                </div>
                <div class="col-lg-4">
                    News
                </div>
                <div class="col-lg-3">
                    Comment
                </div>
                </div>
            </div>
            @foreach($comment as $comm)
            <div class="card-body">
                <div class="row">
                <div class="col-lg-3">
                    {{$comm->name}}
                </div>
                <div class="col-lg-4">
                    {{$comm->news->news}}
                </div>
                <div class="col-lg-3">
                    {{$comm->text}}
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>

@endsection
