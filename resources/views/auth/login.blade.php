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

            <form class="drobdown-menu p-4" action="{{ route('login.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                        <label class="form-check-label" for="dropdownCheck2">
                            Запомнить меня
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Вход</button>
{{--                @include('partials.formerrors')--}}
            </form>
        </div>
    </div>
@endsection
