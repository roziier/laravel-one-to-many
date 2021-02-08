@extends('layouts.main-layout')
@section('content')

<h1>Tasks</h1>
<br>
<ul>
@foreach ($tasks as $task)
    <li>
        <a href="{{ route('task-show', $task -> id)}}">
            {{ $task -> title }}
        </a>
    </li>
@endforeach

</ul>
<br>
<br>
<a class="btn btn-primary" href="{{ route('emp-index')}}">Go to Employees</a>
@endsection