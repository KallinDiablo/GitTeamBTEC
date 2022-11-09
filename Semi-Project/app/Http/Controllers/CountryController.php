<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;


class CountryController extends Controller
{
    public function index()

{

$countries=Country::paginate(10);

return view('admin.country.listCountry', compact("countries"));

}

public function getCreate()

{

return view('admin.country.createCountry');

}

//Hàm store để thêm dữ liệu

public function postCreate(Request $request)

{
    $countries = new Country;

    $countries->cName = $request->cName;
    
    $countries->save();
    
    return redirect()->route('admin.country.index')->with('status', 'Country created successfully.');
}
public function getEditCate($cID)

{

$data['cate'] = Country::find($cID);

return view('admin.country.editCountry',$data);

}

public function postEditCate(Request $request,$cID)

{

$countries = Country::find($cID);

$countries->cName = $request->cName;


$countries->save();

return redirect()->route('admin.country.index');

}

public function delete($id)

{

$countries = Country::find($id);

$countries->delete();

return back();

}
}
