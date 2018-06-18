@extends('layout');

@section('contenuto')
    <img src={{$product['image']}} >
    <h1>Dettagli del prodotto: </h1>
    <h2>{{$product->name}}</h2>
    


@endsection
