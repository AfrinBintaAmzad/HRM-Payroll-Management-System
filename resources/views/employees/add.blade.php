@extends('layouts.app')

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Employee</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Employee</li>
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
    <!-- Add the missing progress bar element with the ID "progress" -->
    <div class="progressbar">
      <div class="progress" id="progress"></div>
      <!-- Add more progress steps for other tabs if needed -->
    </div>

    <ul class="nav nav-tabs nav-justified mb-4">
      <li class="nav-item">
        <a class=" button nav-link active" data-toggle="tab" href="#Service_information">Service Info</a>
      </li>
      <li class="nav-item">
        <a class=" button nav-link" data-toggle="tab" href="#Personal_Information">Personal Info</a>
      </li>
      <li class="nav-item">
        <a class=" button nav-link" data-toggle="tab" href="#Contact_Details">Contact</a>
      </li>
      <li class="nav-item">
        <a class=" button nav-link" data-toggle="tab" href="#Academic_Information">Academic</a>
      </li>
      <li class="nav-item">
        <a class="button nav-link" data-toggle="tab" href="#Salary_Information">Salary Info</a>
      </li>
      <li class="nav-item">
        <a class=" button nav-link" data-toggle="tab" href="#Performance">Performance</a>
      </li>
      <li class="nav-item">
        <a class="button nav-link" data-toggle="tab" href="#Promotion">Promotion</a>
      </li>
      <li class="nav-item">
        <a class=" button nav-link" data-toggle="tab" href="#TTR_List">TTR List</a>
      </li>
      <li class="nav-item">
        <a class="button nav-link" data-toggle="tab" href="#Discipline">Discipline</a>
      </li>
    </ul>



    <div class="tab-content">
      <!-- Service Information Tab -->
      <div class="tab-pane fade show active form-step" id="Service_information">
        <h3>Service Information</h3>
        <!-- Your Service Information form step content -->
        <form method="post" id="myForm" action="{{ route('employee_add_action') }}" onsubmit="return validateForm()">
          @csrf
            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="company">Company</label>
                       <select class="form-control" id="company" name="company">
                             <option value="">Select Company</option>
                             <?php foreach($companies as $com){  ?>
                              <option value="{{ $com->id }}">{{ $com->name }}</option>
                              <?php }  ?>

                            </select>
              </div>
              <div class="form-group col-md-6">
                <label for="position">Salary Unit</label>
                <input type="number" class="form-control" id="salary" name="salary">
              </div>
            </div>
            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="department">Department Name</label>
                            <select class="form-control"  id="department" name="department">
                                <option value="">Select Department</option>
                                <?php foreach($Departments as $depart){  ?>

                                     <option value="{{ $depart->id }}">{{ $depart->dept_name }}</option>
                                     <?php }  ?>

                            </select>
            
              </div>
              <div class="form-group col-md-6">
                <label for="position">Employes ID</label>
                <input type="number" class="form-control" id="employeeId" name="employeeId">
              </div>
            </div>
            <div class="row col-md-12" >
              <div class="form-group col-md-6">

                <label for="department">Section</label>
                            <select class="form-control"  id="section" name="section">
                                <option value="">Select section</option>
                                <?php foreach($sections as $sec){  ?>

                                     <option value="{{ $sec->id }}">{{ $sec->section_name }}</option>
                                     <?php }  ?>

                            </select>
                
              </div>
              <div class="form-group col-md-6">

                <label for="department"> Sub Section</label>

                <input type="number" class="form-control" id="sub_section" name="sub_section">
                
              </div>
            </div>

            <div class="row col-md-12" >
              <div class="form-group col-md-6">

                <label for="department">Designation</label>
                <select class="form-control"  id="designation" name="designation">
                    <option value="">Select Designation</option>
                    <?php foreach($Designations as $desi){  ?>

                         <option value="{{ $desi->id }}">{{ $desi->desig_name }}</option>
                         <?php }  ?>

                </select>
        
              </div>
              <div class="form-group col-md-6">
                <label for="position">Category</label>
                <input type="number" class="form-control" id="e_category" name="e_category">
              </div>
            </div>
            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="username">Worker Type</label>
                <input type="number" class="form-control" id="workerType" name="workerType">
              </div>
              <div class="form-group col-md-6">
                <label for="position">Rank</label>
                <input type="number" class="form-control" id="rank" name="rank">
              </div>
            </div>
            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="department">Shift</label>
                <select class="form-control"  id="shift_name" name="shift_name">
                    <option value="">Select shift</option>
                    <?php foreach($Shifts as $shift){  ?>

                         <option value="{{ $shift->id }}">{{ $shift->shift }}</option>
                         <?php }  ?>

                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="position">JoinDate</label>
                <input type="date" class="form-control" id="joinDate" name="joinDate">
              </div>
            </div>
            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="username">ActivationDate</label>
                <input type="date" class="form-control" id="activationDate" name="activationDate">
              </div>
              <div class="form-group col-md-6">
                <label for="position">Resume</label>
                <input type="text" class="form-control" id="resume" name="resume">
              </div>
            </div>
            <div class="row col-md-12" >
              <div class="form-group col-md-6">
                <label for="username">Weekend</label>
                <input type="text" class="form-control" id="weekend" name="weekend">
              </div>
              <div class="form-group col-md-6">
                <label for="position">Confirmation</label>
                <input type="text" class="form-control" id="confirmation" name="confirmation">
              </div>
            </div>
          <!-- Add other fields and form elements as needed -->
          <div class="btns-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('employee_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
            <a type="button" class="btn btn-primary btn-next" data-toggle="tab" href="#Personal_Information">Next</a>
          </div>
        </form>
      </div>

      <!-- Personal Information Tab -->
      <div class="tab-pane fade form-step" id="Personal_Information">
        <h3>Personal Information</h3>
        <!-- Your Personal Information form step content -->
        <form>
          <div class="form-group">
            <label for="phone_personal">Phone</label>
            <input type="text" class="form-control" id="phone_personal" name="phone">
          </div>
          <div class="form-group">
            <label for="address_personal">Address</label>
            <input type="text" class="form-control" id="address_personal" name="address">
          </div>
          <div class="form-group" id="ContactDetails">
            <label for="email_personal">Email</label>
            <input type="text" class="form-control" id="email_personal" name="email">
          </div>
          <div class="btns-group">
            <button type="button"  href="#Service_information" class="btn btn-primary btn-prev"  data-toggle="tab">Previous</button>
            <button type="button" href="#Contact_Details" class="btn btn-primary btn-next" data-toggle="tab">Next</button>
          </div>
        </form>
      </div>

      <!-- Contact Details Tab -->
      <div class="tab-pane fade form-step" id="Contact_Details">
        <h3>Contact Details</h3>
        <!-- Your Contact Details form step content -->
        <form>
           
            <div class="row col-md-12">
              <div class="form-group col-md-6">
                <label for="phone_contact">Phone</label>
                <input type="text" class="form-control" id="phone_contact" name="phone">
              </div>
              <div class="form-group col-md-6">
                <label for="whatsapp_contact">WhatsApp</label>
                <input type="text" class="form-control" id="whatsapp_contact" name="whatsapp">
              </div>
            </div>
          <div class="form-group">
            <label for="address_contact">Address</label>
            <input type="text" class="form-control" id="address_contact" name="address">
          </div>
          <div class="form-group">
            <label for="email_contact">Email</label>
            <input type="text" class="form-control" id="email_contact" name="email">
          </div>
          <div class="btns-group">
            <button type="button" class="btn btn-primary btn-prev"  href="#Service_information"  data-toggle="tab" >Previous</button>
            <button type="button" class="btn btn-primary btn-next" href="#Academic_Information"  data-toggle="tab">Next</button>
          </div>
        </form>
      </div>

      <!-- Academic Information Tab -->
      <div class="tab-pane fade form-step" id="Academic_Information">
        <h3>Academic Information</h3>
        <!-- Your Academic Information form step content -->
        <form>
         <div class="form-group">
            <label for="v">University Name</label>
            <input type="text" class="form-control" id="v" name="phone">
          </div>
          <div class="form-group">
            <label for="db">Passing Date</label>
            <input type="date" class="form-control" id="db" name="dob">
          </div>
          <div class="form-group">
            <label for="I">Varsity ID</label>
            <input type="number" class="form-control" id="I" name="ID">
          </div>
          <div class="btns-group">
            <button type="button" class="btn btn-primary btn-prev" href="#Contact_Details"  data-toggle="tab">Previous</button>
            <button type="button" class="btn btn-primary btn-next" href="#Salary_Information"  data-toggle="tab">Next</button>
          </div>
        </form>
      </div>

      <!-- Salary Information Tab -->
      <div class="tab-pane fade form-step" id="Salary_Information">
        <h3>Salary Information</h3>
        <!-- Your Salary Information form step content -->
        <form>
         <div class="form-group">
            <label for="phone">Dept. Name</label>
            <input type="text" class="form-control" id="phone_salary" name="phone">
          </div>

          <div class="form-group">
            <label for="ID">Basic Salary</label>
            <input type="number" class="form-control" id="ID_salary" name="ID">
          </div>
          <div class="form-group">
            <label for="ID">Bonus Salary</label>
            <input type="number" class="form-control" id="ID_bonus" name="ID">
          </div>
          <div class="btns-group">
            <button type="button" class="btn btn-primary btn-prev" href="#Academic_Information"  data-toggle="tab">Previous</button>
            <button type="button" class="btn btn-primary btn-next" href="#Performance"  data-toggle="tab"> Next</button>
          </div>
        </form>
      </div>

      <!-- Performance Tab -->
      <div class="tab-pane fade form-step" id="Performance">
        <h3>Performance</h3>
        <!-- Your Performance form step content -->
       <form>
         <div class="form-group">
            <label for="phone">Dept. Name</label>
            <input type="text" class="form-control" id="phone_performance" name="phone">
          </div>

          <div class="form-group">
            <label for="ID">Score</label>
            <input type="number" class="form-control" id="ID_performance" name="ID">
          </div>
          <div class="form-group">
            <label for="ID">Dept. Merit List</label>
            <input type="number" class="form-control" id="ID_merit" name="ID">
          </div>
          <div class="btns-group">
            <button type="button" class="btn btn-primary btn-prev" href="#Salary_Information"  data-toggle="tab">Previous</button>
            <button type="button" class="btn btn-primary btn-next" href="#Promotion"  data-toggle="tab">Next</button>
          </div>
        </form>
      </div>

      <!-- Promotion Tab -->
      <div class="tab-pane fade form-step" id="Promotion">
        <h3>Promotion</h3>
        <!-- Your Promotion form step content -->
         <form>
         <div class="form-group">
            <label for="phone">Present Dept. Name</label>
            <input type="text" class="form-control" id="phone_promotion" name="phone">
          </div>

          <div class="form-group">
            <label for="ID">Score</label>
            <input type="number" class="form-control" id="ID_promotion" name="ID">
          </div>
          <div class="form-group">
            <label for="ID">Promoted Dept.</label>
            <input type="number" class="form-control" id="ID_promoted" name="ID">
          </div>
          <div class="btns-group">
            <button type="button" class="btn btn-primary btn-prev" href="#Performance"  data-toggle="tab">Previous</button>
            <button type="button" class="btn btn-primary btn-next" href="#TTR_List"  data-toggle="tab">Next</button>
          </div>
        </form>
      </div>

      <!-- TTR List Tab -->
      <div class="tab-pane fade form-step" id="TTR_List">
        <h3>TTR List</h3>
        <!-- Your TTR List form step content -->
        <form>
         <div class="form-group">
            <label for="phone">TTR</label>
            <input type="text" class="form-control" id="phone_ttr" name="phone">
          </div>

          <div class="form-group">
            <label for="ID">TTR Score</label>
            <input type="number" class="form-control" id="ID_ttr" name="ID">
          </div>
          <div class="form-group">
            <label for="ID">Dept. Merit List</label>
            <input type="number" class="form-control" id="ID_merit_ttr" name="ID">
          </div>
          <div class="btns-group">
            <button type="button" class="btn btn-primary btn-prev" href="#Promotion"  data-toggle="tab">Previous</button>
            <button type="button" class="btn btn-primary btn-next" href="#Discipline"  data-toggle="tab">Next</button>
          </div>
        </form>
      </div>

      <!-- Discipline Tab -->
      <div class="tab-pane fade form-step" id="Discipline">
        <h3>Discipline</h3>
        <!-- Your Discipline form step content -->
         <form>
         <div class="form-group">
            <label for="phone">Absent Percentage</label>
            <input type="text" class="form-control" id="phone_discipline" name="phone">
          </div>

          <div class="form-group">
            <label for="ID">Avg Late hour</label>
            <input type="number" class="form-control" id="ID_late" name="ID">
          </div>
          <div class="form-group">
            <label for="ID">Extra Hour</label>
            <input type="number" class="form-control" id="ID_extra" name="ID">
          </div>
          <div class="btns-group">
            <button type="button" class="btn btn-primary btn-prev" href="#TTR_List"  data-toggle="tab">Previous</button>
            <button type="button" class="btn btn-primary btn-next">Submit</button>
            
          </div>
        </form>
      </div>
    </div>
  </div>


@endsection