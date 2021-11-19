@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('comments')}}</h1>
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
                @include('comments.table')

                <div class="card-footer clearfix">
                    <div class="float-left">
                      {{ $comments->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
