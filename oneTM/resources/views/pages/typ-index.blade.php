@extends('layouts.main-layout')
@section('content')

<h1>Typologies</h1>
<br>
<ul>
@foreach ($typs as $typ)
    <li>
        <a href="{{ route('typ-show', $typ -> id)}}">
            {{ $typ -> name }}
        </a>
    </li>
@endforeach

</ul>
<br>
<br>
<a class="btn btn-primary" href="{{ route('task-index')}}">Go to Tasks</a>
<br>
<br>
<a class="btn btn-primary" href="{{ route('emp-index')}}">Go to Employees</a>
@endsection