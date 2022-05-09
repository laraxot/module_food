@extends('adm_theme::layouts.app')
@section('page_heading','Add cuisine')
@section('content')
@include('backend::includes.flash')
@include('backend::includes.components')
@include('food::admin.restaurant.edit.nav')
<br/><br/>
{!! Form::bsOpen($row,'store') !!}
{{ Form::bsText('cuisine') }}
{{ Form::bsSubmit('Salva e continua') }}
{!! Form::close() !!}
@endsection