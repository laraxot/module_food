@extends('pub_theme::layouts.app')
@section('content')
    @php
    //  dddx(get_defined_vars());
    //$fields=$_panel->getFields(['act'=>'create']);
    $user = \Auth::user();
    $profile = $user->profile;
    $bell_boy = $profile->bellBoy;
    if (!is_object($bell_boy)) {
        $bell_boy = new \Modules\Food\Models\BellBoy();
    }
    @endphp

    {!! Form::model($row, ['url' => Request::fullUrl()]) !!}
    @method('put')
    {{-- @foreach ($fields as $field)
    {!! Theme::inputHtml(['row' => $row, 'field' => $field]) !!}
@endforeach --}}
    {{ Form::bsText('first_name', $user->first_name) }}
    {{ Form::bsText('last_name', $user->last_name) }}
    {{ Form::bsInteger('phone', $bell_boy->phone) }}
    {{ Form::bsEmail('email', $bell_boy->email) }}
    {{ Form::bsCheckbox('driving_license', $bell_boy->driving_license) }}
    {{ Form::bsCheckbox('has_car', $bell_boy->has_car) }}
    {{ Form::bsCheckbox('has_motorcycle', $bell_boy->has_motorcycle) }}
    {{ Form::bsCheckbox('has_bicycle', $bell_boy->has_bicycle) }}
    {{ Form::bsText('vehicle_model', $bell_boy->vehicle_model) }}

    <p>registrandoti accetti...</p>


    <div class="modal-footer justify-content-end">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
    </div>

@endsection
