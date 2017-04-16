@extends('admin.adminMaster')
@section('body')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-green">

            <div class="panel-heading">
                <h3 class="text-center">News Details{{Session::get('message')}}</h3>
            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'admin/update-news/'.$viewNewsInfo->id,'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'newsDetailsInfo']) !!}
                <div class="form-group">
                    <label class="control-label col-md-3">News Id</label>
                    <div class="col-md-9">
                        <input type="text" name="newsTitle" value="{{$viewNewsInfo->id}}" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Category Name</label>
                    <div class="col-md-9">
                        <input type="text" name="newsTitle" value="{{$viewNewsInfo->categoryName}}" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Sub-Category Name</label>
                    <div class="col-md-9">
                        <input type="text" name="newsTitle" value="{{$viewNewsInfo->subCategoryName}}" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Title</label>
                    <div class="col-md-9">
                        <input type="text" name="newsTitle" value="{{$viewNewsInfo->newsTitle}}" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Author Name</label>
                    <div class="col-md-9">
                        <input type="text" name="newsTitle" value="{{$viewNewsInfo->authorName}}" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Short Description</label>
                    <div class="col-md-9">
                        <textarea name="newsShortDescription" class="form-control"  rows="5">{{$viewNewsInfo->newsShortDescription}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">News Long Description</label>
                    <div class="col-md-9">
                        <textarea name="newsLongDescription" class="form-control"  rows="10">{!!$viewNewsInfo->newsLongDescription!!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Video of news</label>
                    <div class="col-md-9">
                        <textarea name="addVideo" class="form-control"  rows="10">{!!$viewNewsInfo->addVideo!!}</textarea>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-md-3">Publication Status</label>
                    <div class="col-md-9">
                        <select class="form-control" name="publicationStatus">
                            
                            <option value="NULL">Pending</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-md-3">News Image</label>
                    <div class="col-md-9">
                         <img src="{{asset($viewNewsInfo->newsImage)}}" alt="" height="400" width="700">
                    </div>
                </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Status of Breaking News</label>
                    <div class="col-md-9">
                        <select class="form-control" name="breakingNews"> 
                            <option value="NULL">Not Marked For Breaking News</option>
                            <option value="1">Marked For Breaking News</option>
                            
                        </select>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type='submit' name='btn' value='Back News Info' class="btn btn-success btn-block">
                    </div>
                </div>
                {!!Form::close()!!}
                
                
            </div>
        </div>
    </div>
</div>
<script>
 

document.forms['newsDetailsInfo'].elements['publicationStatus'].value={{$viewNewsInfo->publicationStatus}};
document.forms['newsDetailsInfo'].elements['breakingNews'].value={{$viewNewsInfo->breakingNews}};

</script>
@endsection