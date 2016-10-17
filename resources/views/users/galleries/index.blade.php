@extends('layouts.users.default')
@section('content')
<div class="row pt-md">
<div class="page-content">     

  <div class="page-header">
    <h1>
      Gallery
      <small>
        <i class="ace-icon fa fa-angle-double-right"></i>
        responsive photo gallery using colorbox
      </small>
      <span class="pull-right"><a href="#modal-form" role="button" class="blue create-btn" data-toggle="modal"> Create Gallery </a></span>
    </h1>
  </div>
  <div class="row">  
    <div id="modal-form" class="modal modalform" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="blue bigger">Please fill the following form fields</h4>
          </div>
          <form method="POST" action="{{ url('user/gallery') }}" enctype="multipart/form-data" class="form-horizontal">
              {{ csrf_field() }}  
            <div class="modal-body">
              <div class="row">           
                  <div class="col-xs-12 col-sm-5">
                    <div class="space"></div>
                    <input type="file" name="gallery_pic" />
                  </div>

                  <div class="col-xs-12 col-sm-7">

                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class=" control-label no-padding-right" for="title"> Title </label>
                    <div>
                    <input type="text" name="title" id="title" placeholder="Desktop Computer"  />
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

  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <div>
        <ul class="ace-thumbnails clearfix">
  
          @if(count($galleries) > 0)  
            @foreach($galleries as $gallery)
            
            <li>
              <a href="http://localhost:8000/upload/{{ $gallery->listing->id }}/gallery/{{ $gallery->gallery_pic }}" data-rel="colorbox">
              <img width="150" height="150" alt="150x150" src="/upload/{{ $gallery->listing->id }}/gallery/{{ $gallery->gallery_pic }}" />
              <div class="text">
                <div class="inner">{{ $gallery->title }}</div>
              </div>
              </a>
              <div class="tools tools-bottom">
                <a href="#{{ $gallery->id }}" role="button" class="blue" data-toggle="modal">
                  <i class="ace-icon fa fa-pencil"></i>
                </a>

                <a href="#" class="dialog">
                  <i class="ace-icon fa fa-times red"></i>
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
                    <form method="POST" action="{{ route('user.gallery.destroy', ['gallery' => $gallery->id]) }}">
                    {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-minier ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only text-center" role="button">
                        <span class="ui-button-text"><i class="ace-icon fa fa-trash-o bigger-110"></i>&nbsp; Delete item</span>
                        </button>
                    </form>   

                    </div>
                  </div>
                </div>                
              </div>
            </li>
        <div id="{{ $gallery->id }}" class="modal modalform" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Please fill the following form fields</h4>
              </div>
              <form method="POST" action="{{ route('user.gallery.update', ['gallery' => 
                    $gallery->id ]) }}" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}  

                    <div class="modal-body">
                      <div class="row">           
                          <div class="col-xs-12 col-sm-5">
                              <div class="space"></div>
                              <input type="file" name="gallery_pic" />
                          </div>
                          <div class="col-xs-12 col-sm-7">
                              <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label class=" control-label no-padding-right" for="title"> Title </label>
                                <div>
                                  <input type="text" name="title" value="{{ $gallery->title }}" id="title" />
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
                    <li>
                      <a href="/assets/images/gallery/image-3.jpg" data-rel="colorbox">
                        <img width="150" height="150" alt="150x150" src="/assets/images/gallery/thumb-3.jpg" />
                        <div class="text">
                          <div class="inner">Sample Caption on Hover</div>
                        </div>
                      </a>

                      <div class="tools tools-bottom">
                        <a href="#">
                          <i class="ace-icon fa fa-link"></i>
                        </a>

                        <a href="#">
                          <i class="ace-icon fa fa-paperclip"></i>
                        </a>

                        <a href="#">
                          <i class="ace-icon fa fa-pencil"></i>
                        </a>

                        <a href="#">
                          <i class="ace-icon fa fa-times red"></i>
                        </a>
                      </div>
                    </li>            
          @endif  



        </ul>
      </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->  
</div>   
@endsection

