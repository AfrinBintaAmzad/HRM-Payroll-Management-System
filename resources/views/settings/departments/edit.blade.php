
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Department</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Department</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection  
  
@section('main_content')


  
   <div class="container-fluid">
   
        <div class="row">
            <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Department</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('update_department') }}" >
            @csrf
            <div class="card-body">

            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden"  class="form-control" id="id" name="id"  value="{{ $department_info->id }}" >
                <input type="text" autocomplete="off" class="form-control" id="dept_name" name="dept_name" placeholder="dept_name" value="{{ $department_info->dept_name }}" >
              </div>  

              <div class="form-group">
                <label for="">Company Account</label>
                <input type="text" autocomplete="off" class="form-control" id="dept_short_name" name="dept_short_name" placeholder="dept_short_name" value="{{ $department_info->dept_short_name }}">
              </div>  

            <div class="form-group">
                <label for="">Branch Name</label>
                <input type="text" autocomplete="off" class="form-control" id="dep_description" name="dep_description" placeholder="dep_description" value="{{ $department_info->dep_description }}">
              </div>  

        

     

        <!--
              <div class="form-group">
                <label for="exampleInputFile">Company Logo</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
        -->      
             
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="{{ route('department_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
              
            </div>
          </form>
        </div>
        <!-- /.card -->

           

      </div>
      <!--/.col (left) -->
        </div>

   
    </div>
    <!-- /.row -->
   
    
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
@endsection   