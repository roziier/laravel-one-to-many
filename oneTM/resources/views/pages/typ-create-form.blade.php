@extends('layouts.main-layout')
@section('content')

<h3 class="ml-5 display-3">New typology form</h3>
    <br>
    <form class="ml-5 w-25" action="{{route('typ-store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="name">Typ name</label>
          <input name="name" type="text" class="form-control" placeholder="Enter typ name">
        </div>
        <div class="form-group">
          <label for="descr">Typ descr</label>
          <input name="descr" type="text" class="form-control" placeholder="Enter typ descr">
        </div>
       
      
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection