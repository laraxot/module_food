@php
  $tabs=[
      'food.restaurant.index'=>'<i class="glyphicon glyphicon-triangle-left" aria-hidden="true"></i>',
      'food.restaurant.edit'=>'Modifica Info',
      'food.restaurant.cuisine.index' =>'cuisine - tipologia piatti ',
      'food.restaurant.recipe.index' =>'elenco cibi e bevande',
  ]
@endphp
<ul class="nav nav-tabs">
@foreach($tabs as $route=>$label)
<li role="presentation" @if(Route::currentRouteName()==$route) class="active" @endif>
  <a href="{{ route($route,$params) }}">{!! $label !!}</a>
</li>
@endforeach


<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="lang-sm lang-lbl-full" lang="{{ App::getLocale() }}"></i> <i class="fa fa-caret-down"></i>
    </a>
  <ul class="dropdown-menu" >
    @foreach(config('laravellocalization.supportedLocales') as $lang => $vl)
    		@if($lang!=App::getLocale())
        		<li><a href="{{-- $row->url_edit($lang) --}}"><i class="lang-sm lang-lbl-full" lang="{{ $lang}}"></i></a></li>
        	@endif
    @endforeach
  </ul>
</li>

</ul>
{{ Theme::add('theme/bc/bootstrap-language/languages.min.css') }}
