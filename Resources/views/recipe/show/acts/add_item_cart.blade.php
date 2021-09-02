@extends('pub_theme::layouts.app')
@section('content')
@php
    //dddx(get_defined_vars());
    $recipe_panel=$_panel;
    $recipe=$_panel->getRow();
    //$recipe_panel=Panel::get($row);
    $ingredientCats=$recipe->ingredientCats;
    //dddx($ingredientCats);

@endphp

    {!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
    @method('put')
    {{-- Form::hidden('restaurant_id',$items[0]->id) --}}
    {{ Form::hidden('recipe_id',$recipe->id) }}
    {{ Form::hidden('recipe_price',$recipe->pivot->price) }}

    <div class="col-lg-4">
        <label class="form-label">Quantità</label>
        <div class="d-flex align-items-center">
            <div class="btn btn-items btn-items-decrease">-</div>
                <input type="integer" value="1" name="qty" id="qty" class="form-control input-items input-items-greaterthan">
            <div class="btn btn-items btn-items-increase">+</div>
        </div>
    </div>

    {{ Form::bsTextarea('note') }}
        @foreach($ingredientCats as $ingredient_cat)
            @php
            $ingredient_cat_panel=Panel::get($ingredient_cat);
            @endphp
            {!! Theme::include('ingredient_cat.item',[
                    'ingredient_cat'=>$ingredient_cat,
                    'ingredient_cat_panel'=>$ingredient_cat_panel
                    ],get_defined_vars()) !!}
            {{--
            @include($view.'.ingredient_cat.item',
                [
                    'ingredient_cat'=>$ingredient_cat,
                    'ingredient_cat_panel'=>$ingredient_cat_panel
                    ]
                )
            --}}
        @endforeach

    <div class="modal-footer justify-content-end">
        <button type="submit" class="btn btn-primary">@lang('xot::buttons.save')</button>
        <button type="button" data-dismiss="modal" class="btn btn-outline-muted">@lang('xot::buttons.close')</button>
    </div>

{{ Form::close() }}

@endsection
