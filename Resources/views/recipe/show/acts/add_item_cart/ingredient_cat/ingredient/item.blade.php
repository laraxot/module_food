<div class="col-sm-6 col-lg-4 mb-5 hover-animate">
	<div class="card h-60 border-0 shadow">
		<div class="card-body">
			<h5 class="card-title">{{ $ingredient->title }}</h5>
			<p class="text-sm text-muted mb-3"> {{ $ingredient->subtitle }}
            </p>
			<p class="flex-shrink-1 mb-0 card-stars text-xs text-right">
				<span class="h4 text-primary">@money($ingredient->pivot->price*100)</span>
				{{--  
					<div class="custom-control custom-switch text-right">
						<input type="checkbox" name="product[{{ $ingredient_cat->id }}][{{ $ingredient->id }}]" value="{{ $ingredient->id }}" class="custom-control-input" id="{{ $ingredient->post_type }}-{{ $ingredient->id }}" />
						<label class="custom-control-label" for="{{ $ingredient->post_type }}-{{ $ingredient->id }}"></label>
					</div>
				--}}
				{{-- 
					<input class="form-check-input" type="radio" name="product[{{ $ingredient_cat->id }}][{{ $ingredient->id }}]" value="-1">TOGLI
					<input class="form-check-input" type="radio" name="product[{{ $ingredient_cat->id }}][{{ $ingredient->id }}]" value="0">lascia cosi come sta
					<input class="form-check-input" type="radio" name="product[{{ $ingredient_cat->id }}][{{ $ingredient->id }}]" value="1">Aggiungi
					--}}
				
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-outline-danger btn-toggle" data-toggle="tooltip" data-placement="top" title="Togli">
						<input type="radio" name="product[{{ $ingredient_cat->id }}][{{ $ingredient->id }}]" id="option1" autocomplete="off" value="-1"> -
					</label>
					<label class="btn btn-outline-primary btn-toggle active" data-toggle="tooltip" data-placement="top" title="Lascia invariato">
						<input type="radio" name="product[{{ $ingredient_cat->id }}][{{ $ingredient->id }}]" id="option2" autocomplete="off" checked value="0"> &nbsp;
					</label>
					<label class="btn btn-outline-success btn-toggle" data-toggle="tooltip" data-placement="top" title="Aggiungi">
						<input type="radio" name="product[{{ $ingredient_cat->id }}][{{ $ingredient->id }}]" id="option3" autocomplete="off" value="1"> +
					</label>
				</div>
				
				
				{{--
                    3 stati , si no, invariato
                    https://codepen.io/Davide_sd/pen/AmazD
                    https://www.jqueryscript.net/form/three-state-switch-theswitch.html
                    https://github.com/naveenraina/vuejs-three-state-switch
                    https://www.jqueryscript.net/form/three-states-switch-jtoggler.html
                    --}}


                {{--  --}}
			</p>
		</div>
	</div>
</div>
