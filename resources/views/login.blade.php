@extends('master')
@section('content')
<img class="logo" src="{{config('view.public')}}/images/logo.png">

    <div class="containerw3layouts-agileits">

        <div class="w3imageaits">
     
            <div class="padding">
                <div class="title">Sing in</div>
                      
@if ($errors->any() )
@if (! old('name') )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif
@endif
                <form action="/sing-in" method="post">
                      {{ csrf_field() }}
                    <div class="mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" Name="email" placeholder="Email" required="">
                    </div>
                    <div class="password">
                        <i class="fa fa-unlock" aria-hidden="true"></i>
                        <input type="password" Name="password" placeholder="Password" required="">
                    </div>
                    
                        <input type="submit" style="background-color: rgba(169, 38, 39) !important" value="Log In">
                   
                </form>
            </div>
        </div>
        <div class="w3imageaits div-Sing-Up">
            <div class="padding">
                <div class="title">Sing Up</div>
                <div class=" font-text">If you don't have an account, click the button below to register.</div>
                <a class="w3_play_icon1" href="#small-dialog1">
                    <div class="send-button wthree agileits ">
                        Sign Up
                    </div>
                </a>
            </div>
        </div>

        <div class="clear"></div>

    </div>


    <!-- for register popup -->
    <div id="small-dialog1" class="mfp-hide">
        <div class="contact-form1">
            <div class="contact-w3-agileits w3layouts">
                <div class="title" style="text-align:left;">Sign Up Form</div>
                @if ($errors->any())
                     @if ( old('name') )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif
                @endif
                <form action="/register" method="post">
                     {{ csrf_field() }}
                    <div class="user">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" Name="name" placeholder="Your Name" required="" value="{{ old('name') }}">
                    </div>
                    <div class="mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" Name="email" placeholder="Email" required="" value="{{ old('email') }}">
                    </div>
                    <div class="password psw1">
                        <i class="fa fa-unlock" aria-hidden="true"></i>
                        <input type="password" Name="password" placeholder="Password" minlength="6" required="" value="{{ old('password') }}">
                    </div>
                    <div class="password">
                        <i class="fa fa-unlock" aria-hidden="true"></i>
                        <input type="password" Name="password_confirmation" minlength="6" placeholder="Confirm Password" required="" value="{{ old('password_confirmation') }}">
                    </div>
                    
                        <input style="margin-left: -25px;" type="submit" value="Sign up">
                    
                </form>
            </div>
        </div>
    </div>
    <!-- //for register popup -->
  
       
@stop   