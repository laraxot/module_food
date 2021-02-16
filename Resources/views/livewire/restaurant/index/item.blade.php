<<<<<<< HEAD
<div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 col-xl-4 mb-5 hover-animate">
	<div class="card h-100 border-0 shadow">
		<div style="background-image: url({{ $row_panel->imgSrc(['width'=>300,'height'=>200]) }}); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
			<!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")-->
			<a href="{{ $row_panel->url(['act'=>'show']) }}" class="tile-link"></a>
			<div class="card-img-overlay-bottom z-index-20">
				<h4 class="text-white text-shadow">{{ $row->title }}</h4>
				{{--
				--}}
				@include('pub_theme::layouts.widgets.rating',['avg'=>$row->ratings_avg])
			</div>
			<div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                @livewire('blog::favorite',['model'=>$row])

			</div>
		</div>
		<div class="card-body">
			<p class="text-sm text-muted mb-3">{{ $row->subtitle }} </p>
			{{--
			{{ $panel->btnItemAction('rate') }}
			<p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
			<p class="text-sm mb-0"><a href="#" class="mr-1">Restaurant,</a><a href="#" class="mr-1">Contemporary</a>
			</p>
			--}}
			@php
			//dddx($panel->getRowTabs());
			@endphp
			<div class="text-center">
				@foreach($row_panel->getRowTabs() as $tab)
				<a href="{{ $tab->url }}" class="btn btn-secondary mb-2">
				{{ __('food::location.item.'.$tab->title)  }}
				</a>
				@endforeach
			</div>
		</div>
	</div>
</div>
=======
<div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 col-xl-4 mb-5 hover-animate">
	<div class="card h-100 border-0 shadow">
		<div style="background-image: url({{ $row_panel->imgSrc(['width'=>300,'height'=>200]) }}); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
			<!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")-->
			<a href="{{ $row_panel->url(['act'=>'show']) }}" class="tile-link"></a>
			<div class="card-img-overlay-bottom z-index-20">
				<h4 class="text-white text-shadow">{{ $row->title }}</h4>
				{{--
				--}}
				@include('pub_theme::layouts.widgets.rating',['avg'=>$row->ratings_avg])
			</div>
			<div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                @livewire('blog::favorite',['model'=>$row])

			</div>
		</div>
		<div class="card-body">
			<p class="text-sm text-muted mb-3">{{ $row->subtitle }} </p>
			{{--
			{{ $panel->btnItemAction('rate') }}
			<p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
			<p class="text-sm mb-0"><a href="#" class="mr-1">Restaurant,</a><a href="#" class="mr-1">Contemporary</a>
			</p>
			--}}
			@php
			//dddx($panel->getRowTabs());
			@endphp
			<div class="text-center">
				@foreach($row_panel->getRowTabs() as $tab)
				<a href="{{ $tab->url }}" class="btn btn-secondary mb-2">
				{{ __('food::location.item.'.$tab->title)  }}
				</a>
				@endforeach
			</div>
		</div>
	</div>
</div>
>>>>>>> a6dde0f (first)
