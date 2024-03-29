@extends('pub_theme::layouts.app')
@section('content')
{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
@method('put')
{{ Form::bsHidden('post[title]') }} {{-- i rules prendono tutti i campi da fargli validare solo quelli esistenti nelle action --}}
{{ Form::bsTextarea('post[txt]') }}

<div class="modal-footer justify-content-end">
    <button type="submit" class="btn btn-primary">Save changes</button>
    <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
</div>
{{ Form::close() }}
@endsection