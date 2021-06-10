@extends('welcome')
@section('content')
<div class="pt-4"></div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eos fugit consequatur adipisci maiores sapiente maxime asperiores nam voluptas illo.</p>
<h3>Your basket has:</h3>
<ul>
@foreach($products as $product)
  <li class="m-0 p-0">{{$product->name}}. Cost:
  <small>{{$product->cost}}</small>
  </li>
@endforeach
</ul>

<h2>$$$: {{$cost}}</h2>

@endsection
