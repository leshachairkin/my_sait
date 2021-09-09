@extends('blocks.app')

@section('content')



<div class="container">
    <div class="row">

        <div class="col-sm-3 col-lg-3">
            <div class="btn-group-vertical m-1">
                <a href="personal"><button type="button" class="btn btn-outline text-start">Личные данные</button></a>
                <a href="comments"><button type="button" class="btn btn-outline text-start">Мои Комментарии</button></a>
                <a href="newse"><button type="button" class="btn btn-outline text-start">Просмотренные новости</button></a>
                <a href="add_news"><button type="button" class="btn btn-outline text-start">Добавить новости</button></a>
                <a href="{{route('my_news.view')}}"><button type="button" class="btn btn-outline text-start">Мои новости</button></a>
                <a href="/logout"><button type="button" class="btn btn-outline text-start text-danger">Выход</button><img src="{{asset('images/image_exit.png')}}" style="width: 20px;height: 20px;"></a>
            </div>
        </div>

        <div class="col-sm-2 col-lg-9">
            <div class="container">

                <div class="container">
{{--                @include('auth/personal')--}}
{{--                @if(Request::is('auth/menu'))--}}
{{--                    <h2 class="text-center">HELLO {{auth()->user()->name}}</h2>--}}
{{--                @endif--}}
                </div>
                @yield('contente')

            </div>
        </div>
    </div>
    </div>
</div>
@endsection


