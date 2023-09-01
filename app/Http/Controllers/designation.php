<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\designations;

class designation extends Controller
{
    function index(){
        $designations=designations::get();
        return view('settings.designations.designation_list',compact('designations'));
    }
    public function add_designation()
    {    
        return view('settings.designations.add');
    }
    
    public function store(Request $request)
    {  
        $request->validate([
            'desig_name'=>'required',
            'desig_description'=>'required'

        ]);
        $data=array();  
        $data['desig_name'] = $request['name'];
        $data['desig_description'] = $request['description'];
    
        designations::insert($data);
        return redirect()->route('designation_list');
        //return back();
    }
    public function view_designation(Request $request, $id)
    {    
        $designation_info= designations::findOrFail($id);    
        return view('settings.designations.view',compact('designation_info'));
    }
    public function edit_designation(Request $request, $id)
    {    
        $designation_info= designations::findOrFail($id);
        return view('settings.designations.edit',compact('designation_info'));
    }

    public function update(Request $request)
    {  
        $id=$request->id;
        $designation = designations::findOrFail($id);
        // print_r($designation);
        // exit;
        
        $designation->desig_name = $request->name;
        $designation->desig_description = $request->description;

        $designation->save();   
        return redirect()->route('designation_list');
        
    }
    public function destroy($id)
    {
        designations::destroy($id);
        return redirect()->route('designation_list');
    }
}
