<div id="accordion{{ $ingredient_cat->post_type }}" role="tablist">
    <div class="card border-0 shadow mb-3">
        <div id="headingOne" role="tab" class="card-header bg-primary-100 border-0 py-0">
            <a data-toggle="collapse" href="#{{ $ingredient_cat->post_type }}-{{ $ingredient_cat->post_id }}" aria-expanded="true" aria-controls="collapseOne" class="accordion-link collapsed">
                {{ $ingredient_cat->title }}
            </a>
        </div>
        <div id="{{ $ingredient_cat->post_type }}-{{ $ingredient_cat->post_id }}" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion{{ $ingredient_cat->post_type }}" class="collapse show">
            <div class="card-body py-5">
                <div class="row">

                        @foreach($ingredient_cat->ingredients as $ingredient)
                        @php
                            $ingredient_panel=Panel::get($ingredient)
                        @endphp
                        @include($view.'.ingredient_cat.ingredient.item',
                            [
                                'ingredient'=>$ingredient,
                                'ingredient_panel'=>$ingredient_panel,
                                'ingredient_cat'=>$ingredient_cat,
                            ]
                        )
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

