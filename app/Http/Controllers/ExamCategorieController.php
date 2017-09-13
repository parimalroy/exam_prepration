<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ExamCategorieController extends Controller
{
    public function index(){
        
        return view('admin.categorieExam.addExamCategorie');
    }
    public function saveExamCategorie(Request $request){
        $data=array();
        $data['exam_category_name']=$request->exam_category_name;
        $data['exam_category_description']=$request->exam_category_description;
        $data['publication_status']=$request->publication_status;
        DB::table('tbl_exam_cate')->insert($data);
        return redirect('examCategorie-addExamCategorie')->with('message','Save Exam Categorie');
    }
    public function manageExamCategorie(){
        $allCategories=DB::table('tbl_exam_cate')
                            ->select('*')
                            ->get();
        return view('admin.categorieExam.manageExamCategorie',['allCategories'=>$allCategories]);
    }
    
    public function UnpublishExamCategorie($id){
        $data=array();
        $data['publication_status']=0;
        DB::table('tbl_exam_cate')
                ->where('examCateid',$id)
                ->where('publication_status',1)
                ->update($data);
        return redirect('examCategorie-manageExamCategorie')->with('message','Unpublish Exam Categorie');
    }
    
    
    public function publishExamCategorie($id){
         $data=array();
        $data['publication_status']=1;
        DB::table('tbl_exam_cate')
                ->where('examCateid',$id)
                ->where('publication_status',0)
                ->update($data);
        return redirect('examCategorie-manageExamCategorie')->with('message','Publish Exam Categorie');
    }
    
    public function deleteExamCategorie($id){
        DB::table('tbl_exam_cate')
                ->where('examCateid',$id)
                ->delete();
        return redirect('examCategorie-manageExamCategorie')->with('message','Delete Exam Categorie');
    }
}
