<!-- Title Field -->
<div class="col-sm-12">
    <label>{{__('title')}}</label>
    <p>{{ $tag->title }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    <label>{{__('name')}}</label>
    <p>{{ $tag->name }}</p>
</div>

<!-- Discription Field -->
<div class="col-sm-12">
    <label>{{__('discription')}}</label>
    <p>{{ $tag->discription }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    <label>{{__('status')}}</label>:
    @if($tag->status == 1)
      <span class="badge badge-success">{{__('active')}}</span>
    @endif
    @if($tag->status == 2)
      <span class="badge badge-danger">{{__('inactive')}}</span>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    <label>{{__('created_at')}}</label>
    <p>{{ $tag->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    <label>{{__('updated_at')}}</label>
    <p>{{ $tag->updated_at }}</p>
</div>
