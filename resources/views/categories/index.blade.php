@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('categories')}}</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary
                            @if(app()->getLocale()=='fa')
                            float-left
                            @endif
                            @if(app()->getLocale()=='en')
                            float-right
                            @endif"
                       href="{{ route('categories.create') }}">
                        {{__('add_new')}}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card"
        @if($setting->color == 2)
        style="background: #808080"
        @endif>
            <div class="card-body p-0">
                @include('categories.table')

                <div class="card-footer clearfix">
                    <div class="float-left">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
