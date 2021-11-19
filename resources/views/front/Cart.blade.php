@extends('front.layout.app')

@section('main')

<div class="content m-4">
  <h1>سبد خرید</h1>
  <p>تعداد محصولات را اضافه و کم کنید و سبد خود را آپدیت کنید.</p>
  <!-- start undo button -->
  <p class="removeAlert">
    آیتم مورد نظر حذف شد. اشتباه کردید؟ <a href="#">برگرداندن آیتم</a>
  </p>
  <!-- end undo button -->


  <table class="">
    <thead>
    <!-- start table head -->
    <tr>
      <th>نام محصول</th>
      <th>قیمت</th>
      <th>تعداد</th>
      <th>مجموع</th>
    </tr>
    <!-- end table head -->
    </thead>
    <tbody>
    <!-- start table body -->
    <tr>
      <!-- start item one -->
      <td>
        <div class="item">
          <div class="item-front">
            <img src="pics/m.jpg" />
          </div>
          <div class="item-back">
            <img src="pics/mm.jpg" />
          </div>
        </div>
        <p>سونی مدل a5<br /><span class="itemNum">A5 2017</span></p>
        <p class="description">خلاصه توضیح در مورد محصول مورد نظر</p>
      </td>
      <td>1000000 تومان</td>
      <td>
        <input type="number" class="quantity" value="1" min="1" />
        <a href="#" class="remove">حذف</a>
      </td>
      <td class="itemTotal">1000000 تومان</td>
      <!-- end item one -->
    </tr>
    <tr>
      <!-- start item two -->
      <td>
        <div class="item">
          <div class="item-front">
            <img src="pics/m.jpg" />
          </div>
          <div class="item-back">
            <img src="pics/mm.jpg" />
          </div>
        </div>
        <p>سونی مدل a5<br /><span class="itemNum">A5 2017</span></p>
        <p class="description">خلاصه توضیح در مورد محصول مورد نظر</p>
      </td>
      <td>1500000 تومان</td>
      <td>
        <input type="number" class="quantity" value="2" min="1" />
        <a href="#" class="remove">حذف</a>
      </td>
      <td class="itemTotal">3000000 تومان</td>
      <!-- end item two -->
    </tr>
    <tr>
      <!-- start item three -->
      <td>
        <div class="item">
          <div class="item-front">
            <img src="pics/m.jpg" />
          </div>
          <div class="item-back">
            <img src="pics/mm.jpg" />
          </div>
        </div>
        <p>سونی مدل a5<br /><span class="itemNum">A5 2017</span></p>
        <p class="description">خلاصه توضیح در مورد محصول مورد نظر</p>
      </td>
      <td>1000000 تومان</td>
      <td>
        <input type="number" class="quantity" value="2" min="1" />
        <a href="#" class="remove">حذف</a>
      </td>
      <td class="itemTotal">2000000 تومان</td>
      <!-- end item three -->
    </tr>
    <!-- end table body -->
    </tbody>
  </table>

  <!-- start checkout list -->
  <div class="">
    <h2>پیش فاکتور</h2>

    <table class="pricing">
      <tbody>
      <tr>
        <td>قیمت کل</td>
        <td class="subtotal"></td>
      </tr>
      <tr>
        <td>مالیات</td>
        <td class="tax"></td>
      </tr>
      <tr>
        <td>هزینه ارسال</td>
        <td class="shipping">10000 تومان</td>
      </tr>
      <tr>
        <td><strong>مجموع:</strong></td>
        <td class="orderTotal"></td>
      </tr>
      </tbody>
    </table>
    <a class="cta" href="#">خرید</a>
  </div><!-- end checkout list -->
</div> <!-- End Content -->

@endsection
