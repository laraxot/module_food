@php
//dddx(get_defined_vars());
$cart=$row;
$cart_items = $cart->items;
$cart_panel = Panel::make()->get($cart);
@endphp
@extends('pub_theme::layouts.app')
@section('content')
<div id="all">
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- breadcrumb-->
					{{-- 
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li aria-current="page" class="breadcrumb-item active">Checkout - Order review</li>
						</ol>
					</nav>
					--}}
				</div>
				<div id="checkout" class="col-lg-12">
					<div class="box">
						{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
						@method('put')
						<h1>Checkout - Order review</h1>
						@include('pub_theme::cart.modal.checkout.partial.pills', ['cart_panel' => $cart_panel, 'step5' => 0])
						<div class="content">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th colspan="1">Prodotto</th>
											<th>Quantità</th>
											<th>Prezzo unitario</th>
											{{-- 
											<th>Discount</th>
											--}}
											<th colspan="2">Totale</th>
										</tr>
									</thead>
									<tbody>
										@foreach($cart_items as $item)
										@php
										//dddx($item);
										@endphp
										<tr>
											<td>{{ $item->item_title }}</td>
											<td>{{ $item->qty }}</td>
											<td>
												{{ $item->price_currency }}
											</td>
											{{-- 
											<td>$0.00</td>
											--}}
											<td>
												{{ $item->subtotal_currency }}
											</td>
										</tr>
										@foreach($item->variations as $var_item)
										<tr>
											<td>{{ $var_item->var_item_title }}</td>
											<td>{{ $var_item->qty }}</td>
											<td>
												{{ $var_item->price_currency }}
											</td>
											<td>{{ $var_item->subtotal_currency }}</td>
										</tr>
										@endforeach
										@endforeach
										{{-- 
										<tr>
											<td><a href="#">White Blouse Armani</a></td>
											<td>
												<input type="number" value="2" class="form-control">
											</td>
											<td>$123.00</td>
											<td>$0.00</td>
											<td>$246.00</td>
											<td><a href="#"><i class="fa fa-trash"></i></a></td>
										</tr>
										<tr>
											<td><a href="#">Black Blouse Armani</a></td>
											<td>
												<input type="number" value="1" class="form-control">
											</td>
											<td>$200.00</td>
											<td>$0.00</td>
											<td>$200.00</td>
											<td><a href="#"><i class="fa fa-trash"></i></a></td>
										</tr>
										--}}
									</tbody>
									<tfoot>
										<tr>
											<th colspan="4">Totale</th>
											<th colspan="2">
												{{ $cart->price_complete_currency }}
											</th>
										</tr>
									</tfoot>
								</table>
							</div>
							<!-- /.table-responsive-->
						</div>
						<!-- /.content-->
						<div class="box-footer d-flex justify-content-between">
							{!! $cart_panel->itemAction('check_out_step4')
								->btnHtml([
									'title' => 'Modalità pagamento',
									'icon' => '<i class="fa fa-chevron-left"></i>',
									'class' => 'btn btn-outline-secondary',
								])
							!!}
							
							
							<button type="submit" class="btn btn-primary">Effettua ordine<i class="fa fa-chevron-right"></i></button>
						</div>
						{{ Form::close() }}
					</div>
					<!-- /.box-->
				</div>
				<!-- /.col-lg-9-->
			</div>
		</div>
	</div>
</div>
@endsection