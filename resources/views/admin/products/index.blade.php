@extends("admin.layout")

@section('admin.title') Admin | Products @endsection

@section("admin.content")
    <div class="panel panel-default">
        <div class="panel-heading">
            Products
        </div>
        @if(session()->has('success'))
            <div class="container mt-4">
                <div class="alert alert-success" role="alert">
                    {{ session('success')}}
                </div>
            </div>
        @endif

        @if(session()->has('errorMessage'))
            <div class="container mt-4">
                <div class="alert alert-danger" role="alert">
                    {{ session('errorMessage')}}
                </div>
            </div>
        @endif

        <div class="my-4">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add new Product</a>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Active</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key=>$p)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$p->name}}</td>
                            <td>
                                <img src="{{ asset("assets/images/$p->image") }}" class="img-fluid admin-img" />
                            </td>
                            <td>{{$p->price}}</td>
                            <td>
                                @if($p->is_active == 1)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('products.edit', ['product' => $p->id]) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-primary" />Edit</button>
                                </form>
                            </td>
                            <td>

                                <form action="{{ route('products.destroy', ['product' => $p->id]) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method("DELETE")

                                    <button type="submit" class="btn btn-danger" />Delete</button>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
