<!-- Name Field -->
<div class="form-group col-sm-6">
    <label>{{__('name')}}</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    <label>{{__('slug')}}</label>
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label>{{__('status')}}</label>
    {!! Form::select('status', ['1' => 'Active', '2' => 'Inverce'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Parent Field -->
<div class="form-group col-sm-6">
    <label>{{__('category')}}</label>
    <select class="form-control custom-select" name="parent_id">
      <option value="0">{{__('new_category')}}</option>
      @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
</div>
