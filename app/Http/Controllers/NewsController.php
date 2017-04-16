<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;
use App\subCategory;
use DB;

class NewsController extends Controller {

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
    public function createNews() {
        //
        $newsInfo = DB::table('categories')
                ->join('sub_categories', 'sub_categories.SelectCategoryId', '=', 'categories.id')
                ->select('categories.categoryName', 'categories.id', 'sub_categories.SelectCategoryId', 'sub_categories.subCategoryName')
                ->get();
        $publishedCategories = Category::where('publicationStatus', 1)->get();
        $subcategories = subCategory::all();
        return view('admin.news.createNews', ['publishedCategories' => $publishedCategories, 'subcategories' => $subcategories, 'newsInfo' => $newsInfo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNews(Request $request) {
        //
        $this->validate($request,[
            'categoryId' => 'required',
            'subcategoryId' => 'required',
            'newsTitle' => 'required',
            'authorName' => 'required',
            'newsShortDescription' => 'required',
            'newsLongDescription' => 'required',
     
         
        ]);
        
        $newsImage = $request->file('newsImage');
        $imageName = $newsImage->getClientOriginalName();
        $uploadPath = 'public/newsImages/';
        $newsImage->move($uploadPath, $imageName);
        $imageUrl = $uploadPath . $imageName;
        $news = new News();
        $news->categoryId = $request->categoryId;
        $news->subcategoryId = $request->subcategoryId;
        $news->newsTitle = $request->newsTitle;
        $news->authorName = $request->authorName;
        $news->newsShortDescription = $request->newsShortDescription;
        $news->newsLongDescription = $request->newsLongDescription;
        $news->addVideo=$request->addVideo;
        $news->newsImage = $imageUrl;
        $news->breakingNews = $request->breakingNews;
        $news->save();
        return redirect('/add-news')->with('message', 'Info Save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showNews() {
        //
        $newsInfo = DB::table('news')
                ->join('categories', 'categories.id', '=', 'news.categoryId')
                ->join('sub_categories', 'sub_categories.id', '=', 'news.subcategoryId')
                ->select('news.*', 'categories.categoryName', 'sub_categories.subCategoryName')
                ->get();
        return view('admin.news.manageNews', ['newsInfo' => $newsInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
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
