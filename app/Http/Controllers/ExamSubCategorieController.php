<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExamSubCategorieController extends Controller {

    public function index() {
        $allExamCategories = DB::table('tbl_exam_cate')
                ->select('*')
                ->where('publication_status', 1)
                ->get();
        return view('admin.categorieSubExam.addSubExamContent', ['allExamCategories' => $allExamCategories]);
    }

    public function saveExamSubCategorie(Request $request) {
        $data = array();
        $data['exam_sub_category_name'] = $request->exam_sub_category_name;
        $data['exam_categorie_id'] = $request->exam_categorie_id;
        $data['exam_sub_category_description'] = $request->exam_sub_category_description;
        $data['publication_status'] = $request->publication_status;
        DB::table('tbl_exam_sub_cate')->insert($data);
        return redirect('examSubCategorie-addExamSubCategorie')->with('message', 'Exam Sub Categorie Save Sucessfully');
    }

    public function manageExamSubCategorie() {
        $allSubCategories = DB::table('tbl_exam_sub_cate')
                ->select('*')
                ->get();
        return view('admin.categorieSubExam.manageExamSubCategorieContent', ['allSubCategories' => $allSubCategories]);
    }

    public function unpublishExamSubCategorie($id) {
        $data = array();
        $data['publication_status'] = 0;
        DB::table('tbl_exam_sub_cate')
                ->where('examSubCateId', $id)
                ->update($data);
        return redirect('examSubCategorie-manageExamSubCategorie')->with('message', 'Exam Sub Categorie Unpublish Sucessfully');
    }

    public function publishExamSubCategorie($id) {
        $data = array();
        $data['publication_status'] = 1;
        DB::table('tbl_exam_sub_cate')
                ->where('examSubCateId', $id)
                ->update($data);
        return redirect('examSubCategorie-manageExamSubCategorie')->with('message', 'Exam Sub Categorie Publish Sucessfully');
    }
    
    public function DeleteExamSubCategorie($id){
        DB::table('tbl_exam_sub_cate')
                ->where('examSubCateId',$id)
                ->delete();
        return redirect('examSubCategorie-manageExamSubCategorie')->with('message', 'Exam Sub Categorie Delete Sucessfully');
    }

}
