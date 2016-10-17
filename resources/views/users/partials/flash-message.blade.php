@if(Session::has('success'))
<div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button>
    <p>
        <strong>
            <i class="fa fa-check"></i>
            Well done!
        </strong>
        {{ Session::get('success') }}       
    </p>
</div>
@endif      

@if (count($errors) > 0)
<div class="user-admin-alert row">
    <div class="alert alert-danger">
        <div class="alert-title">             
            <span class="sr-only">Error:</span>
            You have following errors:
        </div>
        <div class="alert-message">
        @foreach ($errors->all() as $error)
            <div><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $error }}</div> 
        @endforeach    
             
        </div>
    </div>
</div>
@endif
