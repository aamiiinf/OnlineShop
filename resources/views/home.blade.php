@extends('layouts.app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{__('dashboard')}}</h1>
          </div><!-- /.col -->
        </div>
      </div>
    </div>

      <div class="container-fluid mt-3">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"
            @if($setting->color == 2)
            style="background: #202020;"
            @endif>
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">{{__('online_user')}}</span>
                <span class="info-box-number">
                  {{ $is_online }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3"
            @if($setting->color == 2)
            style="background: #202020;"
            @endif>
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-sticky-note"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">{{__('product')}}</span>
                <span class="info-box-number">{{ $post }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3"
            @if($setting->color == 2)
            style="background: #202020;"
            @endif>
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">{{__('sale')}}</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3"
            @if($setting->color == 2)
            style="background: #202020;"
            @endif>
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">{{__('number_of_members')}}</span>
                <span class="info-box-number">{{ $user }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">




          <!-- Left col -->
          <section class="col-lg-12 connectedSortable mt-4">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card"
            @if($setting->color == 2)
            style="background: #202020;"
            @endif>

                <div class="rounded-top"
                @if($setting->color == 1)
                style="border:1px solid #dee2e6;"
                @else
                style="border:1px solid #696969;"
                @endif>

                  <ul class="nav nav-pills" style="position:relative;">
                   <li class="nav-item">
                      <a class="nav-link active @if($setting->color == 2) text-white @endif"
                        id="user" href="user_chart" data-toggle="tab">{{__('users_statistic')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link @if($setting->color == 2) text-white @endif"
                        id="post" href="post_chart" data-toggle="tab">{{__('posts_statistic')}}</a>
                    </li>
                    <li class="nav-item mx-3 my-2 mr-auto">
                      <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-widget="collapse">
                          <i class="fa fa-minus"></i>
                        </button>

                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                      </div>
                    </li>
                  </ul>
                </div>
                <div>
                  <ul class="nav nav-tabs ranges"
                  @if($setting->color == 2)
                  style="border-bottom:1px solid #696969;"
                  @endif>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="tab" data-range='7'>{{__('last_week')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active month" href="#" data-toggle="tab" data-range='30'>{{__('previous_month')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="tab" data-range='90'>{{__('the_last_three_months')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="tab" data-range='180'>{{__('the_last_six_months')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="tab" data-range='360'>{{__('one_year_ago')}}</a>
                    </li>
                  </ul>
                </div>
              <!-- </div> -->
              <!-- /.card-header -->
            <div class="card-body">
              <!-- <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                  <i class="fa fa-pie-chart mr-1"></i>
                  {{__('visit')}}
                </h3>
                <ul class="nav nav-pills mr-auto p-2">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">{{__('chart')}}</a>
                  </li>
                </ul>
              </div>/.card-header -->
              <div class="">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="user_chart" style="position: relative; height: 350px;"></div>
                  <div class="chart tab-pane" id="post_chart" style="position: relative; height: 350px;"></div>
                </div>
              </div><!-- /.card-body -->
            </div>
           </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->

          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12 connectedSortable mt-3">
              <!-- Calendar -->
              <div class="card bg-success-gradient"
              @if($setting->color == 2)
              style="background: #202020"
              @endif>
                <!-- card header -->
                <div class="card-header no-border">

                  <h3 class="card-title">
                    <i class="fa fa-calendar"></i>
                    {{__('calendar')}}
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-widget="remove">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0 ares">
                  <!--The calendar -->
                  <div id="calendarM" style="width: 100%;"></div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
           </section>
          <!-- /right col -->


          <section class="col-lg-12 connectedSortable mt-3">
            <div class="card"
            @if($setting->color == 2)
            style="background: #202020"
            @endif>
              <div class="card-header">
                <h3 class="card-title">{{__('products_added')}}</h3>

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
                  @foreach($posts as $post)
                  <li class="item"
                  @if($setting->color == 2)
                  style="background: #202020"
                  @endif>
                    <div class="product-img">
                      <img src="{{ asset($post->image) }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">{{ $post->name }}
                        <span class="badge badge-warning float-left">{{ $post->price }}</span></a>
                      <span class="product-description">
                              {{ $post->body }}
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  @endforeach
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="{{ route('posts.index') }}" class="uppercase">{{__('all_products')}}</a>
              </div>
              <!-- /.card-footer -->
            </div>
          </section>

          <section class="col-lg-7 connectedSortable mt-3">

            <!-- TO DO List -->
            <div class="card"
            @if($setting->color == 2)
            style="background: #202020"
            @endif>
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  {{__('to-do_list')}}
                </h3>

                <div class="card-tools">
                  {{ $works->links() }}

                  <div class="card-tools">

                    <button type="button" class="btn btn-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>

                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list">
                  @include('flash::message')
                  @foreach($works as $work)
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>

                    @if($work->work == 2)
                    <span class="text badge badge-success">{{__('done')}}</span>
                    @endif
                    @if($work->work == 1)
                    <span class="text badge badge-danger">{{__('undone')}}</span>
                    @endif
                    <!-- todo text -->
                    <span class="text">{{ $work->title }}</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-warning">
                      <i class="fa fa-clock-o"></i>
                      {{ $work->created_at->diffForHumans();}}
                    </small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <a href="{{ route('works.index', [$work->id]) }}"><i class="fa fa-eye" style="color:#444"></i></a>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="{{ route('works.create') }}" type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i>{{__('new')}}</a>
              </div>
            </div>
            <!-- /.card -->
          </section>

          <section class="col-lg-5 connectedSortable mt-3">
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary"
            @if($setting->color == 2)
            style="background: #202020"
            @endif>
              <div class="card-header">
                <h3 class="card-title">{{__('comments')}}</h3>

                <div class="card-tools">

                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>

                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">

                @foreach($commends as $commend)
                  @if($commend->status == 1)
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-right">{{$commend->name }}</span>
                      <span class="direct-chat-timestamp float-left">{{ $commend->created_at->diffForHumans();}}</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="{{ asset(Auth::user()->image) }}" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      {{$commend->body }}
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
                  @endif
                @endforeach
                </div>
                <!--/.direct-chat-messages-->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
@endsection
