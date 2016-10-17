@extends('layouts.admins.default')
@section('content')
<div class="col-md-4">
@include('admins.category.flash-message')
@include('admins.category.create_form')
</div>
<div class="col-md-7">
<div class="row">
<div class="col-md-12">
    <div class="table-header">
        All Categories
    </div>
    <table class=
    "table table-striped table-bordered table-hover">
    <thead>
            <tr>
                <th class="center">
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Slug
                </th>
                <th>
                    Total Listings
                </th>
                <th>
                    Parent
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                
                <tr>
                    <td class="center">
                        {{ $category->id }}
                    </td>
                    <td>
                        <a class="green" href="#" >{{ $category->name }}</a>
                    </td>
                    <td>
                        {{ $category->slug }}
                    </td>
                    <td>
                        
                    </td>

                    <td>
                        <a href="{{ route('control.category.edit', ['category' => $category->id]) }}">{{ $category->parent_id }}</a>
                    </td>
                    <td>
                        <div class=
                        "hidden-sm hidden-xs action-buttons">
                      
                        <a class="green" href="{{ route('control.category.edit', ['category' => $category->id]) }}"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
                        <a class="red" href="{{ route('category.delete', ['category' => $category->id]) }}"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
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
                                    <a href="{{ route('control.category.edit', ['category' => $category->id]) }}" title="View">
                                        <span class="green">
                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('category.delete', ['category' => $category->id]) }}" title="View">
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
    {{ $categories->links() }}

</div>
</div>    
</div>
@endsection
