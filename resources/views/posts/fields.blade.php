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

<!-- Product type Field -->
<div class="form-group col-sm-6">
    <label>{{__('product_type')}}</label>
    {!! Form::select('product_type', ['1' => 'Virtual', '2' => 'Download'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Weight Field -->
<div class="form-group col-sm-6">
    <label>{{__('weight')}}</label>
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Dimensions Field -->
<div class="form-group col-sm-6">
    <label>{{__('dimensions')}}</label>
    {!! Form::text('dimensions', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label>{{__('status')}}</label>
    {!! Form::select('status', ['1' => 'active', '2' => 'inactive'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label>{{__('status_commodity')}}</label>
    {!! Form::select('status_commodity', ['1' => 'Available', '2' => 'Unavailable'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Status Price -->
<div class="form-group col-sm-6">
    <label>{{__('price')}}</label>
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Special sale price -->
<div class="form-group col-sm-6">
    <label>{{__('price_2')}}</label>
    {!! Form::text('price_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    <label>{{__('categories')}}</label>
    <select class="form-control" name="categories[]">
        @foreach ($categories as $cat_id => $cat_name)
            <option style="color:	#2F4F4F" value="{{$cat_id}}"
              <?php if (in_array($cat_id, $post->categories->pluck('id')->toArray()))
              {
                echo 'selected';
              }
              ?>>{{ $cat_name }}</option>
        @endforeach
    </select>
</div>

<!-- Tag Field -->
<div class="form-group col-sm-6">
    <label>{{__('tags')}}</label>
    <select class="form-control chosen-select" multiple name="tags[]">
        @foreach ($tags as $tag_id => $tag_name)
            <option style="color:	#2F4F4F" value="{{$tag_id}}"
            <?php if (in_array($cat_id, $post->tags->pluck('id')->toArray())) {
                    echo 'selected';
                  } ?>>{{ $tag_name }}</option>
        @endforeach
    </select>
</div>

<!-- Commodity ID Field -->
<div class="form-group col-sm-6">
    <label>{{__('commodity_id')}}</label>
    {!! Form::text('commodity_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    <label>{{__('color')}}</label>
{!! Form::text('color', null, ['class' => 'form-control']) !!}
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
