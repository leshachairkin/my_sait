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
    button {
        outline: none;
    }
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
                   <a href="home"><button type="button" class="btn btn-outline text-start">Главная</button></a>
                   <a href="form"><button type="button" class="btn btn-outline text-start" id="news">Новости</button></a>
                   <button type="button" class="btn btn-outline text-start">Комментарии</button>
                 <button type="button" class="btn btn-outline text-start">Пользователи</button>
                   <a href="image"><button type="button" class="btn btn-outline text-start">Изображение</button></a>
               </div>
          </div>

              <div class="col-sm-2 col-lg-9">
             <div class="container">

                      @yield('content')

             </div>
                  </div>
              </div>
          </div>
      </div>


{{--       <div class="container-fluid bg-info">--}}
{{--           <div class="row">--}}
{{--               <nav class="col-md-2 col-lg-2 d-mb-block sidebar bg-info">--}}
{{--            <div class="position-sticky pt-3">--}}
{{--                <ul class="nav flex-column">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="">Бизнес</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="">Культура</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="">Технологии</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="">Политика</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="">Наука</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="">Здоровье</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--            </div>--}}


{{--       <nav class="col-md-3 col-lg-2 d-md-block sidebar">--}}
{{--           <div class="row">--}}
{{--           <div class="container">--}}
{{--           <div class="position-sticky pt-3">--}}
{{--               <div class="accordion-item">--}}
{{--                   <h2 class="accordion-header" id="headingTwo">--}}
{{--                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                           News--}}
{{--                       </button>--}}
{{--                   </h2>--}}
{{--                   <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
{{--                       <div class="accordion-body">--}}
{{--                           <ul class="list-group">--}}
{{--                               <li><a class="list-group-item" href="">Business</a></li>--}}
{{--                               <li><a class="list-group-item" href="">Culture</a></li>--}}
{{--                               <li><a class="list-group-item" href="">Health</a></li>--}}
{{--                               <li><a class="list-group-item" href="">Hitech</a></li>--}}
{{--                               <li><a class="list-group-item" href="">Politics</a></li>--}}
{{--                               <li><a class="list-group-item" href="">Study</a></li>--}}
{{--                           </ul>--}}
{{--                       </div>--}}
{{--                   </div>--}}
{{--               </div>--}}
{{--           </div>--}}
{{--           </div>--}}
{{--           </div>--}}
{{--                    </nav>--}}




       <!-- JavaScript Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      </body>
    </html>
