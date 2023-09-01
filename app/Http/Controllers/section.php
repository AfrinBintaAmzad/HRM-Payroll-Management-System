<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sections;
use App\Models\departments;
use DB;

class section extends Controller
{
    public function index()
    {    
        $sections=sections::get();
        return view('settings.sections.section_list',compact('sections'));
    }

    public function add_section()
    {    
        $departments=departments::get();
        return view('settings.sections.add',compact('departments'));
    }

    public function store(Request $request)
    {  
     
        $data=array();  
        $data['department'] = $request['department'];
        $data['description'] = $request['description'];
        $data['section_name'] = $request['section_name'];
       
        sections::insert($data);
        return redirect()->route('section_list');
        //return back();
    }

    public function edit_section(Request $request, $id)
    {    
        $departments=departments::get();
        $section_info= sections::findOrFail($id);
        return view('settings.sections.edit',compact('section_info','departments'));
    }

    public function update(Request $request)
    {  
        $id=$request->id;
        $section = sections::findOrFail($id);
        // print_r($section);
        // exit;
        
        $section->department = $request->department;
        $section->description= $request->description;
        $section->section_name= $request->section_name;
       

        $section->save();   
        return redirect()->route('section_list');
        
    }


    public function view_section(Request $request, $id)
    {    
        $departments=departments::get();
        $section_info= sections::findOrFail($id);    
        return view('settings.sections.view',compact('section_info','departments'));
    }


    public function destroy($id)
    {
        sections::destroy($id);
        return redirect()->route('section_list');
    }

}
