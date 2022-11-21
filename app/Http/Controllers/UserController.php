<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\District;
use App\Models\Ward;
use App\Models\Province;

class UserController extends Controller
{

    public function show()
    {
        $data['province'] = Province::get();
        return view('auth.register', $data); //return register page
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchDistrict(Request $request)
    {
        $data['district'] = District::where("provinceid", $request->provinceid)
            ->get();
        return response()->json($data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchWard(Request $request)
    {
        $data['ward'] = Ward::where("districtid", $request->districtid)
            ->get();
        return response()->json($data);
    }



    public function showLogin()
    {
        return view('auth.login'); //return login page
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $remember = $request->remember;
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $remember)) {
            if (Auth::user()->role == 2) {
                return view('home');
            } else {
                return view('admin');
            }
        }
    }
    public function store(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email|max:100',
                'name' => 'required|min:6|max:1000',
                'uImage' => 'required|image|mimes:jpg,jpeg,png|max:1000',
                'password' => 'required|confirmed|max:16|min:6',
                'uPhoneNumber' => 'required|max:11|min:10',
            ]
        );
        if ($validator)
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
        $newUser = new User;
        $newUser->uName = $request->fullname;
        $newUser->uEmail = $request->email;
        $newUser->uUsername = $request->username;
        $newUser->uPassword = $request->password;
        $newUser->uPhoneNumber = $request->phonenumber;
        $name = $request->fullname;
        $username = $request->username;
        if ($request->hasFile('uImage')) {
            $file = $request->uImage;
            $ext = $file->extension();
            $filename = $name . '_' . $username . '_' . '.' . $ext;
            $file->move(public_path('storage\users'), $filename);
        } else {
            $fileName = 'default-avatar-user.jpg'; //ảnh default 612x612
        }
        $newUser->uImage = $fileName;
        $default_status = 1;
        $default_Money = 0;
        $default_Role = 2;
        $newUser->roleid = $default_Role;
        $newUser->wardid = $request->number;

        //set address complex
        $newUser->provinceid = $request->provinceid;
        $newUser->districtid = $request->districtid;
        $newUser->wardid = $request->wardid;
        //
        $newUser->status = $default_status;
        $newUser->uMoney = $default_Money;
        $newUser->save();
        dd($newUser);
        die();
        return redirect()->route('auth.login')->with('message', 'Create success!');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login');
    }
}
