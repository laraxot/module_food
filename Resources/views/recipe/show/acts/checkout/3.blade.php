@php
//dddx(get_defined_vars());
$cart=$row;
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
							<li aria-current="page" class="breadcrumb-item active">Consegna a casa o ritiro al banco</li>
						</ol>
					</nav>
					--}}
				</div>
				<div id="checkout" class="col-lg-12">
					<div class="box">
						{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
						@method('put')
						<h1>Checkout - Modalità consegna</h1>
						@include('pub_theme::cart.modal.checkout.partial.pills', ['cart_panel' => $cart_panel, 'step3' => 0])
						<div class="content py-3">
							<div class="row">
								{{-- 
								<div class="col-md-6">
									<div class="box shipping-method">
										<h4>Ritiro al banco</h4>
										<p>presso il tuo ristorante</p>
										<div class="box-footer text-center">
											<input type="radio" name="delivery" value="delivery2">
										</div>
										{{ Form::bsRadio('delivery_method', 1) }}
									</div>
								</div>
								--}}
								{{-- 
								<div class="col-md-6">
									<div class="box shipping-method">
										<h4>Consegna a Casa</h4>
										<p>Un fattorino vi porterà la merce a casa</p>
										<div class="box-footer text-center">
											<input type="radio" name="delivery" value="delivery1">
										</div>
										{{ Form::bsRadio('delivery_method', 2) }}
									</div>
								</div>
								--}}
								{{-- preso dalla pagina Main_files/pages/category-2.html --}}
								<div class="col-xl-12 mb-4">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<div class="custom-control custom-radio">
												<input type="radio" id="delivery_1" name="delivery_method" value="1" class="custom-control-input" checked="checked">
												<label for="delivery_1" class="custom-control-label">Consegna a Casa</label>
											</div>
										</li>
										<li class="list-inline-item">
											<div class="custom-control custom-radio">
												<input type="radio" id="delivery_2" name="delivery_method" value="2" class="custom-control-input">
												<label for="delivery_2" class="custom-control-label">Ritiro presso il banco</label>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="box-footer d-flex justify-content-between">
							{!! $cart_panel->itemAction('check_out_step2')
								->btnHtml([
									'icon' => '<i class="fa fa-chevron-left"></i>',
									'title' => 'Indirizzo di consegna',
									'class' => 'btn btn-outline-secondary',
								])
							!!}
							<button type="submit" class="btn btn-primary">Modalità di pagamento<i class="fa fa-chevron-right"></i></button>
						</div>
						{{ Form::close() }}
					</div>
					<!-- /.box-->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection