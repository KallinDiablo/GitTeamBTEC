<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Product;
use App\Models\Country;
use App\Models\Category;
use App\Models\ProductCategory;
use Exception;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\MockObject\DuplicateMethodException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use File;
class ProductController extends Controller
{
    protected function Validator()
    {
        return
            [
                'pImage1' => ['required|image'],
                'pImage1' => ['required|image'],
            ];
    }
    public function index()

    {

        $products = Product::paginate(10);

        return view('admin.product.listProduct', compact("products"));
    }

    public function getCreate()

    {

        $countries = Country::all();

        $categories = Category::all();


        return view('admin.product.CreateProduct', compact("countries", "categories"));
    }

    //Hàm store để thêm dữ liệu

    public function postCreate(Request $request)

    {
        try {


            $products = new Product;

            $products->pName = $request->pName;

            $products->pDescription = $request->pDescription;

            $products->pPrice = $request->pPrice;

            $products->pQuantity = $request->pQuantity;

            $products->cID = $request->cID;

            $name = $request->pName;
            if ($request->has('pImage1')) {
                // $products->pImage1 = $request->pImage1;
                // $products->pImage2 = $request->pImage2;
                // var_dump($request->pImage1);
                $file1 = $request->pImage1;
                // $file1 = $request->file('pImage1');
                $ext1 = $file1->Extension();
                $file_name1 = $name . '_1' . '_' . rand() . time() . '.' . $ext1;
                $file1->move(public_path('storage\products'), $file_name1);
            }
            if ($request->hasFile('pImage2')) {
                $file2 = $request->pImage2;
                $ext2 = $file2->extension();
                $file_name2 = $name . '_2' . '_' . rand() . time() . '.' . $ext2;
                $file2->move(public_path('storage\products'), $file_name2);
            }
            $products->pImage1 = $file_name1;
            $products->pImage2 = $file_name2;

            $products->update_at = null;
            $products->create_at = now();
            $products->save();
            //Storage::makeDirectory(public_path('storage/products/{pID}'));
            foreach ($request->CategoryIDs as $c) {
                $addC = Category::find($c);
                $products->Category()->attach($c);
            }
            // Thực thi insert vào ProductCategory
            // Redirect vào list product
            
            return redirect()->route('admin.product.index')->with('status', 'Product created successfully.');
        } catch (DuplicateMethodException) {
            throw new Exception("This product is already existed");
        }
    }



    public function getEditCate($pID)

    {

        $data['cate'] = Product::find($pID);

        $countries = Country::all();

        $categories = Category::all();  
        
        // $productcategories = Category::where('category_product.product_pID','=',$pID,'and','category_product.category_categoryID','=','category.categoryID')->select('category.CategoryName')->from('category_product')->get(   );
        $productcategories = DB::table('category')
                                    ->join('category_product','category.CategoryID','=','category_product.category_CategoryID')
                                    ->where('category_product.product_pID','=',$pID)
                                    ->get('category.CategoryName','category.CategoryID');
        return view('admin.product.editProduct', $data, compact('countries', 'categories','productcategories'));
    }

    public function postEditCate(Request $request, $pID)

    {
        

        $products = Product::find($pID);
        
        $products->pName = $request->pName;

        $products->pDescription = $request->pDescription;

        $products->pPrice = $request->pPrice;

        $products->pQuantity = $request->pQuantity;

        $products->cID = $request->cID;

        $name = $request->pName;

        if ($request->pImage1 != ''){
            $path1 = public_path('storage\products/') ;
            if ($products->pImage1 != ''  && $products->pImage1 != null) {
                $file_old1 = $path1 . $products->pImage1;
                unlink($file_old1);
            }
            $file1 = $request->pImage1;
            $ext1 = $file1->Extension();
          $filename1  = $name . '_1' . '_' . rand() . time() . '.' . $ext1;
          $file1->move($path1, $filename1);
        }
            
        if ($request->pImage2 != ''){
            $path2 = public_path('storage\products/');
            if ($products->pImage2 != ''  && $products->pImage2 != null) {
                $file_old2 = $path2 . $products->pImage2;
                unlink($file_old2);
            }
            $file2 = $request->pImage2;
            $ext2 = $file2->extension();
          $filename2 = $name . '_2' . '_' . rand() . time() . '.' . $ext2;
          $file2->move($path2, $filename2);
        }
            

        if($request->has('pImage1') && $request->has('pImage2')){
            $file1=$request->pImage1;
            $ext1 = $file1->Extension();
            $file_name1 = $name . '_1' . '_' . rand() . time() . '.' . $ext1;
            $file1->move(public_path('storage\products'), $file_name1);
            $file2 = $request->pImage2;
            $ext2 = $file2->extension();
            $file_name2 = $name . '_2' . '_' . rand() . time() . '.' . $ext2;
            $file2->move(public_path('storage\products'), $file_name2);
        }


        // if ($request->has('pImage1')) {
        //     // $products->pImage1 = $request->pImage1;
        //     // $products->pImage2 = $request->pImage2;
        //     // var_dump($request->pImage1);
        //     $file1 = $request->pImage1;
        //     // $file1 = $request->file('pImage1');
        //     $ext1 = $file1->Extension();
        //     $file_name1 = $name . '_1' . '_' . rand() . time() . '.' . $ext1;
        //     $file1->move(public_path('storage\products'), $file_name1);
        // }
        // if ($request->hasFile('pImage2')) {
        //     $file2 = $request->pImage2;
        //     $ext2 = $file2->extension();
        //     $file_name2 = $name . '_2' . '_' . rand() . time() . '.' . $ext2;
        //     $file2->move(public_path('storage\products'), $file_name2);
        // }
        $products->pImage1 = $file_name1;
        $products->pImage2 = $file_name2;

        $products->update_at = now();
        $products->save();
        //Storage::makeDirectory(public_path('storage/products/{pID}'));
       
        
        foreach ($request->CategoryIDs as $c) {
            $addC = Category::find($c);
            $products->Category()->attach($c);
        }
        

        return redirect()->route('admin.country.index');
    }

    public function delete($id)

    {

        $products = Product::find($id);
        $productcategories = ProductCategory::where('product_pID', $id);
        $productcategories->delete();
        
        $image1=$products->pImage1;
        $image2=$products->pImage2;
        $path=public_path('storage\products/');
        unlink($path.$image1);
        unlink($path.$image2);
        $products->delete();
        return back();
    }
}
