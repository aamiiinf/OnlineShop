@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>مدیریت</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  @include('flash::message')

  <form action="{{ route('up_management', $management->id) }}" method="post" enctype ="multipart/form-data">
    @csrf
    <div class="row mb-2 mt-4">
      <div class="mx-2">
        <h5>مدیریت صفحه اصلی</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card card-outline card-info"
           @if($setting->color == 2)
           style="background: #808080"
           @endif>
          <div class="card-header">
            <h3 class="card-title">
              <!-- {{__('number')}} -->
              اسلایدر اصلی
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
              <select class="form-control chosen-select" multiple name="slider_mangement_3[]">
                @foreach ($posts as $post)
                      <option style="color:	#2F4F4F" value="{{ $post->id }}"
                        <?php
                        foreach ($idea as $key) {
                          if ($key == $post->id)
                          {echo 'selected';}
                        }
                        ?>>
                        {{ $post->name }}
                      </option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card card-outline card-info"
           @if($setting->color == 2)
           style="background: #808080"
           @endif>
          <div class="card-header">
            <h3 class="card-title">
              <!-- {{__('number')}} -->
              slider1
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
              <select class="form-control" name="slider_mangement_1">
                  @foreach ($categories as $cate)
                      <option style="color:	#2F4F4F" value="{{$cate->name}}"
                        <?php if ($management->slider_mangement_1 == $cate->name)
                        {echo 'selected';}
                        ?>>{{ $cate->name }}</option>
                  @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card card-outline card-info"
           @if($setting->color == 2)
           style="background: #808080"
           @endif>
          <div class="card-header">
            <h3 class="card-title">
              <!-- {{__('number')}} -->
              slider2
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
              <select class="form-control" name="slider_mangement_2">
                  @foreach ($categories as $cate)
                      <option style="color:	#2F4F4F" value="{{$cate->name}}"
                        <?php if ($management->slider_mangement_2 == $cate->name)
                        {echo 'selected';}
                        ?>>{{ $cate->name }}</option>
                  @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-block btn-success btn-lg">{{__('save')}}</button>
  </form>
</section>

@endsection
