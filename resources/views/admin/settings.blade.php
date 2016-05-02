@extends('layouts.main')

@section('content')
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-up">
                <form action="{{ url('settings/user/'.$user->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <h3>Register Here</h3>
                    <p class="creating">Having hands on experience in creating innovative designs,I do offer design
                        solutions which harness.</p>
                    <h5>Personal Information</h5>
                    <div class=" sign-u{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <div class="sign-up1">
                            <h4>First Name* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input id="fname" type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}"/>
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
                            <input id="lname" type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}"/>
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
                            <input type="email" name="email" value="{{ old('email', $user->email) }}"/>
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
                            <input type="text" name="username" value="{{ old('username', $user->username) }}"/>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u{{ $errors->has('oldPassword') ? ' has-error' : '' }}">
                        <div class="sign-up1">
                            <h4>Old Password* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="password" name="oldPassword"/>
                            @if ($errors->has('oldPassword'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('oldPassword') }}</strong>
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
    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">Tes</h3>
            <div class="panel-body1">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-envelope-o"></i>
						</span>
                                <input type="text" class="form-control1" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-key"></i>
						</span>
                                <input type="password" class="form-control1" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
