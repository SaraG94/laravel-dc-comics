@extends('layouts.app')

@section('page-title','Send Comic')
@section('content')

  <div class="conatiner">
    <h1>Nuovo Comic</h1>
  </div>

  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
      </div>
      <div class="form-group">
        <label for="thumb">Src image</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="https://...">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="$18.99">
      </div>
      <div class="form-group">
        <label for="series">series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="series comic">
      </div>
      <div class="form-group">
        <label for="sale_date">Sale date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Sale date">
      </div>
      <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="type comic">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>

@endsection