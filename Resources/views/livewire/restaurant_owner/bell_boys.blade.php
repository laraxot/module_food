<div>
    {{-- https://laracasts.com/discuss/channels/laravel/need-to-double-click-livewire-component-for-it-to-work 
        se utilizzo $updateMode, appena atterro sulla pagina devo pigiare 2 volte il tasto per visualizzare il modal
        aggiornamento: per far visualizzare dati nel modal ho dovuto utilizzare $updateMode dentro il modal.... perchè???
    --}}
    {{-- @if($updateMode) --}}
    @include('food::livewire.restaurant_owner.update')
    {{-- @endif --}}
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif

    {{-- magari inserire un carousel card slider 
    esempio: https://www.codeply.com/go/Q60wSmoJHO/bootstrap-4-carousel-card-slider
    per evitare l'effetto slider automatico: https://stackoverflow.com/questions/14977392/bootstrap-carousel-remove-auto-slide
    --}}

    @foreach($bell_boys as $bell_boy)
        @component('theme::components.card')
            @slot('title')
                {{ $bell_boy->name }}
            @endslot
            @slot('subtitle')
                {!! $bell_boy->status !!}
            @endslot
            @slot('content')
                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $bell_boy->id }})" class="btn btn-primary btn-sm">Edit</button>
            @endslot
        @endcomponent

    @endforeach
</div>