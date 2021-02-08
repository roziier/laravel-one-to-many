@extends('layouts.main-layout')
@section('content')

<h1>Typology</h1>
<br>

<h3>Title: {{$show -> name}}</h3>
<h3>Description: {{$show -> descr}}</h3>


<h6>Tasks:
<ul>
    @foreach ($show -> tasks as $task)
    <li>
      <a href="{{ route('task-show', $task -> id)}}">    
          {{$task -> title}}
      </a>
    </li>
    @endforeach
</ul>
    
</h6>


</ul>
@endsection