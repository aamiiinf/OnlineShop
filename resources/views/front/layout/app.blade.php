<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Easy Shop</title>
      <link href="{{ asset('style/font-awesome.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('style/bootstrap.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('style/owl.carousel.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('style/owl.theme.default.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css">
      <link type="text/css" href="{{ asset('css/style_cart.css') }}" rel="stylesheet" />
      <link rel="stylesheet" href="{{ asset('carouseria-src/carouseria.min.css') }}">
      <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
   </head>
   <body>
      <div class="social">
         <ul>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-send"></i></a></li>
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
         </ul>
      </div>
      <!---------------------------------->
      <div class="top2">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="login">
                     @if (Route::has('login'))
                     @auth
                     @if (Auth::user()->role == 1)
                     <a class="mybtn" href="{{ route('home') }}" target="_') }}blank">
                        پنل مدیریت
                     </a>
                     <a class="mybtn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          خروج
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                     </form>
                     @endif
                     @else
                     <a href="{{ route('register') }}" class="mybtn"><i class="fa fa-user-plus"></i>ثبت نام</a>
                     <a href="{{ route('login') }}" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                     @endauth
                     @endif
                     <a href="{{ route('cart') }}" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <form action="{{route('search')}}">
                     <input type="text" placeholder="کالای مورد نظر را جستجو کنید">
                     <button type="submit" ><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div><!--top2-->
      <!---------------------------------->
      <div class="main-menu">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <ul>
                    @foreach($categories as $category)
                     @if($category->parent_id == 0)
                     <li>
                        <a href="#">{{ $category->name }}</a>
                        <ul>
                          @foreach($subcategories as $subcategory)
                           @if($subcategory->parent_id == $category->id)
                           <li><a href="#">{{ $subcategory->name }}</a></li>
                           @endif
                          @endforeach
                        </ul>
                     </li>
                     @endif
                    @endforeach
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!---------------------------------->

    @yield('main')


    <!---------------------------------->
    <div class="footer">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <div class="footer-description">
                   <ul>
                      <li>تضمین اصالت کالاهای فروخته شده</li>
                      <li>فروش برند های معتبر</li>
                      <li>پاسخگویی 24 ساعته</li>
                      <li>امکان پرداخت آنلاین با کارت بانکی و پرداخت در محل</li>
                      <li>امکان بازگشت تا یک هفته در صورت عدم رضایت مشتری</li>
                      <li>خرید آسان و مطمئن</li>
                      <li>قیمت های مناسب</li>
                   </ul>
                </div>
             </div>
             <div class="col-md-4">
                <div class="footer-description2">
                   <ul>
                      <li><i class="fa fa-truck"></i>تحویل پستی سریع</li>
                      <li><i class="fa fa-plane"></i>ارسال با پست پیشتاز و سفارشی</li>
                      <li><i class="fa fa-cart-arrow-down"></i>خرید آسان و راحت</li>
                   </ul>
                </div>
             </div>
             <div class="col-md-3">
                <div class="news-form">
                   <h5>در خبرنامه عضو شوید</h5>
                   <form action="" >
                      <input type="email" placeholder="ایمیل خود را وارد کنید" >
                      <button type="submit" ><i class="fa fa-envelope-o"></i></button>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!---------------------------------->
    <div class="copy-right">
       <div class="container">
          <div class="row">
             <div class="col-md-12 text-center">
                &copy;&nbsp;&nbsp;طراحی و کدنویسی سئو 90&nbsp;&nbsp;&nbsp;&nbsp;
                <span>info@seo90.ir</span>
             </div>
          </div>
       </div>
    </div>
    <!---------------------------------->
    <script src="{{ asset('js/jquery-3.3.1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.simple.timer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/js.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/scripts_cart.js') }}"></script>
    <script src="{{ asset('carouseria-src/carouseria.min.js') }}" type="application/javascript"></script>
    <script>
    // CÓDIGO DE INICIALIZAÇÃO DO CAROUSEL
    setCarousel("250px true vertical false true true");

    // CÓDIGO PARA CUSTOMIZAÇÃO NA PÁGINA 'INDEX' APENAS
    function contCheck(){setTimeout(()=>{var e=document.getElementById("carouseria").querySelector('[count="0"]'),
    t=document.getElementById("carouseria").querySelector('[count="1"]');e.style.opacity>0?(document.getElementById("c2_1")
    .disabled=!0,document.getElementById("c2_2").disabled=!0,document.getElementById("c1_1").disabled=!1,
    document.getElementById("c1_2").disabled=!1):t.style.opacity>0?(document.getElementById("c1_1").disabled=!0,
    document.getElementById("c1_2").disabled=!0,document.getElementById("c2_1").disabled=!1,document.getElementById("c2_2")
    .disabled=!1):(document.getElementById("c1_1").disabled=!0,document.getElementById("c1_2").disabled=!0,
    document.getElementById("c2_1").disabled=!0,document.getElementById("c2_2").disabled=!0)},300)}contCheck();
    function evenLis(){for(var c=0;c<indexContentChild.length;c++)indexContentChild[c].addEventListener("click",
    ()=>{contCheck()});for(var d=0;d<navContent.querySelectorAll('span').length;d++)navContent.querySelectorAll('span')[d]
    .addEventListener("click",()=>{contCheck()})}evenLis();function setForm(){var formItems={};var formShort=document
    .getElementById("tweakForm").elements;var queryline;for(var g=0;g<formShort.length;g++){if(formShort[g].name!="")
    formItems[formShort[g].name]=formShort[g].value}queryline=formItems.contHeight+formItems.contUnit+" ";queryline+=formItems.loopTf+" ";
    queryline+=formItems.movementDir+" ";queryline+=formItems.autoplayTf;queryline+=(formItems.autoplayTf=="true")?
    "|"+formItems.autoplayMilisec+" ":" ";queryline+=formItems.indexTf;queryline+=(formItems.indexTf=="true" && formItems.indexDir!="horizontal")?
    "|"+formItems.indexDir+" ":" ";queryline+=formItems.navTf;queryline+=(formItems.navTf=="true" && formItems.navDir!="horizontal")?
    "|"+formItems.navDir+" ":"";document.getElementById("SHOWQUERY").innerHTML="setCarousel(\""+queryline+"\")";setCarousel(queryline)}
    function resetForm(){document.getElementById("tweakForm").reset();}resetForm();
    </script>
    </body>
    </html>
