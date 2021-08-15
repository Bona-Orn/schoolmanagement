@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->

		<!-- Main content -->
		<section class="content">
		  <div class="row">



    <div class="col-12">

        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">User List</h3>
            <a href="{{ route('users.add')}}" style="float: right; background-color: #535561; color: white; border: #535561" class="btn btn-rounded btn-success mb-5"><i class="glyphicon glyphicon-plus"></i> Add User</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="50px" class="text-center">No</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th width="200px" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allData as $key => $user)
                    <tr>
                        <th class="text-center">{{ $key+1 }}</th>
                        <td>{{ $user->usertype }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('users.edit', $user->id)}}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                            <a href="{{ route('users.delete', $user->id)}}" id="delete" class="btn btn-danger" style="background-color: #535561; color: white; border: #535561"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
                
                </table>
            </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
	  </div>




@endsection