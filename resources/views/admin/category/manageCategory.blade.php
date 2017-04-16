@extends('admin.master')
@section('body')
<hr>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading text-center">
                            <h3>Category Info
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
                                        <th>Category Title</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php $i=1; ?>
                                    @foreach($categories1 as $category)
                                    @if($category->publicationStatus === 1)
                                    <tr class="odd gradeX" bgcolor="white" >
                                        <td>{{$i++}}</td>
                                        <td>{{$category->categoryName}}</td>
                                        <td>{!!$category->categoryTitle!!}</td>
                                        <td class="center">
                                            {{$category->publicationStatus ==1?'Published':'Unpublished'}}
                                        </td>
                                        <td class="center">
                                           @if($category->publicationStatus === 1)
                                           <a href="{{url('/unpublished/'.$category->id)}}" class="btn btn-success" title="Click to Unpublish">
                                           <span class="glyphicon glyphicon-ok center"></span></a>
                                           @elseif($category->publicationStatus === 0)
                                           <a href="{{url('/published/'.$category->id)}}" class="btn btn-danger" title="Click to publish">
                                               <span class="glyphicon glyphicon-remove"></span></a>
                                               @endif
                                        </td>
                                        <td class="center">
                                            <a href="{{url('/edit-Category/'.$category->id)}}" class="btn btn-info" title="Edit">
                                                <span class="glyphicon glyphicon-pencil"></span></a>
                                           
                                        </td>
                                    </tr>
                                  @elseif($category->publicationStatus === 0)
                                    <tr class="odd gradeX" bgcolor="gray" >
                                        <td>{{$i++}}</td>
                                        <td>{{$category->categoryName}}</td>
                                        <td>{!!$category->categoryTitle!!}</td>
                                        <td class="center">
                                            {{$category->publicationStatus ==1?'Published':'Unpublished'}}
                                        </td>
                                        <td class="center">
                                           @if($category->publicationStatus === 1)
                                           <a href="{{url('/unpublished/'.$category->id)}}" class="btn btn-success" title="Click to Unpublish">
                                           <span class="glyphicon glyphicon-ok center"></span>
                                           <input type='hidden' name='pubcategoryId' value='0'>
                                           </a>
                                           @elseif($category->publicationStatus === 0)
                                           <a href="{{url('/published/'.$category->id)}}" class="btn btn-danger" title="Click to publish">
                                               <span class="glyphicon glyphicon-remove"></span>
                                           <input type='hidden' name='unpubcategoryId' value='1'>
                                           </a>
                                               @endif
                                        </td>
                                        <td class="center">
                                            <a href="{{url('/edit-Category/'.$category->id)}}" class="btn btn-info" title="Edit">
                                                <span class="glyphicon glyphicon-pencil"></span></a>
                                            </a>
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
