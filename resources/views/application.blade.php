@extends('layouts.header')

@section('content')
    <div class="about-box">

        <div id="support" class="section wb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Request for Help</h3>
                    <p class="lead">
                        Allow us to extend a helping hand. We understand that everyone faces challenges and hardships at some point in their lives. We are here to offer our support and assistance to make things a little easier for you. </p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact_form">
                            <div id="message"></div>
                            <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                                <fieldset class="row-fluid">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Full Names">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label class="sr-only">Type of Application</label>
                                        <select name="select_price" id="select_price" class="selectpicker form-control" >
                                            <option value="$100 - $2000">Select</option>
                                            <option value="$100 - $2000">Fees</option>
                                            <option value="$2000 - $4000">Business</option>
                                            <option value="$4000 - $10000">Orphanage</option>
                                            <option value="$4000 - $10000">Donation</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <label>Upload Picture Or Video</label>
                                        <input type="file" name="first_name1" id="first_name1" class="form-control" placeholder="Picture 1:">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit Application</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

    </div>
@endsection








