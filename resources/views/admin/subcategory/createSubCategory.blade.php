@extends('admin.master')
@section('body')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">Sub Category{{Session::get('message')}} </h3>
            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'newsub-category','method'=>'POST','class'=>'form-horizontal'])!!}
                <div class="form-group">
                    <label class="control-label col-md-3">Select Category</label>
                    <div class="col-md-9">
                        <select class="form-control" name="SelectCategoryId">
                            <option value=" ">--Select Category--</option>
                            @foreach($publishedCategories as $publishedCategory)
                            <option value="{{$publishedCategory->id}}">{{$publishedCategory->categoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Sub Category Name</label>
                    <div class="col-md-9">
                        <input type='text' name='subCategoryName' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Sub Category Title</label>
                    <div class="col-md-9">
                        <textarea name='subCategoryTitle' class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Publication Status</label>
                    <div class="col-md-9">
                        <select class="form-control" name='publicationStatus'>
                            <option value=" ">--Select publication Status--</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type='submit' name='btn' value="Save Subcategory Info" class="btn btn-info btn-block">
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
