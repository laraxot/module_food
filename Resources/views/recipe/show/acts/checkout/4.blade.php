@php
//dddx(get_defined_vars());
$cart=$row;
$cart_panel = Panel::get($cart);
@endphp
@extends('pub_theme::layouts.app')
@section('content')
<div id="all">
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					{{-- 
					<!-- breadcrumb-->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li aria-current="page" class="breadcrumb-item active">Checkout - Payment method</li>
						</ol>
					</nav>
					--}}
				</div>
				<div id="checkout" class="col-lg-12">
					<div class="box">
						{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
						@method('put')
						<h1>Checkout - Modalità di pagamento</h1>
						@include('pub_theme::cart.modal.checkout.partial.pills', ['cart_panel' => $cart_panel, 'step4' => 0])
						<div class="content py-3">
							<div class="row">
								{{-- preso dalla pagina Main_files/pages/category-2.html --}}
								<div class="col-xl-12 mb-4">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<div class="custom-control custom-radio">
												<input type="radio" id="payment_method_1" name="payment_method" value="1" class="custom-control-input" checked="checked">
												<label for="payment_method_1" class="custom-control-label">Pagamento alla consegna</label>
											</div>
										</li>
										{{-- 
										<li class="list-inline-item">
											<div class="custom-control custom-radio">
												<input type="radio" id="delivery_2" name="delivery_method" value="2" class="custom-control-input">
												<label for="delivery_2" class="custom-control-label">Ritiro presso il banco</label>
											</div>
										</li>
										--}}
									</ul>
								</div>
								{{-- 
								<div class="col-md-6">
									<div class="box payment-method">
										<h4>Pagamento alla consegna</h4>
										<p>We like it all.</p>
										<div class="box-footer text-center">
											<input type="radio" name="payment" value="payment1">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box payment-method">
										<h4>Paypal</h4>
										<p>We like it all.</p>
										<div class="box-footer text-center">
											<input type="radio" name="payment" value="payment1">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box payment-method">
										<h4>Payment gateway</h4>
										<p>VISA and Mastercard only.</p>
										<div class="box-footer text-center">
											<input type="radio" name="payment" value="payment2">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box payment-method">
										<h4>Cash on delivery</h4>
										<p>You pay when you get it.</p>
										<div class="box-footer text-center">
											<input type="radio" name="payment" value="payment3">
										</div>
									</div>
								</div>
								--}}
							</div>
							<!-- /.row-->
						</div>
						<!-- /.content-->
						<div class="box-footer d-flex justify-content-between">
							{!! $cart_panel->itemAction('check_out_step3')
								->btnHtml([
									'title' => 'Modalità di consengna',
									'icon' => '<i class="fa fa-chevron-left"></i>',
									'class' => 'btn btn-outline-secondary',
								])
							!!}
							<button type="submit" class="btn btn-primary">Riepilogo Ordine<i class="fa fa-chevron-right"></i></button>
						</div>
						{{ Form::close() }}
						<!-- /.box-->
					</div>
				</div>
				<!-- /.col-lg-9-->
			</div>
		</div>
	</div>
</div>
@endsection