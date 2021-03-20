@extends('blocks.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5 mt-5">

            <form class="drobdown-menu p-4" action="{{ route('comein') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleDropdownFormEmail2">E-mail</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword2">Пароль</label>
                    <input type="emfil" class="form-control" id="exampleDropdownFormPassword22" placeholder="Password">
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
            </form>
        </div>
    </div>
@endsection
