@extends('layouts.admins.access')
@section('content')
<div class="login-container" style="padding-top: 50px; margin-top: 50px;">
  <div class="center">
    <h4 class="blue" id="id-company-text">&copy; Niramoy Business Directory</h4>
  </div>             

  <div class="position-relative">
    <div id="login-box" class="login-box visible widget-box no-border">
      <div class="widget-body">
        <div class="widget-main">
          <h4 class="header blue lighter bigger">
            <i class=""></i>
            Please Enter Your Information
          </h4>

          <div class="space-6"></div>

          <form method="POST" action="{{ url('/control/login') }}">
          {{ csrf_field() }}      
            <fieldset>
              <label class="block clearfix">
                <span class="block input-icon input-icon-right">
                  <input type="email" name="email" class="form-control" id="username"  value="{{ old('email') }}" placeholder="example@gmail.com">
                  <i class="ace-icon fa fa-user"></i>
                </span>
              </label>

              <label class="block clearfix">
                <span class="block input-icon input-icon-right">
                  <input type="password" name="password" class="form-control" id="password">
                  <i class="ace-icon fa fa-lock"></i>
                </span>
              </label>

              <div class="space"></div>

              <div class="clearfix">
                <label class="inline">
                  <input type="checkbox" name="remember" class="ace">
                  <span class="lbl"> Remember Me</span>
                </label>

                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                  <i class="ace-icon fa fa-key"></i>
                  <span class="bigger-110">Login</span>
                </button>
              </div>

              <div class="space-4"></div>
            </fieldset>
          </form>

        </div><!-- /.widget-main -->
      </div><!-- /.widget-body -->
    </div><!-- /.login-box -->

  </div><!-- /.position-relative -->

</div>
@endsection



