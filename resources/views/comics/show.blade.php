@extends('layouts.app')
@section('page-title','{{ $comic->title }} ')

@section('content')
<div class="container">
    <div class="card">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Series:{{ $comic->series }}</li>
            <li class="list-group-item">Publication date:{{ $comic->sale_date }}</li>
            <li class="list-group-item">Type:{{ $comic->type }}</li>
            <li class="list-group-item">Price:{{ $comic->price }}</li>
        </ul>
    </div>
</div>
@endsection