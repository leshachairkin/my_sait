
  @section('menu')

     <div class="album py-5 bg-light">
    <div class="container latestNews">
      <div class="row">
          @foreach($latestNews as $new)
              <div class="col-md-4">
                  <a class="card mb-4 shadow-sm" href="{{ route('news') }}">
                      <img src="{{ $new->image  }}" style="width: 350px; height: 250px;"></a>
                      <div class="card-body ">
                          {{Str::substr($new->news,0,150)}}
                          <div class="d-flex justify-content-between align-items-center">
                          </div>
                      </div>
              </div>

          @endforeach


      </div>
    </div>
     </div>

