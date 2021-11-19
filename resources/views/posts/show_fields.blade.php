<!-- Name Field -->
<div class="col-sm-12">
    <label>{{__('name')}}</label>
    <p>{{ $post->name }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    <label>{{__('slug')}}</label>
    <span class="badge badge-info">{{ $post->slug }}</span>
</div>

<!-- Discription Field -->
<div class="col-sm-12">
    <label>{{__('discription')}}</label>
    <div class="p-4">{!! $post->discription !!}</div>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    <label>{{__('categories')}}</label>
    @foreach ($post->categories()->pluck('name') as $cate)
        <span class="badge badge-warning">{{ $cate }}</span>
    @endforeach
</div>

<!-- Category Field -->
<div class="col-sm-12">
    <label>{{__('tags')}}</label>
    @foreach ($post->tags()->pluck('name') as $tag)
        <span class="badge badge-warning">{{ $tag }}</span>
    @endforeach
</div>

<!-- Status Field -->
<div class="col-sm-12">
    <label>{{__('status')}}</label>
    @if($post->status == 1)
        <span class="badge badge-success">{{__('active')}}</span>
    @endif
    @if($post->status == 2)
        <span class="badge badge-danger">{{__('inactive')}}</span>
    @endif
</div>

<!-- Hit Field -->
<div class="col-sm-12">
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
<div class="col-sm-12">
    <label>{{__('created_at')}}</label>
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    <label>{{__('updated_at')}}</label>
    <p>{{ $post->updated_at }}</p>
</div>
