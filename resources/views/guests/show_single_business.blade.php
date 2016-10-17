@extends('layouts.guests.default')

@section('content')
@include('layouts.guests.partials.breadcumb') 

<div class="row single-listing-area">
    <div class="col-md-9">
        <div class="row single-lisitng">
            <div class="col-md-4">
                <div class="company-logo">
                    <img src="/upload/logo/{{$business->logo}}" alt="{{ $business->name  }}">                  
                </div>
            </div>
            <div class="company-summary col-md-8">
                <h2>
                    {{ $business->name  }}
                </h2>
                <div class="company-review">
                    <i aria-hidden="true" class=
                    "fa fa-star-o"></i> <i aria-hidden="true"
                    class="fa fa-star-o"></i> <i aria-hidden=
                    "true" class="fa fa-star-o"></i>
                    <i aria-hidden="true" class=
                    "fa fa-star-o"></i> <i aria-hidden="true"
                    class="fa fa-star-o"></i> <small>2
                    reviews</small>
                    <div class="pull-right">
                        <div class="btn-group">
                            <button class=
                            "btn btn-danger btn-sm"><span><i aria-hidden="true"
                            class=
                            "fa fa-pencil"></i></span></button>
                            <button class=
                            "btn btn-danger btn-sm" type=
                            "button">Write a review</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row guest-company-general-info">
            <div class="tabs" id="tabs">
                <nav>
                    <ul>
                        <li>
                            <a class="icon-shop" href=
                            "#section-1"><span>Description</span></a>
                        </li>
                        <li>
                            <a class="icon-cup" href=
                            "#section-2"><span>Products</span></a>
                        </li>
                        <li>
                            <a class="icon-food" href=
                            "#section-3"><span>Galleries</span></a>
                        </li>
                        <li>
                            <a class="icon-truck" href=
                            "#section-4"><span>Employees</span></a>
                        </li>
                        <li>
                            <a class="icon-lab" href=
                            "#section-5"><span>Reviews</span></a>
                        </li>

                    </ul>
                </nav>
                <div class="content">
                    <section id="section-1">
                        <div class="page-header">
                            <h4>
                                General Information
                            </h4>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="company-content">
                                    <h4>
                                        Company Name
                                    </h4>
                                    <p>
                                        {{ $business->name }}
                                    </p>
                                </div>
                                <div class="company-content">
                                    <h4>
                                        Address
                                    </h4>
                                    <p>
                                       {{ $business->location }}
                                    </p>
                                    <p></p>
                                </div>
                                <div class="company-content">
                                    <h4>
                                        Phone
                                    </h4>
                                    <p>
										{{ $business->phone_number }}
                                    </p>
                                    <p></p>
                                </div>
                                <div class="company-content">
                                    <h4>
                                        Mobile No
                                    </h4>
                                    <p>
                                        {{ $business->mobile_number }}
                                    </p>
                                    <p></p>
                                </div>
                                <div class="company-content">
                                    <h4>
                                        Contact Person
                                    </h4>
                                    <p>
                                        {{ $business->contact_person }}
                                    </p>
                                    <p></p>
                                </div>
                                <div class="company-content">
                                    <h4>
                                        Company Website
                                    </h4>
                                    <p>
                                        {{ $business->website }}
                                    </p>
                                    <p></p>
                                </div>
                                <div class="company-content">
                                    <h4>
                                        Email
                                    </h4>
                                    <p>
                                       {{ $business->website }}
                                    </p>
                                    <p></p>
                                </div>
                                <div class="company-content">
                                    <h4>
                                        Working Hours
                                    </h4>
                                    <p></p>
                                    <table>
                                        <tr>
                                            <td class="wday">
                                                Saturday
                                            </td>
                                            <td>
                                                {{ $business->saturday }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="wday">
                                                Sunday
                                            </td>
                                            <td>
                                                {{ $business->sunday }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="wday">
                                                Monday
                                            </td>
                                            <td>
                                                {{ $business->monday }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="wday">
                                                Tuesday
                                            </td>
                                            <td>
                                                {{ $business->tuesday }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="wday">
                                                Wednesday
                                            </td>
                                            <td>
                                                {{ $business->wednesday }}
                                            </td>
                                        </tr>
                                        <tr>                                        
                                        <tr>

                                            <td class="wday">
                                                Thursday
                                            </td>
                                            <td>
                                                {{ $business->thursday }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="wday">
                                                Friday
                                            </td>
                                            <td>
                                                {{ $business->friday }}
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <p></p>
                                </div>
                                <div class="company-content">
                                    <h4>
                                        Description
                                    </h4>
                                    <p>
                                        {{ $business->description }}
                                    </p>
                                    <p></p>
                                </div>
                                <div class="company-content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>
                                                Establish
                                            </h4>
                                            <p>
                                                {{ $business->establishment_year }}
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>
                                                Manager
                                            </h4>
                                            <p>
                                                {{ $business->manager }}
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>
                                                Employee
                                            </h4>
                                            <p>
                                                {{ $business->employee_number }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </section>
                    <section id="section-2">
                        <div class="page-header">
                            <h4>
                                Products
                            </h4>
                        </div>
                        <div class="row guests-products">

                            @if(count($business->products))
                            	@foreach($business->products as $product)
                            <div class="col-md-4 column">
                                <div class="productbox">
                                    <img class="img-responsive"
                                    src="/upload/{{$business->id}}/product/{{$product->product_pic}}">
                                    <div class="producttitle">
                                        {{ $product->product_name  }}
                                    </div>
                                    <div class="productprice">
                                        <div class="pricetext">
                                            Price: {{ $product->product_price  }}
                                        </div>
                                    </div>
                                </div>
                            </div>                            	
                            	@endforeach
                            @else
                            	<p style="padding: 0px 10px">This company did not add any prodcut to their profile.</p>
                            @endif	
                        </div>
                    </section>
                    <section id="section-3">
                        <div class="page-header">
                            <h4>
                                Galleries
                            </h4>
                        </div>
                        <div class="row">
                        @if(count($business->galleries))
                        @foreach($business->galleries as $gallery)
							<div class=
                            "col-lg-3 col-sm-4 col-xs-6">
                                <a href="#" title="{{ $gallery->title }}"><img class="thumbnail img-responsive" src=
                                "/upload/{{$business->id}}/gallery/{{$gallery->gallery_pic}}"></a>
                            </div>
                        @endforeach                                
                        @else
                        	<p style="padding: 0px 10px">This company did not add any album to their profile.</p>	
                        @endif    

                   
                        </div>
                        <div class="modal fade" id="myModal"
                        role="dialog" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close"
                                        data-dismiss="modal"
                                        type=
                                        "button">×</button>
                                        <h3 class="modal-title"> Heading
                                        </h3>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                    <div class="modal-footer">
                                        <button class=
                                        "btn btn-default"
                                        data-dismiss=
                                        "modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="section-4">
                        <div class="page-header">
                            <h4>
                                Company Employees
                            </h4>
                        </div>
                        <div class="row guest-company-employees">
                        @if(count($business->employees))
                    		@foreach($business->employees as $employee)
                            <div class="col-md-6 guest-company-employee">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4">
                                        <img alt="{{ $employee->name }}" class="img-rounded img-responsive"
                                        src="/upload/{{$business->id}}/employees/{{$employee->employee_pic}}">
                                    </div>
                                    <div class=
                                    "col-sm-8 col-md-8">
                                        
                                            <p style="font-size: 16px;">
                                               {{ $employee->name }}
                                            </p>{{ $employee->position }}                                        
                                        <p>
                                            Mail: 
                                            {{ $employee->mail }}<br>
                                            Joined: {{ $employee->joined }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                    		@endforeach		
                        @else
                        	<p style="padding: 0px 10px">This company did not add any employee to their profile.</p>	
                        @endif    
                          
                        </div>
                    </section>
                    <section id="section-5">
                        <div class="page-header">
                            <h4>
                                Reviews
                            </h4>
                        </div>
                        <div class=
                        "qa-message-list user-admin-review" id=
                        "wallmessages">
                            <div class=
                            "message-item guest-review" id=
                            "m16">
                                <div class="message-inner">
                                    <div class=
                                    "message-head clearfix">
                                        <div class=
                                        "message-icon pull-left">
                                        <a href=
                                            "#"><i class="glyphicon glyphicon-check">
                                            </i></a>
                                        </div>
                                        <div class=
                                        "user-detail">
                                            <h5 class="handle">
                                                Created Project
                                            </h5>
                                            <div class=
                                            "post-type">
                                                <h5>
                                                    <i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o">
                                                    </i><i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o"></i><i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o"></i><i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o"></i><i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o"></i>
                                                </h5>
                                            </div>
                                            <div class=
                                            "post-time">
                                                <p>
                                                    <i class=
                                                    "glyphicon glyphicon-time">
                                                    </i> 2 Min
                                                    Ago
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=
                                    "qa-message-content">
                                        <p>
                                            Admin created Blah
                                            Blah Blah, project,
                                            as part of the
                                            Campaign. Admin
                                            created Blah Blah
                                            Blah, project, as
                                            part of the
                                            Campaign. Admin
                                            created Blah Blah
                                            Blah, project, as
                                            part of the
                                            Campaign.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=
                            "message-item guest-review" id=
                            "m16">
                                <div class="message-inner">
                                    <div class=
                                    "message-head clearfix">
                                        <div class=
                                        "message-icon pull-left">
                                        <a href=
                                            "#"><i class="glyphicon glyphicon-check">
                                            </i></a>
                                        </div>
                                        <div class=
                                        "user-detail">
                                            <h5 class="handle">
                                                Created Project
                                            </h5>
                                            <div class=
                                            "post-type">
                                                <h5>
                                                    <i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o">
                                                    </i><i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o"></i><i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o"></i><i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o"></i><i aria-hidden="true"
                                                    class=
                                                    "fa fa-star-o"></i>
                                                </h5>
                                            </div>
                                            <div class=
                                            "post-time">
                                                <p>
                                                    <i class=
                                                    "glyphicon glyphicon-time">
                                                    </i> 2 Min
                                                    Ago
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=
                                    "qa-message-content">
                                        <p>
                                            Admin created Blah
                                            Blah Blah, project,
                                            as part of the
                                            Campaign. Admin
                                            created Blah Blah
                                            Blah, project, as
                                            part of the
                                            Campaign. Admin
                                            created Blah Blah
                                            Blah, project, as
                                            part of the
                                            Campaign.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>                    
                </div><!-- /content -->
            </div><!-- /tabs -->
        </div>
    </div>
</div>
   
@endsection

