

<div class="container-fluid sticky-top" style="background-color: #dededeff;">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1 col-sm-1 col-lg-auto">
        <a class="" href="/"><img style="width: 100px; height: 70px;" src="{{ asset('images/logotipp.jpg')}}"></a>
      </div>
      <div class="col-4 text-center">
          <a class="" href="{{ route('panel') }}">Админ понел</a>
{{--        <a class="blog-header-logo text-warning font-italic" style="text-decoration: none;" href="#"><h1>Новости</h1></a>--}}
{{--          @include('blocks.carousel')--}}
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
{{--        <a class="text-gray-dark" href="#" aria-label="Search">--}}
          <form class="form mr-5" action="">
            <input class="form-control" type="text" placeholder="Поиск..." style="border-radius: 2em;">
{{--            <button class="btn btn-sm btn-outline-primary mr-4 ml-2" type="submit">Serch</button>--}}
{{--          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">--}}
{{--              <title>Поиск</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>--}}
{{--        </a>--}}
          </form>
                 @if(auth()->check())
                     <a class="nav-item">
                         <a href="{{route('personal')}}"><img class="" src="https://citydog.by/content/_posts/442X361/5e2c4f627a5bc.jpeg" alt="" style="height: 50px;width: 50px;border-radius: 50%"></a>
{{--                         <a class="nav-link font-weight-bold" href="{{ route('personal') }}">{{auth()->user()->name}}</a>--}}
{{--                         <a class="nav-link font-weight-bold" href="{{ route('personal') }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg info" viewBox="0 0 16 16">--}}
{{--                                 <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>--}}
{{--                             </svg></a>--}}
                     </div>
{{--          <div class="nav-item">--}}
{{--              <a class="btn btn-sm btn-outline-primary" href="/logout">Выход</a>--}}
{{--          </div>--}}
          @else
          <a class="btn btn-sm btn-outline-primary" style="margin:5px" href="{{ route('login.create') }}">Войти</a>
          <a class="btn btn-sm btn-outline-primary" href="{{ route('register') }}">Зарегистрироваться</a>
          @endif
      </div>

  </header>
<div class="container-fluid badge-secondary">
  <div class="nav-scroller py-0 mb-1 col-sm-1 col-lg-auto">
    <div class="nav d-flex justify-content-between">
      <a class="p-2 text-white" style="vertical-align: inherit;text-decoration: none;" href="{{ route('app') }}">Главная</a>
      <a class="p-2 text-white" style="vertical-align: inherit;text-decoration: none" href="{{ route('news.category', ['hitech']) }}">Технологии</a>
      <a class="p-2 text-white" style="vertical-align: inherit;text-decoration: none" href="{{ route('news.category', ['culture']) }}">Культура</a>
      <a class="p-2 text-white" style="vertical-align: inherit;text-decoration: none" href="{{ route('news.category', ['business']) }}">Бизнес</a>
      <a class="p-2 text-white" style="vertical-align: inherit;text-decoration: none" href="{{ route('news.category', ['politics']) }}">Политика</a>
      <a class="p-2 text-white" style="vertical-align: inherit;text-decoration: none" href="{{ route('news.category', ['study']) }}">Наука</a>
      <a class="p-2 text-white" style="vertical-align: inherit;text-decoration: none" href="{{ route('news.category', ['health']) }}">Здоровье</a>
      <a class="p-2 text-white" style="vertical-align: inherit;text-decoration: none" href="{{ route('default') }}">Путешествовать</a>
    </div>
  </div>
</div>
    </div>




