@extends('blocks.app')

@section('content')



<div class="container">
    <div class="row">

        <div class="col-sm-3 col-lg-3 border-end">
            <div class="btn-group-vertical m-1">
                <a href="personal"><button type="button" class="btn btn-outline text-start">Личные данные</button></a>
                <a href="comments"><button type="button" class="btn btn-outline text-start">Мои Комментарии</button></a>
                <a><button type="button" class="btn btn-outline text-start">Просмотренные новости</button></a>
            </div>
        </div>

        <div class="col-sm-2 col-lg-9">
            <div class="container">
{{--                @if(Request::is('auth/menu'))--}}
{{--                    --}}
{{--                @endif--}}

                @yield('contente')

            </div>
        </div>
    </div>
    </div>
</div>
@endsection


