<div class="table-responsive">
    <table class="table" id="tags-table">
        <thead>
        <tr>
            <th>{{__('title')}}</th>
            <th>{{__('name')}}</th>
            <th>{{__('discription')}}</th>
            <th>{{__('status')}}</th>
            <th colspan="3">{{__('active')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td><span class="badge">{{ $tag->title }}</span></td>
                <td><span class="badge">{{ $tag->name }}</span></td>
                <td><span class="badge">{{ $tag->discription }}</span></td>
                <td>
                  @if($tag->status == 1)
                      <span class="badge badge-success">{{__('active')}}</span>
                  @endif
                  @if($tag->status == 2)
                      <span class="badge badge-danger">{{__('Inactive')}}</span>
                  @endif
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tags.show', [$tag->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tags.edit', [$tag->id]) }}"
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
