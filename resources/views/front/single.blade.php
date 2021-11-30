@extends('front.layout.app')

@section('main')

      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="single-box">
                  <div class="row">
                     <div class="col-md-7">
                        <h5>{{ $post->name }}</h5>
                        <h6>{{ $post->body }}</h6>
                        <hr>
                        <div class="row">
                           <div class="col-md-7">
                              <div class="single-content-right">
                                 <ul class="brand-ul">
                                    <li>برند : <a href="#">هوآوی</a></li>
                                    <li>دسته بندی : <a href="#">موبایل و تبلت</a></li>
                                 </ul>
                                 <br>
                                 <span>مشخصات مختصر محصول :</span><br>
                                 <ul class="product-ul">
                                    <li></li>
                                    <li>اندازه نمایشگر 10 اینچ</li>
                                    <li>دارای شبکه 4G</li>
                                    <li>دارای دو سیم کارت</li>
                                    <li>حافظه داخلی 32G</li>
                                    <li>دارای بدنه فلزی در عین حال سبک</li>
                                    <li>درای تنوع رنگ</li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="single-content-left">
                                 <ul>
                                    <span>وضعیت : موجود در انبار</span><br><br>
                                    <li>گارانتی : Huawei</li>
                                    <br>
                                    <li>
                                       رنگ بندی :
                                       <ul>
                                          <li><i class="fa fa-square white"></i>سفید</li>
                                          <li><i class="fa fa-square black"></i>مشکی</li>
                                          <li><i class="fa fa-square silver"></i>نقره ای</li>
                                          <li><i class="fa fa-square gold"></i>طلایی</li>
                                       </ul>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <h3>85000 تومان</h3>
                        <div  class="btn-single">
                           <a href="#"><i class="fa fa-cart-plus"></i>خرید آنلاین</a>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="single-img">
                           <figure>
                              <img src="{{ asset($post->image) }}" class="w-100 s-img" data-zoom-image="img/single-tablet.jpg">
                           </figure>
                        </div>
                        <div class="single-img-slider">
                           <div class="owl-carousel owl-theme ov-single">
                              <div class="item">
                                 <a data-fancybox="gallery"  href="img/single-tablet.jpg"><img src="img/single-tablet.jpg" class="w-100"></a>
                              </div>
                              <div class="item">
                                 <a data-fancybox="gallery"  href="img/single-tablet.jpg"><img src="img/single-tablet.jpg" class="w-100"></a>
                              </div>
                              <div class="item">
                                 <a data-fancybox="gallery"  href="img/single-tablet.jpg"><img src="img/single-tablet.jpg" class="w-100"></a>
                              </div>
                              <div class="item">
                                 <a data-fancybox="gallery"  href="img/single-tablet.jpg"><img src="img/single-tablet.jpg" class="w-100"></a>
                              </div>
                              <div class="item">
                                 <a data-fancybox="gallery"  href="img/single-tablet.jpg"><img src="img/single-tablet.jpg" class="w-100"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      <div class="container">
         <span class="releated-products">محصولات مرتبط</span>
         <hr>
         <div class="row">
            <div class="col-md-12">
               <div class="single-two-slider">
                  <div class="owl-carousel owl-theme ov-single-two">
                    @foreach($posts as $post)
                    @if($post->categories()->pluck('name') == $posts_category)
                     <div class="item">
                        <figure>
                           <a href=""><img src="{{ asset($post->image) }}" class="w-100" /></a>
                        </figure>
                        <h5>{{ $post->name }}</h5>
                        <span>{{ $post->price }}</span>
                     </div>
                    @endif
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
               <div class="single-tabs">
                  <ul class="nav nav-tabs">
                     <li class="active"><a data-toggle="tab" href="#one"><i class="fa fa-file"></i>مشخصات فنی</a></li>
                     <li><a data-toggle="tab" href="#two"><i class="fa fa-pencil"></i>نظرات کاربران</a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="one" class="tab-pane fade">
                        <p class="bg-light"><span>شرکت سازنده:</span>هوآوی</p>
                        <p class="bg-light"><span>مدل:</span>Tab G6</p>
                        <p class="bg-light"><span>گارانتی:</span>Huawei</p>
                        <p class="bg-light"><span>شبکه های تلفن:</span>4G-3G-LTE</p>
                        <p class="bg-light"><span>تعداد سیمکارت:</span>2</p>
                        <p class="bg-light"><span>حافظه داخلی:</span>32G</p>
                        <p class="bg-light"><span>پشتیبانی از کارت sd:</span>بله</p>
                        <p class="bg-light"><span>باتری:</span>1300 میلی آمپر</p>
                        <p class="bg-light"><span>باتری اضافی:</span>ندارد</p>
                        <p class="bg-light"><span>جک هدفون:</span>دارد</p>
                        <p class="bg-light"><span>گارد:</span>ندارد</p>
                     </div>
                     <div id="two" class="tab-pane fade">
                       <h2 class="py-3 mb-5" style="border-bottom: 3px double #000000;">نظرات</h2>
                        @foreach($comments as $comment)
                          @if($comment->post_id == $post->id)
                            @if($comment->status == 1)
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">{{ $comment->name }}</h4>
                                <p class="card-text">{{ $comment->body }}</p>
                              </div>
                            </div>
                            @endif
                          @endif
                        @endforeach
                       <h2 class="py-3 pt-5" style="border-bottom: 3px double #000000;">ارسال نظر</h2>
                        @include('flash::message')

                        @auth
                        <form class="pt-5 rtl" action="{{ route('commend') }}">
                           <div class="form-row">
                               <div class="form-group col-md-6 d-none">
                                   <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{ Auth::user()->name }}" />
                               </div>
                               <div class="form-group col-md-6 d-none">
                                   <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{ Auth::user()->email }}" />
                               </div>
                           </div>
                           <div>
                             <input type="hidden" name="post_id" value="{{ $post->id }}" />
                           </div>
                           <div class="form-group">
                               <textarea class="form-control" name="body" rows="5" placeholder="Message"></textarea>
                           </div>
                           <div><button class="btn btn-primary" type="submit">ارسال</button></div>
                        </form>
                        @else
                        <form class="pt-5 rtl" action="{{ route('commend') }}">
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <input type="text" class="form-control" name="name" placeholder="نام" />
                               </div>
                               <div class="form-group col-md-6">
                                   <input type="email" class="form-control" name="email" placeholder="ایمیل" />
                               </div>
                           </div>
                           <div>
                             <input type="hidden" name="post_id" value="{{ $post->id }}" />
                           </div>
                           <div class="form-group">
                               <textarea class="form-control" name="body" rows="5" placeholder="نظر"></textarea>
                           </div>
                           <div><button class="btn btn-primary" type="submit">ارسال</button></div>
                        </form>
                        @endauth
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

@endsection
