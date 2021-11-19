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

<!-- Discription Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label>{{__('discription')}}</label>
    {!! Form::textarea('discription', null, ['class' => 'form-control', 'id' => 'editor1']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-6">
    <label>{{__('body')}}</label>
    {!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label>{{__('status')}}</label>
    {!! Form::select('status', ['1' => 'active', '2' => 'inactive'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    <label>{{__('categories')}}</label>
    <select class="form-control chosen-select" multiple name="categories[]">
        @foreach ($categories as $cat_id => $cat_name)
            <option value="{{$cat_id}}"
            <?php if (in_array($cat_id, $post->categories->pluck('id')->toArray())) {
                    echo 'selected';
                  } ?>>{{ $cat_name }}</option>
        @endforeach
    </select>
</div>

<!-- Tag Field -->
<div class="form-group col-sm-6">
    <label>{{__('tags')}}</label>
    <select class="form-control chosen-select" multiple name="tags[]">
        @foreach ($tags as $tag_id => $tag_name)
            <option value="{{$tag_id}}"
            <?php if (in_array($cat_id, $post->tags->pluck('id')->toArray())) {
                    echo 'selected';
                  } ?>>{{ $tag_name }}</option>
        @endforeach
    </select>
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
<div class="clearfix"></div>
