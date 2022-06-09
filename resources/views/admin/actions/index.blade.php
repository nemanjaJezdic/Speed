@extends("admin.layout")

@section('admin.title') Admin | UsersActions @endsection

@section("admin.content")
    <div class="panel panel-default">
        <div class="panel-heading">
            User Actions
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
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>User</th>
                        <th>User Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($actions as $key=>$a)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$a->action}}</td>
                            <td>{{$a->user->first_name . ' ' . $a->user->last_name}}</td>
                            <td>{{$a->user->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
