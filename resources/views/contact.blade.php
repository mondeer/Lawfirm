@extends('dash.index')

@section('content')
<div class="contact_contant sections">
    <div class="head_title text-center">
        <h2 style="color: white;">kEEP IN TOUCH</h2>
        <div class="subtitle" style="color: white;">
          Book an appointment with Kalya & CO advocates and we will get back to you.
        </div>
        <div class="separator"></div>
    </div><!-- End off Head_title -->
    <div class="row">
        <div class="col-sm-6">
            <div class="main_contact_info">
                <div class="row">
                    <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                        <div class="col-sm-12">
                            <div class="single_contact_info">
                                <div class="single_info_text">
                                    <h3>OUR ADDRESS</h3>
                                    <h4> <b>1. Eldoret Office</b> <br>
                                      2nd Floor, Sakong House
                                      Kenyatta Street
                                      P. O. Box 235-30100
                                      ELDORET.
                                      Tel: 0532063317/2061239
                                      kalya@kalyacounsel.co.ke
                                      www.kalyacounsel.co.ke <hr>
                                        <b>2. Nairobi Office</b> <hr>
                                        Lange Lange Flats, Suite number 9, <br>
                                        Between Heron Court Hotel & Middle East Bank,
                                        Milimani Road, <br>
                                        P. O. Box 100032-000101 <br>
                                        GPO NAIROBI.
                                        Cell: 020-8020887/0714 491 413
                                        kalya@kalyacounsel.co.ke
                                        www.kalyacounsel.co.ke <hr>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">

          <h3 style="color: 222;">Contact US</h3>
            <div class="single_contant_left padding-top-90 padding-bottom-90">

                <form class="form-horizontal" action="/kalyacontact" method="post">
                    <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
                      {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="First Name" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mobile" placeholder="+2547......." required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group">
                          <div class="subscribe-form margin-top-20">
                              <button class="load-more-button" type="submit">Submit</button>
                          </div> <br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
