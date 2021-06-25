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
               <h4 class="text-white">Меню</h4>
           </div>
       </header>
   <div class="container-fluid">
      <div class="row">
          <div class="col-sm-3 col-lg-2 border-end">
               <div class="btn-group-vertical m-1">
                   <a href="panel"><button type="button" class="btn btn-outline text-start" active>Главная</button></a>
                   <a href="{{route('post.show')}}"><button type="button" class="btn btn-outline text-start" id="news">Новости</button></a>
                   <button type="button" class="btn btn-outline text-start">Комментарии</button>
                 <button type="button" class="btn btn-outline text-start">Пользователи</button>
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
