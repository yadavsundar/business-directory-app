@extends('layouts.guests.default')
@section('content')
<div class="col-md-12">
    @include('layouts.guests.partials.breadcumb') 
    <div class="row">
        @include('guests.premium_listing') 
        <div class="col-md-9 all-listing-subcat-area">
        <div class="row">
            <div class="col-md-12 all-listings-title">
                <div class="">
                    <h5>Found {{ count($busniesss) }} listings</h5>
                </div>
            </div>
        </div>                
        <div class="all-listing-subcat">
            @foreach($busniesss as $business)
            <div class="single-listing-subcat">
                <div class="row">
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media">
                            <div class="col-md-4">
                                <a class="pull-left" href="#"target="_parent">
                                <img alt="image" class="img-responsive" 
                                src="/upload/logo/{{$business->logo}}"></a>
                            </div>
                            <div class="col-md-8">
                                <div class="clearfix visible-sm">
                                </div>
                                <div class="media-body fnt-smaller">
                                    <a href="#"></a>
                                    <h4 class="media-heading">
                                    <a href="{{ route('single_business', ['id' => $business->id]) }}">{{ $business->name }}</a> 
                                    <small class="pull-right reviews"><i aria-hidden="true"
                                    class=
                                    "fa fa-star-o"></i><i aria-hidden="true"
                                    class=
                                    "fa fa-star-o"></i><i aria-hidden="true"
                                    class=
                                    "fa fa-star-o"></i><i aria-hidden="true"
                                    class=
                                    "fa fa-star-o"></i><i aria-hidden="true"
                                    class=
                                    "fa fa-star-o"></i></small></h4>
                                    <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li><i aria-hidden="true" class="fa fa-phone"
                                        data-placement="top"
                                        data-toggle="tooltip"
                                        title="{{ $business->phone_number }}"></i></li>
                                        <li style="list-style: none">|</li>
                                        <li>
                                        <i aria-hidden="true"
                                        class="fa fa-mobile"
                                        data-placement="top"
                                        data-toggle="tooltip"
                                        title="{{ $business->mobile_number }}"></i>
                                        </li>
                                        <li>
                                        <i aria-hidden="true"
                                        class="fa fa-envelope-o"
                                        data-placement="top"
                                        data-toggle="tooltip"
                                        title="{{ $business->mail }}"></i>
                                        </li>
                                        <li>
                                        <i aria-hidden="true"
                                        class="fa fa-globe"
                                        data-placement="top"
                                        data-toggle="tooltip"
                                        title="{{ $business->website }}"></i>
                                        </li>                                                       
                                        <li class="pull-right">
                                            <div class="varified">
                                                varified
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="hidden-xs">{{ $business->description }}</p><span class="fnt-smaller fnt-lighter fnt-arial">{{ $business->location }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-3">
            <div class="popular-categories">
                <div class="list-group">
                  <a href="#" class="list-group-item active">
                    Popular Categories
                  </a>
                  @foreach($cats as $cat)
                  @if($cat->parent_id == 0)  
                  <a href="{{ route('guest.category', ['id' => $cat->id ]) }}" class="list-group-item">{{ $cat->name }}</a>
                  @endif
                  @endforeach
                  
                </div>
            </div>                      
        </div>
    </div>
</div>
</div>

@endsection