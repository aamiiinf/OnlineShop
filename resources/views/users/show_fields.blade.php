<!-- Name Field -->
<div class="col-sm-12">
    <label>{{__('name')}}</label>
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    <label>{{__('email')}}</label>
    <p>{{ $user->email }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    <label>{{__('role')}}</label>
    @if($user->role ==1)
        <span class="badge badge-secondary">Admin</span>
    @endif
    @if($user->role ==2)
        <span class="badge badge-secondary">User</span>
    @endif
</div>

<!-- Status Field -->
<div class="col-sm-12">
    <label>{{__('status')}}</label>
    @if($user->status ==1)
        <span class="badge badge-success">{{__('active')}}</span>
    @endif
    @if($user->status ==2)
        <span class="badge badge-danger">{{__('inactive')}}</span>
    @endif
</div>
