@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('product_details')}}</h1>
                </div>
                <div class="col-sm-6">
                  <a class="btn btn-default
                            @if(app()->getLocale()=='fa') float-left @endif
                            @if(app()->getLocale()=='en') float-right @endif"
                     href="{{ route('posts.index') }}">
                      {{__('back')}}
                  </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3 pb-3">
        <div class="card"
        @if($setting->color == 2)
        style="background: #808080"
        @endif>
            <div class="card-body">
                <div class="row">
                    @include('posts.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
