@extends('welcome')
@section('content')
<div class="p-4">
<form action="{{route('products')}}" method="get">
  <button type="submit" class="btn btn-primary">Ortga</button>
</form>
</div>
<h3>Sizning xaridinggiz:</h3>
<ul>
@foreach($products as $product)
  <li class="m-0 p-0">{{$product->name}}. Narxi:
  <small>{{$product->cost}}</small>
  </li>
@endforeach
</ul>

<h2>Umumiy narx: {{$cost}}$</h2>

@endsection
