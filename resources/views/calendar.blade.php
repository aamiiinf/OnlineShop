@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('calendar')}}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card"
            @if($setting->color == 2)
            style="background: #808080"
            @endif>
              <div class="card-header">
                <h4 class="card-title">{{__('usable_ions')}}</h4>
              </div>
              <div class="card-body">
                <!-- the events -->
                <div id="external-events">
                @foreach($externalevents as $externalevent)
                  <div class="external-event" id = {{$externalevent->id}} style = "background-color:{{$externalevent->color}};
                   border-color:{{$externalevent->color}};
                   color:#fff">
                  {{$externalevent->title}}
                  </div>
                @endforeach
                  <div class="checkbox">
                    <label for="drop-remove">
                      <input type="checkbox" id="drop-remove">
                      {{__('remove_after_use')}}
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /. box -->
            <div class="card"
            @if($setting->color == 2)
            style="background: #808080"
            @endif>
              <div class="card-header">
                <h3 class="card-title">{{__('new_event')}}</h3>
              </div>
              <div class="card-body">
                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                  <ul class="fc-color-picker" id="color-chooser">
                    <li><a class="text-primary" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-warning" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-success" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-danger" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                  </ul>
                </div>
                <!-- /btn-group -->
                <div class="input-group">
                  <input id="new-event" type="text" class="form-control" placeholder="{{__('select_a_title')}}">

                  <div class="input-group-append">
                    <button id="add-new-event" type="button" class="btn btn-primary btn-flat">{{__('creation')}}</button>
                  </div>
                  <!-- /btn-group -->
                </div>
                <!-- /input-group -->
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
          <div class="col-md-12">
            <div class="card card-primary"
            @if($setting->color == 2)
            style="background: #808080"
            @endif>
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
