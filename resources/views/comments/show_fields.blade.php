<!-- Name Field -->
<div class="col-sm-12">
    <label>{{__('name')}}</label>
    <p>{{ $comment->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    <label>{{__('email')}}</label>
    <p>{{ $comment->email }}</p>
</div>

<!-- Body Field -->
<div class="col-sm-12">
    <label>{{__('body')}}</label>
    <p>{{ $comment->body }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    <label>{{__('status')}}</label>
    @if( $comment->status == 1 )
    <span class="badge badge-success">{{__('active')}}</span>
    @endif
    @if( $comment->status == 0 )
    <span class="badge badge-danger">{{__('inactive')}}</span>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    <label>{{__('created_at')}}</label>
    @if(app()->getLocale()=='en')
    <p>{{ $comment->created_at }}</p>
    @endif
    @if(app()->getLocale()=='fa')
    <p>{{ new Verta($comment->created_at); }}</p>
    @endif
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    <label>{{__('updated_at')}}</label>
    @if(app()->getLocale()=='en')
    <p>{{ $comment->updated_at }}</p>
    @endif
    @if(app()->getLocale()=='fa')
    <p>{{ new Verta($comment->updated_at); }}</p>
    @endif
</div>
