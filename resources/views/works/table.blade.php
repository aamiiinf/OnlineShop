<div class="table-responsive">
    <table class="table" id="works-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Work</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($works as $work)
            <tr>
                <td>{{ $work->title }}</td>
            <td>{{ $work->work }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['works.destroy', $work->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('works.show', [$work->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('works.edit', [$work->id]) }}"
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
