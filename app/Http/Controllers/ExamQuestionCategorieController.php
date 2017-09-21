<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExamQuestionCategorieController extends Controller
{
    public function index(){
        $allPublishSubCategories=DB::table('tbl_exam_sub_cate')
                                    ->where('publication_status',1)
                                    ->get();
        return view('admin.examQuestion.addExamQuestion',['allPublishSubCategories'=>$allPublishSubCategories]);
    }
    
    public function saveExamQuestion(Request $request){
        $data=array();
        $data['exam_question_name']=$request->exam_question_name;
        $data['exam_answare_name']=$request->exam_answare_name;
        $data['exam_sub_categorie_id']=$request->exam_sub_categorie_id;
        $data['exam_question_description']=$request->exam_question_description;
        DB::table('tbl_exam_questions')->insert($data);
        return redirect('examQuestion-addExamQuestion')->with('message','Exam Question Save Sucessfully');
    }
    
    public function manageExamQuestion(){
        $allExamQuestions=DB::table('tbl_exam_questions')
                         ->select('*')
                         ->get();
        return view('admin.examQuestion.manageExamQuestion',['allExamQuestions'=>$allExamQuestions]);
    }
    
    public function deleteExamQuestion($id){
        DB::table('tbl_exam_questions')
                ->where('exam_questin_id',$id)
                ->delete();
        return redirect('examQuestion-manage')->with('message','Exam Question Delete Sucessfully');
    }
}
