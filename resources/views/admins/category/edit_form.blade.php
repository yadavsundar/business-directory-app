<div class="panel panel-default create-box">
    <div class="table-header">Edit Category</div>
    <div class="panel-body">
    	<form action="{{ route('control.category.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="control-label" for="category">Category Name</label>
                <input type="text" name="name" value="{{ $category->name }}"class="form-control" id="category" >
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif                    
            </div>
            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                <label class="control-label" for="category">Slug</label>
                <input type="text" name="slug" value="{{ $category->slug }}"class="form-control" id="category" >
                @if ($errors->has('slug'))
                    <span class="help-block">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </span>
                @endif                    
            </div> 
            <div class="form-group">
                <label class="control-label" for="category_icon">Slug</label>
                <input type="text" name="category_icon" value="{{ $category->category_icon }}" class="form-control" id="category_icon" >                  
            </div>                            
            
            <div class="form-group">
                <label>Parent&nbsp;&nbsp;</label>
                <select name="parent_id" class="">
                    
                    @if($parent_categories->count())
                        @foreach($parent_categories as $child_cat)

                            @if($child_cat->parent_id == 0)
                            <option <?php if(($category->parent_id == $child_cat->id)) echo "selected" ?> value="{{ $child_cat->id }}">
                                {{ $child_cat->name }}
                            </option>                   
                            @endif
                                    
                        @endforeach                          
                            <option <?php if(($category->parent_id == 0)) echo "selected" ?> value="0">
                                &mdash;&mdash;
                            </option>                   
                    @endif

                                    
                </select>
            </div>
        
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3">{{ $category->description }}
                </textarea>
            </div>
            <div class="pull-right">
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>	                                    
        </form>
    </div>
</div>
