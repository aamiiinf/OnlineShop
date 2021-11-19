<!-- Title Field -->
<div class="form-group col-sm-6">
    <label>{{__('title')}}</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Work Field -->
<div class="form-group col-sm-6">
    <label>{{__('work')}}</label>
    {!! Form::select('work', ['1' => 'Done', '2' => 'Undone'], null, ['class' => 'form-control custom-select']) !!}
</div>
