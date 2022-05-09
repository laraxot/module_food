@extends('adm_theme::layouts.app')
@section('page_heading','My Restaurants')
@section('content')
@include('backend::includes.flash')
@include('backend::includes.components')

{!! Form::bsFormSearch() !!}
{!! Form::bsFormLatLngSearch() !!}

<table class="table">
@foreach($allrows->get() as $row)
	@if($row->post!=null)
	<tr>
		<td>{{ $row->post->title }}</td>
		<td>{{ $row->address }}</td>
		<td>{!! Form::bsBtnCrud(['post_id'=>$row->post_id]) !!}</td>
	</tr>
	@endif	

@endforeach
</table>
@endsection
