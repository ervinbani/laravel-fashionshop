@extends('layout')

@section('contenuto')
<h1>CONTENUTO DEL HOMEPAGE</h1>
    @foreach($products as $product)
      $id = $product['id'];
      <a href={{Route(product/1)}}>{{$product['name']}}</a>
      <br>

    @endforeach;
@endsection
