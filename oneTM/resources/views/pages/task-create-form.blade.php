@extends('layouts.main-layout')
@section('content')

<h3 class="ml-5 display-3">New task form</h3>
    <br>
    <form class="ml-5 w-25" action="{{route('task-store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Task title</label>
          <input name="title" type="text" class="form-control" placeholder="Enter task name">
        </div>
        <div class="form-group">
          <label for="desc">Task desc</label>
          <input name="desc" type="text" class="form-control" placeholder="Enter task desc">
        </div>
        <div class="form-group">
            <label for="priority">Task priority</label>
            <input name="priority" type="text" class="form-control" placeholder="Enter task priority">
        </div>
        <div class="form-group">
            <label for="employee_id">Task Employee</label>
            <select name="employee_id" class="form-control">
              @foreach ($emps as $emp)
                <option value="{{$emp -> id}}">
                    {{$emp -> name}}
                    {{$emp -> lastname}}
                </option>
              @endforeach
            </select>
        </div>
        <br>
        <br>
        
            @foreach ($typs as $typ)
            <input type="checkbox" value="{{$typ -> id}}" name="typs[]"> {{$typ -> name}}<br>
            @endforeach
            <label for="typs[]">
                Typologies
            </label>
            
            
        
    
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection