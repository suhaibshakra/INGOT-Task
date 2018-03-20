@extends('master')

@section('content')
<style>
    body{
        background-color:#fff !important;
       
    }
     body:after {
            background: #fff !important;
        }
</style>
           <div class="contact-form1" style="width: 100%;position: absolute;padding: 15px;">
            <div class="contact-w3-agileits w3layouts form_edit">
                <img class="logo" src="{{config('view.public')}}/images/logo-2.png">
                <div class="title" style="text-align:left;">Edit Information</div>
                 <p style="color:red;font-size:18px;text-align: left;width: 100%;">* You can not change your email </p>
                @if ($errors->any())
                   
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  
                @endif
                <form action="/user_update_info" method="post">
                     {{ csrf_field() }}
                    <div class="user">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" Name="name" placeholder="Your Name" required="" value="{{ old('name',auth()->user()->name) }}">
                    </div>
                    <div class="mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" Name="email" placeholder="Email" required="" readonly value="{{ old('email',auth()->user()->email) }}">
                      
                    </div>
                     
                    <div class="password psw1">
                        <i class="fa fa-unlock" aria-hidden="true"></i>
                        <input type="password" Name="password" placeholder="Password" minlength="6" required="" value="{{ old('password') }}">
                    </div>
                    <div class="password">
                        <i class="fa fa-unlock" aria-hidden="true"></i>
                        <input type="password" Name="password_confirmation" minlength="6" placeholder="Confirm Password" required="" value="{{ old('password_confirmation') }}">
                    </div>
                   
                        <input type="submit"  class="submitbutton" value="Edit">
                  
                    <a href="/logout" class="">
                    <div class="send-button wthree agileits logoutButton">
                        logout
                    </div>
                </a>
                
                </form>
            </div>
        </div>
       
@stop   