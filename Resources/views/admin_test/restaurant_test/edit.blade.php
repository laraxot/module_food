@extends('adm_theme::layouts.app')
@section('page_heading','Edit Restaurant')
@section('content')
@include('backend::includes.flash')
@include('backend::includes.components')

@include('food::admin.restaurant.edit.nav')
<br/><br/>
{!! Form::bsOpen($row,'update') !!}
{{ Form::bsText('title') }}
{{ Form::bsText('subtitle') }}


{!! $row->formFields() !!}

{{ Form::bsTextarea('txt') }}

{{ Form::bsSubmit('Salva e continua') }}
{!! Form::close() !!}


@endsection 