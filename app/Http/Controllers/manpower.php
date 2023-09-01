<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manpowers;
use App\Models\companies;
use App\Models\designations;
use App\Models\departments;
use App\Models\Sections;
use App\Models\shifts;
use App\Models\Subsections;



class manpower extends Controller
{
    public function index()
    {
        $manpowers=manpowers::get();
        //dd( $manpowers);
        return view('manpowers.manpower_list',compact('manpowers'));
    }
    public function add_manpower()
    {    
        $manpowers=manpowers::get();
        return view('manpowers.add');
    }




    // public function terminatedEmployee()
    // {
    //     $manpower=manpowers::
    //     leftJoin('departments','manpowers.department','=','departments.id')
    //     ->leftJoin('designations','manpowers.designation','=','designations.id')
    //     ->select('manpowers.id','manpowers.name','manpowers.phone','departments.dept_name','designations.desig_name')
    //     ->where('manpowers.status','Terminated')
    //     ->get();
    //     return view('terminatedmanpowers.view',compact('employee'));
    // }
    // public function resignEmployee()
    // {
    //     $manpower=manpowers::
    //     leftJoin('departments','manpowers.department','=','departments.id')
    //     ->leftJoin('designations','manpowers.designation','=','designations.id')
    //     ->select('manpowers.id','manpowers.name','manpowers.phone','departments.dept_name','designations.desig_name')
    //     ->where('manpowers.status','Resign')
    //     ->get();
    //     return view('terminatedmanpowers.resign',compact('employee'));
    // }


    // public function activateEmployee(Request $request)
    // {  
    //     $id=$request->id;
    //     $manpower= manpowers::findOrFail($id);
    //     // print_r($manpower);
    //     // exit;
        
    //     $manpower->status ="Active";
    

    //     $manpower->save();   
    //     return redirect()->route('terminatedemployee_list');
        
    // }

    // public function activateResignEmployee(Request $request)
    // {  
    //     $id=$request->id;
    //     $manpower= manpowers::findOrFail($id);
    //     // print_r($manpower);
    //     // exit;
        
    //     $manpower->status ="Active";
    

    //     $manpower->save();   
    //     return redirect()->route('resignemployee_list');
        
    // }




    // public function add_manpower()
    // {    
    //     $sections =Sections::get(); 
    //     $companies =companies::get(); 
    //     $Designations =Designations::get(); 
    //     $Departments =Departments::get(); 
    //     $Shifts =Shifts::get(); 
      
    //     return view('manpowers.add', compact('sections',
    //     'companies','Designations','Departments',
    //     'Shifts'));
    // }

    public function store(Request $request)
    {  
        $data=array();  
        $data['job_title'] = $request['job_title'];
        $data['no_of_recruitment'] = $request['no_of_recruitment'];
        $data['requisitor_name'] = $request['requisitor_name']; 
        $data['post_date'] = $request['post_date']; 
        $data['status'] = $request['status']; 
        $data['date_required'] = $request['date_required']; 
      
        manpowers::insert($data);
        // Sections::createSection($request);
        return redirect('/manpower')->with('message', ' Added Successfully');
    
    }

    public function edit_manpower(Request $request, $id)
    {    
        $manpower_info= manpowers::findOrFail($id);
        return view('views.manpowers.edit',compact('employee_info'));
    }

    public function update(Request $request)
    {  
        $id=$request->id;
        $manpower= manpowers::findOrFail($id);
        // print_r($manpower);
        // exit;
        
        $manpower->name = $request->name;
        $manpower->code = $request->code;
        $manpower->address = $request->address;
        $manpower->phone = $request->phone;
        $manpower->email = $request->email;

        $manpower->save();   
        return redirect()->route('employee_list');
        
    }


    public function view_manpower(Request $request, $id)
    {    
        $manpower_info= manpowers::findOrFail($id);    
        return view('views.manpowers.view',compact('employee_info'));
    }


    public function destroy($id)
    {
        manpowers::destroy($id);
        return redirect()->route('employee_list');
    }
}
