<div class="panel panel-default">
    <div class="table-header">Create Category</div>
    <div class="panel-body">
    	<form action="{{ route('control.category.store') }}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="control-label" for="category">Category Name</label>
                <input type="text" name="name" value="{{ old('name') }}"class="form-control" id="category" placeholder="e.g. Vegetables">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif                    
            </div>
            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                <label class="control-label" for="category">Slug</label>
                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" id="category" placeholder="e.g. Vegetables">
                @if ($errors->has('slug'))
                    <span class="help-block">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </span>
                @endif                    
            </div>   
            <div class="form-group">
                <label class="control-label" for="category_icon">Category Icon</label>
                <input type="text" name="category_icon" value="{{ old('category_icon') }}" class="form-control" id="category_icon" placeholder="e.g. fa fa-circle">                   
            </div>                          
            <div class="form-group">
                <label>Parent&nbsp;&nbsp;</label>
                <select name="parent_id" class="">
                    <option value="0" selected>&mdash;&mdash;</option>
                    @if($parent_categories->count())
                        @foreach($parent_categories as $category)
                        	@if($category->parent_id == 0)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif        
                        @endforeach
                    @endif
                </select>
            </div>
					                
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" value="{{ old('description') }}" class="form-control" rows="3"></textarea>
            </div>
            <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>	                                    
        </form>
    </div>
</div>
