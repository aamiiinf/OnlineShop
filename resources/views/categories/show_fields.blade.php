<!-- Name Field -->
<div class="col-sm-12">
    <label>{{__('name')}}</label>
    <p>{{ $category->name }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    <label>{{__('slug')}}</label>
    <p>{{ $category->slug }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    <label>{{__('status')}}</label>
    @if($category->status == 1)
        <span class="badge badge-success">{{__('active')}}</span>
    @endif
    @if($category->status == 2)
        <span class="badge badge-danger">{{__('inactive')}}</span>
    @endif
</div>

<!-- Category type Field -->
<div class="col-sm-12">
    <label>{{__('categoryـtype')}}</label>
    @if($category->parent_id == 0)
    <span class="badge badge-dark">{{__('above')}}</span>
    @else
    <span class="badge badge-secondary">{{__('subset')}}</span>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    <label>{{__('created_at')}}</label>
    <p>{{ $category->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    <label>{{__('updated_at')}}</label>
    <p>{{ $category->updated_at }}</p>
</div>
