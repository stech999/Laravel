@extends('layouts.default')

@section('content')
    @php
        $email = '';
    @endphp
    <div>
        @if ($contactlist['email'] !== $email)
            <h3>Почта: {{ $contactlist['email'] }} </h3>
        @else
            <h3>Адрес электронной почты не указан</h3>
        @endif
    </div>
@endsection
