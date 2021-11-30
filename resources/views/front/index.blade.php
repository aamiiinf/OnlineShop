@extends('front.layout.app')

@section('main')

      <div class="container">
         <div class="row">
            <div class="col-md-12">
              <div id="carouseria" style="border-radius: 7px;">
                @foreach($posts as $post)
                 @foreach($idea_3 as $i)
                  @if($post->id == $i)
                   <div class="carouseria-item" style="background: linear-gradient(to bottom, #00a3d3, #00778d);">
                      <div class="item-style">
                        <div class="row">
                          <div class="col-sm-7">
                            <h2>{{ $post->name }}</h2>
                            <p>{{ $post->body }}</p>
                          </div>
                          <div class="col-sm-5">
                            <img src="{{ asset($post->image) }}" />
                          </div>
                        </div>
                      </div>
                   </div>
                  @endif
                 @endforeach
                @endforeach
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      <div class="container mt-4">
         <div class="row">
            <div class="col-md-3">
               <div class="coopen">
                  <img src="img/coopen.png" class="w-100" />
               </div>
            </div>
            <div class="col-md-9">
               <div class="vizheh">
                  <div class="col-md-6">
                     <div class="vizheh-img">
                        <img src="img/p20lite-listimage-black.png" class="w-100" />
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="vizheh-content">
                        <div><del>729,000 تومان</del></div>
                        <h4>685,000 تومان</h4>
                        <h3>Huawei Tab Y300G2</h3>
                        <ul>
                           <li>حافظه داخلی 32 گیگابایت</li>
                           <li>دوربین 13 مگاپیکسل</li>
                        </ul>
                        <hr>
                        <span>زمان باقیمانده تا پایان سفارش</span>
                        <div class="counter" data-minutes-left="1000"></div>
                     </div>
                  </div>
                  <div class="vizheh-tag">
                     <span>فرصت ویژه</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="one-slider">
                  <h4>{{$idea_1}}</h4>
                  <div class="owl-carousel owl-theme ov2">
                    @foreach($posts as $post)
                    @foreach ($post->categories()->pluck('name') as $cate)
                      @if($cate == $idea_1)
                     <div class="item">
                        <figure>
                           <a href="{{route('post_page' ,$post->id)}}">
                             <img src="{{ asset($post->image) }}" class="w-100" />
                           </a>
                        </figure>
                        <h5>{{$post->name}}</h5>
                        <span>{{$post->price}}</span>
                     </div>
                     @endif
                     @endforeach
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="book-baner">
                  <a href="#"><img src="img/book-baner.jpg" class="w-100" /></a>
                  <h4>کتاب های کنکور</h4>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="two-slider">
                 <h4>{{$idea_2}}</h4>
                 <div class="owl-carousel owl-theme ov2">
                   @foreach($posts as $post)
                   @foreach ($post->categories()->pluck('name') as $cate)
                     @if($cate == $idea_2)
                     <div class="item">
                        <figure>
                           <a href="{{route('post_page' ,$post->id)}}">
                             <img src="{{ asset($post->image) }}" class="w-100" />
                           </a>
                        </figure>
                        <h5>{{$post->name}}</h5>
                        <span>{{$post->price}}</span>
                     </div>
                    @endif
                    @endforeach
                    @endforeach
                 </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="bodybulding-baner">
                  <a href="#"><img src="img/bodybulding-baner.jpg" class="w-100" /></a>
                  <h4>مکمل های ورزشی</h4>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="three-slider">
                  <h4>محصولات پر بازدید</h4>
                  <div class="owl-carousel owl-theme ov3">
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>کیبورد ایسوس50</h5>
                        <span>85.000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Adata d5-32G</h5>
                        <span>112.000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Verity 16G</h5>
                        <span>65.000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>کفش چرمی نئو</h5>
                        <span>75.000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Sony PS4</h5>
                        <span>4,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>پاوربانک آداتا</h5>
                        <span>145.000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Dlink 54-65-3</h5>
                        <span>117.000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>میز تلوزیون چوبی</h5>
                        <span>357.000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung Led HD</h5>
                        <span>3.850.000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>گارد آیفون</h5>
                        <span>39.000 تومان</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      <div class="container">
         <div class="row">
           @foreach($posts as $post)
            <div class="col-md-4">
               <div class="blog-content">
                  <figure>
                     <img width="200" height="200" src="{{asset($post->image)}}" class="w-100">
                  </figure>
                  <h5><i class="fa fa-title"></i>{{ $post->name }}</h5>
                  <div>{!! $post->discription !!}</div>
                  <ul>
                     <li>
                       <i class="fa fa-bars"></i>
                       <span>دسته بندی :</span>
                       @foreach ($post->categories()->pluck('name') as $cate)
                       <span>{{ $cate }}</span>/
                       @endforeach
                     </li>
                     <li><i class="fa fa-calendar-o"></i>نوشته شده در : {{ new Verta($post->created_at); }}</li>
                     <!-- <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li> -->
                  </ul>
                  <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
               </div>
            </div>
           @endforeach
         </div>
      </div>
      <!---------------------------------->
      <div class="tab-box">
         <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#watch"><i class="fa fa-gift"></i>ساعت مچی</a></li>
            <li><a data-toggle="tab" href="#badaligat"><i class="fa fa-gift"></i>بدلیجات</a></li>
            <li><a data-toggle="tab" href="#behdashti"><i class="fa fa-gift"></i>آرایشی و بهداشتی</a></li>
            <li><a data-toggle="tab" href="#bazi"><i class="fa fa-gift"></i>اسباب بازی</a></li>
            <li><a data-toggle="tab" href="#varzesh"><i class="fa fa-gift"></i>تجهیزات ورزشی</a></li>
            <li><a data-toggle="tab" href="#lebas"><i class="fa fa-gift"></i>لباس فصل</a></li>
         </ul>
         <div class="container">
            <div class="row">
               <div class="tab-content">
                  <div id="watch" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="badaligat" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="behdashti" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="bazi" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="varzesh" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="lebas" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>

@endsection
