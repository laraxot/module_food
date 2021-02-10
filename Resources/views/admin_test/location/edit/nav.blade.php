@foreach(['facebook'] as $engine)
<a class="btn btn-small btn-default" data-toggle="tooltip" title="{{ $engine }}" href="{{  route(str_replace('.edit','.'.$engine.'.index',$routename),$params) }}"><i class="fa fa-magic fa-fw" aria-hidden="true"></i>&nbsp;{{ $engine }}</a>
@endforeach