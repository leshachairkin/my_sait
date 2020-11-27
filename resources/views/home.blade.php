@extends('layouts.app')

@section('title')Главная страница@endsection


@section('content')
<h1>Главная страница</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis consectetur assumenda ex vel error blanditiis fugit sapiente, explicabo, dicta dolor unde sit sed tempora, laudantium porro provident deserunt culpa dignissimos?</p>
@endsection

@section('aside')
 @parent
 <p>Дополнительный текст</p>
 @endsection