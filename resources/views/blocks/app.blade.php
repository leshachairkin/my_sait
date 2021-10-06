<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link class="" href="images/image.png" rel="shortcut icon" type="image/x-icon" style="border-radius: 20%;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>@yield('title')Главная</title>

  </head>
  <style>
      a:hover{
          /*background: #f4a460;*/

      }


      #imgNews {
          opacity: 0.65;
      }

      #imgNews:hover{
          /*box-shadow: 4px 4px 0px 0px rgba(122,122,122,0.5);*/
          /*transform: scale(1.1);*/
          /*transition-duration: 3s;*/
          filter: alpha(opacity=100);
          opacity: 1;
          transition: 2s;
      }



  </style>
<body>

            @include('blocks.header')

    @yield('content')

             @if(Request::is('/'))
                 @include('blocks/carousel')
             @endif



            @if(Request::is('/'))
                @include('blocks.menu')

            @endif
{{--            @if(Request::is('/'))--}}

                @include('blocks.sidebar')
{{--            @endif--}}




  @include('blocks.footer')

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
