<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leaves;

class leave extends Controller
{
    function leave_item(){
        $leaves=leaves::get();
        return view('settings.leaves.leave_list',compact('leaves'));
    }
    public function add_leave()
    {    
        return view('settings.leaves.add');
    }
    
    public function store_leave(Request $request)
    {  
        $data=array();  
        $data['name'] = $request['name'];
        $data['short_name'] = $request['short_name'];
        $data['description'] = $request['description'];
    
        leaves::insert($data);
        return redirect()->route('leave_list');
        //return back();
    }
    public function view_leave(Request $request, $id)
    {    
        $leave_info= leaves::findOrFail($id);    
        return view('settings.leaves.view',compact('leave_info'));
    }
    public function edit_leave(Request $request, $id)
    {    
        $leave_info= leaves::findOrFail($id);
        return view('settings.leaves.edit',compact('leave_info'));
    }

    public function update(Request $request)
    {  
        $id=$request->id;
        $leave = leaves::findOrFail($id);
        // print_r($designation);
        // exit;
        
        $leave->name = $request->name;
        $leave->short_name = $request->short_name;
        $leave->description = $request->description;

        $leave->save();   
        return redirect()->route('leave_list');
        
    }
    public function destroy($id)
    {
        leaves::destroy($id);
        return redirect()->route('leave_list');
    }
}
