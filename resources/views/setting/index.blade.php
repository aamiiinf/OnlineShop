@extends('layouts.app')

@section('content')


<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('settings')}}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      @include('flash::message')

    <form action="{{ route('up_setting', $setting->id) }}" method="post"  enctype ="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info card-outline"
          @if($setting->color == 2)
          style="background: #808080"
          @endif>
            <div class="card-header">
              <h3 class="card-title">
                {{__('site_title')}}
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm"
                        data-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool btn-sm"
                        data-widget="remove"
                        data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <div class="mb-3">
                <textarea class="form-control" name="title" style="width: 100%">{{ $setting->title }}</textarea>
              </div>
            </div>
          </div>

          <div class="card card-outline card-info"
          @if($setting->color == 2)
          style="background: #808080"
          @endif>
            <div class="card-header">
              <h3 class="card-title">
                {{__('site_description')}}
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea id="editor1" name="descrption">{{ $setting->descrption }}</textarea>

              </div>
            </div>
          </div>

          <div class="card card-outline card-info"
          @if($setting->color == 2)
          style="background: #808080"
          @endif>
            <div class="card-header">
              <h3 class="card-title">
                {{__('tracking')}}
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <input class="form-control" name="google" value="{{ $setting->google }}" />
              </div>
            </div>
          </div>


          <div class="card card-outline card-info"
          @if($setting->color == 2)
          style="background: #808080"
          @endif>
            <div class="card-header">
              <h3 class="card-title">
                {{__('email')}}
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <input class="form-control" name="email" value="{{ $setting->email }}" />
              </div>
            </div>
          </div>


          <div class="card card-outline card-info"
          @if($setting->color == 2)
          style="background: #808080"
          @endif>
            <div class="card-header">
              <h3 class="card-title">
                {{__('number')}}
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <input class="form-control" name="number" value="{{ $setting->number }}" />
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-block btn-success btn-lg mb-3">{{__('save')}}</button>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </form>
    </section>
    <!-- /.content -->
  </div>

@endsection
