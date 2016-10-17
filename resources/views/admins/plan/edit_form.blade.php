<div class="panel panel-default create-box">
    <div class="table-header">Edit Plan</div>
    <div class="panel-body">
    	<form action="{{ route('control.plan.update', ['id' => $plan->id]) }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="control-label" for="plan">Plan Name</label>
                <input type="text" name="name" value="{{ $plan->name }}" class="form-control" id="plan" placeholder="e.g. Life Time">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif                    
            </div>
            <div class="form-group{{ $errors->has('business') ? ' has-error' : '' }}">
                <label class="control-label" for="plan">Allowed Total Business</label>
                <input type="text" name="business" value="{{ $plan->business }}" class="form-control" id="plan" placeholder="e.g. 5">
                @if ($errors->has('business'))
                    <span class="help-block">
                        <strong>{{ $errors->first('business') }}</strong>
                    </span>
                @endif                    
            </div>
            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                <label class="control-label" for="plan">Allowed Total Category</label>
                <input type="text" name="category" value="{{ $plan->category }}" class="form-control" id="plan" placeholder="e.g. 15">
                @if ($errors->has('category'))
                    <span class="help-block">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif                    
            </div> 

            <div class="form-group{{ $errors->has('keyword') ? ' has-error' : '' }}">
                <label class="control-label" for="plan">Allowed Total Keyword</label>
                <input type="text" name="keyword" value="{{ $plan->keyword }}" class="form-control" id="plan" placeholder="e.g. 15">
                @if ($errors->has('keyword'))
                    <span class="help-block">
                        <strong>{{ $errors->first('keyword') }}</strong>
                    </span>
                @endif                    
            </div> 

            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                <label class="control-label" for="plan">Allowed Total Photo</label>
                <input type="text" name="photo" value="{{ $plan->photo }}" class="form-control" id="plan" placeholder="e.g. 15">
                @if ($errors->has('photo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                @endif                    
            </div> 


            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                <label class="control-label" for="plan">Plan Price</label>
                <input type="text" name="price" value="{{ $plan->price }}" class="form-control" id="plan" placeholder="e.g. 1000">
                @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif                    
            </div>


            <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                <label class="control-label" for="plan">Plan Duration</label>
                <input type="text" name="duration" value="{{ $plan->duration }}" class="form-control" id="plan" placeholder="e.g. 1 Years">
                @if ($errors->has('duration'))
                    <span class="help-block">
                        <strong>{{ $errors->first('duration') }}</strong>
                    </span>
                @endif                    
            </div>            

            <div class="pull-right">
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>	                                    
        </form>
    </div>
</div>
