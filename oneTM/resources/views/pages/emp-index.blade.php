@extends('layouts.main-layout')
@section('content')

<h1>Employees</h1>
<br>
<ul>
@foreach ($emps as $emp)
    <li>
        <a href="{{ route('emp-show', $emp -> id)}}">
            {{ $emp -> name }}
            {{ $emp -> lastname }}
        </a>
    </li>
@endforeach

</ul>
@endsection