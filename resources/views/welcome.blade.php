@extends('layouts.app')

@section('main')
<div class="col text-center">
    <h1>{{$title}}</h1>
    <div>
        <button type="button" class="btn btn-warning"><a class="selezione" href="{{route('products')}}">Guarda i nostri Prodotti</a></button>
    </div>
</div>@endsection