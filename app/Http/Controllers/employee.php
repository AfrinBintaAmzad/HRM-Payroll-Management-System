<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
use App\Models\companies;
use App\Models\designations;
use App\Models\departments;
use App\Models\Sections;
use App\Models\shifts;
use App\Models\Subsections;



class employee extends Controller
{
    public function index()
    {
        $employee=employees::
        leftJoin('departments','employees.department','=','departments.id')
        ->leftJoin('designations','employees.designation','=','designations.id')
        ->select('employees.id','employees.name','employees.phone','departments.dept_name','designations.desig_name')
        ->where('employees.status','Active')
        ->get();
        return view('employees.employee_list',compact('employee'));
    }

    public function terminatedEmployee()
    {
        $employee=employees::
        leftJoin('departments','employees.department','=','departments.id')
        ->leftJoin('designations','employees.designation','=','designations.id')
        ->select('employees.id','employees.name','employees.phone','departments.dept_name','designations.desig_name')
        ->where('employees.status','Terminated')
        ->get();
        return view('terminatedemployees.view',compact('employee'));
    }
    public function resignEmployee()
    {
        $employee=employees::
        leftJoin('departments','employees.department','=','departments.id')
        ->leftJoin('designations','employees.designation','=','designations.id')
        ->select('employees.id','employees.name','employees.phone','departments.dept_name','designations.desig_name')
        ->where('employees.status','Resign')
        ->get();
        return view('terminatedemployees.resign',compact('employee'));
    }


    public function activateEmployee(Request $request)
    {  
        $id=$request->id;
        $employee = employees::findOrFail($id);
        // print_r($employee);
        // exit;
        
        $employee->status ="Active";
    

        $employee->save();   
        return redirect()->route('terminatedemployee_list');
        
    }

    public function activateResignEmployee(Request $request)
    {  
        $id=$request->id;
        $employee = employees::findOrFail($id);
        // print_r($employee);
        // exit;
        
        $employee->status ="Active";
    

        $employee->save();   
        return redirect()->route('resignemployee_list');
        
    }




    public function add_employee()
    {    
        $sections =Sections::get(); 
        $companies =companies::get(); 
        $Designations =Designations::get(); 
        $Departments =Departments::get(); 
        $Shifts =Shifts::get(); 
      
        return view('employees.add', compact('sections',
        'companies','Designations','Departments',
        'Shifts'));
    }

    public function store(Request $request)
    {  
        $data=array();  
        $data['company'] = $request['company'];
        $data['salary'] = $request['salary'];
        $data['department'] = $request['department']; 
        $data['employeeId'] = $request['employeeId']; 
        $data['section'] = $request['section']; 
        $data['sub_section'] = $request['sub_section']; 
        $data['e_category'] = $request['e_category']; 
        $data['workerType'] = $request['workerType']; 
        $data['rank'] = $request['rank']; 
        $data['shift_name'] = $request['shift_name']; 
        $data['joinDate'] = $request['joinDate']; 
        $data['activationDate'] = $request['activationDate']; 
        $data['resume'] = $request['resume']; 
        $data['weekend'] = $request['weekend']; 
        $data['confirmation'] = $request['confirmation']; 
        employees::insert($data);
        // Sections::createSection($request);
        return redirect('/employee')->with('message', ' Added Successfully');
    
    }

    public function edit_employee(Request $request, $id)
    {    
        $employee_info= employees::findOrFail($id);
        return view('views.employees.edit',compact('employee_info'));
    }

    public function update(Request $request)
    {  
        $id=$request->id;
        $employee = employees::findOrFail($id);
        // print_r($employee);
        // exit;
        
        $employee->name = $request->name;
        $employee->code = $request->code;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->email = $request->email;

        $employee->save();   
        return redirect()->route('employee_list');
        
    }


    public function view_employee(Request $request, $id)
    {    
        $employee_info= employees::findOrFail($id);    
        return view('views.employees.view',compact('employee_info'));
    }


    public function destroy($id)
    {
        employees::destroy($id);
        return redirect()->route('employee_list');
    }
}
