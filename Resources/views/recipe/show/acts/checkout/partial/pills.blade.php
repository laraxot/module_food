<div class="nav flex-column flex-sm-row nav-pills">
    <a href="{{ $cart_panel->itemAction('check_out_step2')->url() }}" 
        class="nav-link flex-sm-fill text-sm-center {{ isset($step2) ? 'active':'' }}"> 
        <i class="fa fa-map-marker"></i> @lang('cart::cart.checkout.partial.address')
    </a>
    <a href="{{ $cart_panel->itemAction('check_out_step3')->url() }}" 
        class="nav-link flex-sm-fill text-sm-center {{ isset($step3) ? 'active':'' }}"> 
        <i class="fa fa-truck"></i> @lang('cart::cart.checkout.partial.delivery_method')
    </a>
    <a href="{{ $cart_panel->itemAction('check_out_step4')->url() }}" 
        class="nav-link flex-sm-fill text-sm-center {{ isset($step4) ? 'active':'' }}"> 
        <i class="fas fa-money-check"></i> @lang('cart::cart.checkout.partial.payment_method')</a>
    <a href="{{ $cart_panel->itemAction('check_out_step5')->url() }}" 
        class="nav-link flex-sm-fill text-sm-center {{ isset($step5) ? 'active':'' }}">
        <i class="fa fa-eye"></i> @lang('cart::cart.checkout.partial.order_review')
    </a>
</div>