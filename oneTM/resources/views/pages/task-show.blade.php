@extends('layouts.main-layout')
@section('content')

<h1>Task</h1>
<br>

<h3>Title: {{$show -> title}}</h3>
<h3>Description: {{$show -> desc}}</h3>
<h3>Priority: {{$show -> priority}}</h3>

<h6>Employee:
    <a href="{{ route('emp-show', $show -> employee['id'])}}">    
    {{$show -> employee['name']}} {{$show -> employee['lastname']}}
    </a>
</h6>


</ul>
@endsection