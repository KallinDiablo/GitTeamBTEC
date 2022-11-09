<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()

{

$categories=Category::paginate(10);

// return view('admin.listCategory', ['categories' => $categories]);

return view('admin.category.listCategory', compact("categories"));

}

public function getCreate()

{

return view('admin.category.createCategory');

}

//Hàm store để thêm dữ liệu

public function postCreate(Request $request)

{
    $category = new Category;

    $category->CategoryName = $request->CategoryName;
    
    $category->CategoryDescription = $request->CategoryDescription;
    
    $category->save();
    
    return redirect()->route('admin.category.index')->with('status', 'Category created successfully.');
}
public function getEditCate($CategoryID)

{

$data['cate'] = Category::find($CategoryID);

return view('admin.category.editCategory',$data);

}

public function postEditCate(Request $request,$CategoryID)

{

$category = Category::find($CategoryID);

$category->CategoryName = $request->CategoryName;

$category->CategoryDescription = $request->CategoryDescription;

$category->save();

return redirect()->route('admin.category.index');

}

public function delete($id)

{

$category = Category::find($id);

$category->delete();

return back();

}
}