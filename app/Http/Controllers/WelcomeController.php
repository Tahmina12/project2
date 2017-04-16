<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\subCategory;
use DB;

class WelcomeController extends Controller
{
    //
    public function index(){
        $news = DB::table('news')
                ->join('categories','categories.id', '=', 'news.categoryId')
                ->join('sub_categories','sub_categories.id', '=', 'news.subcategoryId')
                
                ->select('news.*', 'categories.categoryName','sub_categories.subCategoryName')
                ->where('news.publicationStatus','=',1)
                ->get();
       return view('frontEnd.home.home_content',['news'=>$news]);
    }
    public function category($id){
        $publishedCategoryNews=News::where('categoryId',$id)
                ->where('publicationStatus',1)
                ->get();
       return view('frontEnd.category.events_content',['publishedCategoryNews'=>$publishedCategoryNews]);
    }
    public function breakings(){
       return view('frontEnd.category.breakings_content');
    }
    public function business(){
       return view('frontEnd.category.business_content');
    }
     public function entertainment(){
       return view('frontEnd.category.entertainment_content');
    }
    public function contact(){
       return view('frontEnd.category.contact_content');
    }
    public function newsdetails($id){
        
        $newsById=News::find($id);
        $sum=1;
        $view_count1=$newsById->view_count+$sum;
        $newsById->view_count=$view_count1;
        $newsById->update();
        return view('frontEnd.news.newsdetails',['newsById'=>$newsById]);
    }
   
}
