@extends('layouts.main-layout')
@section('content')

<h1>Tasks</h1>
<br>
<a href="{{route('task-create-form')}}" class="btn btn-warning">CREATE NEW TASK</a>
<ul>
@foreach ($tasks as $task)
    <li>
        <a href="{{ route('task-show', $task -> id)}}">
            {{ $task -> title }}
        </a>
        <a class="btn btn-sm btn-success" href="{{route('task-edit', $task -> id)}}">Edit</a>
    </li>
@endforeach

</ul>
<br>
<br>
<a class="btn btn-primary" href="{{ route('emp-index')}}">Go to Employees</a>
<br>
<br>
<a class="btn btn-primary" href="{{ route('typ-index')}}">Go to Typologies</a>

@endsection