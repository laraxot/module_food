@extends('pub_theme::layouts.app')
@section('content')

{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
@method('put')
------------------

{{ Form::bsTime('open_at') }}
{{ Form::bsTime('close_at') }}

<div class="modal-footer justify-content-end">
    <button type="submit" class="btn btn-primary">Save changes</button>
    <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
</div>
{{ Form::close() }}
@endsection
