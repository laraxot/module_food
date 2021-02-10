@php
//dddx(get_defined_vars());
$cart=$row;
$cart_items = $cart->items;
$cart_panel = Panel::get($cart);
//dddx($cart_items);

@endphp
@extends('pub_theme::layouts.app')
@section('content')
<div id="all">
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
	            @include('pub_theme::layouts.partials.breadcrumb')
				</div>
				<div id="basket" class="col-lg-12">
					<div class="box">
						{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
						@method('put')
						<h1>Il tuo Carrello</h1>
						<p class="text-muted">Attualmente hai {{ count($cart_items) }} prodotti nel tuo carrello</p>



<section>
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-8 pr-xl-5">
				<div class="cart mb-5">
					<div class="cart-body">




                        @foreach($cart_items as $item)
						<!-- Product-->
						<div class="cart-item">
							<div class="row d-flex align-items-center text-left text-md-center">
								<div class="col-12 col-md-5">
									<a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
									<div class="d-flex align-items-center">
                                        {{-- 
                                            <a href="detail-1.html">
                                                <img class="cart-item-img" src="https://d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="...">
                                            </a>
                                            --}}
										<div class="cart-title text-left">
                                            {{-- <aclass="text-darklink-animated"href="detail-1.html"> --}}
                                                <strong>{{ $item->item_title }}</strong>
                                            {{-- </a> --}}
                                            @foreach($item->variations as $var_item)
                                                <br>
                                                <span class="text-muted text-sm">
                                                    {!! $var_item->qtySimbol !!} 
                                                    {{ $var_item->var_item_title }} 
                                                    @if($var_item->qty > 0)
                                                        <small>
                                                            @money($var_item->price*100, $item->currency)
                                                        </small>
                                                    @endif
                                                </span>
                                                {{-- <br><spanclass="text-mutedtext-sm">Colour:Green</span> --}}
                                            @endforeach                                       
                                        </div>
									</div>
								</div>
								<div class="col-12 col-md-7 mt-4 mt-md-0">
									<div class="row align-items-center">
										<div class="col-md-3">
											<div class="row">
												{{-- <divclass="col-6d-md-nonetext-muted">Priceperitem</div> --}}
												<div class="col-6 col-md-12 text-right text-md-center">{{ $item->price_currency }}</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="row align-items-center">
												{{-- <divclass="d-md-nonecol-7col-sm-9text-muted">Quantity</div> --}}
												<div class="col-5 col-sm-3 col-md-12">
													<div class="d-flex align-items-center">
														{{-- <divclass="btnbtn-itemsbtn-items-decrease">-</div> --}}
														<input class="form-control text-center border-0 border-md input-items" type="text" value="{{ $item->qty }}">
														{{-- <divclass="btnbtn-itemsbtn-items-increase">+</div> --}}
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="row">
												{{-- <divclass="col-6d-md-nonetext-muted">Totalprice</div> --}}
												<div class="col-6 col-md-12 text-right text-md-center">{{ $item->subtotal_currency}}</div>
											</div>
										</div>
										<div class="col-2 d-none d-md-block text-center">
											<a class="cart-remove text-muted" href="#">
												<svg class="svg-icon w-2rem h-2rem svg-icon-light">
													<use xlink:href="#close-1"> </use>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
                        @endforeach




					</div>
				</div>
			</div>
          <div class="col-lg-4">
            <div class="card mb-5"> 
              <div class="card-header">
                <h6 class="mb-0">Order Summary</h6>
              </div>
              <div class="card-body py-4">
                <p class="text-muted text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                <table class="table card-text">
                  <tr>
                    <th class="py-4">Order Subtotal </th>
                    <td class="py-4 text-right text-muted">$390.00</td>
                  </tr>
                  <tr>
                    <th class="py-4">Shipping and handling</th>
                    <td class="py-4 text-right text-muted"> $10.00</td>
                  </tr>
                  <tr>
                    <th class="py-4">Tax</th>
                    <td class="py-4 text-right text-muted">$0.00</td>
                  </tr>
                  <tr>
                    <th class="pt-4">Total</th>
                    <td class="pt-4 text-right h3 font-weight-normal">$400.00</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
		</div>
	</div>
</section>




                        
						<!-- /.table-responsive-->
						<div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
							<div class="left">
								@php
									$restaurant_panel = Panel::get($cart->shop);
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