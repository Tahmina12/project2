@extends('admin.master')
@section('title')
Edit-Sub Category
@endsection
@section('body')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-body">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <hr/>
                {!!Form::open(['url'=>'update-subcategory','method'=>'POST','class'=>'form-horizontal','name'=>'editsubCategoryForm'])!!}
                
                <div class="form-group">
                    <label class="control-label col-md-3">Sub Category Name</label>
                    <div class="col-md-9">
                        <input type='text' name='subCategoryName' value='{{$subcategory_info->subCategoryName}}' class="form-control">
                        <input type='hidden' name='subCategoryId' value='{{$subcategory_info->id}}' class="form-control">
                        <span class="text-danger">{{$errors->has('subCategoryName')? $errors->first('subCategoryName'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Sub Category Title</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name='subCategoryTitle'>{{$subcategory_info->subCategoryTitle}}</textarea>
                        <span class="text-danger">{{$errors->has('subCategoryTitle')? $errors->first('subCategoryTitle'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Publication Status</label>
                    <div class="col-md-9">
                        <select class="form-control" name='publicationStatus'>
                            <option value=''>--Select Publication Status--</option>
                            <option value='1'>Published</option>
                            <option value='0'>Unpublished</option>
                        </select>
                        <span class="text-danger">{{$errors->has('publicationStatus')? $errors->first('publicationStatus'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type='submit' name='btn' value='Update Category Info' class="btn btn-success btn-block">
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
<script>
document.forms['editsubCategoryForm'].elements['publicationStatus'].value={{$subcategory_info->publicationStatus}}
</script>
@endsection