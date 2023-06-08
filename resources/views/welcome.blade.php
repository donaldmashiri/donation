@extends('layouts.header')

@section('content')
    <div class="about-box">
        <div class="container">
            <div class="row">

            </div>

            <hr class="hr1">

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{ asset('images/gofund1.jpg') }}" alt="" class="img-responsive">
                    </div><!-- end media -->
                </div>
                <div class="col-md-6">
                    <div class="message-box right-ab">
                        <h2>Welcome to GO FUND ME DONATION</h2>
                        <p>Welcome to Go FundMe, where we are dedicated to assisting individuals with their various needs. We understand that life can present unexpected challenges, and our platform is here to provide support and help you overcome those obstacles. Whether you're facing medical expenses, educational pursuits, community projects, or personal emergencies, Go FundMe is committed to empowering individuals like you. Our community of donors and supporters are ready to rally behind your cause, providing financial assistance, spreading awareness, and offering words of encouragement. Together, let's navigate through these difficult times and make a positive impact in each other's lives. </p>
                        <a href="{{ route('applications.create') }}" class="btn btn-light btn-radius grd1 btn-brd">Apply</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection








