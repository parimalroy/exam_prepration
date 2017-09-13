<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller {

    public function index() {
        $subCategories = DB::table('tbl_subcategorie')
                ->where('publication_status', 1)
                ->get();
        return view('admin.question.questionContent', ['subCategories' => $subCategories]);
    }

    public function saveQuestion(Request $request) {
        $data = array();
        $data['question_name'] = $request->question_name;
        $data['answare_name'] = $request->answare_name;
        $data['categorie_id'] = $request->categorie_id;
        $data['question_description'] = $request->question_description;
        $data['publication_status'] = $request->publication_status;
        DB::table('tbl_que')->insert($data);
        return redirect('question_add')->with('message', 'Question save Sucessfully');
    }

    public function manageQuestion() {
        $allQuestions = DB::table('tbl_que')
//                ->select('*')
//                ->where('publication_status',1)
                ->join('tbl_subcategorie', 'tbl_que.categorie_id', '=', 'tbl_subcategorie.subcate_id')
                ->select('tbl_que.*', 'tbl_subcategorie.sub_categorie_name')
                ->get();
        return view('admin.question.manageQuestion', ['allQuestions' => $allQuestions]);
    }

    public function UnpublishQuestion($id) {
        $data = array();
        $data['publication_status'] = 0;
        DB::table('tbl_que')
                ->where('ques_id', $id)
                ->where('publication_status', 1)
                ->update($data);
        return redirect('question_manage')->with('message', 'Question Unpublish Sucessfully ');
    }

    public function publishQuestion($id) {
        $data = array();
        $data['publication_status'] = 1;
        DB::table('tbl_que')
                ->where('ques_id', $id)
                ->where('publication_status', 0)
                ->update($data);
        return redirect('question_manage')->with('message', 'Question Publish Sucessfully ');
    }

}
