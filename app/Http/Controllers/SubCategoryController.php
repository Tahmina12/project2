<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\subCategory;
use DB;

class SubCategoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSubCategory() {
        //
        $publishedCategories = Category::where('publicationStatus', 1)->get();
        return view('admin.subcategory.createSubCategory', ['publishedCategories' => $publishedCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSubCategory(Request $request) {
        $subCategory = new subCategory();
        $subCategory->SelectCategoryId = $request->SelectCategoryId;
        $subCategory->subCategoryName = $request->subCategoryName;
        $subCategory->subCategoryTitle = $request->subCategoryTitle;
        $subCategory->publicationStatus = $request->publicationStatus;
        $subCategory->save();
        return redirect('/sub-category')->with('message', 'Info Save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSubCategory() {

        $subCategories = DB::table('categories')
                ->join('sub_categories', 'sub_categories.SelectCategoryId', '=', 'categories.id')
                ->select('sub_categories.*', 'categories.categoryName')
                ->get();
        return view('admin.subcategory.showSubCategory', ['subCategories' => $subCategories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSubCategory($id) {
        $subcategory_info = subCategory::where('id', $id)->first();
        return view('admin.subcategory.editSubCategory', ['subcategory_info' => $subcategory_info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSubCategory(Request $request) {
        //
        $subCategory = subCategory::find($request->subCategoryId);
        $subCategory->subCategoryName = $request->subCategoryName;
        $subCategory->subCategoryTitle = $request->subCategoryTitle;
        $subCategory->publicationStatus = $request->publicationStatus;
        $subCategory->save();
        return redirect('/manage/sub-category')->with('message', 'SubCategory Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteSubCategory($id) {
        $subCategory = subCategory::where('id', $id)->first();
        $subCategory->delete();
        return redirect('/manage/sub-category')->with('message', ' Successfully Deleted');
    }

}
