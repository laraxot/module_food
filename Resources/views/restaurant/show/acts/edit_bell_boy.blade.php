@php
    //dddx(get_defined_vars());
    //dddx($bellboy->restaurants()->)
@endphp
@extends('pub_theme::layouts.app')
@section('content')

{!! Form::model($row,['url'=>Request::fullUrl() ]) !!}
@method('put')

{{ Form::bsCheckboxDualOption('status',null,['label_type'=>'status','options'=>[0=>'Rifiuta Candidato','1'=>'Accetta Candidato']]) }}
{{ Form::bsTextarea('note') }}


<div class="modal-footer justify-content-end">
    <button type="submit" class="btn btn-primary">Save changes</button>
    <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
</div>

@endsection
