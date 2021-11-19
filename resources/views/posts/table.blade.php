<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
        <tr>
            <th>{{__('name')}}</th>
            <th>{{__('slug')}}</th>
            <th>{{__('body')}}</th>
            <th>{{__('categories')}}</th>
            <th>{{__('tags')}}</th>
            <th>{{__('status')}}</th>
            <th><img src="https://img.icons8.com/ios-glyphs/15/000000/visible--v1.png"/></th>
            <th>{{__('image')}}</th>
            <th colspan="3">{{__('action')}}</th>
        </tr>
        </thead>
        <tbody>
            @if($posts->isNotEmpty())
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->name }}</td>
                        <td>
                            <span class="badge badge-info">{{ $post->slug }}</span>
                        </td>
                        <td>{{ $post->body }}</td>
                        <td>
                            @foreach ($post->categories()->pluck('name') as $cate)
                                <span class="badge badge-warning">{{ $cate }}</span>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($post->tags()->pluck('name') as $tag)
                                <span class="badge badge-secondary">{{ $tag }}</span>
                            @endforeach
                        </td>
                        <td>
                            @if($post->status == 1)
                                <span class="badge badge-success">{{__('active')}}</span>
                            @endif
                            @if($post->status == 2)
                                <span class="badge badge-danger">{{__('inactive')}}</span>
                            @endif
                        </td>
                        <td>{{ $post->hit }}</td>
                        <td><img height="50" src="{{ asset($post->image) }}"></td>
                        <td width="120">
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('posts.show', [$post->id]) }}"
                                class='btn btn-default btn-xs'>
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('posts.edit', [$post->id]) }}"
                                class='btn btn-default btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @else
                <h3>موردی یافت نشد</h3>
            @endif
        </tbody>
    </table>
</div>
