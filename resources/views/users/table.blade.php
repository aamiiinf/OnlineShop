<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
        <tr>
            <th>{{__('name')}}</th>
            <th>{{__('image')}}</th>
            <th>{{__('email')}}</th>
            <th>{{__('role')}}</th>
            <th>{{__('status')}}</th>
            <th colspan="3">{{__('action')}}</th>
        </tr>
        </thead>
        <tbody>
        @if($users->isNotEmpty())

        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td><img height="50" src="{{ asset($user->image) }}"></td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->role ==1)
                        <span class="badge badge-secondary">Admin</span>
                    @endif
                    @if($user->role ==2)
                        <span class="badge badge-secondary">User</span>
                    @endif
                </td>
                <td>
                    @if($user->status ==1)
                        <span class="badge badge-success">{{__('active')}}</span>
                    @endif
                    @if($user->status ==2)
                        <span class="badge badge-danger">{{__('inactive')}}</span>
                    @endif
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}"
                        class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}"
                        class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @if($user->id >= 2)
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        @else
            <div>
                <h3>{{__('nothing_found')}}</h3>
            </div>
        @endif
        </tbody>
    </table>
</div>
