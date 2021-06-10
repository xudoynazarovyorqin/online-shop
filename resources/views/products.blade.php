@extends('welcome')
@section('content')


@foreach($products as $product)
            
            <div class="card m-2 text-center d-inline-block" style="width: 12rem;">
                <img class="card-img-top" src="/storage/images/{{$product->image}}" >
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">Cost: {{$product->cost}}$</p>
                            <form action="{{route('add-basket',$product->id)}}" method="post">
                            @csrf
                                @if($product->role == '0')
                                <button type="submit" class="btn btn-primary">
                                    <a  class="text-white">add basket</a>
                                </button>
                                @endif
                                @if($product->role == '1')
                                <!-- <button type="submit" class="btn btn-warning">
                                    <a  class="text-white">in basket</a>
                                </button> -->
                                <p style="color: orange">In basket</p>
                                @endif

                            </form>
                    </div>
            </div>
        @endforeach
   </div>
    <div class="col-md-2">
        <div class="mt-2"></div>
        <button type="submit" class="btn btn-warning"><h3><a href="/basket" class="text-white">Basket</a></h3></button>
    </div>
</div>
@endsection
