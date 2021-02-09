@extends('layouts.main-layout')
@section('content')

<h3 class="ml-5 display-3">Edit task form</h3>
    <br>
    <form class="ml-5 w-25" action="{{route('task-update', $task -> id)}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Task title</label>
          <input name="title" type="text" class="form-control" value="{{$task -> title}}">
        </div>
        <div class="form-group">
          <label for="desc">Task desc</label>
          <input name="desc" type="text" class="form-control" value="{{$task -> desc}}">
        </div>
        <div class="form-group">
            <label for="priority">Task priority</label>
            <input name="priority" type="text" class="form-control" value="{{$task -> priority}}">
        </div>
        <div class="form-group">
            <label for="employee_id">Task Employee</label>
            <select name="employee_id" class="form-control">
              @foreach ($emps as $emp)
                <option value="{{$emp -> id}}"
                    @if ($task -> employee_id == $emp -> id)
                        selected
                    @endif
                    >
                    {{$emp -> name}}
                    {{$emp -> lastname}}
                </option>
              @endforeach
            </select>
        </div>
        <br>
        <br>
        <label for="typs[]">
            Typologies
        </label>
        @foreach ($typs as $typ)
          <input type="checkbox" value="{{$typ -> id}}" name="typs[]"
          @foreach ($task -> typologies as $tt)
          @if ($tt -> id == $typ -> id)
              checked
          @endif
              
          @endforeach
          > 
          {{$typ -> name}}<br>
        @endforeach
            
            
            
        
    
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection