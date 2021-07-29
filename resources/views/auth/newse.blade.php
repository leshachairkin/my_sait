@extends('auth.menu')

@section('contente')

{{--    <div class="container" style="width: 18rem;">--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                ghwthwr--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="container">
    <div class="row">

            @foreach($viewed as $view)
    <div class="card mb-3 mt-3 m-2" style="width: 14rem;">
        <img src="{{$view->news->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{Str::substr($view->news->news, 0, 70)}}</p>
        </div>
    </div>
            @endforeach
</div>
</div>


@endsection
