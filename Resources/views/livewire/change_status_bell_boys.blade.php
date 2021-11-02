{{-- 
	<div class="card-body p-2 swiper-slide">
		<div class="text-block pb-3">
			<div class="media align-items-center">
				<div class="media-body">
					<p class="text-muted text-sm mb-0">{{ $bell_boy->full_name }}
						<span class="badge badge-secondary"></span>
					</p>
					
				</div>
			</div>
		</div>
		<div class="text-block py-0 text-center">
			
			<div>Email: {{ $bell_boy->email }}</div>
			<div>Status: {!! $status !!}</div>
			
			
			
		</div>
		
	</div>
	--}}
	<div>
	@include('food::livewire.change_status_bell_boys.update')
		
	@component('theme::components.card')
		@slot('title')
			{{ $bell_boy->profile->firstname }}<br>
			{{ $bell_boy->profile->surname }}
		@endslot
		@slot('subtitle')
			{!! $status !!}
		@endslot
		@slot('content')
			<button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $bell_boy->user_id }})" class="btn btn-primary btn-sm">Edit</button>
		@endslot
	@endcomponent

	</div>