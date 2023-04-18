@extends('layouts.app')

@section('page-title','Ours Comics')

@section('content')
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Comic Title</th>
          <th scope="col">Link</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)

        <tr>
          
          <td>
            <p>{{ $comic->title }}</p>
          </td>
          <td>
            <a href="{{ route('comics.show',$comic->id) }}">
              more info               
            </a>
          </td>
          <td>
            <a class="btn btn-primary btn-sm" href="{{ route('comics.edit',$comic) }}">
              Edit              
            </a>
            <form action="{{ route('comics.destroy',$comic) }}" method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger btn-sm" value="Delete">
            </form>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection