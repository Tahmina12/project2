<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BackgroundImage;

class ImageController extends Controller
{
    public function BackgroundImageUpload(){
        return view('admin.BackgroundImage.BackgroundImageUpload');
    }
    public function storeImage(Request $request){
        $this->validate($request,[
            'backgroundImage'=>'required',
        ]);
        $bgImage=$request->file('backgroundImage');
        $bgImageName=$bgImage->getClientOriginalName();
        $uploadPath = 'public/backgroundImage/';
        $bgImage->move($uploadPath,$bgImageName);
        $imageUrl = $uploadPath.$bgImageName;
        $backgroundImage=new BackgroundImage();
        $backgroundImage->backgroundImage=$imageUrl;
        $backgroundImage->save();
        return view('admin.BackgroundImage.BackgroundImageUpload')->with(['message'=>'Save Successfully']);
    }
}
