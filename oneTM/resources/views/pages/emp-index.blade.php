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
<br>
<br>
<a class="btn btn-primary" href="{{ route('task-index')}}">Go to Tasks</a>
<br>
<br>
<a class="btn btn-primary" href="{{ route('typ-index')}}">Go to Typologies</a>
@endsection