<div class="table-responsive">
  <table class="table" id="categories-table">
      <tr>
          <th>{{__('name')}}</th>
          <th>{{__('slug')}}</th>
          <th>{{__('categoryـtype')}}</th>
          <th>{{__('status')}}</th>
          <th colspan="3">{{__('action')}}</th>
      </tr>
    @foreach($categories as $category)
      @if($category->parent_id == 0)
      <tr>
          <td>{{ $category->name }}</td>
          <td>{{ $category->slug }}</td>
          @if($category->parent_id == 0)
          <td><span class="badge badge-dark">{{__('above')}}</span></td>
          @endif
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
                  {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
              </div>
              {!! Form::close() !!}
          </td>
      </tr>
    @foreach($subcategories as $subcategory)
      @if($subcategory->parent_id == $category->id)
      <tr class="bg-light">
          <td>{{ $subcategory->name }}</td>
          <td>{{ $subcategory->slug }}</td>
          @if($subcategory->parent_id > 0)
          <td><span class="badge badge-secondary">{{__('subset')}}</span></td>
          @endif
          <td>
              @if($subcategory->status == 1)
                  <span class="badge badge-success">{{__('active')}}</span>
              @endif
              @if($subcategory->status == 2)
                  <span class="badge badge-danger">{{__('inactive')}}</span>
              @endif
          </td>
          <td width="120">
              {!! Form::open(['route' => ['categories.destroy', $subcategory->id], 'method' => 'delete']) !!}
              <div class='btn-group'>
                  <a href="{{ route('categories.show', [$subcategory->id]) }}"
                      class='btn btn-default btn-xs'>
                      <i class="far fa-eye"></i>
                  </a>
                  <a href="{{ route('categories.edit', [$subcategory->id]) }}"
                      class='btn btn-default btn-xs'>
                      <i class="far fa-edit"></i>
                  </a>
                  {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
              </div>
              {!! Form::close() !!}
          </td>
      </tr>
      @endif
    @endforeach
      @endif
    @endforeach
  </table>

</div>
