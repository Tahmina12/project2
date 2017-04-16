<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use View;
use App\Category;
use App\News;
use App\BackgroundImage;
use App\subCategory;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*',function($view){
           $categories= Category::where('publicationStatus',1)->get();
           $sub_categories= subCategory::where('publicationStatus',1)->get();
           $news= DB::table('news')
                   ->where('news.publicationStatus',1)
                   ->join('sub_categories','sub_categories.id','=','news.subcategoryId')
                   ->join('categories','categories.id','=','news.categoryId')
                   ->select('news.*','sub_categories.subCategoryName','sub_categories.id','categories.categoryName','categories.categoryTitle')
                   ->get();
           $mostview=News::orderBy ('view_count','desc')->take(5)
                   ->get();
          
           $allnews=DB::table('news')
                   ->where('news.publicationStatus',1)
                   ->get();
           $breakingnews=DB::table('news')
                   ->where('news.publicationStatus',1)
                   ->where('news.breakingNews',1)
                   ->get();
           $latestNews=News::orderBy('id','desc')->take(5)
                   ->where('news.publicationStatus',1)
                   ->get();
           $latestVideos=News::orderBy('id','desc')->take(1)
                   ->where('news.publicationStatus',1)
                   ->get();
           $Videos=DB::table('news')
                   ->where('news.publicationStatus',1)
                   ->whereNotNull('addVideo')
                   ->get();
           $bgImage=new BackgroundImage();
           $bgImage1=$bgImage->get();
           $view->with(['allnews'=>$allnews,'mostview'=>$mostview,'categories'=>$categories,'bgImage'=>$bgImage1,'news'=>$news,'latestNews'=>$latestNews,'latestVideos'=>$latestVideos,'Videos'=>$Videos,'sub_categories'=>$sub_categories,'breakingnews'=>$breakingnews]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
