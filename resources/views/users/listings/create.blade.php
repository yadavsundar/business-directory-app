@extends('layouts.users.default')

@section('content')
@include('users.listings.listing_nav')

<?php 
    // flash message
?>
    <div class="row user-company-general-info">
      
      <div id="tabs" class="tabs">
        <nav>
          <ul>
            <li><a href="#section-1" class="icon-shop"><span>Description</span></a></li>
            <li><a href="#section-2" class="icon-cup"><span>Hours</span></a></li>
            <li><a href="#section-3" class="icon-food"><span>Categories</span></a></li>
            <li><a href="#section-4" class="icon-lab"><span>Keyword</span></a></li>
            <li><a href="#section-5" class="icon-truck"><span>Map</span></a></li>
          </ul>
        </nav>
        <form method="POST" action="{{ url('user/listing') }}" enctype="multipart/form-data" class="company-info-form">
        {{ csrf_field() }}
            <div class="content">
                <section id="section-1">
                    <div class="page-header">
                        <h4>General Information</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Company Name</label> 
                            <input type="text" name="name" class="form-control" id="name" placeholder="My Company Name" >
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group{{ $errors->has('division') ? ' has-error' : '' }}">
                            <label for="division" class="control-label">Division</label>
                            <input type="text" name="division" class="form-control" id="division" placeholder="Dhaka" >
                        </div>
                        <div class="col-md-6 form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                            <label for="district" class="control-label">District</label>
                            <input type="text" name="district" class="form-control" id="district" placeholder="Dhaka" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="control-label">Location</label>
                            <input type="text" name="location" class="form-control" id="location" placeholder="Location" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number" >
                        </div>
                        <div class="col-md-6 form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                            <label for="mobile_number" class="control-label">Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Mobile Number" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fax">Fax</label>
                            <input type="text" name="fax" class="form-control" id="fax" placeholder="Fax" >
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="website">Website</label>
                            <input type="text" name="website" class="form-control" id="website" placeholder="www.example.com" >
                        </div>
                        <div class="col-md-6 form-group{{ $errors->has('establishment_year') ? ' has-error' : '' }}">
                            <label for="establishment_year" class="control-label">Establishment Year</label>
                            <input type="text" name="establishment_year" class="form-control" id="establishment_year" placeholder="2014" >
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-4 form-groupform-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                            <label for="logo" class="control-label">Company Logo</label>
                            <input type="file" name="logo" id="logo" class="control-label">
                        </div>                    
                        <div class="col-md-4 form-group{{ $errors->has('manager') ? ' has-error' : '' }}">
                            <label for="manager" class="control-label">CEO or Manager</label>
                            <input type="text" name="manager" class="form-control" id="manager" placeholder="Mr John Doe" >
                        </div>
                        <div class="col-md-4">
                            <label for="employee_number">Employee No</label>
                            <input type="text" name="employee_number" class="form-control" id="employee_number" placeholder="05" >
                        </div>                        
                    </div>                    
                    <div class="row">
                        <div class="col-md-12 form-group{{ $errors->has('contact_person') ? ' has-error' : '' }}">
                            <label for="contact_person" class="control-label">Contact Person</label>
                            <input type="text" name="contact_person" class="form-control" id="contact_person" placeholder="Contact Person" >
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="control-label">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                    </div>                    

                </section>
                <section id="section-2">
                    <div class="page-header">
                        <h4>Workin Hours</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3 wday">
                            <label for="saturday">Saturday</label>
                            <input type="text" name="saturday" class="form-control" id="saturday" placeholder="10:00 - 06:00" >
                        </div>
                        <div class="col-md-3 wday">
                            <label for="sunday">Sunday</label>
                            <input type="text" name="sunday" class="form-control" id="sunday" placeholder="10:00 - 06:00" >
                        </div>
                        <div class="col-md-3 wday">
                            <label for="monday">Monday</label>
                            <input type="text" name="monday" class="form-control" id="monday" placeholder="10:00 - 06:00" >
                        </div>
                        <div class="col-md-3 wday">
                            <label for="tuesday">Tuesday</label>
                            <input type="text" name="tuesday" class="form-control" id="tuesday" placeholder="10:00 - 06:00" >
                        </div>
                        <div class="col-md-3 wday">
                            <label for="wednesday">Wednesday</label>
                            <input type="text" name="wednesday" class="form-control" id="wednesday" placeholder="10:00 - 06:00" >
                        </div>
                        <div class="col-md-3 wday">
                            <label for="thursday">Thursday</label>
                            <input type="text" name="thursday" class="form-control" id="thursday" placeholder="10:00 - 03:00" >
                        </div>
                        <div class="col-md-3 wday">
                            <label for="friday">Friday</label>
                            <input type="text" name="friday" class="form-control" id="friday" placeholder="00:00 - 00:00" >
                        </div>
                    </div>
                </section>
                <section id="section-3">
                    <div class="page-header">
                        <h4>Categories</h4>
                    </div>
                    <div class="row">

                    @foreach($categories as $category)    
                        <div class="col-md-4">
                            <div class="panel panel-default cat-panel">
                               <div class="panel-body">
                                    <label><input type="checkbox"> {{ $category->name }}</label>                                  
                                </div>
                            </div>
                        </div>      
                    @endforeach    
                    </div>
                </section>
                <section id="section-4">
                    <div class="page-header">
                        <h4>keyword for you comapny</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-4 keyword">
                            <label for="keyword1">Keyword 1</label>
                            <input type="text" name="keyword1" class="form-control" id="keyword1" placeholder="keyword1">
                        </div>

                        <div class="col-md-4 keyword">
                            <label for="keyword2">Keyword 1</label>
                            <input type="text" name="keyword2" class="form-control" id="keyword2" placeholder="keyword2">
                        </div>                        

                    </div>
                </section>
                <section id="section-5">
                    <div class="mediabox">
                        <img alt="img02" src="img/02.png">
                        <h3>Radish Tomato</h3>
                        <p>Catsear cauliflower garbanzo yarrow salsify
                        chicory garlic bell pepper napa cabbage lettuce
                        tomato kale arugula melon sierra leone bologi
                        rutabaga tigernut.</p>
                    </div>
                    <div class="mediabox">
                        <img alt="img06" src="img/06.png">
                        <h3>Fennel Wasabi</h3>
                        <p>Sea lettuce gumbo grape kale kombu cauliflower
                        salsify kohlrabi okra sea lettuce broccoli celery
                        lotus root carrot winter purslane turnip greens
                        garlic.</p>
                    </div>
                    <div class="mediabox">
                        <img alt="img01" src="img/01.png">
                        <h3>Red Tofu Wrap</h3>
                        <p>Green horseradish azuki bean lettuce avocado
                        asparagus okra. Kohlrabi radish okra azuki bean
                        corn fava bean mustard tigernut wasabi tofu
                        broccoli mixture soup.</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Listing</button>
                </section>
            </div><!-- /content -->

        </form>
      </div><!-- /tabs -->


    </div>
   
@endsection

