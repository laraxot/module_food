<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addPlacesModal" tabindex="-1" role="dialog"
    aria-labelledby="addPlacesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPlacesModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">{{--
                {!! Form::model($row, ['url' => Request::fullUrl()]) !!} --}}


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @method('put')
                <div class="row pt-4">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="route">Street</label>
                        <input class="form-control" type="text" name="route" id="route" wire:model="route"
                            placeholder="Route">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="street_number">Nr</label>
                        <input class="form-control" type="text" name="street_number" id="street_number"
                            wire:model="street_number" placeholder="Nr">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="locality">Locality</label>
                        <input class="form-control" type="text" name="locality" id="locality" wire:model="locality"
                            placeholder="Locality">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="administrative_area_level_2">Country</label>
                        <input class="form-control" type="text" name="administrative_area_level_2"
                            id="administrative_area_level_2" wire:model="administrative_area_level_2"
                            placeholder="Country">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="postal_code">ZIP</label>
                        <input class="form-control" type="text" name="postal_code" id="postal_code"
                            wire:model="postal_code" placeholder="ZIP">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="country">Nation</label>
                        <input class="form-control" type="text" name="country" id="country" wire:model="country"
                            placeholder="Nation">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
