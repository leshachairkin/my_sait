

<div class="container-fluid sticky-top" style="background-color: #dededeff;">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="" href="/"><img style="width: 100px; height: 70px;" src="{{ asset('images/logotipp.jpg')}}"></a>
      </div>
      <div class="col-4 text-center">
          <a class="" href="{{ route('panel') }}">Админ понел</a>
{{--        <a class="blog-header-logo text-warning font-italic" style="text-decoration: none;" href="#"><h1>Новости</h1></a>--}}
{{--          @include('blocks.carousel')--}}
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-gray-dark" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Поиск</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
                 @if(auth()->check())
                     <div class="nav-item">
                         <a class="nav-link font-weight-bold" href="#">{{auth()->user()->name}}</a>
                     </div>
          <div class="nav-item">
              <a class="btn btn-sm btn-outline-primary" href="/logout">Выход</a>
          </div>
          @else
          <a class="btn btn-sm btn-outline-primary" style="margin:5px" href="{{ route('login.create') }}">Войти</a>
          <a class="btn btn-sm btn-outline-primary" href="{{ route('register') }}">Зарегистрироваться</a>
          @endif
      </div>

  </header>
<div class="container-fluid badge-secondary">
  <div class="nav-scroller py-0 mb-1">
    <div class="nav d-flex justify-content-between">
      <a class="p-2 text-white" href="{{ route('app') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Главная</font></font></a>
      <a class="p-2 text-white" href="{{ route('news.category', ['hitech']) }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Технологии</font></font></a>
      <a class="p-2 text-white" href="{{ route('news.category', ['culture']) }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Культура</font></font></a>
      <a class="p-2 text-white" href="{{ route('news.category', ['business']) }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Бизнес</font></font></a>
      <a class="p-2 text-white" href="{{ route('news.category', ['politics']) }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Политика</font></font></a>
      <a class="p-2 text-white" href="{{ route('news.category', ['study']) }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Наука</font></font></a>
      <a class="p-2 text-white" href="{{ route('news.category', ['health']) }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Здоровье</font></font></a>
      <a class="p-2 text-white" href="{{ route('default') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Путешествовать</font></font></a>
    </div>
  </div>
</div>
    </div>




