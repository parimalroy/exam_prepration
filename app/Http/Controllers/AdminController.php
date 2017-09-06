<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller {

    public function index() {
        return view('admin.login.loginContent');
    }

    public function adminDeshboard() {
        return view('admin.home.homeContent');
    }

    public function adminLogin(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $cheakAdmin = DB::table('tbl_admin')
                ->select('*')
                ->where('email', $email)
                ->where('password', md5($password))
                ->first();

        if ($cheakAdmin) {
            Session::put('admin_id',$cheakAdmin->id);
            Session::put('admin_name',$cheakAdmin->name);
            return redirect('admin-deshboard');
        } else {
            return redirect('admin-login')->with('message', 'Your User Name or Password Invalid!!');
        }
    }
    public function adminLogut(){
        Session::put('admin_id','');
        Session::put('admin_name','');
        return redirect('admin-login')->with('message','Log out Sucessfully');
    }

}
