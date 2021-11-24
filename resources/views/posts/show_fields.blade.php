<!-- Name Field -->
<div class="col-sm-6">
    <label>{{__('name')}}</label>
    <p>{{ $post->name }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-6">
    <label>{{__('slug')}}</label>
    <span class="badge badge-info">{{ $post->slug }}</span>
</div>

<!-- Discription Field -->
<div class="col-sm-12">
    <label>{{__('discription')}}</label>
    <div class="p-4">{!! $post->discription !!}</div>
</div>

<!-- Product_type Field -->
<div class="col-sm-6">
    <label>{{__('product_type')}}</label>
    @if($post->product_type == 1)
        <span class="badge badge-success">{{__('virtual')}}</span>
    @endif
    @if($post->product_type == 2)
        <span class="badge badge-danger">{{__('download')}}</span>
    @endif
</div>

<!-- Category Field -->
<div class="col-sm-6">
    <label>{{__('categories')}}</label>
    @foreach ($post->categories()->pluck('name') as $cate)
        <span class="badge badge-warning">{{ $cate }}</span>
    @endforeach
</div>

<!-- Tags Field -->
<div class="col-sm-6">
    <label>{{__('tags')}}</label>
    @foreach ($post->tags()->pluck('name') as $tag)
        <span class="badge badge-warning">{{ $tag }}</span>
    @endforeach
</div>

<!-- Weight Field -->
<div class="col-sm-6">
    <label>{{__('weight')}}</label>
    <span class="badge badge-info">{{ $post->weight }}</span>
</div>

<!-- Dimensions Field -->
<div class="col-sm-6">
    <label>{{__('dimensions')}}</label>
    <span class="badge badge-info">{{ $post->dimensions }}</span>
</div>

<!-- Status Field -->
<div class="col-sm-6">
    <label>{{__('status')}}</label>
    @if($post->status == 1)
        <span class="badge badge-success">{{__('active')}}</span>
    @endif
    @if($post->status == 2)
        <span class="badge badge-danger">{{__('inactive')}}</span>
    @endif
</div>

<!-- Status Commodity Field -->
<div class="col-sm-6">
    <label>{{__('status_commodity')}}</label>
    @if($post->status_commodity == 1)
        <span class="badge badge-success">{{__('available')}}</span>
    @endif
    @if($post->status_commodity == 2)
        <span class="badge badge-danger">{{__('unavailable')}}</span>
    @endif
</div>

<!-- Price Field -->
<div class="col-sm-6">
    <label>{{__('price')}}</label>
    <span class="badge badge-info">{{ $post->price }}</span>
</div>

<!-- Price_2 Field -->
<div class="col-sm-6">
    <label>{{__('price_2')}}</label>
    <span class="badge badge-info">{{ $post->price_2 }}</span>
</div>

<!-- Commodity ID Field -->
<div class="col-sm-6">
    <label>{{__('commodity_id')}}</label>
    <span class="badge badge-info">{{ $post->commodity_id }}</span>
</div>

<!-- Color Field -->
<div class="col-sm-6">
    <label>{{__('color')}}</label>
    <span class="badge badge-info">{{ $post->color }}</span>
</div>

<!-- Hit Field -->
<div class="col-sm-6">
    <label>{{__('hit')}}</label>
    <span>{{ $post->hit }}</span>
    <img src="https://img.icons8.com/ios-glyphs/15/000000/visible--v1.png"/>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    <label>{{__('image')}}</label>
    <div class="p-3">
        <img src="{{ asset($post->image) }}">
    </div>
</div>

<!-- Created At Field -->
<div class="col-sm-6">
    <label>{{__('created_at')}}</label>
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-6">
    <label>{{__('updated_at')}}</label>
    <p>{{ $post->updated_at }}</p>
</div>
