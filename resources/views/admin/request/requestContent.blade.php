@extends('admin.adminMaster')
@section('title')
Approve-Request
@endsection
@section('body')
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading text-center">
                            <h3>Request Info
                            {{Session::get('message')}}
                            </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table  table-bordered " id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Person Name</th>
                                        <th>Person Email</th>
                                        <th>Employeer</th>
                                       
                                        <th>User</th>
                                        <th>Action</th>
                                     
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php $i=1; ?>
                                    @foreach($users as $user)
                                 
                                    <tr class="odd gradeX" bgcolor="white" >
                                        <td>{{$i++}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td class="center">
                                           <a href="{{url('admin/request/approval/employee/'.$user->id)}}" class="btn btn-info" title="Make Employee">
                                                <span class="glyphicon glyphicon-lock"></span></a>
                                        </td>
                                        
                                        <td class="center">
                                           <a href="{{url('admin/request/approval/user/'.$user->id)}}" class="btn btn-info" title="Make User">
                                                <span class="glyphicon glyphicon-user"></span></a>
                                        </td>
                                        <td class="center">
                                           <a href="{{url('admin/request/approval/remove'.$user->id)}}" class="btn btn-danger" title="Delete">
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
