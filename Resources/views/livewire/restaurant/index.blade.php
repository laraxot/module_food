<div class="row">
    {{--
    @include('pub_theme::layouts.default.index.sidebar')

    @livewire('food::restaurant.index_sidebar')
        --}}
    @include('food::livewire.restaurant.index.sidebar')
    {{--

    <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" />
    --}}
    <div class="col-lg-9">
        <div class="d-flex justify-content-between align-items-center flex-column flex-md-row mb-4">
            <div class="mr-3">
                <p class="mb-3 mb-md-0">
                    <strong>{{ $rows->total() }}</strong> @lang('theme::txt.sort.result')
                </p>
            </div>

            @include('pub_theme::layouts.default.index.select_sort',['panel'=>$_panel])

        </div>
        <div class="row">
            @foreach($rows as $row)
            {{--

            @include('pub_theme::layouts.default.index.item',
            --}}
            @livewire('food::restaurant.index-item',
            [
            'row'=>$row,
            //'row_panel'=>(Panel::get($row)->setParent($_panel->getParent()))
            ],key($row->id)

            )
            @endforeach
        </div>
        {{ $rows->links() }}

    </div>
</div>
