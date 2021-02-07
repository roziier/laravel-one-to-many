@extends('layouts.main-layout')
@section('content')

<h1>Employees</h1>
<br>
<ul>
@foreach ($emps as $emp)
<li>
    <a href="">
        {{ $emp -> name}}
        {{ $emp -> lastName}}
        {{ $emp -> dateOfBirth}}
    </a>
</li>
@endforeach
</ul>

@endsection