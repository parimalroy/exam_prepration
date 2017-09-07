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
        return view('frontEnd.home.homeContent', ['allSubCategories' => $allSubCategories]);
    }

    public function questionDetails($id) {
        $questionAndanswares = DB::table('tbl_que')
                ->where('subcate_id',$id)
                ->join('tbl_subcategorie', 'tbl_que.categorie_id', '=', 'tbl_subcategorie.subcate_id')
                ->select('tbl_que.*', 'tbl_subcategorie.*')
                ->get();

        return view('frontEnd.question.questionContent', ['questionAndanswares' => $questionAndanswares]);
    }

}
