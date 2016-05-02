@extends('layouts.main')

@section('content')
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-up">
                <form action="{{ url('register') }}" method="POST">
                    {{ csrf_field() }}
                    <h3>Register Here</h3>
                    <p class="creating">Having hands on experience in creating innovative designs,I do offer design
                        solutions which harness.</p>
                    <h5>Personal Information</h5>
                    <div class=" sign-u{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <div class="sign-up1">
                            <h4>First Name* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input id="fname" type="text" name="first_name" value="{{ old('first_name') }}"/>
                            @if ($errors->has('first_name'))
                                <style>
                                    #fname{
                                        border: 1px solid #dd191d;
                                    }
                                </style>

                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <div class="sign-up1">
                            <h4>Last Name* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input id="lname" type="text" name="last_name" value="{{ old('last_name') }}"/>
                            @if ($errors->has('last_name'))
                                <style>
                                    #lname{
                                        border: 1px solid #dd191d;
                                    }
                                </style>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="sign-up1">
                            <h4>Email Address* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="email" name="email" value="{{ old('email') }}"/>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <h6>Login Information</h6>
                    <div class="sign-u{{ $errors->has('username') ? ' has-error' : '' }}">
                        <div class="sign-up1">
                            <h4>Username* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="username" value="{{ old('username') }}"/>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="sign-up1">
                            <h4>Password* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="password" name="password" value="{{ old('password') }}"/>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="sign-up1">
                            <h4>Confirm Password* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"/>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sub_home">
                        <div class="sub_home_left">
                            <input type="submit" name="btn-signup" value="Submit">
                        </div>
                        {{--<div class="sub_home_right">--}}
                        {{--</div>--}}
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
