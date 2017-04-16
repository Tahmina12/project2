@extends('admin.adminMaster')
@section('body')
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                <h3>News Request Info
                    {{Session::get('message')}}
                </h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table  table-bordered " id="dataTables-example">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Category Name</th>
                            <th>Sub-Category Name</th>
                            <th>News Title</th>
                            <th>Author Name</th>
                           
                            <th>Publication Status</th>
                            <th>Action</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php $i = 1; ?>
                        @foreach($news1 as $newsInfo)
                     @if($newsInfo->publicationStatus === NULL)
                        <tr class="odd gradeX" bgcolor="PowderBlue" >
                            <td>{{$i++}}</td>
                            <td>{{$newsInfo->categoryName}}</td>
                            <td>{{$newsInfo->subCategoryName}}</td>
                            <td>{{$newsInfo->newsTitle}}</td>
                            <td>{{$newsInfo->authorName}}</td>
                            
                            <td class="center">
                                @if($newsInfo->publicationStatus === NULL)
                                <?php echo 'Pending'; ?>
                                @elseif($newsInfo->publicationStatus === 0)
                                <?php echo 'Unpublished'; ?>  
                                @elseif($newsInfo->publicationStatus === 1)
                                <?php echo 'published'; ?> 
                                @endif

                            </td>
                            <td class="center">
                                @if($newsInfo->publicationStatus === NULL)
                                <a href="{{url('admin/newsinfo/unpublished/'.$newsInfo->id)}}" class="btn btn-danger" title="Click to Unpublish">
                                    <span class="glyphicon glyphicon-remove center"></span></a>

                                <a href="{{url('admin/newsinfo/published/'.$newsInfo->id)}}" class="btn btn-success" title="Click to publish">
                                    <span class="glyphicon glyphicon-ok"></span></a>
                              
                                           @elseif($newsInfo->publicationStatus == 1)
                                           <a href="{{url('admin/newsinfo/unpublished/'.$newsInfo->id)}}" class="btn btn-success" title="Click to Unpublish">
                                           <span class="glyphicon glyphicon-ok center"></span></a>
                                           @elseif($newsInfo->publicationStatus === 0)
                                           <a href="{{url('admin/newsinfo/published/'.$newsInfo->id)}}" class="btn btn-danger" title="Click to publish">
                                               <span class="glyphicon glyphicon-remove"></span></a>
                                             
                                  
                                @endif
                            </td>
                            <td class="center">
                                <a href="{{url('admin/edit/news/Category/'.$newsInfo->id)}}" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-pencil"></span></a>

                            </td>
                        </tr>
                        

        @elseif($newsInfo->publicationStatus === 1)              
   <tr class="odd gradeX" bgcolor="skyblue" >
                            <td>{{$i++}}</td>
                            <td>{{$newsInfo->categoryName}}</td>
                            <td>{{$newsInfo->subCategoryName}}</td>
                            <td>{{$newsInfo->newsTitle}}</td>
                            <td>{{$newsInfo->authorName}}</td>
                            
                            <td class="center">
                                @if($newsInfo->publicationStatus === NULL)
                                <?php echo 'Pending'; ?>
                                @elseif($newsInfo->publicationStatus === 0)
                                <?php echo 'Unpublished'; ?>  
                                @elseif($newsInfo->publicationStatus === 1)
                                <?php echo 'published'; ?> 
                                @endif

                            </td>
                            <td class="center">
                                @if($newsInfo->publicationStatus === 1)
                                <a href="{{url('admin/newsinfo/unpublished/'.$newsInfo->id)}}" class="btn btn-danger" title="Click to Unpublish">
                                    <span class="glyphicon glyphicon-remove center"></span></a>

                                @endif
                            </td>
                            <td class="center">
                                <a href="{{url('admin/edit/news/Category/'.$newsInfo->id)}}" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-pencil"></span></a>

                            </td>
                        </tr>
                         @elseif($newsInfo->publicationStatus === 0)              
   <tr class="odd gradeX" bgcolor="red" >
                            <td>{{$i++}}</td>
                            <td>{{$newsInfo->categoryName}}</td>
                            <td>{{$newsInfo->subCategoryName}}</td>
                            <td>{{$newsInfo->newsTitle}}</td>
                            <td>{{$newsInfo->authorName}}</td>
                            
                            <td class="center">
                                @if($newsInfo->publicationStatus === NULL)
                                <?php echo 'Pending'; ?>
                                @elseif($newsInfo->publicationStatus === 0)
                                <?php echo 'Unpublished'; ?>  
                                @elseif($newsInfo->publicationStatus === 1)
                                <?php echo 'published'; ?> 
                                @endif

                            </td>
                            <td class="center">
                                @if($newsInfo->publicationStatus === 0)
                               
                                <a href="{{url('admin/newsinfo/published/'.$newsInfo->id)}}" class="btn btn-success" title="Click to publish">
                                    <span class="glyphicon glyphicon-ok"></span></a>
                              
                                @endif
                            </td>
                            <td class="center">
                                <a href="{{url('admin/edit/news/Category/'.$newsInfo->id)}}" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-pencil"></span></a>

                            </td>
                        </tr>
        @endif                
        @endforeach
                    </tbody>
                </table>
                <!-- /.table-responsive -->

                <!--<a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>-->
            </div>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->

@endsection
