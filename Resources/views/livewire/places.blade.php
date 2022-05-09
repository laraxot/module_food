<div>


    @include('food::livewire.edit')



    @include('food::livewire.add_places')



    <div class="container text-right">
        <button data-toggle="modal" data-target="#addPlacesModal" class="btn btn-primary btn-sm">Agg indirizzooo</button>
    </div>

    {{ session('message') }}


    <div class="row">
        @foreach ($places as $place)

            {{-- var_dump($place->linked) --}}

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">
                        {{ $place->route }} {{ $place->street_number }}
                    </p>
                    <p class="card-text">
                        {{ $place->locality }} {{ $place->administrative_area_level_2 }}
                    </p>
                    <p class="card-text">
                        {{ $place->postal_code }} {{ $place->country }}
                    </p>

                    <a data-toggle="modal" data-target="#editPlacesModal" wire:click.prevent="edit({{ $place->id }})"
                        href="#" class="card-link">Edit</a>
                    <a wire:click.prevent="delete({{ $place->id }})" href="#" class="card-link">Delete</a>
                </div>
            </div>

        @endforeach
    </div>
</div>

@livewireScripts

<script type="text/javascript">
    window.livewire.on('addPlacesStore', () => {

        $('#addPlacesModal').modal('hide');

    });

    window.livewire.on('editPlaces', () => {

        $('#editPlacesModal').modal('hide');

    });

</script>
