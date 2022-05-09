@extends('adm_theme::layouts.app')
@section('page_heading','Add recipe')
@section('content')
@include('backend::includes.flash')
@include('backend::includes.components')
{!! Form::bsOpen($row,'store') !!}

{{ Form::bsText('recipe') }}
{{ Form::bsText('cuisine') }}
{{ Form::bsEuro('price') }}


{{ Form::bsSubmit('Salva e continua') }}
{!! Form::close() !!}
@endsection