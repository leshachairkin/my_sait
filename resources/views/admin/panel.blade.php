<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>
    </head>
<style>

</style>
      <body>


       <header class="navbar nav-expand-lg bg-secondary position-static">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-2">
               <h4 class="text-white">Меню</h4>
               </div>
                   <div class="col-lg-10">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                           <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                       </svg>
                   </div>
           </div>
           </div>
       </header>

   <div class="container-fluid">
      <div class="row">
          <div class="col-sm-3 col-lg-2 border-end">
               <div class="btn-group-vertical m-1">
                   <a href="{{route('panel')}}"><button type="button" class="btn btn-outline text-start">Главная</button></a>
                   <a href="{{route('post.show')}}"><button type="button" class="btn btn-outline text-start" id="news">Новости</button></a>
                   <a href="{{route('commit')}}"><button type="button" class="btn btn-outline text-start">Комментарии</button></a>
                   <a href="{{route('users')}}"><button type="button" class="btn btn-outline text-start">Пользователи<span class="badge text-info"></span></button></a>
                   <a href="image"><button type="button" class="btn btn-outline text-start">Изображение</button></a>
                   <a href="/"><button type="button" class="btn btn-outline text-start">Сайт</button></a>
                   <a href="{{route('app')}}"><button type="button" class="btn btn-outline text-start">Lesson</button></a>

               </div>
          </div>

              <div class="col-sm-2 col-lg-9">
             <div class="container">

                 @include('admin/home')

                 @if(Request::is('admin/panel'))

                <div class="col-lg-12 col-sm-3 px-4">
                 <div class="card">
                     <div class="header p-2 alert alert-success" role="alert"><h6>Diagram</h6></div>

                         <div class="body">

        ffdgb
                     </div>
                 </div>
                </div>
@endif
                      @yield('content')

             </div>
                  </div>
              </div>
          </div>
      </div>







       <!-- JavaScript Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      </body>
    </html>
