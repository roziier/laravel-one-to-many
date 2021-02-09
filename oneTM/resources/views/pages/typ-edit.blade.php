@extends('layouts.main-layout')
@section('content')

<h3 class="ml-5 display-3">Edit typology form</h3>
    <br>
    <form class="ml-5 w-25" action="{{route('typ-update', $typ -> id)}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="name"></label>
          <input name="name" type="text" class="form-control" value="{{$typ -> name}}">
        </div>
        <div class="form-group">
          <label for="descr"></label>
          <input name="descr" type="text" class="form-control" value="{{$typ -> descr}}">
        </div>
       
      
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection