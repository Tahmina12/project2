@extends('admin.master')
@section('body')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">Background Image
            {{Session::get('message')}}
            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'new-Image','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
                <div class="form-group">
                    <label class="control-label col-md-3">Choose Background Image:</label>
                    <div class="col-md-9">
                        <input type='file' name='backgroundImage'>
                        <span class='text-danger'>
                            {{$errors->has('backgroundImage')?$errors->first('backgroundImage'):''}}
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type='submit' name='btn' class="btn btn-primary btn-block">
                        
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
