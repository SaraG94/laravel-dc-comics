@extends('layouts.app')

@section('page-title','Send Comic')
@section('content')

  <div class="conatiner">
    <h1>Nuovo Comic</h1>
  </div>

  <div class="container">
    <form action="">
    
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="email" class="form-control" id="" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input type="password" class="form-control" id="" placeholder="Description">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection