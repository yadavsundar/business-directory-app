@extends('layouts.users.default')
@section('content')
<div class="row pt-md">
  <div class="page-content">
    <div class="page-header">
      <h1>
        Product
        <small>
          <i class="ace-icon fa fa-angle-double-right"></i>
          responsive photo gallery using colorbox
        </small>
        <span class="pull-right"><a href="#modal-form" role="button" class="blue create-btn" data-toggle="modal"> Create Product </a></span>
      </h1>
    </div><!-- /.page-header -->  
    <div class="row">  
      <div id="modal-form" class="modal modalform" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="blue bigger">Please fill the following form fields</h4>
            </div>
            <form method="POST" action="{{ url('user/product') }}" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}  
                <div class="modal-body">
                  <div class="row">           
                      <div class="col-xs-12 col-sm-5">
                        <div class="space"></div>
                        <input type="file" name="product_pic" />
                      </div>

                      <div class="col-xs-12 col-sm-7">

                      <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                        <label class=" control-label no-padding-right" for="product_name"> Product Name </label>
                        <div>
                        <input type="text" name="product_name" id="product_name" placeholder="Desktop Computer"  />
                        </div>
                      </div>
                      <div class="space-4"></div>


                      <div class="form-group">
                        <label class=" control-label no-padding-right" for="product_price"> Product Price </label>
                        <div>
                          <input type="text" name="product_price" id="product_price" placeholder="5000 tk"  />
                        </div>
                      </div>
                      <div class="space-4"></div>

                  <div class="form-group {{ $errors->has('listing_id') ? ' has-error' : '' }}">
                    <label for="form-field-select">Select Business</label>

                    <select name="listing_id" class="form-control" id="form-field-select">
                      <option></option>
                      @foreach(Auth::user()->listings as $listing)
                      <option value="{{ $listing->id }}">{{ $listing->name }}
                      </option>
                      @endforeach                     
                    </select>                 
                  </div>                  

                  <div class="space-4"></div>                       
   
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                  </button>

                  <button type="submit" class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Save
                  </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @if(count($products) > 0)  
      @foreach($products as $product) 
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
          <div class="img-box">                
            <img class="img-responsive" src="/upload/{{ $product->listing->id }}/product/{{ $product->product_pic }}">
            <ul class="text-center">
              <a href="#{{ $product->id }}" role="button" class="blue" data-toggle="modal">
                  <li><i class="fa fa-pencil"></i></li>
                </a>
              <a href="#" class="dialog">
                <li><i class="fa fa-trash"></i></li>
              </a>
              <div id="dialog-confirm" class="hide">
                <div class="alert alert-info bigger-110">
                  These items will be permanently deleted and cannot be recovered.
                </div>
                <div class="space-6"></div>
                <p class="bigger-110 bolder center grey">
                  <i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
                  Are you sure?
                </p>
                <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
                  <div class="ui-dialog-buttonset">
                  <form method="POST" action="{{ route('user.product.destroy', ['product' => $product->id]) }}">
                  {!! csrf_field() !!}
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger btn-minier ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only text-center" role="button">
                      <span class="ui-button-text"><i class="ace-icon fa fa-trash-o bigger-110"></i>&nbsp; Delete item</span>
                      </button>
                  </form>   

                  </div>
                </div>
              </div>
            </ul>
          </div>
          <h1>{{ $product->product_name }}</h1>
          <h2>{{ $product->product_price }}</h2>
        </div>
        <div id="{{ $product->id }}" class="modal modalform" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Please fill the following form fields</h4>
              </div>
              <form method="POST" action="{{ route('user.product.update', ['product' => 
                    $product->id ]) }}" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}  

                    <div class="modal-body">
                      <div class="row">           
                          <div class="col-xs-12 col-sm-5">
                              <div class="space"></div>
                              <input type="file" name="product_pic" />
                          </div>
                          <div class="col-xs-12 col-sm-7">
                              <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                                <label class=" control-label no-padding-right" for="product_name"> Product Name </label>
                                <div>
                                  <input type="text" name="product_name" value="{{ $product->product_name }}" id="product_name" />
                                </div>
                              </div>  
                              <div class="space-4"></div>
                              <div class="form-group">
                                <label class=" control-label no-padding-right" for="product_price"> Product Price </label>
                                <div>
                                  <input type="text" name="product_price" id="product_price" value="{{ $product->product_price  }}"  />
                                </div>
                              </div>
                              <div class="space-4"></div>

                  <div class="form-group {{ $errors->has('listing_id') ? ' has-error' : '' }}">
                    <label for="form-field-select">Select Business</label>

                    <select name="listing_id" class="form-control" id="form-field-select">
                      <option></option>
                      @foreach(Auth::user()->listings as $listing)
                      <option value="{{ $listing->id }}">{{ $listing->name }}
                      </option>
                      @endforeach                     
                    </select>                 
                  </div>                  

                  <div class="space-4"></div>                               
                          </div>
                      </div>
                    </div>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="modal-footer">
                      <button class="btn btn-sm" data-dismiss="modal">
                        <i class="ace-icon fa fa-times"></i>
                        Cancel
                      </button>

                      <button type="submit" class="btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-check"></i>
                        Save
                      </button>
                    </div>
              </form>
            </div>
          </div>
        </div>            
      @endforeach 
    @else
      <p>
        You didnt add any product in your listing
      </p>
    @endif
  </div>
</div>   
@endsection

