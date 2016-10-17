@extends('layouts.users.default') @section('content')
<div class="row pt-md">
  <div class="page-content">
    <div class="page-header">
      <h1>Basic Information </h1>
    </div>
    <!-- /.page-header -->

    <div class="row">
      <div class="col-md-12">
        <!-- PAGE CONTENT BEGINS -->
        <form method="POST" action="{{ url('user/listing') }}" enctype="multipart/form-data" class="form-horizontal" role="form">

        {{ csrf_field() }}

          <div class="form-group">
            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1"> Company Name </label>

            <div class="col-md-6">
              <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Company Name" class="form-control">
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif              
            </div>
            </div> 
            <div class="{{ $errors->has('logo') ? ' has-error' : '' }}">   
            <label class="col-md-1 control-label no-padding-right" for="form-field-1-1"> Logo </label>

            <div class="col-md-3">
              <input type="file" name="logo" id="id-input-file-2" />
              @if ($errors->has('logo'))
                  <span class="help-block">
                      <strong>{{ $errors->first('logo') }}</strong>
                  </span>
              @endif               
            </div>
            </div>
          </div>

          <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">

            <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Location </label>

            <div class="col-sm-10">
              <input type="text" name="location" value="{{ old('location') }}" id="form-field-1-1" placeholder="Gulshan, Dhaka" class="form-control">
              @if ($errors->has('location'))
                  <span class="help-block">
                      <strong>{{ $errors->first('location') }}</strong>
                  </span>
              @endif              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1"> Division </label>

            <div class="col-md-4">
              <div>
                <select name="division" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
                  <option value=""> </option>
                  <option value="dha">Dhaka</option>
                  <option value="chi">Chittagong</option>
                  <option value="raj">Rajshahi</option>
                  <option value="khu">Khulna</option>
                  <option value="bor">Borishal</option>
                  <option value="syl">Sylhet</option>
                </select>
              </div>
            </div>
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1"> District </label>

            <div class="col-md-4">
              <div>
                <select name="district" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
                  <option value=""> </option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>

                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
          <div class="{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1"> Phone Number </label>

            <div class="col-md-4">
              <input type="text" name="mobile_number" value="{{ old('mobile_number') }}" id="" placeholder="Text Field" class="form-control">
              @if ($errors->has('mobile_number'))
                  <span class="help-block">
                      <strong>{{ $errors->first('mobile_number') }}</strong>
                  </span>
              @endif               
            </div>
          </div>  
          
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1"> Phone Number </label>
            <div class="col-md-4">
              <input type="text" name="phone_number" value="{{ old('phone_number') }}" placeholder="Text Field" class="form-control">             
            </div>
          
          </div>

          <div class="form-group">

          <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1">Email</label>

            <div class="col-md-4">
              <input type="text" name="email" value="{{ old('email') }}" id="" placeholder="mycompany@mail.com" class="form-control">
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif               
            </div>
          </div> 

            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1"> Website </label>

            <div class="col-md-4">
              <input type="text" id="" name="website" value="{{ old('website') }}" placeholder="mycompany.com" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1"> Fax</label>

            <div class="col-md-4">
              <input type="text" name="fax" value="{{ old('fax') }}" class="form-control">
            </div>
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1"> Skypee ID </label>

            <div class="col-md-4">
              <input type="text" name="skype" value="{{ old('skype') }}" class="form-control">
            </div>
          </div>          


          <div class="space-6"></div>

          <div class="form-group">

          <div class="{{ $errors->has('establishment_year') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1">Establishment Year</label>

            <div class="col-md-4">
              <input type="text" name="establishment_year" value="{{ old('establishment_year') }}" id="" placeholder="2014" class="form-control">
              @if ($errors->has('establishment_year'))
                  <span class="help-block">
                      <strong>{{ $errors->first('establishment_year') }}</strong>
                  </span>
              @endif               
            </div>
          </div> 

          <div class="{{ $errors->has('employee_number') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label no-padding-right" for="form-field-1-1">Total Employee</label>

            <div class="col-md-4">
              <input type="text" name="employee_number" value="{{ old('employee_number') }}" id="" placeholder="05-10" class="form-control">
              @if ($errors->has('employee_number'))
                  <span class="help-block">
                      <strong>{{ $errors->first('employee_number') }}</strong>
                  </span>
              @endif               
            </div>
          </div>                     

          </div>          

          <div class="form-group">
          <div class="{{ $errors->has('manager') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Company CEO </label>

            <div class="col-sm-7">
              <input type="text" name="manager"  value="{{ old('manager') }}" id="form-field-1-1" placeholder="Mr John Doe" class="form-control">
              @if ($errors->has('manager'))
                  <span class="help-block">
                      <strong>{{ $errors->first('manager') }}</strong>
                  </span>
              @endif               
            </div>
          </div>  
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Contact Person </label>

            <div class="col-sm-7">
              <input type="text" name="contact_person"  value="{{ old('contact_person') }}" id="form-field-1-1" placeholder="01xxxxxxxxx, Mr John Doe" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label no-padding-top" for="duallist"> Category
                    <span class="help-block"><small>You can select maximum 5 categories</small></span>
             </label>
                 

            <div class="col-md-8">
              <select multiple="multiple" size="10" name="category[]" id="duallist">
              @foreach($cats as $cat)
                
                @if($cat->parent_id == 0)
                  <option value="{{ $cat->id }}">&nbsp;{{ $cat->name }}</option>
                @endif
                @if($subcats->count())
                  @foreach($subcats as $subcat)
                    @if($subcat->parent_id == $cat->id)
                        <option value="{{ $subcat->id }}">&nbsp;&nbsp;&nbsp;&nbsp;{{ $subcat->name }}
                        </option>  
                    @endif
                  @endforeach
                @endif                
              @endforeach  
              </select>

            </div>
          </div>  
          
          <div class="form-group">
            <label class="col-md-2 control-label no-padding-top" for="form-field-tags">Keywords</label>

            <div class="col-md-10">
              <div class="inline">
                <input type="text" name="keyword" value="{{ old('keyword') }}" id="form-field-tags" placeholder="Enter tags ..." />
              </div>
            </div>
          </div>                  


          <div class="form-group">
            <label class="control-label col-xs-12 col-md-2 no-padding-right"> Working Hour </label>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-4" style="padding-top: 8px;">
                  <label>Saturday (am-pm)</label>

                  <div class="input-group bootstrap-timepicker">
                    <input id="timepicker1" name="sat_start" type="text" value="{{ old('sat_start') }}" class="timepicker form-control" />
                    <span class="input-group-addon">
                            <i class="fa fa-exchange"></i>
                        </span>
                    <input id="timepicker1" name="sat_end" type="text" value="{{ old('sat_start') }}" class="timepicker form-control" />
                  </div>
                </div>
                <div class="col-md-4" style="padding-top: 8px;">
                  <label>Sunday (am-pm)</label>

                  <div class="input-group bootstrap-timepicker">
                    <input id="timepicker1" name="sun_start" type="text" value="{{ old('sun_start') }}" class="timepicker form-control" />
                    <span class="input-group-addon">
                            <i class="fa fa-exchange"></i>
                        </span>
                    <input id="timepicker1" name="sun_end" type="text" value="{{ old('sun_start') }}" class="timepicker form-control" />
                  </div>
                </div>
                <div class="col-md-4" style="padding-top: 8px;">
                  <label>Monday (am-pm)</label>

                  <div class="input-group bootstrap-timepicker">
                    <input id="timepicker1" name="mon_start" type="text" value="{{ old('mon_start') }}" class="timepicker form-control" />
                    <span class="input-group-addon">
                            <i class="fa fa-exchange"></i>
                        </span>
                    <input id="timepicker1" name="mon_end" type="text" value="{{ old('mon_start') }}" class="timepicker form-control" />
                  </div>
                </div>
                <div class="col-md-4" style="padding-top: 8px;">
                  <label>Tuesday (am-pm)</label>

                  <div class="input-group bootstrap-timepicker">
                    <input id="timepicker1" name="tues_start" type="text" value="{{ old('tues_start') }}" class="timepicker form-control" />
                    <span class="input-group-addon">
                            <i class="fa fa-exchange"></i>
                        </span>
                    <input id="timepicker1" name="tues_end" type="text" value="{{ old('tues_start') }}" class="timepicker form-control" />
                  </div>
                </div>

                <div class="col-md-4" style="padding-top: 8px;">
                  <label>Wednesday (am-pm)</label>

                  <div class="input-group bootstrap-timepicker">
                    <input id="timepicker1" name="wed_start" type="text" value="{{ old('wed_start') }}" class="timepicker form-control" />
                    <span class="input-group-addon">
                            <i class="fa fa-exchange"></i>
                        </span>
                    <input id="timepicker1" name="wed_end" type="text" value="{{ old('wed_start') }}" class="timepicker form-control" />
                  </div>
                </div>                
                <div class="col-md-4" style="padding-top: 8px;">
                  <label>Thursday (am-pm)</label>

                  <div class="input-group bootstrap-timepicker">
                    <input id="timepicker1" name="thurs_start" type="text" value="{{ old('thurs_start') }}" class="timepicker form-control" />
                    <span class="input-group-addon">
                            <i class="fa fa-exchange"></i>
                        </span>
                    <input id="timepicker1" name="thurs_end" type="text" value="{{ old('thurs_start') }}" class="timepicker form-control" />
                  </div>
                </div>
                <div class="col-md-4" style="padding-top: 8px;">
                  <label>Friday (am-pm)</label>

                  <div class="input-group bootstrap-timepicker">
                    <input id="timepicker1" name="fri_start" type="text" value="{{ old('fri_start') }}" class="timepicker form-control" />
                    <span class="input-group-addon">
                            <i class="fa fa-exchange"></i>
                        </span>
                    <input id="timepicker1" name="fri_end" type="text" value="{{ old('fri_start') }}" class="timepicker form-control" />
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Full Length </label>

            <div class="col-sm-7">
              <textarea name="description" value="{{ old('description') }}" class="form-control"></textarea>
              @if ($errors->has('description'))
                  <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
                  </span>
              @endif              
            </div>
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Create Listing</button>
          </div>          

        </form>

        <!-- PAGE CONTENT ENDS -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.page-content -->
</div>
@endsection