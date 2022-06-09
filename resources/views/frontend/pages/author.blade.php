@extends("frontend.layout")

@section("title") Speed | Author @endsection
@section("keyword") Author,bike,users @endsection
@section("description") This is author page @endsection

@section("content")
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text"><strong>Author</strong></h1>

            <div id="author-page" class="container">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12 ">

                            <div class="text-center author-container">
                                <img src="{{asset("assets/images/author.jpg")}}" alt="author"/>
                                <p>
                                    I would describe myself as positive hard working person that's ready for new challenges.
                                    So far i'm skilled in HTML,CSS,Bootstrap,C,Java,C#,JavaScript,Jquery,AJAX and i'm also trying to improve by learing new technologies.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div><

        </div>
@endsection
