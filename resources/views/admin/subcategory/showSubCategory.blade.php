@extends('admin.master')
@section('title')
SubCategory-Info
@endsection
@section('body')
<hr>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading text-center">
                            <h3>Sub-Category Info
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
                                        <th>Sub-Category Title</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php $i=1; ?>
                                    @foreach($subCategories as $subcategory)
                                 
                                    <tr class="odd gradeX" bgcolor="white" >
                                        <td>{{$i++}}</td>
                                        <td>{{$subcategory->categoryName}}</td>
                                        <td>{{$subcategory->subCategoryName}}</td>
                                        <td>{!!$subcategory->subCategoryTitle!!}</td>
                                        <td class="center">
                                            {{$subcategory->publicationStatus ==1?'Published':'Unpublished'}}
                                        </td>
                                        
                                        <td class="center">
                                            <a href="{{url('/edit-subCategory/'.$subcategory->id)}}" class="btn btn-info" title="Edit">
                                                <span class="glyphicon glyphicon-edit"></span></a>
                                           
                                       
                                      
                                            <a href="{{url('/delete-subCategory/'.$subcategory->id)}}" class="btn btn-danger" title="Edit">
                                                <span class="glyphicon glyphicon-remove-sign"></span></a>
                                           
                                        </td>
                                    </tr>
                                 
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