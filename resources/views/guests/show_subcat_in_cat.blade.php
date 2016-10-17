@extends('layouts.guests.default')
@section('content')
<div class="col-md-12">
@include('layouts.guests.partials.breadcumb')    
    <div class="row">    
        <div class="col-md-9 all-listing-area">
        <div class="all-listing">

            <div class="single-listing"> 
                <div class="listing-cat-title">
                    <h3><a href="#">{{ $cat->name }}</a></h3>
                </div>
                         
                @if($subcats->count())
                  @foreach($subcats as $subcat)
                                    
                      <div class="listing-subcat-title col-md-4">
                          <a href="{{ route('guest.subcategory', ['category' => $cat->id, 'subcategory' => $subcat->id ]) }}">{{ $subcat->name }}</a>
                      </div>
                    
                  @endforeach
                @endif 
            </div> 

        </div>


        </div>
       
        <div class="col-md-3 categories-area-right">
        <h4>Tell us what you have</h4>
        <p>Fill a quick form to post your
        business</p><button class="btn btn-primary">POST YOUR
        BUSINESS</button><br>
        <small><em>or call</em></small>
        <p class="mbl">01850785098</p>
        <p class="mbl">01850785098</p><small><em>Lines are open
        Mon-Sat 8am-8pm</em></small>
        <div class="help-block">
            <h5>We are here to help you</h5>
            <div class="row">
                <div class="col-md-4">
                    <img alt="" src="/guests/images/image.jpg">
                    <small><em>Salman</em></small>
                </div>
                <div class="col-md-4">
                    <img alt="" src="/guests/images/image.jpg">
                    <small><em>Salman</em></small>
                </div>
                <div class="col-md-4">
                    <img alt="" src="/guests/images/image.jpg">
                    <small><em>Salman</em></small>
                </div>
            </div>
        </div>
        </div>  
    </div>
</div>    
@endsection

