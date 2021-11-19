<!-- Name Field -->
<div class="form-group col-sm-6">
    <label>{{__('name')}}</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <label>{{__('email')}}</label>
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Body Field -->
<div class="form-group col-sm-12">
    <label>{{__('body')}}</label>
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    <label>{{__('status')}}</label>
    {!! Form::select('status', ['1' => 'active', '2' => 'inactive'], null, ['class' => 'form-control custom-select']) !!}
</div>
