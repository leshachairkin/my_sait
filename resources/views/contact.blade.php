@extends('layouts.app')

@section('title')Страница контактов@endsection

@section('content')
<h1>Страница контактов</h1>
<form action="/contact/submit" method="post">
	@csrf

	<div class="form-group">
		<label for="name">Введите имя</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
	</div>
	<div class="form-group">
		<label for="name">Email</label>
		<input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="name">Тема сообщение</label>
		<input type="text" name="subject" placeholder="Тема сообщение" id="subject" class="form-control">
	</div>
	<div class="form-group">
		<label for="name">Сообщение</label>
		<textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
	</div>
	<button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
