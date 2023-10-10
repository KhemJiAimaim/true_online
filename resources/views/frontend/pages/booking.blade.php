@extends('frontend.layouts.layout-page')
@section('title', 'Book')
@section('style')
    <link rel="stylesheet" href="/css/booking.min.css">
@endsection
@section('content')
    <div class="booking">
        <div class="text-top">
            <h1>{{$main_content->title}}</h1>
            <h2>{{$main_content->description}}</h2>
        </div>
        <div class="col-form" style="margin-top: 2rem">
            <form action="">
                <div class="form-group-column">
                    <div class="form-group">
                        <label>First name <span style="color: red">*</span></label>
                        <input class="form-control" name="firstname" placeholder="firstname">
                    </div>
                    <div class="form-group">
                        <label>Surname <span style="color: red">*</span></label>
                        <input class="form-control" name="surname" placeholder="surname">
                    </div>
                </div>
                <div class="form-group-column">
                    <div class="form-group">
                        <label>Enter Your Email <span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label>Phone number <span style="color: red">*</span></label>
                        <input class="form-control number" name="phone" placeholder="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label>Specific requests</label>
                    <textarea cols="30" rows="10" name="requests"></textarea>
                </div>
            </form>
            <div class="col-date-time">
                @if(isset($booking_setting->disable_by_date))
                    <input type="hidden" id="disable_by_date" value="{{$booking_setting->disable_by_date}}">
                @endif
                @if(isset($booking_setting->disable_by_day))
                    <input type="hidden" id="disable_by_day" value="{{$booking_setting->disable_by_day}}">
                @endif
                @if(isset($booking_setting->special_holiday))
                    <input type="hidden" id="special_holiday" value="{{$booking_setting->special_holiday}}">
                @endif
                <div class="col-left">
                    <div class="text-top">
                        <img src="/icons/akar-icons_calendar.png" alt="calendar">
                        <p>Select Date</p>
                    </div>
                    <div class="calendar"></div>
                </div>
                <div class="col-right">
                    <div class="col-text-top">
                        <img src="/icons/icon-park-outline_time.png" alt="time">
                        <p>Select Time</p>
                    </div>
                    <div class="col-time">
                        @if(isset($booking_setting->available_time))
                            @foreach(explode(',', $booking_setting->available_time) as $key=>$time)
                                @if($time !== '')
                                    <div class="time" onclick="selectTime(this)" data-time="{{$time}}">{{$time}}</div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="col-text-top">
                        <img src="/icons/humbleicons_users.png" alt="users">
                        <p>Number of People</p>
                    </div>
                    <div class="col-number">
                        @if(isset($booking_setting->people_number))
                            @for($i = 1; $i <= $booking_setting->people_number; $i++)
                                <div class="number {{$i == 1?'active':''}}" onclick="selectPeople(this)" data-people="{{$i}}">{{$i}}</div>
                            @endfor
                        @endif
                    </div>
                    <div class="col-request">
                        <p>Request for a group</p>
                        <input type="text" class="form-control" name="forgroup">
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="accept_term" name="accept_term">
                <label for="vehicle1">{{$main_content->freetag}}</label>
            </div>
            <div class="btn">
                <button id="btn_booking">Book</button>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/calendar.js"></script>
    <script src="/js/book.js"></script>
@endsection
