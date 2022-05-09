@extends('adm_theme::layouts.app')
@section('page_heading','My cuisine')
@section('content')
@include('backend::includes.flash')
@include('backend::includes.components')
@include('food::admin.restaurant.edit.nav')
<br/><br/>
{!! Form::bsBtnCreate() !!}
{!! $restaurant->title !!}
<table class="table">
@foreach($allrows->get() as $row)
	
	<tr>
		<td>{{ $row->post_id }}</td>
		<td>{{ $row->title }}</td>
		<td>{{--  Form::bsBtnCrud(['post_id'=>$row->post_id]) --}}</td>
	</tr>
	

@endforeach
</table>
@endsection
