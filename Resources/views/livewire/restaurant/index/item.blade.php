<div data-marker-id="{{ $row->id }}" class="col-sm-6 col-xl-4 mb-5 hover-animate">
    <div class="card h-100 border-0 shadow">
        {{-- <img src="{{ $row_panel->imgSrc(['width' => 300, 'height' => 200]) }}" width="300" height="200" />
        <img src="https://xotimagetest.infinityfreeapp.com/photos/Gigi-la-Trottola-1.jpg" width="300" height="200" /> --}}
        <img src="https://static.tumblr.com/e0fcf4e598c619f7af1dc9161a4f3a56/vzxwfni/bzBnw6lie/tumblr_static_7kfds509nw08okcw4g4c84gow.png"
            width="300" height="200" />
        <div style="background-image: url({{ $row_panel->imgSrc(['width' => 300, 'height' => 200]) }}); min-height: 200px;"
            class="card-img-top overflow-hidden dark-overlay bg-cover">
            <a href="{{ $row_panel->url(['act' => 'show']) }}" class="tile-link"></a>
            <div class="card-img-overlay-bottom z-index-20">
                <h4 class="text-white text-shadow">
                    {{ $row->title }}
                </h4>
                @include('pub_theme::layouts.widgets.rating',['avg'=>$row->ratings_avg])
            </div>
            <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                <livewire:rating::favorite :model=$row />
            </div>
        </div>
        <div class="card-body">
            <p class="text-sm text-muted mb-3">{{ $row->subtitle }} </p>
            {{-- {{ $panel->btnItemAction('rate') }}
			<p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
			<p class="text-sm mb-0"><a href="#" class="mr-1">Restaurant,</a><a href="#" class="mr-1">Contemporary</a>
			</p> --}}
            @php
                //dddx($panel->getRowTabs());
                //dddx(get_defined_vars());
            @endphp
            <div class="text-center">
                @foreach ($row_panel->getRowTabs() as $tab)
                    <a href="{{ $tab->url }}" class="btn btn-secondary mb-2">
                        {{ $tab->title }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
