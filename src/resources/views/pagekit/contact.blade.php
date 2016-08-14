@extends('page::page-layouts.main-page')
@section('content')
    <div class="container">
        <div class="row" data-aos="zomm-in">

            <div class="col-md-6">
                <h3>Contact Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloribus explicabo, id ipsa iure
                    optio pariatur
                    praesentium qui quos similique sit totam voluptate, voluptatum! Accusantium dignissimos dolore omnis
                    quae quasi,
                    suscipit velit voluptates. Quisquam, reprehenderit?</p>

                <p>Aut culpa cum, debitis molestias neque voluptates!
                    Iusto, magni, odio? Assumenda ducimus explicabo id inventore natus nihil nostrum officiis quos.
                    Assumenda
                    excepturi impedit minus mollitia nam, qui, quo rem reprehenderit repudiandae similique soluta sunt,
                    voluptatibus?</p>
            </div>
            <div class="col-md-6">
                <h3>Email</h3>
                <form id="contact-form" action="/">
                    {{ csrf_field() }}
                    <p>
                        <label for="full_name">Your Name</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Enter your name">
                    </p>
                    <p>
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address">
                    </p>
                    <p>
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </p>
                    <p>
                        <label for="subject">Message</label>
                        <textarea name="message" id="subject" cols="30" rows="10" class="form-control"></textarea>
                    </p>
                    <p>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </p>

                </form>

            </div>


        </div>
    </div>
@endsection
