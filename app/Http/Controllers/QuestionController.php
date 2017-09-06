<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function index(){
        $subCategories=DB::table('tbl_subcategorie')
                                ->where('publication_status',1)
                                ->get();
        return view('admin.question.questionContent',['subCategories'=>$subCategories]);
    }
    
    public function saveQuestion(Request $request){
        $data=array();
        $data['question_name']=$request->question_name;
        $data['answare_name']=$request->answare_name;
        $data['categorie_id']=$request->categorie_id;
        $data['question_description']=$request->question_description;
        $data['publication_status']=$request->publication_status;
        DB::table('tbl_que')->insert($data);
        return redirect('question_add')->with('message','Question save Sucessfully');
                
    }
}
