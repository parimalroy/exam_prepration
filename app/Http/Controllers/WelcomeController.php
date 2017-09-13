<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller {

    public function index() {
        $allSubCategories = DB::table('tbl_subcategorie')
                ->where('publication_status', 1)
                ->take(8)
                ->get();
        $allExamSubCategories=DB::table('tbl_exam_sub_cate')
                                ->select('*')
                                ->where('publication_status',1)
                                ->first();
        return view('frontEnd.home.homeContent', ['allSubCategories' => $allSubCategories,'allExamSubCategories'=>$allExamSubCategories]);
    }

    public function questionDetails($id) {
        $questionAndanswares = DB::table('tbl_que')
                ->where('subcate_id',$id)
                ->join('tbl_subcategorie', 'tbl_que.categorie_id', '=', 'tbl_subcategorie.subcate_id')
                ->select('tbl_que.*', 'tbl_subcategorie.*')
                ->get();

        return view('frontEnd.question.questionContent', ['questionAndanswares' => $questionAndanswares]);
    }
    public function categorieDetails($id){
        $allSubcategories=DB::table('tbl_subcategorie')
                              ->select('*')
                              ->where('publication_status',1)
                              ->where('categorie_id',$id)
                              ->join('tbl_categorie', 'tbl_subcategorie.categorie_id', '=', 'tbl_categorie.Cate_id')
                              ->select('tbl_subcategorie.*','tbl_categorie.*')
                              ->get();
        return view('frontEnd.question.categorieDetails',['allSubcategories'=>$allSubcategories]);
    }


}
