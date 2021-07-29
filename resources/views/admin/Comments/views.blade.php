@extends('admin.panel')


@section('content')

    <div class="container">
     {{Auth::user()->reply}}
{{--    @foreach($replyse as $reply)--}}

{{--        {{$reply->reply}}--}}

{{--    @endforeach--}}
    </div>
@endsection
