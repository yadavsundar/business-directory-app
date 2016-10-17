@extends('layouts.admins.default')
@section('content')
<div class="col-md-4">
@include('admins.plan.delete_form')
</div>
<div class="col-md-8">
<div class="row">
<div class="col-md-12">
    <div class="table-header">
        All Plans
    </div>
    <table class=
    "table table-striped table-bordered table-hover">
    <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Business
                </th>
                <th>
                    Categories
                </th>
                <th>
                    Keywords
                </th>
                <th>
                    Photos
                </th>
                <th>
                    Price
                </th>
                <th>
                    Duration
                </th>
                <th>
                    Action
                </th>                                                
            </tr>
        </thead>
        <tbody>
            @foreach($plans as $plan)
                
                <tr>
                    <td>
                        {{ $plan->name }}
                    </td>
                    <td>
                        {{ $plan->business }}
                    </td>
                    <td>
                        {{ $plan->plan }}
                    </td>
                    <td>
                        {{ $plan->keyword }}
                    </td>
                    <td>
                        {{ $plan->photo }}
                    </td>
                    <td>
                        {{ $plan->price }}
                    </td>
                    <td>
                        {{ $plan->duration }}
                    </td>                    
                                                            

                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                      
                        <a class="green" href="{{ route('control.plan.edit', ['plan' => $plan->id]) }}"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
                        <a href="{{ route('plan.delete', ['plan' => $plan->id]) }}" title="Delete"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
                        </div>
                        <div class=
                        "hidden-md hidden-lg">
                            <div class=
                            "inline pos-rel">
                                <button class=
                                "btn btn-minier btn-yellow dropdown-toggle"
                                data-position=
                                "auto"
                                data-toggle=
                                "dropdown"><i class="ace-icon fa fa-caret-down icon-only bigger-120">
                                </i></button>
                                <ul class=
                                "dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
               
                                <li>
                                    <a href="{{ route('control.plan.edit', ['plan' => $plan->id]) }}" title="View">
                                        <span class="green">
                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('plan.delete', ['plan' => $plan->id]) }}" title="Delete">
                                        <span class="red">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </span>
                                    </a>
                                </li>                                                                
                              
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>                  
                               
            @endforeach


        </tbody>

    </table>
    

</div>
</div>    
</div>
@endsection
