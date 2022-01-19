@extends('pub_theme::layouts.app')
@section('content')

    {!! Form::model($row, ['url' => Request::fullUrl()]) !!}
    @method('put')
    {{ Form::bsHidden('post[title]') }}
    {{-- 1 (for Monday) through 7 (for Sunday) --}}
    @php
    $restaurant_panel = Panel::get($row);
    if ($row->openingHours->count() < 7) {
        for ($i = 1; $i <= 7; $i++) {
            $row->openingHours()->firstOrCreate(['day_of_week' => $i]);
        }
    }
    //echo '<pre>'.print_r(\Request::header(),1).'</pre>';
    @endphp

    <div class="card-body">
        <table class="table text-sm mb-0">
            @for ($day = 1; $day <= 7; $day++)
                @php
                    $orari = $row->openingHours->where('day_of_week', $day);
                    //dddx($orari);
                @endphp
                <tr>
                    @foreach ($orari as $v)
                        @if ($loop->first)
                            <th class="pl-0 border-0">{{ $v->day_of_week }}</th>
                        @endif
                        <td class="pr-0 text-right border-0">
                            {{ substr($v->open_at, 0, -3) }} - {{ substr($v->close_at, 0, -3) }}
                            {{ Panel::get($v)->setParent($restaurant_panel)->url('edit') }}
                            {!! Form::bsBtnCrud(['row' => $v]) !!}
                        </td>
                    @endforeach
                </tr>
            @endfor
            {{-- <tr>
                <th class="pl-0">Monday</th>
                <td class="pr-0 text-right">8:00 am - 6:00 pm</td>
            </tr>
            <tr>
                <th class="pl-0">Tuesday</th>
                <td class="pr-0 text-right">8:00 am - 6:00 pm</td>
            </tr>
            <tr>
                <th class="pl-0">Wednesday</th>
                <td class="pr-0 text-right">8:00 am - 6:00 pm</td>
            </tr>
            <tr>
                <th class="pl-0">Thursday</th>
                <td class="pr-0 text-right">8:00 am - 6:00 pm</td>
            </tr>
            <tr>
                <th class="pl-0">Friday</th>
                <td class="pr-0 text-right">8:00 am - 6:00 pm</td>
            </tr>
            <tr>
                <th class="pl-0">Saturday</th>
                <td class="pr-0 text-right">Closed</td>
            </tr> --}}
        </table>
    </div>

    <div class="modal-footer justify-content-end">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" data-dismiss="modal" class="btn btn-outline-muted">Close</button>
    </div>
    {{ Form::close() }}
@endsection
