@extends('admin.panel')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-4 m-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Выбрать категорию</option>
                    <option value="1">Business</option>
                    <option value="2">Culture</option>
                    <option value="3">Health</option>
                    <option value="3">Hitech</option>
                    <option value="3">Politics</option>
                    <option value="3">Study</option>
                </select>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
    <div class="col-6 m-2">
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Добавить новости</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button class="btn btn-info m-2">Добавить новости</button>

</div>
    </div>
    </div>

    <nav class="col-md-3 col-lg-2 d-md-block sidebar">
           <div class="row">
           <div class="container">
           <div class="position-sticky pt-3">
               <div class="accordion-item">
                   <h2 class="accordion-header" id="headingTwo">
                       <button class="accordion-button collapsed border-0 text-start"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Новости
                       </button>
                   </h2>
                   <div id="collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                       <div class="accordion-body border-0">
                           <ul class="list-group" style="list-style-type: none;">
                               <li><a class="list-group-item border-0" href="">Business</a></li>
                               <li><a class="list-group-item border-0" href="">Culture</a></li>
                               <li><a class="list-group-item border-0" href="">Health</a></li>
                               <li><a class="list-group-item border-0" href="">Hitech</a></li>
                               <li><a class="list-group-item border-0" href="">Politics</a></li>
                               <li><a class="list-group-item border-0" href="">Study</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           </div>
           </div>
                    </nav>






@endsection
