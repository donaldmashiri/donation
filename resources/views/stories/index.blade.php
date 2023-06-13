@extends('layouts.header')

@section('content')
    <div class="about-box">
        <div id="support" class="section wb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Stories for The Need</h3>
                    <p class="lead">
                        Allow us to extend a helping hand. We understand that everyone faces challenges and hardships at some point in their lives. We are here to offer our support and assistance to make things a little easier for you. </p>
                </div><!-- end title -->

                 <div class="row mt-5">

                     @if($applications->count() > 0)

                     @foreach($applications as $apply)
                         <div class="col-md-4 col-sm-6 col-xs-12">
                             <div class="service-widget">
                                 <div class="property-main">
                                     <div class="property-wrap">
                                         <figure class="post-media wow fadeIn">
{{--                                             <img src="{{ asset('storage/' . $apply->image) }}" alt="" width="100" height="60">--}}
                                             <a href="{{ asset('storage/' . $apply->image) }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                             <img style="height: 200px" src="{{ asset('storage/' . $apply->image) }}" alt="" class="img-responsive">
                                         </figure>
                                         <div class="item-body">
                                             <h3>{{ $apply->app_type }}</h3>
                                             <div class="info">
                                                 <p><span>{{ $apply->comments }}</span></p>
                                             </div>
                                             <div class="adderess">
                                                 <i class="fa fa-map-pin" aria-hidden="true"></i>
                                                 <h4 class="fw-bolder">${{ $apply->amount }}</h4>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="item-foot">
                                         <div class="pull-left">
								<span class="prop-user-agent">
									<i class="fa fa-user" aria-hidden="true"></i>
									{{ $apply->full_names }}
								</span>
                                         </div>
                                         <div class="pull-right">
								<span class="prop-date">
									<i class="fa fa-calendar" aria-hidden="true"></i>
{{--                                    <form action="{{ route('stories.index') }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <button type="submit" class="btn btn-primary">Donate</button>--}}
{{--                                    </form>--}}
{{--									<a href="https://www.paynow.co.zw/user/login" type="submit" class="btn btn-danger">Donate</a>--}}
									<a href="https://www.paynow.co.zw/Payment/Link/?q=c2VhcmNoPWRvbmFsZHRvbmRlbWFzaGlyaSU0MGdtYWlsLmNvbSZhbW91bnQ9MC4xMCZyZWZlcmVuY2U9RG9uYXRlKytDcm93ZEZ1bmRpbmcmbD0x" type="submit" class="btn btn-danger">Donate</a>
								</span>
                                         </div>
                                     </div>
                                 </div>
                             </div><!-- end service -->
                         </div>
                     @endforeach
                     @else
                         <h1 class="text-center alert alert-danger">No Applications Approved</h1>
                     @endif


    </div><!-- end row -->
            </div>
        </div>

    </div>
@endsection








