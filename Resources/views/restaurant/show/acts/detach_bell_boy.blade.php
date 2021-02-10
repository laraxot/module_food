@extends('pub_theme::layouts.app')
@section('content')
@php
  //  dddx(get_defined_vars());
 //$fields=$_panel->createFields();
 /*
 $user=\Auth::user();
 $profile=$user->profile;
 $bell_boy=$profile->bellBoy;
 if(!is_object($bell_boy)){
     $bell_boy = new \Modules\Food\Models\BellBoy;
    }
*/
@endphp

{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
@method('put')

Confermando non sarai più fattorino per questo ristorante


<div class="modal-footer justify-content-end">
    <button type="submit" class="btn btn-primary">@lang('xot::buttons.confirm')</button>
    <button type="button" data-dismiss="modal" class="btn btn-outline-muted">@lang('xot::buttons.close')</button>
</div>

@endsection
