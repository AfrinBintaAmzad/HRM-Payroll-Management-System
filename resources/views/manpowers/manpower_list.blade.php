
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Manpower</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Manpower</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection  
  
@section('main_content')

  <div class="col-md-1">
      <a style="" href="{{ route('manpower_add') }}"><button type="button" class="btn btn-block btn-primary">Add</button></a>
  </div> 
  <br />
   <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Manpower List Item</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Job Title</th>
                <th>No of Reqruiment</th>
                <th>Submitted By</th>
                <th>Post Date</th>
                <th>Status</th>
                <th>Date Required</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                if(!empty($manpowers)){
                foreach($manpowers as $man){  ?>
                    <tr>
                      <td>{{ $man->job_title }}</td>
                      <td>{{ $man->no_of_recruitment}}</td>
                      <td>{{ $man->requisitor_name }}</td>
                      <td>{{ $man->post_date }}</td>
                      <td>{{ $man->status }}</td>
                      <td>{{ $man->date_required }}</td>
                      <td>
                        
                        <a href=""><button type="button" class="btn  btn-sm btn-primary">View</button></a>
                        <a href=""><button type="button" class="btn  btn-sm btn-success">Edit</button></a>
                        <a href=""><button type="button" class="btn  btn-sm btn-danger">Delete</button></a>
                      </td>
                    </tr>
                <?php 
                  }
                } ?>    
              
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

       
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
@endsection   