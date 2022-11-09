<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Product;
use App\Models\Country;
use App\Models\Category;
use App\Models\ProductCategory;
use Exception;
use PHPUnit\Framework\MockObject\DuplicateMethodException;

class ProductController extends Controller
{
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

            $products->pImage1 = $request->pImage1;

            $products->pImage2 = $request->pImage2;

            $products->pPrice = $request->pPrice;

            $products->pQuantity = $request->pQuantity;

            $products->cID = $request->cID;

            // if($request->hasFile('pImage1')){
            //     $destination_path='public/storage/products';
            //     $pImage1 = $request->file('pImage1');
            //     $pImage1_name=rand().time();
            //     $path1 =$request->file('pImage1')->storeAs($destination_path,$pImage1_name);
            //     $products['pImage1']= $pImage1_name;
            // }
            // if($request->hasFile('pImage2')){
            //     $destination_path='public/storage/products';
            //     $pImage2 = $request->file('pImage2');
            //     $pImage2_name=rand().time();
            //     $path2 =$request->file('pImage2')->storeAs($destination_path,$pImage2_name);
            //     $products['pImage2']= $pImage2_name;
            // }

            
            $products->update_at = null;
            $products->create_at = now();
            $products->save();

            foreach($request->CategoryIDs as $c){
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



    public function getEditCate($cID)

    {

        $data['cate'] = Country::find($cID);

        return view('admin.country.editCountry', $data);
    }

    public function postEditCate(Request $request, $cID)

    {

        $countries = Country::find($cID);

        $countries->cName = $request->cName;

        $countries->save();

        return redirect()->route('admin.country.index');
    }

    public function delete($id)

    {

        $products = Product::find($id);
        $productcategories = ProductCategory::where('product_pID',$id);
        $productcategories->delete();
        $products->delete();
        return back();
    }
}
