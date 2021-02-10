@php
//dddx(get_defined_vars());
$cart=$row;
$cart_items = $cart->items;
$cart_panel = Panel::get($cart);
//dddx($cart_items);
@endphp
@extends('pub_theme::layouts.app')
@section('content')
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
				@method('put')
				<h1 class="h2 mb-5">Il tuo Carrello</h1>
				@foreach($cart_items as $item)
				<div class="text-block pt-0 pb-0">
					<table class="w-100">
						<tbody>
							<tr>
								<th class="font-weight-normal py-2" width="60%">
									<h5 class="mt-2">{{ $item->item_title }}</h5>
								</th>
								<th class="font-weight-normal py-2" width="20%">
									<div class="d-flex align-items-center">
										<div class="btn btn-items btn-items-decrease">-</div>
										@php
											$variations_price = 0;
											foreach($item->variations as $var_item){
												if($var_item->price > 0 && $var_item->price != 0){
													$variations_price += $var_item->price;
												}
											}
										@endphp
										{{-- span aggiunti perchè utilizzate nello script --}}
										<span hidden class="item_price">{{ $item->price }}</span>
										<span hidden class="variations_price">{{ $variations_price }}</span>
										<span hidden class="is_zero">false</span>


										<input type="integer" value="{{ $item->qty }}" name="item[{{ $item->id }}][qty]" 
												id="item[{{ $item->id }}][qty]" class="form-control text-center border-0 border-md input-items">
										<div class="btn btn-items btn-items-increase">+</div>
									</div>
								</th>
								<td class="text-right py-2 sub_total">
									{{ $item->sub_total_with_variations }}
								</td>
							</tr>
						</tbody>
					</table>
					<div class="row mb-3">
						@foreach($item->variations as $var_item)
						<div class="col-md-12 d-flex align-items-center mb-0 mb-md-0 pt-0 pb-0">
							{{--
							<div class="date-tile mr-3">
								<div class="text-uppercase"> <span class="text-sm">Apr</span><br><strong class="text-lg">17</strong></div>
							</div>
							--}}
							<p class="text-sm mb-0">
								{!! $var_item->qtySimbol !!} {{ $var_item->var_item_title }}
								@if($var_item->price > 0 && $var_item->price != 0)
									{{ $var_item->price_currency}}
								@endif
							</p>
						</div>
						@endforeach
					</div>
				</div>
				@endforeach
				<div class="row form-block flex-column flex-sm-row">
					<div class="col text-center text-sm-left">
						{!! Panel::get($cart->shop)->relatedName('cuisine')
							->btnHtml([
								'act' => 'index',
								'icon' => '<i class="fa fa-chevron-left"></i>',
								'title' => 'Ritorna al menù',
								'class' => 'btn btn-outline-secondary',
							])
						!!}
					</div>
					<div class="col text-center text-sm-right">
						<button type="submit" class="btn btn-primary">
							Procedi<i class="fa fa-chevron-right"></i>
						</button>
					</div>
				</div>
				{{ Form::close() }}
			</div>
		@include('pub_theme::cart.modal.checkout.partial.side_total')
		</div>
	</div>
</section>
@endsection
@push('scripts')
<script>
	$( document ).ready(function() {
		// https://stackoverflow.com/questions/149055/how-to-format-numbers-as-currency-string
		// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/NumberFormat/NumberFormat
		var formatter = new Intl.NumberFormat('de-DE', {
			style: 'currency',
			currency: '{{ config('money.currency') }}',
		});

		$( ".btn-items" ).on('click',function(){
			let qty = $(this).siblings("input").val();
			let item_price = $(this).siblings("span.item_price").text();
			let variations_price = $(this).siblings("span.variations_price").text();
			$(this).parentsUntil("table").find('td').text(formatter.format(item_price * qty + variations_price * qty));
		});

		$(".btn-items-increase").on('click', function(){
			let elements_number = parseFloat($('td.elements_number').text());
			$('td.elements_number').text(elements_number + 1);
			let qty_new = parseFloat($(this).siblings("input").val());
			if(qty_new > 0){
				$(this).siblings("span.is_zero").text('false');
			}
			total();
		});

		$(".btn-items-decrease").on('click', function(){
			let elements_number = parseFloat($('td.elements_number').text());
			let is_zero = $(this).siblings("span.is_zero").text();
			let qty_new = parseFloat($(this).siblings("input").val());
			if(is_zero == 'false'){
				$('td.elements_number').text(elements_number - 1);
				if(qty_new == 0 && is_zero == 'false'){
					$(this).siblings("span.is_zero").text('true');
				}
			}
			total();
		});

		function total(){
			let total_cart = 0;
			let items_price = $('span.item_price');
			let variations_price = $('span.variations_price');
			let qtys = $('input[type=integer]');
			console.log(items_price);
			console.log(variations_price);
			console.log(qtys);
			for (i = 0; i < items_price.length; i++) {
				//alert((parseFloat(items_price[i].textContent) + parseFloat(variations_price[i].textContent))*qtys[i].value);
				total_cart += (parseFloat(items_price[i].textContent) + parseFloat(variations_price[i].textContent))*qtys[i].value;
			} 
			$('td.total_cart').text(formatter.format(total_cart));
		}

	});
</script>
@endpush