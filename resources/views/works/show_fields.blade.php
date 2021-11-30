<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $work->title }}</p>
</div>

<!-- Work Field -->
<div class="col-sm-12">
    {!! Form::label('work', 'Work:') !!}
    <p>{{ $work->work }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    @if(app()->getLocale()=='en')
    <p>{{ $work->created_at }}</p>
    @endif
    @if(app()->getLocale()=='fa')
    <p>{{ new Verta($work->created_at); }}</p>
    @endif
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    @if(app()->getLocale()=='en')
    <p>{{ $work->updated_at }}</p>
    @endif
    @if(app()->getLocale()=='fa')
    <p>{{ new Verta($work->updated_at); }}</p>
    @endif
</div>
