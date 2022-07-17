{{--@extends('dashboard')--}}

{{--@section('content')--}}
{{--    <main class="login-form">--}}
{{--        <div class="cotainer">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="card">--}}
{{--                        <h3 class="card-header text-center">Login</h3>--}}
{{--                        <div class="card-body">--}}
{{--                            <form method="POST" action="{{route('login_dashboard') }}">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group mb-3">--}}
{{--                                    <input type="text" placeholder="Email" id="email" class="form-control" name="admin_email" required--}}
{{--                                           autofocus>--}}
{{--                                    @if ($errors->has('email'))--}}
{{--                                        <span class="text-danger">{{ $errors->first('email') }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-3">--}}
{{--                                    <input type="password" placeholder="Password" id="password" class="form-control" name="admin_password" required>--}}
{{--                                    @if ($errors->has('password'))--}}
{{--                                        <span class="text-danger">{{ $errors->first('password') }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-3">--}}
{{--                                    <div class="checkbox">--}}
{{--                                        <label>--}}
{{--                                            <input type="checkbox" name="remember"> Remember Me--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="d-grid mx-auto">--}}
{{--                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                                    <br>--}}
{{--                                    <?php--}}
{{--                                    $message = Session::get('message');--}}
{{--                                    if ($message){--}}
{{--                                        echo '<span class = "text-alert" style="color: red; font-size:18px;">'.$message.'</span>';--}}
{{--                                        Session::put('message', null);--}}
{{--                                    }--}}
{{--                                    ?>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </main>--}}
{{--@endsection--}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Template</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{url("loginadmin/registration.css")}}">
</head>

<body>
<div class="registration">
    <div class="registration__area">
        <div class="heading">
            <h3 class="heading__primary">Welcome</h3>
            <h4 class="heading__secondary">Good Morning! Let’s make this day beautiful.</h4>
        </div>

        <div class="form">
            <form class="form--sign-in" action="{{route('login_dashboard') }}" method="POST">
                {{csrf_field()}}
                @csrf
                <div class="form__input">
                    <label for="email" class="form__label">Email</label>
                    <input type="email" class="log-email" id="email" name="admin_email" placeholder="abc@gmail.com">
                </div>
                <div class="form__input">
                    <label for="password" class="form__label">Password</label>
                    <input type="password" class="log-pass" id="password" name="admin_password"
                           placeholder="Enter your passwordloginadmin">
                    <div class="showhide">
                        <img src="{{url("loginadmin/img/icons/show.png")}}" alt="" class="show">
                        <img src="{{url("loginadmin/img/icons/hide.png")}}" alt="" class="hide">
                    </div>
                </div>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo '<span class = "text-alert" style="color: red; font-size:14px; margin-left: -120px;">'.$message.'</span>';
                    Session::put('message', null);
                }
                ?>

                <div class="registration__forgot" style="padding-top:20px ">
                    <span>Forgot password ?</span>
                </div>
                <div class="d-grid mx-auto">
                    <button class="btn btn--sign-in btn btn-dark btn-block" type="submit" name="login_user">Sign in</button>
                    <button class="btn btn--sign-up" type="submit">Sign up</button>
                </div>
                <div class="or">OR</div>
            </form>
        </div>
        <div class="media">
            <ul class="media__lists">
                <li class="media__item"><img class="media__item--fb" src="{{url("loginadmin/img/media/facebook.png")}}" alt="">
                    <span>Facebook</span>
                </li>
                <li class="media__item"><img class="media__item--gg" src="{{url("loginadmin/img/media/google.png")}}" alt="">
                    <span>Google</span>
                </li>
                <li class="media__item"><img class="media__item--ig" src="{{url("loginadmin/img/media/instagram.png")}}" alt="">
                    <span>Instagram</span>
                </li>
            </ul>
        </div>

        <!-- Auto modify year copyright -->
        <div class="registration__copyright">© zcodev | <?php echo date("Y") ?></div>
    </div>
    <div class="registration__images">
        <img src="{{url("loginadmin/img/login-1.png")}}" alt="banner image">
    </div>
    <button class="icon btn--close"><img src="{{url("loginadmin/img/icons/close.png")}}" alt=""></button>


    <!-- ============================ ======== ============================ -->
    <!--                              REGISTER                              -->
    <!-- ============================ ======== ============================ -->
    <div class="form">
        <form autocomplete="off" class="form--sign-up" method="POST" action="{{url("loginadmin/registration/registration.php")}}">
            <button class="icon btn--return"><img src="{{url("loginadmin/img/icons/back.png")}}" alt=""></button>
            <h3>PERSONAL DETAILS <img src="{{url("loginadmin/img/icons/problem.png")}}" alt=""></h3>
            <div class="form__input--double">
                <div class="form__input">
                    <label for="fullname" class="form__label">Full Name</label>
                    <input type="text" class="res-name" name="fullname" value=""
                           placeholder="e.g. Roxk Axz" required>
                </div>
                <div class="form__input">
                    <label for="address" class="form__label">Address</label>
                    <input type="text" class="res-address" name="address" value=""
                           placeholder="e.g. 12 street, Nera, Asvi city" required>
                </div>
            </div>
            <div class="form__input--double">
                <div class="form__input">
                    <label for="email" class="form__label">Email</label>
                    <input type="email" class="res-email" name="email" value=""
                           placeholder="e.g. abc@gmail.com" required>
                    <div class="error error--invalid">Invalid Email</div>
                    <div class="error error--exist">Email already exists</div>
                    <div class="icon icon--check">
                        <img src="{{url("loginadmin/icons/checked.png")}}" alt="">
                    </div>
                    <div class="icon icon--close">
                        <img src="{{url("loginadmin/icons/cancel.png")}}" alt="">
                    </div>
                </div>
                <div class="form__input">
                    <label for="phone" class="form__label">Mobile Number</label>
                    <input type="text" class="res-phone" name="phone" value=""
                           placeholder="e.g. 098 213 4567" required>
                    <div class="error error--exist"></div>
                    <div class="error error--invalid">Invalid Phone number</div>
                    <div class="icon icon--check">
                        <img src="{{url("loginadmin/icons/checked.png")}}" alt="">
                    </div>
                    <div class="icon icon--close">
                        <img src="{{url("loginadmin/icons/cancel.png")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="form__input--double">
                <div class="form__input">
                    <label for="password" class="form__label">Password</label>
                    <input type="password" class="res-pass" name="pass1" placeholder="Enter your password" required>
                    <div class="error error--exist">Password already exists</div>
                    <div class="showhide">
                        <img src="{{url("loginadmin/img/icons/show.png")}}" alt="" class="show">
                        <img src="{{url("loginadmin/img/icons/hide.png")}}" alt="" class="hide">
                    </div>
                    <div class="icon icon--check">
                        <img src="{{url("loginadmin/icons/checked.png")}}" alt="">
                    </div>
                    <div class="icon icon--close">
                        <img src="{{url("loginadmin/icons/cancel.png")}}" alt="">
                    </div>
                </div>
                <div class="form__input">
                    <label for="confirm" class="form__label">Confirm</label>
                    <input type="password" class="res-confirm" name="pass2" id="confirm"
                           placeholder="Confirm password" required>
                    <div class="error error--exist">Password does not match</div>

                    <div class="icon icon--check">
                        <img src="{{url("loginadmin/icons/checked.png")}}" alt="">
                    </div>
                    <div class="icon icon--close">
                        <img src="{{url("loginadmin/icons/cancel.png")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="form--sign-up__checkbox">
                <input type="checkbox" name="check" class="res-check" required>
                <span>I have read, understood and agree our term & condition</span>
                <div class="error">Please read our term & condition and re-check</div>
            </div>
            <button class="btn btn--register" type="submit" name="register_user">Create Account</button>
        </form>
    </div>

</div>
<div class="overlay hidden"></div>
<script src="{{url("loginadmin/registration.js")}}"></script>
</body>

</html>
