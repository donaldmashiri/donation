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
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-widget">
                <div class="property-main">
                    <div class="property-wrap">
                        <figure class="post-media wow fadeIn">
                            <a href="{{ asset('images/dona1.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img style="height: 200px"  src="{{ asset('images/dona1.jpg') }}" alt="" class="img-responsive">
                        </figure>
                        <div class="item-body">
                            <h3>Donation</h3>
                            <div class="info">
                                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, cupiditate deleniti ducimus eveniet harum id, impedit laborum libero minus neque officiis perferendis quae quas qui quis sapiente sint vero.</span></p>
                            </div>
                            <div class="adderess">
                                <i class="fa fa-map-pin" aria-hidden="true"></i>
                                Gweru Mkoba
                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="pull-left">
								<span class="prop-user-agent">
									<i class="fa fa-user" aria-hidden="true"></i>
									john S.Allen
								</span>
                        </div>
                        <div class="pull-right">
								<span class="prop-date">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<a href="https://www.paynow.co.zw/user/login" type="submit" class="btn btn-danger">Donate</a>
								</span>
                        </div>
                    </div>
                </div>
            </div><!-- end service -->
        </div>

                     <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="service-widget">
                             <div class="property-main">
                                 <div class="property-wrap">
                                     <figure class="post-media wow fadeIn">
                                         <a href="{{ asset('images/dona2.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                         <img style="height: 200px" src="{{ asset('images/dona2.jpg') }}" alt="" class="img-responsive">
                                     </figure>
                                     <div class="item-body">
                                         <h3>Orphanage</h3>
                                         <div class="info">
                                             <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, cupiditate deleniti ducimus eveniet harum id, impedit laborum libero minus neque officiis perferendis quae quas qui quis sapiente sint vero.</span></p>
                                         </div>
                                         <div class="adderess">
                                             <i class="fa fa-map-pin" aria-hidden="true"></i>
                                             Gweru Mkoba
                                         </div>
                                     </div>
                                 </div>
                                 <div class="item-foot">
                                     <div class="pull-left">
								<span class="prop-user-agent">
									<i class="fa fa-user" aria-hidden="true"></i>
									john S.Allen
								</span>
                                     </div>
                                     <div class="pull-right">
								<span class="prop-date">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<a href="https://www.paynow.co.zw/user/login" type="submit" class="btn btn-danger">Donate</a>
								</span>
                                     </div>
                                 </div>
                             </div>
                         </div><!-- end service -->
                     </div>

                     <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="service-widget">
                             <div class="property-main">
                                 <div class="property-wrap">
                                     <figure class="post-media wow fadeIn">
                                         <a href="{{ asset('images/dona3.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                         <img style="height: 200px" src="{{ asset('images/dona3.jpg') }}" alt="" class="img-responsive">
                                     </figure>
                                     <div class="item-body">
                                         <h3>Fees</h3>
                                         <div class="info">
                                             <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, cupiditate deleniti ducimus eveniet harum id, impedit laborum libero minus neque officiis perferendis quae quas qui quis sapiente sint vero.</span></p>
                                         </div>
                                         <div class="adderess">
                                             <i class="fa fa-map-pin" aria-hidden="true"></i>
                                             Gweru Mkoba
                                         </div>
                                     </div>
                                 </div>
                                 <div class="item-foot">
                                     <div class="pull-left">
								<span class="prop-user-agent">
									<i class="fa fa-user" aria-hidden="true"></i>
									john S.Allen
								</span>
                                     </div>
                                     <div class="pull-right">
								<span class="prop-date">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<a href="https://www.paynow.co.zw/user/login" type="submit" class="btn btn-danger">Donate</a>
								</span>
                                     </div>
                                 </div>
                             </div>
                         </div><!-- end service -->
                     </div>

    </div><!-- end row -->
            </div>
        </div>

    </div>
@endsection








