@extends('adm_theme::layouts.app')
@section('page_heading','Items')
@section('content')
@include('backend::includes.components')
@include('backend::includes.flash')
{!! Form::bsBtnCreate() !!}
{!! Form::bsFormSearch() !!}

<a class="btn btn-default" href="?refresh" title="create post if not exist"><i class="fa fa-refresh"></i>&nbsp;Create Post if not exist</a>
<a class="btn btn-default" href="?syncSons" title="sincronizza figli"><i class="fa fa-refresh"></i>&nbsp;sincronizza figli</a>
<a class="btn btn-default" href="?fillPhotos" title="prendi da internet photo"><i class="fa fa-refresh"></i>&nbsp;prendiamo da internet le foto mancanti<br/>(incrociamo le dita)</a>
- TEST -
<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
<thead>
<tr> 
	<th>ID</th>
	<th>img</th>
	<th>title</th>
	<th>guid</th>
	<th>country</th>
	<th>lat ; lng </th>
	<th>radius</th>
	<th>n restaurants</th>
	<th></th>
</tr>	
</thead>	
<tbody>
@foreach($rows as $row)
<tr>
<td>
	[{{ $row->post_id }}]
</td>
<td>{{--
	{!! $row->image_html(['width'=>100,'height'=>100]) !!}<br/>
	--}}
	{{ $row->image_title }}
</td>
<td>{{ $row->title }}</td>
<td>{{ $row->guid }} - {{ $row->lang }}</td>
@if(is_object($row->linked))
<td>{{ $row->linked->country }}</td>
<td>{{ $row->linked->latitude }} ; {{ $row->linked->longitude }}</td>
<td>{{ $row->linked->radius }}</td>
<td>
	<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
	@foreach($row->linked->food_engines as $engine)
	@php
		$q=$row->linked->restaurants->where($engine.'_url','!=',"")->count();
	@endphp
	@if($q>0)
	<tr><td>{{ $engine }}</td><td align="right"> {{ $q }}</td></tr>
	@endif
	@endforeach
	<tr><th>all</th><td  align="right"><b>{{ $row->linked->restaurants->count() }}</b></td></tr>
	
	</table>
</td> 
@else
<td colspan="4"></td>
@endif
<td>
{!! Form::bsBtnCrud(['id_location'=>$row->post_id]) !!}
</td>
</tr>
@endforeach
</tbody>
</table>
--{{ $rows->links() }}--
@endsection