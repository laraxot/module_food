
{{ Form::bsText('locality',$row->locality) }}
{{ Form::bsText('locality_short',$row->locality_short) }}
{{ Form::bsText('administrative_area_level_2',$row->administrative_area_level_2) }}
{{ Form::bsText('administrative_area_level_2_short',$row->administrative_area_level_2_short) }}
{{ Form::bsText('administrative_area_level_1',$row->administrative_area_level_1) }}
{{ Form::bsText('administrative_area_level_1_short',$row->administrative_area_level_1_short) }}
{{ Form::bsText('country',$row->country) }}
{{ Form::bsText('country_short',$row->country_short) }}
{{ Form::bsText('formatted_address',$row->formatted_address) }}
{{ Form::bsText('latitude',$row->latitude) }}
{{ Form::bsText('longitude',$row->longitude) }}
{{ Form::bsText('radius',$row->radius) }}
{{ Form::bsText('nearest_street',$row->nearest_street) }}
<button id='getLatLng' class="btn btn-default">get latitude and longitude</button>
<button id='getNearestStreet' class="btn btn-default">get nearest street</button>
@push('scripts')
<script>
$(function() {
	$('#getLatLng').click(function(e){
		e.preventDefault();;
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
		e.preventDefault();;
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