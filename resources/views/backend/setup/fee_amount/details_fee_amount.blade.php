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
            <h3 class="box-title">Fee Amount Details</h3>
            <a href="{{ route('fee.amount.add')}}" style="float: right; background-color: #535561; color: white; border: #535561" class="btn btn-rounded btn-success mb-5"><i class="glyphicon glyphicon-plus"></i> Add Fee Amount</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <h4><strong>Fee Category <i class="glyphicon glyphicon-play"></i> </strong>{{ $detailsData['0']['fee_category']['name'] }}</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th width="50px" class="text-center">No</th>
                        <th class="text-center">Class Name</th>
                        <th width="300px" class="text-center">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($detailsData as $key => $detail)
                    <tr>
                        <th class="text-center">{{ $key+1 }}</th>
                        <td>{{ $detail['student_class']['name'] }}</td>
                        <td>{{ $detail->amount }}</td>
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