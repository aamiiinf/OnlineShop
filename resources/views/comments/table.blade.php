<div class="table-responsive">
    <table class="table" id="comments-table">
        <thead>
        <tr>
            <th>{{__('name')}}</th>
            <th>{{__('email')}}</th>
            <th>{{__('body')}}</th>
            <th>{{__('status')}}</th>
            <th colspan="3">{{__('action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->name }}</td>
                <td>{{ $comment->email }}</td>
                <td>{{ $comment->body }}</td>
                <td>
                  @if( $comment->status == 1 )
                  <span class="badge badge-success">{{__('active')}}</span>
                  @endif
                  @if( $comment->status == 0 )
                  <span class="badge badge-danger">{{__('Inactive')}}</span>
                  @endif
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comments.show', [$comment->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('comments.edit', [$comment->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
