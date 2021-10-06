{{--@extends('blocks/sidebar')--}}



      <div class="container latestNews py-4">
          <hr class="bg-info">
          <div class="row">
              <div class="col-lg-7 col-sm-2 py-1">

                      <div class="album bg-white">

                              @foreach($latestNews as $new)


                          <div class="image card shadow-sm border-0 mt-2" name="image">
                              <a class=""  href="/news/show/{{$new->id}}">
                              <img class="" src="{{ $new->image }}" alt="" style="width: 640px; height: 400px" id="imgNews"></a>
                          </div>

                                      <div class="card-body p-0 mt-3">
                                          <div class="border-bottom border-info pb-0">{{Str::substr($new->news,0,200) . ' '. '...'}}</div>

                                          <div class="d-flex justify-content-between align-items-center py-0"></div>

                      </div>
                              <div class="container mb-5">
                              <div class="row">
                                  <div class="col-2 text-left p-0" style="color: gray">
                                      {{$new->user ? $new->user->name: ''}}
                                  </div>
                                  <div class="col- text-left" style="color: gray">
                                      <small>{{$new->created_at}}</small>
                                  </div>
                                  <div class="col-3">

                                  </div>
                                  <div class="col-4 text-right">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/><span class="badge text-info">{{$new->count_views}}</span>
                                      </svg>
                                      {{--                                      </div>--}}
                                      {{--                                      <div class="col-2 text-right">--}}
                                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                          <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/><span class="badge text-info">{{$new->comments->count()}}</span>
                                      </svg>
                                  </div>
                              </div>
                      </div>


                                    @endforeach

                              </div>
                  <div class="container px-5">{{ $latestNews->links() }}</div>
                      </div>






