@extends('layouts.main-layout')
@section('content')

<h1>Employee</h1>
<br>

<h3>Name: {{$show -> name}}</h3>
<h3>Lastname: {{$show -> lastname}}</h3>
<h3>dateOfBirth: {{$show -> dateOfBirth}}</h3>

<ul>
    @foreach ($show -> tasks as $task)
    <li>
        Title: {{$task -> title}}
        <br>
        Description: {{$task -> desc}}
        <br>
        Priority: {{$task -> priority}}
        @foreach ($task -> typologies as $typology)
          <li>
              <a href="">{{ $typology -> name }}</a>
          </li>
            
        @endforeach
    </li>
    @endforeach
</ul>


</ul>
@endsection