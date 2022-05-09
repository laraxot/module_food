@extends('adm_theme::layouts.app')
@section('page_heading','mail templates')
@section('content')
@include('backend::includes.components')
@include('backend::includes.flash')

<table class="table">
@foreach($tpls as $tpl)
<tr>
	<td>{{ $tpl }}</td>
	<td>
		<a class="btn btn-primary" href="{{ route('food.mailtemplate.edit',$tpl) }}">
			<i class="fa fa-pencil"></i>
		</a>
	</td>
</tr>
@endforeach
</table>

@endsection