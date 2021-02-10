@extends('adm_theme::layouts.app')
@section('page_heading','My recipe')
@section('content')
@include('backend::includes.flash')
@include('backend::includes.components')
@include('food::admin.restaurant.edit.nav')
<br/><br/>
{!! Form::bsBtnCreate() !!}
@foreach($rows->distinct()->get() as $row)
	<h3>{{ $row->post_id }}] {{ $row->title }} </h3>
	<table>
		@php
			$where=['post_id'=>$restaurant->post_id];
			//$rows1=$row->relatedType('cuisine_x_recipe')->ofRelatedRevQuery(3);
			$rows1=$row->relatedType('cuisine_x_recipe')->ofRelatedRevPostId($restaurant->post_id); //mostro solo le ricette appartenenti al ristorante relazione restaurant_x_recipe sono in "recipe" percio' devo usare l'inversa
			/*
			echo '<pre>'.($rows1->toSql()).'</pre>';
			echo '<pre>';print_r($rows1->get()->toArray());echo '</pre>';
			die('['.__LINE__.']['.__FILE__.']');
			*/
		@endphp
		@foreach($rows1->get() as $row1)
			<tr>
				<td>{{ $row1->post_id }}] {{ $row1->title }}</td>
			</tr>
		@endforeach
	</table>	

@endforeach

@endsection
