@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>{{__('edit_category')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card"
        @if($setting->color == 2)
        style="background: #808080"
        @endif>

            {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('categories.fields')
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class='btn btn-primary'>{{__('save')}}</button>
                <a href="{{ route('categories.index') }}" class="btn btn-default">{{__('cancel')}}</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
