@php
$restaurant = $params['item0'];
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
						<h1>Checkout - Ordine effettuato</h1>

						<div class="content container-fluid text-center m-5">
							<span class="h4 text-primary">Il ristorante ringrazia</span>
							<div class="m-5">
							{!! Panel::make()->get($restaurant)->relatedName('cuisine')
								->btnHtml([
									'act' => 'index', 
									//'modal' => 'iframe', 
									'class' => 'btn btn-secondary mb-2',
									'icon' => '',
									'data_title' => 'Ritorna al menù',
									'title' => 'Ritorna al menù',
							]) !!}
							</div>

						</div>
					</div>
					<!-- /.box-->
				</div>
				<!-- /.col-lg-9-->
			</div>
		</div>
	</div>
</div>
@endsection