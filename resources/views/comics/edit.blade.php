@extends('layouts.app')

@section('page-title','Edit Comic')
@section('content')

  <div class="container">
    <h2>Modifica {{ $comic->title }} :</h2>
  </div>

  <div class="container">
    <form action="{{ route('comics.update',$comic) }}" method="POST">
    @csrf
    @method('PUT')

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{old('title',$comic->title)}}">
      </div>
      <div class="form-group">
        <label for="thumb">Src image</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="https://..." value="{{ old('thumb',$comic->thumb)}}">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="$18.99" value="{{ old('price',$comic->price)}}">
      </div>
      <div class="form-group">
        <label for="series">series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="series comic" value="{{ old('series',$comic->series)}}">
      </div>
      <div class="form-group">
        <label for="sale_date">Sale date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Sale date" value="{{ old('sale_date',$comic->sale_date)}}">
      </div>
      <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="type comic" value="{{ old('type',$comic->type) }}">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Description" cols="30" rows="10">
            {{old('description',$comic->description)}}
        </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Salva</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  </div>

@endsection