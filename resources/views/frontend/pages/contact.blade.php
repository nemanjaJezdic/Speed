@extends("frontend.layout")

@section("title") Speed | Contact @endsection
@section("keyword") Contact us,bike,users @endsection
@section("description") This is our contact form,feel free to call us @endsection

@section("content")
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text"><strong>Contact Us</strong></h1>
        </div>
        <div class="contact_main">
            <div class="enput_section">
                <div class="email_box">
                    <div class="input_main">
                        <div class="container">
                            <form action="{{route("contact")}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Phone Numbar" name="number">
                                </div>

                                <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="msg"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="send_btn">
                            <button type="submit" class="main_bt">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
