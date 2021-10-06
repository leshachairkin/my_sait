@extends('admin.panel')


@section('content')

    <div class="container">
     {{$commit->user->name}}
{{--    @foreach($replyse as $reply)--}}

{{--        {{$reply->reply}}--}}

{{--    @endforeach--}}
    </div>
@endsection
