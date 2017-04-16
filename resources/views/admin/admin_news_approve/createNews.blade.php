@extends('admin.master')
@section('body')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-green">

            <div class="panel-heading">
                <h3 class="text-center">News {{Session::get('message')}}</h3>
            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'new-news','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'subCategoryId']) !!}
                <div class="form-group">
                    <label class="control-label col-md-3">Select News Category </label>
                    <div class="col-md-9">
                        <select class="form-control" name="categoryId" class="categoryId"  >
                            <option value=" ">--Select Category Name--</option>
                            @foreach($publishedCategories as $publishedCategory)
                            <option value="{{$publishedCategory->id}}">{{$publishedCategory->categoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Select News Sub Category</label>
                    <div class="col-md-9">
                        <select class="form-control" name="subcategory" id="subcategory" >
                            <option>--Select Sub Category Name</option>
                            @foreach($subcategories as $subCategory)
                            <option  value="{{$subCategory->SelectCategoryId}}">{{$subCategory->subCategoryName}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Title</label>
                    <div class="col-md-9">
                        <input type="text" name="newsTitle" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Author Name</label>
                    <div class="col-md-9">
                        <input type="text" name="authorName" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Short Description</label>
                    <div class="col-md-9">
                        <textarea name="newsShortDescription" class="form-control"  rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Long Description</label>
                    <div class="col-md-9">
                        <textarea name="newsLongDescription" class="form-control"  rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Publication Status</label>
                    <div class="col-md-9">
                        <select class="form-control" name="publicationStatus">
                            <option value=" ">--Select Category Name--</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Image</label>
                    <div class="col-md-9">
                        <input type="file" name="newsImage">
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-md-offset-3 col-md-9">
                        <input type="checkbox" name="breakingNews" value="1">
                        <label class="control-label">Add this news title as breaking news</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type='submit' name='btn' value='Send News Info' class="btn btn-success btn-block">
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
<!--<script src="{{asset('public/admin')}}/jquery-3.1.1.min.js"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('change','.categoryId',function(){
        console.log('hmm its change');
    });
});
</script>-->
@endsection

