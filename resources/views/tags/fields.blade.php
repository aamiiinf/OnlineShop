<!-- Title Field -->
<div class="form-group col-sm-6">
    <label>{{__('title')}}</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <label>{{__('name')}}</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Discription Field -->
<div class="form-group col-sm-6">
    <label>{{__('discription')}}</label>
    {!! Form::text('discription', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label>{{__('status')}}</label>
    {!! Form::select('status', ['1' => 'active','2' => 'Inactive'], null, ['class' => 'form-control custom-select']) !!}
</div>
