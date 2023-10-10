@extends('frontend.layouts.layout-page')

@section('title', 'Contact Us')

@section('style')

    <link rel="stylesheet" href="/css/contact-us.min.css">

@endsection

@section('content')

    <div class="contact-us">

        <div class="col-text-top">

            <h1>{{$main_content->title}}</h1>

            <h2>{{$main_content->description}}</h2>

        </div>

        <div class="detail-contact">

            <div class="col-left">

                <form action="">

                    <div class="form-group">

                        <label>Your Name <span style="color: red">*</span></label>

                        <input class="form-control" name="name">

                    </div>

                    <div class="form-group">

                        <label>Your Email <span style="color: red">*</span></label>

                        <input type="email" class="form-control" name="email">

                    </div>

                    <div class="form-group">

                        <label>Phone <span style="color: red">*</span></label>

                        <input class="form-control number" name="phone">

                    </div>

                    <div class="form-group">

                        <label>Massage <span style="color: red">*</span></label>

                        <textarea name="message" id="" cols="30" rows="10"></textarea>

                    </div>

                    <div class="btn">

                        <button type="button" id="btnSend" class="btn-primary">Send</button>

                    </div>

                </form>

            </div>

            <div class="col-right">

                <h3>Address</h3>

                <p>

                    <span>

                        {{$web_info->location->address->value}}

                        {{$web_info->location->district->value}},

                        {{$web_info->location->zipcode->value}}

                        {{$web_info->location->province->value}}

                    </span>

                </p>

                <p>Phone: <span>{{ $web_info->contact->phone->value }}</span></p>

                <p>Email: <span>{{ $web_info->contact->email->value }}</span></p>

                <p>Opening time: <span>{{$web_info->location->working_hours->value}}</span></p>

                <div class="column-social">

                    <a href="{{$web_info->contact->link_facebook->link}}" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>

                    <a href="{{$web_info->contact->link_instagram->link}}" target="_blank"><i class="fa-brands fa-square-instagram"></i></i></a>

                    <a href="{{$web_info->contact->link_twitter->link}}" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('script')

    <script src="/js/contactus.js"></script>

@endsection

