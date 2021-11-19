<!-- Name Field -->
<div class="form-group col-sm-6">
    <label>{{__('name')}}</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <label>{{__('email')}}</label>
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label>{{__('status')}}</label>
    {!! Form::select('status', ['1' => 'active','2' => 'inactive'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    <label>{{__('role')}}</label>
    {!! Form::select('role', ['1' => 'Admin', '2' => 'User'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <label>{{__('password')}}</label>
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Confirmation Password Field -->
<div class="form-group col-sm-6">
    <label>{{__('password_confirmation')}}</label>
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    <label>{{__('image')}}</label>
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
