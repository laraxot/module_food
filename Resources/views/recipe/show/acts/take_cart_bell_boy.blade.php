@extends('pub_theme::layouts.app')
@section('content')


{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
@method('post')
{{ Form::hidden('id') }}

Cliccando su conferma ti impegni a portare la consegna

<div class="modal-footer justify-content-end">
    <button type="submit" class="btn btn-primary">conferma</button>
    <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
</div>

{{ Form::close() }}

@endsection