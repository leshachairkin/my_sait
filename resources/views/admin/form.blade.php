@extends('admin.panel')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="post" action="{{ route('form.create') }}" enctype="multipart/form-data">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-sm-2 m-2">
                    @if(count($errors))
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif

                    @csrf
                    <select class="form-select" name="category_id" aria-label="select example">
                        <option selected>Выбрать категорию</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" id="{{$category->url}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        {{--    <div class="container">--}}
        <div class="row">
            <div class="col-lg-6 col-sm-2 m-4 px-3">
                <div class="mb-3">
                    <div class="card">
                        <div class="card-header alert alert-secondary">Добавить новости</div>
                        {{--                    <label for="news" class="form-label">Добавить новости</label>--}}
                        <div class="card-header bg-white">
                            <textarea class="form-control" name="news" id="news" rows="3"
                                      style="height: 250px"></textarea>
                            <div class="card-content">
                                <input type="file"  name="image">
                            </div>
                            <div class="card-footer bg-white">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end m-2">
                                    <input type="text" name="img_id" placeholder="изображение">
                                    <button class="btn btn-primary me-md-2" type="submit">Добавить новости</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{--    </div>--}}
            {{--        <div class="col-lg-5 col-sm-2 m-4">--}}
            {{--            <div class="mb-3">--}}
            {{--            <div class="card">--}}
            {{--                <div class="card-header alert alert-secondary">Выбрать изображение</div>--}}
            {{--                <div class="card-body" >--}}
            {{--                   <img src="" class="img-fluid">--}}
            {{--                    <div class="card-footer bg-white">--}}
            {{--                    <div class="d-grid gap-2 d-md-flex justify-content-md-end m-2">--}}
            {{--                    <button class="btn btn-primary me-md-2" type="submit">Выброть изображение</button>--}}
            {{--                </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            {{--        </div>--}}
            {{--        </div>--}}
        </div>
        </div>
    </form>


    {{--    <nav class="col-md-3 col-lg-2 d-md-block sidebar">--}}
    {{--           <div class="row">--}}
    {{--           <div class="container">--}}
    {{--           <div class="position-sticky pt-3">--}}
    {{--               <div class="accordion-item">--}}
    {{--                   <h2 class="accordion-header" id="headingTwo">--}}
    {{--                       <button class="accordion-button collapsed border-0 text-start"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
    {{--                           Новости--}}
    {{--                       </button>--}}
    {{--                   </h2>--}}
    {{--                   <div id="collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
    {{--                       <div class="accordion-body border-0">--}}
    {{--                           <ul class="list-group" style="list-style-type: none;">--}}
    {{--                               <li><a class="list-group-item border-0" href="">Business</a></li>--}}
    {{--                               <li><a class="list-group-item border-0" href="">Culture</a></li>--}}
    {{--                               <li><a class="list-group-item border-0" href="">Health</a></li>--}}
    {{--                               <li><a class="list-group-item border-0" href="">Hitech</a></li>--}}
    {{--                               <li><a class="list-group-item border-0" href="">Politics</a></li>--}}
    {{--                               <li><a class="list-group-item border-0" href="">Study</a></li>--}}
    {{--                           </ul>--}}
    {{--                       </div>--}}
    {{--                   </div>--}}
    {{--               </div>--}}
    {{--           </div>--}}
    {{--           </div>--}}
    {{--           </div>--}}
    {{--                    </nav>--}}





@endsection
