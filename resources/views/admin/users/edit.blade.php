@extends("admin.layout")

@section('admin.title') Edit User @endsection

@section("admin.content")

    <div id="content">


        <div class="container-fluid my-5">


            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
            </div>

            <div class="row">
                <div class="col-md-6">

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

                    @include('admin.users.form', ['action' => 'users.update'])

                </div>

            </div>



        </div>

@endsection
