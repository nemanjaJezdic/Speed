<div class="card mt-3 " style="width: 18rem;">
    <img src="{{asset("assets/images/$p->image")}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title text-center">{{$p->name}}</h5>
        <p class="card-text">Price : {{$p->price}}$</p>
        <a href="{{route("product", ['product' => $p->id])}}" class="btn btn-secondary">View</a>
    </div>
</div>
