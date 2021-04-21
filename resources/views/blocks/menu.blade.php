
  @section('menu')

      <div class="container latestNews py-4">
          <div class="row">
              <div class="col-lg-7 col-sm-2 py-2">
{{--                  <div class="container latestNews py-2">--}}
{{--                  <div class="container-fluid">--}}
                      <div class="album bg-white">
{{--                          <div class="row">--}}
                              @foreach($latestNews as $new)
{{--                                  <div class="col-md-10">--}}
                                      <a class="card shadow-sm border-0" href="{{ route('news') }}">
                                          <img class="" src="{{ $new->image  }}" style="width: 640px; height: 400px;"></a>
                                      <div class="card-body">
                                          <div class="border-bottom">{{Str::substr($new->news,0,150)}}</div>
                                          <div class="d-flex justify-content-between align-items-center py-2"></div>
                                      </div>
{{--                                  </div>--}}

                                    @endforeach

{{--                          </div>--}}
                              </div>
                      </div>

{{--                  </div>--}}
{{--              </div>--}}

              <div class="col-lg-5 mt-2">
{{--                  <div class="container py-2">--}}
                  <div class="card">
                      <div class="card-header  bg-info">{{date('l j F')}}</div>
                  </div>
                  <div class="card mt-4">
                      <div class="card-header bg-success">Топ новостей за неделю</div>
{{--                      <div class="card-body h-100">--}}
{{--                          <div class="album py-2 bg-white">--}}

                              @foreach($event as $even)
                                  <a class="card shadow-sm border-0 m-1">
                                      <img class="rounded float-end" src="" style="width: 50px; height: 40px;"></a>
                                  <div class="card-body">
                                      {{ $even->news }}
{{--                                      <div class="border-bottom">{{Str::substr($new->news,0,150)}}</div>--}}
                                      <div class="d-flex justify-content-between align-items-center border-bottom"></div>
                                  </div>

                              @endforeach
                      </div>


                  <div class="card mt-2">
                      <div class="card-header bg-secondary">Последние комментарии:</div>
                      <div class="card-body h-100"></div>
                      <div class="album py-2 bg-white">
                  </div>
                  </div>
{{--              </div>--}}


</div>
          </div>
      </div>

{{--      <div class="container latestNews py-3">--}}
{{--          <div class="row">--}}
{{--              <div class="col-sm-2 col-lg-8">--}}
{{--                  <div class="card">--}}

{{--                      @foreach($latestNews as $new)--}}
{{--                          <a class="card-body" href="{{ route('news') }}">--}}
{{--                    <img class="card-imj-top" src="{{ $new->image  }}"style="width: 400px; height: 300px;"></a>--}}
{{--                          <div class="card-footer text-center">{{Str::substr($new->news,0,150)}}</div>--}}
{{--                          <div class="d-flex justify-content-between align-items-center mt-2">--}}

{{--                      @endforeach--}}
{{--                  </div>--}}


{{--              </div>--}}
{{--                    <div class="col-sm-2 col-lg-4">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header  bg-info">{{date('l j F')}}</div>--}}
{{--                        </div>--}}
{{--                            <div class="card mt-2">--}}
{{--                                <div class="card-header">hj,</div>--}}
{{--                            </div>--}}



{{--                        </div>--}}

{{--                    </div>--}}


{{--            </div>--}}
{{--      </div>--}}

{{--           <div class="album py-4 bg-white">--}}
{{--    <div class="container latestNews py-3">--}}
{{--      <div class="row">--}}
{{--          @foreach($latestNews as $new)--}}
{{--              <div class="col-md-4">--}}
{{--                  <a class="card mb-2 shadow-sm" href="{{ route('news') }}">--}}
{{--                      <img class="" src="{{ $new->image  }}" style="width: 350px; height: 250px;"></a>--}}
{{--                      <div class="card-body">--}}
{{--                          <div class="border-bottom text-center">{{Str::substr($new->news,0,150)}}</div>--}}
{{--                          <div class="d-flex justify-content-between align-items-center border-bottom"></div>--}}
{{--                      </div>--}}

{{--              </div>--}}

{{--          @endforeach--}}

{{--</div>--}}



{{--      </div>--}}
{{--    </div>--}}
{{--     </div>--}}



