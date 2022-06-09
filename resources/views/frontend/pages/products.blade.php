
@extends("frontend.layout")

@section("title") Speed | Products @endsection
@section("keyword") Shop,products,bike,users @endsection
@section("description") This is our shop,you can see what we have here @endsection

@section("content")
    <div class="container">
        <h1 class="contact_text"><strong>Shop</strong></h1>
        <form action="{{ route("products") }}" method="GET">
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="keyword" placeholder="Keyword" class="form-control">
                </div>

                <div class="col-md-2">
                    <input type="submit" placeholder="Keyword" value="Search" class="btn btn-primary">
                </div>
            </div>
        </form>
        <div class="row mt-3 justify-content-around">
            @foreach($products as $p)
                @include("frontend.component.productcom")
            @endforeach
        </div>
        <div class="mt-3">
            {{$products->links()}}
        </div>

    </div>


@endsection
