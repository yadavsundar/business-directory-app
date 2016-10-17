@extends('layouts.guests.default')
@section('content')

<div class="page-header">
    <div class="text-center">
        <h2>
            Create Your Business Listing
        </h2>
    </div>
    <p>
        You will find out that YOUR business is growing as a direct
        result of your relationship with Bangladesh Business Directory.
        We offer an integrated approach to online marketing for
        businesses in Bangladesh. The website allows visitors to review
        and recommend businesses and products that they have used. Yelo
        is an easy way for your business to connect with more
        customers.
    </p>
</div>
<div class="row plans">
    <div id="price">

        @foreach($plans as $plan) 

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
                    <a href="{{ route('user.register', ['plan' => $plan->slug ]) }}">Select</a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>

@endsection