@extends('layouts.default')

@section('content')
    @php
        $age = 18;
    @endphp
    <div>
        @if ($homelist['age'] > $age)
            <h3>Возраст: {{ $homelist['age'] }} лет.</h3>
        @else
            <h3>указанный человек слишком молод</h3>
        @endif
    </div>
@endsection
