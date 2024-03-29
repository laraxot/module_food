<div>
    @include('food::livewire.create')
    @include('food::livewire.update')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif
    
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $value)
            <tr>
                <td>{{ $value->user_id }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->user_id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->user_id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>