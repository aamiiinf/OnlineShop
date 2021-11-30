<!-- Name Field -->
<div class="col-sm-6 border">
    <label>{{__('name')}}</label>
    <p>{{ $category->name }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-6 border">
    <label>{{__('slug')}}</label>
    <p>{{ $category->slug }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-6 border">
    <label>{{__('status')}}</label>
    @if($category->status == 1)
        <span class="badge badge-success">{{__('active')}}</span>
    @endif
    @if($category->status == 2)
        <span class="badge badge-danger">{{__('inactive')}}</span>
    @endif
</div>

<!-- Category type Field -->
<div class="col-sm-6 border">
    <label>{{__('categoryـtype')}}</label>
    @if($category->parent_id == 0)
    <span class="badge badge-dark">{{__('above')}}</span>
    @else
    <span class="badge badge-secondary">{{__('subset')}}</span>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-6 border">
    <label>{{__('created_at')}}</label>
    @if(app()->getLocale()=='en')
    <p>{{ $category->created_at }}</p>
    @endif
    @if(app()->getLocale()=='fa')
    <p>{{ new Verta($category->created_at); }}</p>
    @endif
</div>

<!-- Updated At Field -->
<div class="col-sm-6 border">
    <label>{{__('updated_at')}}</label>
    @if(app()->getLocale()=='en')
    <p>{{ $category->updated_at }}</p>
    @endif
    @if(app()->getLocale()=='fa')
    <p>{{ new Verta($category->updated_at); }}</p>
    @endif
</div>
