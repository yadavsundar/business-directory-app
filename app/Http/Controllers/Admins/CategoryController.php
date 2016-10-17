<?php

namespace DirectoryApp\Http\Controllers\Admins;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;
use DirectoryApp\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(15);
        $parent_categories = Category::all();
        return view('admins.category.index')
            ->with('categories', $categories)
            ->with('parent_categories', $parent_categories);        
    }

    // public function create()
    // {
        
    // }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:2,max:40|unique:categories'    
        ];      

        $this->validate($request, $rules);        

        $category                  = new Category();            
        $category->name            = $request->input('name');
        $category->slug            = $request->input('slug') 
                                    ? $request->input('slug') 
                                    : str_slug($request->input('name'));
        $category->parent_id       = $request->input('parent_id'); 
        $category->category_icon   = $request->input('category_icon'); 
        $category->description     = $request->input('description');
        
        if ($category->save()) {
            return redirect()
                ->route('control.category.index')
                ->with('success', 'Category created successfully.');                
        } else {
            return redirect()
                ->route('control.category.index')
                ->with('warning', 'Category Not created.');              
        }   

    }


    // public function show($id)
    // {
        
    // }

    public function edit($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()
                ->route('control.category.index')
                ->with('warning', 'Category Not found.'); 
        }
        $categories = Category::where('parent_id', $category->id)->get();
        $parent_categories = Category::all();
        return view('admins.category.edit')
            ->with('category', $category)
            ->with('categories', $categories)
            ->with('parent_categories', $parent_categories);            

    }

  
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()
                ->route('control.category.index')
                ->with('warning', 'Category Not found.'); 
        }

        $rules = [
            'name' => 'required|min:2,max:40'    
        ];      

        $this->validate($request, $rules);

        $name = $request->input('name');
        $slug = $request->input('slug') ? $request->input('slug') : str_slug($request->input('name'));

        $category->update([
            'name'            => $name,
            'slug'            => $slug,
            'parent_id'       => $request->input('parent_id'),
            'category_icon'   => $request->input('category_icon'),              
            'description'     => $request->input('description')
        ]);

        return redirect()
            ->route('control.category.edit', ['id' => $id])
            ->with('success', 'Category updated successfully.');        
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()
                ->route('control.category.index')
                ->with('warning', 'Category Not found.'); 
        }

        $categories = Category::where('parent_id', $category->id)->get();
        $parent_categories = Category::all();
        return view('admins.category.delete')
            ->with('category', $category)
            ->with('categories', $categories)
            ->with('parent_categories', $parent_categories);  
    }

    public function destroy($id){
        $category = Category::find($id);
        if (!$category) {
            return redirect()
                ->route('control.category.index')
                ->with('warning', 'Category Not found.'); 
        }
        $category->delete();
        return redirect()
            ->route('control.category.index')
            ->with('success', 'Category deleted successfully.');        

    }
}
