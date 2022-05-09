@extends('pub_theme::layouts.app')
@section('content')
@include('theme::includes.flash')
{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
@method('put')
{{ Form::bsHidden('post[title]') }}
{{ Form::bsText('phone') }}
{{ Form::bsEmail('email') }}
{{ Form::bsText('website') }}

<div class="modal-footer justify-content-end">
    <button type="submit" class="btn btn-primary">Save changes</button>
    <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
</div>
{{ Form::close() }}
@endsection