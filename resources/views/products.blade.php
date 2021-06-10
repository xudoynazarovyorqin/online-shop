@extends('welcome')
@section('content')


@foreach($products as $product)
            
            <div class="card m-2 text-center shadow d-inline-block " style="width: 12rem;height:auto;">
                <img class="card-img-top" src="/storage/images/{{$product->image}}" >
                    <div class="card-body">
                        <h5 class="card-title " style="height: 5vh">{{$product->name}}</h5>
                        <p class="card-text pt-4 color-grey">Narxi: {{$product->cost}}$</p>
                            
                                @if($product->role == '0')
                                <form action="{{route('add-basket',$product->id)}}" method="post">
                                @csrf
                                    <button type="submit" class="btn btn-primary">
                                        <a  class="text-white">Savatga qo'shish</a>
                                    </button>
                                </form>
                                @endif
                                @if($product->role == '1')
                                <div style="height:8vh">
                                <p style="color: orange" class="m-0">Savatga qo'shilgan</p>
                                <form action="{{route('remove-basket',$product->id)}}" method="post">
                                @csrf
                                    <button type="submit" class="btn btn-secondary m-0">
                                        <small><a  class="text-white">Bekor qilish</a></small>
                                    </button>
                                </form>
                                </div>
                                @endif

                    </div>
            </div>
        @endforeach
   </div>
    <div class="col-md-2">
        <div class="mt-2"></div>
        <button type="submit" class="btn btn-warning"><h3><a href="/basket" class="text-white">Savat</a></h3></button>
    </div>
</div>
@endsection
