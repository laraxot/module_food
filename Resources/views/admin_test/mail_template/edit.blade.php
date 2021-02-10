@extends('adm_theme::layouts.app')
@section('page_heading','mail templates')
@section('content')
@include('backend::includes.components')
@include('backend::includes.flash')
{!! Form::bsOpen($row, 'update') !!}
{{ Form::bsTinymce('tpl',$tpl) }}
{{ Form::bs3Submit('Aggiorna') }}
{{ Form::close() }}
@endsection