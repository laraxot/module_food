<div class="col-lg-5 pl-xl-5">
	<div class="card border-0 shadow">
		<div class="card-body p-4">
			<div class="text-block pb-3">
				<div class="media align-items-center">
					<div class="media-body">
						<h6>Indirizzo</h6>
						<p class="text-muted text-sm mb-0">{{ $cart->full_address }}</p>
					</div>
				</div>
			</div>
			<div class="text-block py-3">
				<ul class="list-unstyled mb-0">
                    {{-- <liclass="mb-3"><iclass="fasfa-usersfa-fwtext-mutedmr-2"></i>3guests</li> --}}
                    <li class="mb-3"><i class="fas fa-truck fa-fw text-muted mr-2"></i>{{ $cart->delivery_method }}</li>
					<li class="mb-0">
                        <i class="fas fa-money-check text-muted mr-2"></i>
                        {{ $cart->payment_method }}
                    </li>
				</ul>
			</div>
			<div class="text-block pt-3 pb-0">
				<table class="w-100">
					<tbody>
						<tr>
							<th class="font-weight-normal py-2">Prodotti presenti</th>
							<td class="text-right py-2 elements_number">{{ $cart->elements_number }}</td>
                        </tr>
                        {{-- 
                            <tr>
                                <th class="font-weight-normal pt-2 pb-3">Service fee</th>
                                <td class="text-right pt-2 pb-3">$67.48</td>
                            </tr>
                            --}}
					</tbody>
					<tfoot>
						<tr class="border-top">
							<th class="pt-3">Totale</th>
							<td class="font-weight-bold text-right pt-3 total_cart">{{ $cart->price_complete_currency }}</td>
						</tr>
					</tfoot>
				</table>
			</div>
        </div>
        {{-- 
            <div class="card-footer bg-primary-light py-4 border-0">
                <div class="media align-items-center">
                    <div class="media-body">
                        <h6 class="text-primary">Flexible – free cancellation</h6>
                        <p class="text-sm text-primary opacity-8 mb-0">Cancel within 48 hours of booking to get a full refund. <a href="#" class="text-reset ml-3">More details</a></p>
                    </div>
                </div>
            </div>
        --}}
	</div>
</div>