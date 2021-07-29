@extends('auth.menu')

{{--@section('title')Личный кабинет@endsection--}}

@section('contente')

    <div class="container">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('personal') }}"> Back</a>
    </div>

        <div class="row">
            <div class="col-5">

                    <form action="{{route('personal.update', $name->id)}}" method="POST">
                        @csrf

                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">

                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{$name->name}}" class="form-control">

                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" name="email" value= "{{$name->email}}" class="form-control">

                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary mb-2" id="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

    </div>
@endsection
