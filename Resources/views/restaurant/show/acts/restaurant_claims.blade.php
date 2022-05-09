@extends('pub_theme::layouts.app')
@section('content')

{!! Form::model($row,['url'=>Request::fullUrl() ]) !!} 
@method('put')



{{ Form::bsInteger('restaurantOwner[phone]') }}
{{ Form::bsEmail('restaurantOwner[email]') }}

{{ Form::bsTextarea('restaurantMorph[note]') }}


<div class="modal-footer justify-content-end">
    <button type="submit" class="btn btn-primary">@lang('xot::buttons.save')</button>
    <button type="button" data-dismiss="modal" class="btn btn-outline-muted">@lang('xot::buttons.close')</button>
</div>
{{ Form::close() }}
@endsection