@extends('layouts.guests.default')
@section('content')
<div class="row login-area">
    <div id="login-overlay" class="modal-dialog">
        <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Login to site.com</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-6 col-xs-12">
                  <div class="well">
                      <form method="POST" action="{{ url('/login') }}">
                      {{ csrf_field() }}                          
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="control-label">Email</label>
                              <input type="email" name="email" class="form-control" id="username"  value="{{ old('email') }}" placeholder="example@gmail.com">
                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="control-label">Password</label>
                              <input type="password" name="password" class="form-control" id="password">
                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif                                  
                          </div>
                          
                          <div class="checkbox">
                              <label>
                                 <input type="checkbox" name="remember"> Remember login
                              </label>
                              <p class="help-block">(if this is a private computer)</p>
                          </div>
                          <button type="submit" class="btn btn-success btn-block">Login</button>
                          
                      </form>
                  </div>
              </div>
              <div class="col-md-6 col-xs-12">
                  <p class="lead">Register now for <span class="text-success">FREE</span></p>
                  <ul class="list-unstyled" style="line-height: 2">
                      <li><span class="fa fa-check text-success"></span> See all your orders</li>
                      <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                      <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                      <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                      <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                      <li><a href="/read-more/"><u>Read more</u></a></li>
                  </ul>
                  <p><a href="{{ url('/register') }}" class="btn btn-info btn-block">Yes please, register now!</a></p>
              </div>
          </div>
      </div>
        </div>
    </div>
</div>
@endsection
