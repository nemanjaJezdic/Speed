@extends("frontend.layout")

@section("title") Speed | Login @endsection
@section("keyword") Login,bike,users @endsection
@section("description") Log in here @endsection

@section("content")
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text"><strong>Log in</strong></h1>
        </div>
        <div class="contact_main">
            <div class="enput_section">
                <div class="email_box">
                    <div class="input_main">
                        <div class="container">

                            @if(session('loginFail'))

                                <div class="alert alert-danger" role="alert">
                                    {{ session('loginFail') }}
                                </div>

                            @endif

                            <form action="{{route("login")}}" method="POST">
                                @csrf
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
