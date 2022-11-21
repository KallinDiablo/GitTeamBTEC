<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use PHPUnit\Framework\MockObject\DuplicateMethodException;
use Exception;

class RoleController extends Controller
{
public function index()

{

$roles=Role::paginate(10);

return view('admin.role.roles', compact('roles'));

}

public function indexpostCreate(Request $request){
    try{
        $role = new Role;
        $role->roleName= $request->roleName;
        $role->save();
        return view('admin.role.index')->with('successfully','add completely');
    }catch(DuplicateMethodException ){
        throw new Exception("This product is already existed");
    }
    
}
public function delete($id){
    $role= Role::Find($id);
    $role->delete();
    return back();
}
}
