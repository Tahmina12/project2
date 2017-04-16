@extends('admin.master')
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

                        </tr>
                    </thead>
                    <tbody >
                        <?php $i = 1; ?>
                        @foreach($newsInfo as $news)
                        @if($news->publicationStatus === NULL)
                        <tr class="odd gradeX" bgcolor="Burlywood" >
                            <td>{{$i++}}</td>
                            <td>{{$news->categoryName}}</td>
                            <td>{{$news->subCategoryName}}</td>
                            <td>{{$news->newsTitle}}</td>
                            <td>{{$news->authorName}}</td>

                            <td class="center">
                                @if($news->publicationStatus === NULL)
                                <?php echo 'Pending'; ?>
                                @elseif($news->publicationStatus === 0)
                                <?php echo 'Unpublished'; ?>  
                                @elseif($news->publicationStatus === 1)
                                <?php echo 'published'; ?> 
                                @endif

                            </td>

                        </tr>
                        @elseif($news->publicationStatus === 0)
                        <tr class="odd gradeX" bgcolor="red" style="color:white;" >
                            <td>{{$i++}}</td>
                            <td>{{$news->categoryName}}</td>
                            <td>{{$news->subCategoryName}}</td>
                            <td>{{$news->newsTitle}}</td>
                            <td>{{$news->authorName}}</td>

                            <td class="center">
                                
                                @if($news->publicationStatus === 0)
                                <?php echo 'Unpublished'; ?>  
                                @endif

                            </td>

                        </tr>
                        @elseif($news->publicationStatus === 1)
                        <tr class="odd gradeX" bgcolor="Skyblue" >
                            <td>{{$i++}}</td>
                            <td>{{$news->categoryName}}</td>
                            <td>{{$news->subCategoryName}}</td>
                            <td>{{$news->newsTitle}}</td>
                            <td>{{$news->authorName}}</td>

                            <td class="center">
                               
                                @if($news->publicationStatus === 1)
                                <?php echo 'published'; ?> 
                                @endif

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
