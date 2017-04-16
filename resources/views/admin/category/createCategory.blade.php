@extends('admin.master')
@section('body')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                <h3>Your  Category 
                    {{Session::get('message')}}</h3>
            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'new-category','method'=>'POST','class'=>'form-horizontal'])!!}
                <div class="form-group">
                    <label class="control-label col-md-3">Category Name</label>
                    <div class="col-md-9">
                        <input type='text' name='categoryName' class="form-control">
                        <span class="text-danger">{{$errors->has('categoryName')? $errors->first('categoryName'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Category Title</label>
                    <div class="col-md-9">
                        <textarea name='categoryTitle' class="form-control"></textarea>
                        <span class="text-danger">{{$errors->has('categoryTitle')? $errors->first('categoryTitle'):''}}</span>
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
                        <input type='submit' name='btn' value='Save Category Info' class="btn btn-success btn-block">
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
