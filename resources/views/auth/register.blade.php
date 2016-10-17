@extends('layouts.guests.default')

@section('content')
<div class="registration-area">
    <div class="row plans">
        <div id="price">
            <div class="col-md-4">
        @if($plan->slug == "life-time" )
        <div class="plan basic">
        @elseif($plan->slug == "premiumum" )
        <div class="plan standard">
        @else
        <div class="plan ultimite">
        @endif         
            <div class="plan-inner">
                <div class="entry-title">
                    <h3>
                        {{ $plan->name }}
                    </h3>
                    <div class="price">
                        {{ $plan->price }}<span>/{{ $plan->duration }}</span>
                    </div>
                </div>
                <div class="entry-content">
                    <ul>
                        <li>
                            <strong>{{ $plan->business }}</strong> listings
                        </li>
                        <li>
                            <strong>{{ $plan->category }}</strong> categories
                        </li>
                        <li>
                            <strong>{{ $plan->keyword }}</strong> keywords
                        </li>
                        <li>
                            <strong>{{ $plan->photo }}</strong> photos
                        </li>
                        <li>
                            <?php 
                                if($plan->slug == "free") {
                                    echo "Excluded from search"; 
                                } else { 
                                    echo "Included in search"; 
                                }
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="btn">
                    <a href="#">Selected</a>
                </div>
            </div>
        </div>
            </div>
        </div>    
        <div class="col-md-8">
            <div class="page-header">
                <h2>Business Account Registration</h2>
                <p>Please fill out the fields below to create your
                account. We will send your account information to
                the email address you enter. Your email address and
                information will NOT be sold or shared with any 3rd
                party. If you already have an account, please,
                click here.</p>
                <h4>CONTACT INFORMATION</h4>
            </div>
            <form class="user-registration" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label for="first_name" class="control-label">First Name</label>
                            <input name="first_name" type="text" class="form-control" id="first_name" value="{{ old('first_name') }}" placeholder="First Name">

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif                                    
                    </div>
                    <div class="col-md-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label for="last_name" class="control-label">Last Name</label>
                        <input name="last_name" type="text" class="form-control" id="last_name" value="{{ old('last_name') }}" placeholder="Last Name" >
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif                                     
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="control-label">Username</label>
                        <input name="username" type="text" class="form-control" id="username" value="{{ old('username') }}" placeholder="Username">
                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif                                     
                    </div>
                    <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif                                     
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>
                        <input name="password"  type="password" class="form-control" id="password" value="{{ old('password') }}" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif                                      
                    </div>
                    <div class="col-md-6 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password_confirmation" class="control-label">Retype Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Retype Password">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif                                     
                    </div>
                </div>
                <p></p>
                <h5><em>
                Business Plan: {{ $plan->name }}
                <input type="hidden" name="plan" value="{{ $plan->slug }}">
                </em></h5>
                <p></p>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
