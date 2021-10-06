@extends('admin.panel')


@section('content')
    <div class="container">
    <div class="pull-right">
        <a class="btn btn-primary mb-4" href="{{route('commit')}}"> Back</a>
    </div>


                        <div class="row">

                        <form action="{{route('commit.reply')}}" method="POST">
                            @csrf
                                <div class="form-group" name="comment">
                                    <strong>Comments:</strong>

                                </div>

                            <hr>
                            <div class="form-group" name="name">
                                <strong>Name:</strong>

                            </div>
                            <hr>
                            <textarea class="form-control" name="reply"></textarea>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        </div>




@endsection
