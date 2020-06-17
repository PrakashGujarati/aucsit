<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaseDetail;
use File;
use Session;

class CaseController extends Controller
{
	public function index()
	{
		$cases=CaseDetail::select('*')->paginate(10);
		return view('case.table',compact('cases'));
	}		

    public function store(request $request)
    {
    	$dob=str_replace('T', ' ', $request->dob);
    	$registered_on=str_replace('T', ' ', $request->registered_on);


    	if($request->has('patient_image') && $request->patient_image != null)
    	{
			$name=time(). mt_rand(10000, 99999);
            $imageName = $name .'.'. $request->patient_image->getClientOriginalExtension();
            $originalPath = public_path().'/images/';
            $request->patient_image->move($originalPath,$imageName);   
    	}
    	else
    	{
    		$imageName=null;
    	}

    	$add=new CaseDetail;
    	$add->patient_id = $request->patient_id;
    	$add->file_no = $request->file_no;
    	$add->title = $request->title;
    	$add->first_name = $request->first_name;
    	$add->middle_name = $request->middle_name;
    	$add->last_name = $request->last_name;
		$add->age = $request->age;
    	$add->sex = $request->sex;
    	$add->mobile_no = $request->mobile_no;
    	$add->phone_no = $request->phone_no;
    	$add->line_1 = $request->line_1;
    	$add->line_2 = $request->line_2;
    	$add->line_3 = $request->line_3;
    	$add->city = $request->city;
    	$add->state = $request->state;
    	$add->email = $request->email;
    	$add->family = $request->family;
    	$add->guardian = $request->guardian;
    	$add->blood_grp = $request->blood_grp;
    	$add->referred_by = $request->referred_by;
    	$add->patient_image = $imageName;
    	$add->dob =$dob;
    	$add->registered_on =$registered_on;
    	$add->save();
    	return redirect()->route('table');
    }
    public function edit($id)
    {
    	$case=CaseDetail::where('id',$id)->first();
		return view('case.edit',compact('case'));
    }
    public function update(request $request)
    {
    	$dob=str_replace('T', ' ', $request->dob);
    	$registered_on=str_replace('T', ' ', $request->registered_on);


    	if($request->has('patient_image') && $request->patient_image != null)
    	{
			$name=time(). mt_rand(10000, 99999);
            $imageName = $name .'.'. $request->patient_image->getClientOriginalExtension();
            $originalPath = public_path().'/images/';
            $request->patient_image->move($originalPath,$imageName);   
    	}
    	

    	$add=CaseDetail::find($request->hidden_id);
    	$add->patient_id = $request->patient_id;
    	$add->file_no = $request->file_no;
    	$add->title = $request->title;
    	$add->first_name = $request->first_name;
    	$add->middle_name = $request->middle_name;
    	$add->last_name = $request->last_name;
		$add->age = $request->age;
    	$add->sex = $request->sex;
    	$add->mobile_no = $request->mobile_no;
    	$add->phone_no = $request->phone_no;
    	$add->line_1 = $request->line_1;
    	$add->line_2 = $request->line_2;
    	$add->line_3 = $request->line_3;
    	$add->city = $request->city;
    	$add->state = $request->state;
    	$add->email = $request->email;
    	$add->family = $request->family;
    	$add->guardian = $request->guardian;
    	$add->blood_grp = $request->blood_grp;
    	$add->referred_by = $request->referred_by;
    	if($request->has('patient_image') && $request->patient_image != null)
    	{
    		$add->patient_image = $imageName;	
    	}	
    	$add->dob =$dob;
    	$add->registered_on =$registered_on;
    	$add->save();
    	return redirect()->route('table');
    }
    public function create()
    {
    	return view('case.form');
    }
    public function delete($id)
    {
    	$case=CaseDetail::where('id',$id)->delete();
		return redirect()->route('table');
    }	
}
