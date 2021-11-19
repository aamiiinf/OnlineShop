<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
        <tr>
            <th>{{__('name')}}</th>
            <th>{{__('slug')}}</th>
            <th>{{__('status')}}</th>
            <th colspan="3">{{__('action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>
                @if($category->status == 1)
                    <span class="badge badge-success">{{__('active')}}</span>
                @endif
                @if($category->status == 2)
                    <span class="badge badge-danger">{{__('inactive')}}</span>
                @endif
            </td>
                <td width="120">
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$category->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categories.edit', [$category->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @if($category->id >= 5)
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
