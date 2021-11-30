<!-- Name Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('name')}}:</label>
    <p>{{ $post->name }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('slug')}}:</label>
    <p>{{ $post->slug }}</p>
</div>

<!-- Discription Field -->
<div class="col-sm-12 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('discription')}}:</label>
    <div>{!! $post->discription !!}</div>
</div>

<!-- Category Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('categories')}}:</label>
    @foreach ($post->categories()->pluck('name') as $cate)
        <span class="badge badge-warning">{{ $cate }}</span>
    @endforeach
</div>

<!-- Tags Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('tags')}}:</label>
    @foreach ($post->tags()->pluck('name') as $tag)
        <span class="badge badge-warning">{{ $tag }}</span>
    @endforeach
</div>

<!-- Weight Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('weight')}}:</label>
    <span class="badge badge-info">{{ $post->weight }}</span>
</div>

<!-- Dimensions Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('dimensions')}}:</label>
    <span class="badge badge-info">{{ $post->dimensions }}</span>
</div>

<!-- Status Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('status')}}:</label>
    @if($post->status == 1)
        <span class="badge badge-success">{{__('active')}}</span>
    @endif
    @if($post->status == 2)
        <span class="badge badge-danger">{{__('inactive')}}</span>
    @endif
</div>

<!-- Status Commodity Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('status_commodity')}}:</label>
    @if($post->status_commodity == 1)
        <span class="badge badge-success">{{__('available')}}</span>
    @endif
    @if($post->status_commodity == 2)
        <span class="badge badge-danger">{{__('unavailable')}}</span>
    @endif
</div>

<!-- Price Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('price')}}:</label>
    <span class="badge badge-info">{{ $post->price }}</span>
</div>

<!-- Price_2 Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('price_2')}}:</label>
    <span class="badge badge-info">{{ $post->price_2 }}</span>
</div>

<!-- Commodity ID Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('commodity_id')}}:</label>
    <span class="badge badge-info">{{ $post->commodity_id }}</span>
</div>

<!-- Color Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('color')}}:</label>
    <span class="badge badge-info">{{ $post->color }}</span>
</div>

<!-- Product_type Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('product_type')}}:</label>
    @if($post->product_type == 1)
        <span class="badge badge-success">{{__('virtual')}}</span>
    @endif
    @if($post->product_type == 2)
        <span class="badge badge-danger">{{__('download')}}</span>
    @endif
</div>

<!-- Hit Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('hit')}}:</label>
    <span class="mx-2">
      {{ $post->hit }}
      <img src="https://img.icons8.com/ios-glyphs/15/000000/visible--v1.png"/>
    </span>
</div>

<!-- Image Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('image')}}:</label>
    <span class="mx-2">
        <img class="rounded-circle"
             src="{{ asset($post->image) }}"
             alt="image post"
             width="100" height="100">
    </span>
</div>

<!-- Image Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('image_gallery')}}:</label>
    <span class="mx-2">
        <img class="rounded-circle"
             src="{{ asset($post->image) }}"
             alt="image post"
             width="100" height="100">
    </span>
</div>

<!-- Created At Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('created_at')}}:</label>
    @if(app()->getLocale()=='en')
    <p>{{ $post->created_at }}</p>
    @endif
    @if(app()->getLocale()=='fa')
    <p>{{ new Verta($post->created_at); }}</p>
    @endif
</div>

<!-- Updated At Field -->
<div class="col-sm-6 border p-2
            @if($setting->color == 2)
            bg-secondary
            @endif">
    <label class="text-dark">{{__('updated_at')}}:</label>
    @if(app()->getLocale()=='en')
    <p>{{ $post->updated_at }}</p>
    @endif
    @if(app()->getLocale()=='fa')
    <p>{{ new Verta($post->updated_at); }}</p>
    @endif
</div>
