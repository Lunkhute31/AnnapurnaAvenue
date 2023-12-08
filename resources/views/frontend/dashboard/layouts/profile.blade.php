@extends('frontend.dashboard.layouts.master')
@section('dashbaord_content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <title>Annapurna Arcade </title>
  <link rel="icon" type="image/png" href="{{ asset('Frontend/assets/images/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/jquery.nice-number.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/jquery.calendar.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/add_row_custon.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/mobile_menu.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/jquery.exzoom.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/multiple-image-video.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/ranger_style.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/jquery.classycountdown.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/venobox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('Frontend/assets/css/responsive.css') }}">

</head>

<body>

  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content mt-2 mt-md-0">
            <h3>profile</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                <h4>basic information</h4>

                  <form action="{{route('user.profile.update')}}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="row">
                        <div class="col-xl-9">
                          <div class="row">
                            <div class="col-xl-6 col-md-6">
                              <div class="wsus__dash_pro_single">
                                <input type="text" placeholder="Name" name='name' value="{{Auth::user()->name}}">
                              </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                              <div class="wsus__dash_pro_single">
                                <input type="email" placeholder="Email" name='email' value="{{Auth::user()->email}}">
                              </div>
                            </div>
                          </div>
                        </div>
                    <div class="col-xl-12">
                      <button class="common_btn mb-4 mt-2" type="submit">Update</button>
                    </div>
                </form>
                    <div class="wsus__dash_pass_change mt-2">
                      <div class="row">
                        <div class="col-xl-4 col-md-6">
                          <div class="wsus__dash_pro_single">

                            <input type="password" placeholder="Current Password">
                          </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                          <div class="wsus__dash_pro_single">

                            <input type="password" placeholder="New Password">
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="wsus__dash_pro_single">
                            <input type="password" placeholder="Confirm Password">
                          </div>
                        </div>
                        <div class="col-xl-12">
                          <button class="common_btn" type="submit">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->


  <!--jquery library js-->
  <script src="js/jquery-3.6.0.min.js"></script>
  <!--bootstrap js-->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!--font-awesome js-->
  <script src="js/Font-Awesome.js"></script>
  <!--select2 js-->
  <script src="js/select2.min.js"></script>
  <!--slick slider js-->
  <script src="js/slick.min.js"></script>
  <!--simplyCountdown js-->
  <script src="js/simplyCountdown.js"></script>
  <!--product zoomer js-->
  <script src="js/jquery.exzoom.js"></script>
  <!--nice-number js-->
  <script src="js/jquery.nice-number.min.js"></script>
  <!--counter js-->
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.countup.min.js"></script>
  <!--add row js-->
  <script src="js/add_row_custon.js"></script>
  <!--multiple-image-video js-->
  <script src="js/multiple-image-video.js"></script>
  <!--sticky sidebar js-->
  <script src="js/sticky_sidebar.js"></script>
  <!--price ranger js-->
  <script src="js/ranger_jquery-ui.min.js"></script>
  <script src="js/ranger_slider.js"></script>
  <!--isotope js-->
  <script src="js/isotope.pkgd.min.js"></script>
  <!--venobox js-->
  <script src="js/venobox.min.js"></script>
  <!--classycountdown js-->
  <script src="js/jquery.classycountdown.js"></script>

  <!--main/custom js-->
  <script src="js/main.js"></script>
</body>

</html>
@endsection
