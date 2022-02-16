@php
//dddx(get_defined_vars());
$cart=$row;
$cart_items = $cart->items;
$cart_panel = Panel::make()->get($cart);
//dddx($cart_items);
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
								<li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
							</ol>
						</nav>
					--}}
				</div>
				<div id="basket" class="col-lg-12">
					<div class="box">
						{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
						@method('put')
						<h1>Il tuo Carrello</h1>
						<p class="text-muted">Attualmente hai {{ count($cart_items) }} prodotti nel tuo carrello</p>
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
											<td>
												{{-- Form::bsInteger('item['.$item->id.'][qty]',$item->qty) --}}
												<div class="col-lg-4">
													<label class="form-label"></label>
													<div class="d-flex align-items-center">
														<div class="btn btn-items btn-items-decrease">-</div>
														<input type="integer" value="{{ $item->qty }}" 
															name="item[{{ $item->id }}][qty]" 
															id="item[{{ $item->id }}][qty]" 
															class="form-control input-items input-items-greaterthan">
														<div class="btn btn-items btn-items-increase">+</div>
													</div>
												</div>
											</td>
											<td>
												{{ $item->price_currency }}
											</td>
											{{-- 
											<td>$0.00</td>
											--}}
											<td>{{ $item->subtotal_currency }}</td>
											@php
											$item_panel = Panel::make()->get($item)->setParent($cart_panel);
											@endphp
											<td>
												{{-- DA RIVEDERE, FORSE NON FUNZIONA --}}
												{{-- $item_panel->btnDetach() --}}
												{!! $item_panel->btnHtml([
														'act' => 'detach',
														'icon' => '<i class="fafa-trash"></i>',
														'title' => 'Elimina',
														'class' => 'btn btn-primary mb-2 btn-confirm-delete btn-danger',
													])
												!!}
												{{-- <ahref="#"><iclass="fafa-trash"></i></a> --}}
											</td>
										</tr>
										@foreach($item->variations as $var_item)
											<tr>
												<td>{{ $var_item->var_item_title }}</td>
												<td>
													{{-- Form::bsInteger('var_item['.$var_item->id.'][qty]',$var_item->qty) --}}
													<div class="col-lg-4">
														<label class="form-label"></label>
														<div class="d-flex align-items-center">
															<div class="btn btn-items btn-items-decrease">-</div>
															<input type="integer" value="{{ $var_item->qty }}" 
																name="var_item[{{ $var_item->id }}][qty]" 
																id="var_item[{{ $var_item->id }}][qty]" 
																class="form-control input-items input-items-greaterthan">
															<div class="btn btn-items btn-items-increase">+</div>
														</div>
													</div>
												</td>
												<td>
													{{ $var_item->price_currency }}
												</td>
												<td>{{ $var_item->subtotal_currency }}</td>
												@php
												$var_item_panel = Panel::make()->get($var_item)->setParent($item_panel);
												//dddx($var_item_panel);
												@endphp
												<td>
													{{-- $var_item_panel->btnDetach() --}}
													{!! $var_item_panel->btnHtml([
															'act' => 'detach',
															'icon' => '<i class="fafa-trash"></i>',
															'title' => 'Elimina',
															'class' => 'btn btn-primary mb-2 btn-confirm-delete btn-danger',
														])
													!!}
													{{-- <ahref="#"><iclass="fafa-trash"></i></a> --}}
												</td>
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
						<div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
							<div class="left">
								@php
									$restaurant_panel = Panel::make()->get($cart->shop);
								@endphp
								{!! $restaurant_panel->relatedName('cuisine')
									->btnHtml([
										'act' => 'index',
										'title' => 'Ritorna al Menù',
										'icon' => '<i class="fa fa-chevron-left"></i>',
										'class' => 'btn btn-outline-secondary',
									])
								!!}
							</div>
							<div class="right">
								{{-- <buttonclass="btnbtn-outline-secondary"><iclass="fafa-refresh"></i>Updatecart</button> --}}
								<button type="submit" class="btn btn-primary">
								Indirizzo di destinazione<i class="fa fa-chevron-right"></i>
								</button>
							</div>
						</div>
						{{ Form::close() }}
					</div>
				</div>
				<!-- /.col-lg-9-->
			</div>
		</div>
	</div>
</div>
@endsection