@extends('blocks.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-5 mt-3">

            <form class="drobdown-menu p-4" action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="password2">Повторите пароль</label>--}}
{{--                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password">--}}
{{--                </div>--}}

                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
    </div>


@endsection
