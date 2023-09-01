@extends('layouts.app')

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Manpower</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Manpower</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection

@section('main_content')

<style>
  /* Custom CSS to make the tab content fill the entire width of the page */
  .tab-content {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
  }

  .tab-pane {
    flex-basis: 100%;
  }

  .button {
    background-color: #4CAF50;
    border: none;
    color: rgb(240, 245, 237);
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    font-size: 15px;
    margin:  2px;
    cursor: pointer;
  }
</style>

<div class="container">
<div class="tab-content">
      <!-- Service Information Tab -->
      <div class="tab-pane fade show active form-step" id="Service_information">
        <h3>Manpower Requisition Information</h3>
        <!-- Your Service Information form step content -->
        <form method="post" id="myForm" action="{{ route('manpower_add_action') }}" onsubmit="return validateForm()">
          @csrf
            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="job_title">Job Title</label>
                       <select class="form-control" id="job_title" name="job_title">
                             <option value="">Select Job Title</option>
                            

                        </select>
            </div>
            <div class="form-group col-md-6">
                <label for="no_of_recruitment">No of Records</label>
                       <select class="custom-select" id="no_of_recruitment" name="no_of_recruitment">
                             <option value="">No of Recruitment</option>
                            

                        </select>
            </div>
            </div>



            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="requisitor_name">Submitted By</label>
                       <select class="custom-select" id="requisitor_name" name="requisitor_name">
                             <option value="">Requisitor Name</option>
                            

                        </select>
            </div>
            <div class="form-group col-md-6">
                <label for="post_date">Post Date</label>
                <input type="date" class="form-control" id="post_date" name="post_date">
            </div>
            </div>

        

            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="status">Status</label>
                       <select class="custom-select" id="status" name="status">
                             <option value="">Status</option>
                            

                        </select>
            </div>
              <div class="form-group col-md-6">
                <label for="date_required">Date Required</label>
                <input type="date" class="form-control" id="date_required" name="date_required">
            </div>
            </div>

           
            <div class="btns-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('manpower_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
           
          </div>

         </form>
</div>
</div>
</div>
 
@endsection



              

