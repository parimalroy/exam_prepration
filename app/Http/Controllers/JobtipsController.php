<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use DB;

class JobtipsController extends Controller
{
    public function index(){
    return view('admin.jobTips.jobtipsContent');
    }
    public function saveJobTips(Request $request){
         $imageUrl=$this->photo($request);
        
        $data= array();
        $data['job_tips_name']=$request->job_tips_name;
        $data['job_tips_description']=$request->job_tips_description;
        $data['publicatin_status']=$request->publicatin_status;
        $data['job_tips_photo']=$request->job_tips_photo=$imageUrl;
        DB::table('tbl_jobtips')->insert($data);
        return redirect('jobTips-addJobTips')->with('message','Job Tips Save sucessfully');
    }
    
    

        private function photo(Request $request){
        $job_tips_photo=$request->file('job_tips_photo');
        $getExtension=$job_tips_photo->getClientOriginalExtension();
        $uploadPath='job_tips_photo/';
        $name= str_random(20);
        $imageName=$name.'.'.$getExtension;
        $imageUrl=$uploadPath.$imageName;
        Image::make($job_tips_photo)->resize(150, 100)->save($uploadPath.$imageName);
        return $imageUrl;
    }
}
