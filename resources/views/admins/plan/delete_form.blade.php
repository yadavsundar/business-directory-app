<div class="panel panel-default">
    <div class="table-header">Delete PLan: {{ $plan->name }}</div>
    <div class="panel-body">
    
                                  
        <form action="{{ route('control.plan.destroy', ['id' => $plan->id ]) }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sure to delete this item?
                    </div>
                    <div class="panel-body">
                        <div class="panel-message">You cannot retreive the plan again.</div>    
                        <div class="pull-right">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-primary btn-sm">Delete
                            </button>
                        </div>                                                  
                    </div>
                </div>
                       
            </div>
            
        </form>
     
<!--             <div class="form-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sure to delete this item?
                    </div>
                    <div class="panel-body">
                        <div class="panel-message">This plan is  associated with  
                        You can not delete this.</div>    
                        <div class="pull-right">
                            <a href="#" type="submit" class="btn btn-primary btn-sm">Back
                            </a>
                        </div>                                                  
                    </div>
                </div>
                       
            </div> -->
       
    </div>
</div>