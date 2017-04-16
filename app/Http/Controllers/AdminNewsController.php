<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use App\Category;
use App\subCategory;
use App\User;
use App\Admin;

class AdminNewsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth:admin');
        $newsInfos = News::where('publicationStatus', NULL)->get();
        return view('admin.includes.adminMenu', ['newsInfo' => $newsInfos]);
    }

    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function manageNewsRequest() {
        //
        $newsInfos = News::where('publicationStatus', NULL)->get();
        $users = User::where('role', 0)->get();
       
        
        
        
        $news1 = DB::table('news')
                 ->join('categories','categories.id', '=', 'news.categoryId')
                ->join('sub_categories','sub_categories.id', '=', 'news.subcategoryId')
                ->select('news.*', 'categories.categoryName','sub_categories.subCategoryName') 
        
               // ->join('categories','categories.id', '=', 'news.categoryId')
               // ->join('sub_categories','sub_categories.SelectCategoryId', '=', 'news.subcategoryId')
               // ->select('news.*', 'categories.categoryName','sub_categories.subCategoryName')
               ->get();
       

        return view('admin.admin_news_approve.manageNewsRequest', ['news1' => $news1, 'users' => $users, 'newsInfos' => $newsInfos]);
    }
     public function showNewsRequest($id) {
        //
        $newsInfos = News::where('publicationStatus', NULL)->get();
        $users = User::where('role', 0)->get();

        $viewNewsInfo = DB::table('news')
                ->where('news.id', $id)
                ->join('categories', 'categories.id', '=', 'news.categoryId')
                ->join('sub_categories', 'sub_categories.id', '=', 'news.subcategoryId')
                ->select('news.*', 'categories.categoryName', 'sub_categories.subCategoryName')
                ->first();
        

        return view('admin.admin_news_approve.viewNews', ['viewNewsInfo' => $viewNewsInfo, 'users' => $users, 'newsInfos' => $newsInfos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unpublishedNewsRequest($id) {
        DB::table('news')
                ->where('id', $id)
                ->update(['publicationStatus' => '0']);
        return redirect('admin/manage-news')->with('message', 'Unpublished Successfully');
    }

    public function publishedNewsRequest($id) {
        DB::table('news')
                ->where('id', $id)
                ->update(['publicationStatus' => '1']);
        return redirect('admin/manage-news')->with('message', 'Published Successfully');
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateNewsRequest() {
         $newsInfos = News::where('publicationStatus', NULL)->get();
        $users = User::where('role', 0)->get();

     $news1 = DB::table('news')
                 ->join('categories','categories.id', '=', 'news.categoryId')
                ->join('sub_categories','sub_categories.id', '=', 'news.subcategoryId')
                ->select('news.*', 'categories.categoryName','sub_categories.subCategoryName') 
            ->get();

//$category->categoryName=$request->categoryName;
//       $category->categoryTitle=$request->categoryTitle;
//       $category->publicationStatus=$request->publicationStatus;
        return view('admin.admin_news_approve.manageNewsRequest', ['news1' => $news1, 'users' => $users, 'newsInfos' => $newsInfos])->with('message','News Info Update Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
