<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\News;
use DB;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:admin');
         $newsInfos=News::where('publicationStatus',NULL)->get();
        $users = User::where('role', 0)->get();
        return view('admin.adminMaster', ['users' => $users,'newsInfos'=>$newsInfos]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::where('role', 0)->get();
         $newsInfos=News::where('publicationStatus',NULL)->get();
        return view('admin.home.AdminhomeContent', ['users' => $users,'newsInfos'=>$newsInfos]);
    }
    

    public function request() {

        $users = User::where('role', 0)->get();
        // $users=User::all();
         $newsInfos=News::where('publicationStatus',NULL)->get();
        return view('admin.request.requestContent', ['users' => $users,'newsInfos'=>$newsInfos]);
    }

//    public function saverequestforAdmin($id) {
//
//        $users = User::where('id', $id)->get();
//
//        DB::table('admins')->insert([
//            'name' => $users[name],
//            'email' => $users[email],
//            'password' => $users[password],
//        ]);
//        return redirect('admin.request.requestContent', ['message', 'Admin Added Successfully ']);
//    }

    public function saverequestforemployee($id) {
        //   $users=User::where('id',$id)->get();
        DB::table('users')
                ->where('id', $id)
                ->update(['role' => '1']);


        // return redirect('/manage-category')->with('message','Published Successfully');
        return redirect('admin/request')->with('message', 'Employee Added Successfully ');
    }

    public function saveuserrequest($id) {
        DB::table('users')
                ->where('id', $id)
                ->update(['role' => '2']);
        return redirect('admin/request')->with('message', 'User Added Successfully');
    }

}
