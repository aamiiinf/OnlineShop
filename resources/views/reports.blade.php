@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('reports')}}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row">
      <section class="col-lg-12 connectedSortable mt-3">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">گزارش ماهیانه</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-left" role="menu">
                  <a href="#" class="dropdown-item">منو اول</a>
                  <a href="#" class="dropdown-item">منو دوم</a>
                  <a href="#" class="dropdown-item">منو سوم</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">لینک</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-widget="remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>فروش ۱ دی ۱۳۹۷</strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>میزان پیشرفت اهداف</strong>
                </p>

                <div class="progress-group">
                  محصولات اضافه شده به سبد خرید
                  <span class="float-left"><b>160</b>/200</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                  خرید انجام شده
                  <span class="float-left"><b>310</b>/400</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">بازدید صفحات ویژه</span>
                  <span class="float-left"><b>480</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  سوالات ارسالی
                  <span class="float-left"><b>250</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">تومان 35,210.43</h5>
                  <span class="description-text">کل گردش حساب</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-warning"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">تومان 10,390.90</h5>
                  <span class="description-text">فروش کل</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">تومان 24,813.53</h5>
                  <span class="description-text">سود کل</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block">
                  <span class="description-percentage text-danger"><i class="fa fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">1200</h5>
                  <span class="description-text">اهداف</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
      </section>



      <section class="col-lg-12 connectedSortable mt-3">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">محصولات تازه اضافه شده</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-widget="remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              <li class="item">
                <div class="product-img">
                  <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">تلویزیون سامسونگ
                    <span class="badge badge-warning float-left">تومان 1800</span></a>
                  <span class="product-description">
                    سامسونگ ۳۲ اینچی، ال ای دی و سالم
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">دوچرخه
                    <span class="badge badge-info float-left">تومان 700</span></a>
                  <span class="product-description">
                     دوچرخه ۲۶، کاملا اسپورت و کوهستانی
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">
                    ایکس‌ باکس <span class="badge badge-danger float-left">
                    تومان 350
                  </span>
                  </a>
                  <span class="product-description">
                    کنسول ایکس باکس برای بازی های توپ و باحال
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">پلی استیشن 4
                    <span class="badge badge-success float-left">$399</span></a>
                  <span class="product-description">
                    پلی استیشن ۴ با ۳۰۰ گیگ حافظه داخلی
                  </span>
                </div>
              </li>
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">نمایش همه محصولات</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </section>
    </div>
    <!-- Main content -->
    <section class="content pt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">کاربران آنلاین</h3>
                  <a href="javascript:void(0);">مشاهده گزارش</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>بازدید کننده در طول زمان</span>
                  </p>
                  <p class="mr-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fa fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">از هفته گذشته</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="ml-2">
                    <i class="fa fa-square text-primary"></i> این هفته
                  </span>

                  <span>
                    <i class="fa fa-square text-gray"></i> هفته گذشته
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header no-border">
                <h3 class="card-title">محصولات</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fa fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fa fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>محصولات</th>
                    <th>قیمت</th>
                    <th>فروش</th>
                    <th>بیشتر</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="{{ asset('dist/img/default-150x150.png') }}"
                      alt="Product 1" class="img-circle img-size-32 mr-2">
                      تلویزیون هوشمند
                    </td>
                    <td>13 تومان</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fa fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 فروش
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fa fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('dist/img/default-150x150.png') }}"
                      alt="Product 1" class="img-circle img-size-32 mr-2">
                      محصول ایکس
                    </td>
                    <td>29 تومان</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fa fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 فروش
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fa fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('dist/img/default-150x150.png') }}"
                      alt="Product 1" class="img-circle img-size-32 mr-2">
                      محصول پرفروش
                    </td>
                    <td>1,230 تومان</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fa fa-arrow-down"></i>
                        3%
                      </small>
                      198 فروش
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fa fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('dist/img/default-150x150.png') }}"
                      alt="Product 1" class="img-circle img-size-32 mr-2">
                      محصول جدید
                      <span class="badge bg-danger">جدید</span>
                    </td>
                    <td>199 تومان</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fa fa-arrow-up"></i>
                        63%
                      </small>
                      87 فروش
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fa fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">فروش</h3>
                  <a href="javascript:void(0);">مشاهده گزارش</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">تومان 18,230.00</span>
                    <span>فروش در طول زمان</span>
                  </p>
                  <p class="mr-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fa fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">از ماه گذشته</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="ml-2">
                    <i class="fa fa-square text-primary"></i> امسال
                  </span>

                  <span>
                    <i class="fa fa-square text-gray"></i> سال گذشته
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header no-border">
                <h3 class="card-title">بررسی اجمالی فروشگاه آنلاین</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fa fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fa fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-success text-xl">
                    <i class="ion ion-ios-refresh-empty"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-success"></i> 12%
                    </span>
                    <span class="text-muted">نرخ تبدیل</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-warning text-xl">
                    <i class="ion ion-ios-cart-outline"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                    </span>
                    <span class="text-muted">نرخ فروش</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center mb-0">
                  <p class="text-danger text-xl">
                    <i class="ion ion-ios-people-outline"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-down text-danger"></i> 1%
                    </span>
                    <span class="text-muted">نرخ ثبت نام</span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
