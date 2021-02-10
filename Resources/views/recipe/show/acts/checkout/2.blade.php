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
					<!-- breadcrumb-->
					{{-- 
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li aria-current="page" class="breadcrumb-item active">Checkout - Address</li>
						</ol>
					</nav>
					--}}
				</div>
				<div id="checkout" class="col-lg-12">
					<div class="box">
						{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
						@method('put')
						<h1>Checkout - Indirizzo di destinazione</h1>
						@include('pub_theme::cart.modal.checkout.partial.pills', ['cart_panel' => $cart_panel, 'step2' => 0])
						<div class="content py-3">
							<div class="row">
								<div class="col-md-12">
									{{ Form::bsText('customer_fullname') }}
								</div>
								{{-- 
								<div class="col-md-6">
									{{ Form::bsText('last_name') }}
								</div>
								--}}
								<!-- /.row-->
								<div class="col-12">
									{{ Form::bsAddress('destination') }}
								</div>
								{{-- 
								<div class="col-md-6 col-lg-3">
									<div class="form-group">
										<label for="zip">ZIP</label>
										<input id="zip" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="form-group">
										<label for="state">State</label>
										<select id="state" class="form-control"></select>
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="form-group">
										<label for="country">Country</label>
										<select id="country" class="form-control"></select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Telephone</label>
										<input id="phone" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="text" class="form-control">
									</div>
								</div>
								--}}
								<div class="col-12">
									{{ Form::bsInteger('telephone') }}
								</div>
							</div>
							<!-- /.row-->
						</div>
						<div class="box-footer d-flex justify-content-between">
							{!! $cart_panel->itemAction('check_out_step1')
								->btnHtml([
									'class' => 'btn btn-outline-secondary',
									'icon' => '<i class="fa fa-chevron-left"></i>',
									'title' => 'Il tuo carrello',
								])
							!!}
							<button type="submit" class="btn btn-primary">Modalità di consegna<i class="fa fa-chevron-right"></i></button>
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