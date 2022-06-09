@extends("frontend.layout")

@section("title") Speed | Home @endsection
@section("keyword") Home,bike,users @endsection
@section("description") Welcome to speed,we sell bikes @endsection

@section("content")
    <!-- about section start -->
    <div class="container-fluid">
        <div class="about_section">
            <div class="container">
                <div class="about_img"><img src="{{asset("assets/images/about-img1.png")}}" style="max-width: 100%;"></div>
                <h2 class="about_text"><strong>About <span style="color: #000;">Us</span></strong></h2>
                <div class="about_middle">
                    <p class="about_lorem">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
                </div>
                <div class="red_bt">
                    <form action="{{route("products")}}" method="GET">
                        <button class="read_more">Shop</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- Testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            <h1 class="contact_text"><strong>Testimonial</strong></h1>
            <p class="dolore_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna  </p>
            <div class="images_3"><img src="{{asset("assets/images/img-3.png")}}"></div>
            <h2 class="rooty_text">Rooty</h2>
            <p class="ice_text">(lcc)</p>
            <div><img src="{{asset("assets/images/left-quote.png")}}"></div>
            <p class="dolore_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  , quis nostrud exercitation </p>
            <div class="right_quote"><img src="{{asset("assets/images/right-quote.png")}}"></div>
        </div>
    </div>

    <!-- Testimonial section end -->
@endsection
