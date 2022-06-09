
@extends("frontend.layout")

@section("title") Speed | Product @endsection
@section("keyword") Shop,product,bike,users @endsection
@section("description") This is our bike single page @endsection

@section("content")
    <div class="container">
           <h1 class="contact_text"><strong>{{$product->name}}</strong></h1>
        <div class="row justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{asset("assets/images/$product->image")}}" class="card-img-top" alt="...">
                <p class="p-1">Price : {{$product->price}}$</p>
                <p class="p-1">{{$product->description}}</p>
                <a href="{{route("products")}}" class="btn btn-primary">Return to Shop</a>
         </div>
    </div>

    </div>


@endsection

