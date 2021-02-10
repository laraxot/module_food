@extends('adm_theme::layouts.app')
@section('page_heading','Edit Item')
@section('content')
@include('backend::includes.components')
@include('backend::includes.flash')
{!!  Form::bsBtnBack('edit') !!}
@include($view.'.nav')

{!! Form::bsOpen($row, 'update') !!}

{{ Form::bsText('term') }}

{{-- Form::bsText('location') --}} {{-- location move to locality for google maps copy --}}
{{ Form::bsText('locality') }}
{{ Form::bsText('locality_short') }}
{{ Form::bsText('administrative_area_level_2') }}
{{ Form::bsText('administrative_area_level_2_short') }}
{{ Form::bsText('administrative_area_level_1') }}
{{ Form::bsText('administrative_area_level_1_short') }}
{{ Form::bsText('country') }}
{{ Form::bsText('country_short') }}
{{ Form::bsText('formatted_address') }}
{{ Form::bsText('latitude') }}
{{ Form::bsText('longitude') }}
{{ Form::bsText('radius') }}
{{ Form::bsText('nearest_street') }}


{{ Form::bs3Submit('Aggiorna') }}
{{ Form::close() }}
<button id='getLatLng' class="btn btn-default">get latitude and longitude</button>
<button id='getNearestStreet' class="btn btn-default">get nearest street</button>
@endsection

@push('scripts')
<script>
$(function() {
	$('#getLatLng').click(function(e){
		var locality=$('input[name="locality"]').val();
		var country=$('input[name="country"]').val();
		var address=locality+' , '+country;
		$.ajax({
			//url:'https://maps.googleapis.com/maps/api/geocode/json?address=milano,italia',
			url:'https://maps.googleapis.com/maps/api/geocode/json',
			type: "GET",
			dataType : "json",
			data:{address:address,key:"{{ config('services.google.maps_key') }}" },
		}).done(function(json){
			console.log(json);
			$('input[name="formatted_address"]').val(json.results[0].formatted_address);

			$.each(json.results[0].address_components,function($k,$v){
				var name=$v.types[0];
				$('input[name="'+name+'"]').val($v.long_name);
				$('input[name="'+name+'_short"]').val($v.short_name);
			});
			$('input[name="latitude"]').val(json.results[0].geometry.location.lat);
			$('input[name="longitude"]').val(json.results[0].geometry.location.lng);

		}).fail(function( xhr, status, errorThrown ) {
	    	alert( "Sorry, there was a problem!" );
	    	console.log( "Error: " + errorThrown );
	    	console.log( "Status: " + status );
	    	console.dir( xhr );
	  	}).always(function( xhr, status ) {
	    	//alert( "The request is complete!" );
	  	});
  	});
	$('#getNearestStreet').click(function(e){
		var lat=$('input[name="latitude"]').val();
		var lng=$('input[name="longitude"]').val();
		var latlng=lat+','+lng;
		$.ajax({
			//url:'http://maps.googleapis.com/maps/api/geocode/json?latlng=45.41,11.88&sensor=true_or_false',
			url:'https://maps.googleapis.com/maps/api/geocode/json',
			type: "GET",
			dataType : "json",
			data:{latlng:latlng,sensor:"true_or_false",key:"{{ config('services.google.maps_key') }}" },
		}).done(function(json){
			console.log(json);
			$('input[name="nearest_street"]').val(json.results[0].formatted_address);
			/*
			$.each(json.results[0].address_components,function($k,$v){
				var name=$v.types[0];
				$('input[name="'+name+'"]').val($v.long_name);
				$('input[name="'+name+'_short"]').val($v.short_name);
			});
			$('input[name="latitude"]').val(json.results[0].geometry.location.lat);
			$('input[name="longitude"]').val(json.results[0].geometry.location.lng);
			*/
		}).fail(function( xhr, status, errorThrown ) {
	    	alert( "Sorry, there was a problem!" );
	    	console.log( "Error: " + errorThrown );
	    	console.log( "Status: " + status );
	    	console.dir( xhr );
	  	}).always(function( xhr, status ) {
	    	//alert( "The request is complete!" );
	  	});
  	});


});
</script>
@endpush