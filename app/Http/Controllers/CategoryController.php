<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategory()
    {
        //
        return view('admin.category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $this->validate($request,[
            'categoryName'=>'required',
            'categoryTitle'=>'required',         
            'publicationStatus'=>'required',
        ]);
        //return $request->all();
        $category = new Category();
        $category->categoryName=$request->categoryName;
        $category->categoryTitle=$request->categoryTitle;
        $category->publicationStatus=$request->publicationStatus;
        $category->save();
        return redirect('/add-category')->with('message','Info Save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCategory()
    {
        $categories1=Category::all();
        return view('admin.category.manageCategory',['categories1'=>$categories1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCategory($id)
    {
       $category=Category::where('id',$id)->first();
        return view('admin.category.editCategory',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request)
    {
       $category= Category::find($request->categoryId);
       $category->categoryName=$request->categoryName;
       $category->categoryTitle=$request->categoryTitle;
       $category->publicationStatus=$request->publicationStatus;
       $category->save();
       return redirect('/manage-category')->with('message','Updated Successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publishedCategory($id)
    {
        DB::table('categories')
                ->where('id',$id)
                ->update(['publicationStatus'=>'1']);
       
       return redirect('/manage-category')->with('message','Published Successfully');
    }
    public function unpublishedCategory($id)
    {
       DB::table('categories')
                ->where('id',$id)
                ->update(['publicationStatus'=>'0']);
       return redirect('/manage-category')->with('message','UnPublished Successfully');
    }
    
}
