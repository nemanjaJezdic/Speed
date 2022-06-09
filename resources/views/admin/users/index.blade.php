@extends("admin.layout")

@section('admin.title') Admin | Users @endsection

@section("admin.content")
    <div class="panel panel-default">
        <div class="panel-heading">
            Users
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
            <a href="{{ route('users.create') }}" class="btn btn-primary">Add new User</a>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key=>$u)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$u->first_name}}</td>
                            <td>{{$u->last_name}}</td>
                            <td>{{$u->email}}</td>
                            <td>
                                <form action="{{ route('users.edit', ['user' => $u->id]) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-primary" />Edit</button>
                                </form>
                            </td>
                            <td>

                                <form action="{{ route('users.destroy', ['user' => $u->id]) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method("DELETE")

                                    <button type="submit" class="btn btn-danger" />Delete</button>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
