@extends("frontend.layout")

@section("title") Speed | Register @endsection
@section("keyword") Register,bike,users @endsection
@section("description") Register here @endsection

@section("content")
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text"><strong>Register</strong></h1>
        </div>
        <div class="contact_main">
            <div class="enput_section">
                <div class="email_box">
                    <div class="input_main">
                        <div class="container">
                            @if(session('registerError'))

                                <div class="alert alert-danger" role="alert">
                                    {{ session('registerError') }}
                                </div>

                            @endif

                            @if(session('registerSuccess'))

                                <div class="alert alert-success" role="alert">
                                    {{ session('registerSuccess') }}
                                </div>

                            @endif
                            <form action="{{route("register")}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="email-bt  @error('first_name') border border-danger @enderror" placeholder="Name" name="first_name" id="first_name">
                                    @error('first_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt @error('last_name') border border-danger @enderror" placeholder="Surname" name="last_name" id="last_name">
                                    @error('last_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="email-bt @error('email') border border-danger @enderror" placeholder="Email" name="email" id="email">
                                    @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="email-bt @error('password') border border-danger @enderror" placeholder="Password" name="password" id="password">
                                    @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="send_btn">
                                    <button type="submit" class="main_bt">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
