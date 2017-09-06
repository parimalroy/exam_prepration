<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;

class SubcategorieController extends Controller {

    public function index() {
        $categoriesByID = DB::table('tbl_categorie')
                ->where('publicatin_status', 1)
                ->get();
        return view('admin.subcategorie.addSubCategorieContent', ['categoriesByID' => $categoriesByID]);
    }

    public function saveSubCategorie(Request $request) {
        $imageUrl = $this->photo($request);
        $data = array();
        $data['sub_categorie_name'] = $request->sub_categorie_name;
        $data['categorie_id'] = $request->categorie_id;
        $data['sub_categorie_description'] = $request->sub_categorie_description;
        $data['sub_category_photo'] = $imageUrl;
        $data['publication_status'] = $request->publication_status;
        DB::table('tbl_subcategorie')->insert($data);
        return redirect('sub_categorie_add')->with('message', 'Sub Categorie Save Sucessfully');
    }

    public function manageSubCategorie() {
        $allSubCategories = DB::table('tbl_subcategorie')
                        ->join('tbl_categorie', 'tbl_subcategorie.subcate_id', '=', 'tbl_categorie.Cate_id')
                        ->select('tbl_subcategorie.*', 'tbl_categorie.category_name')
                        ->get();
        return view('admin.subcategorie.manageSubContent', ['allSubCategories' => $allSubCategories]);
    }

    public function unpublishSubCategorie($id) {
        $data = array();
        $data['publication_status'] = 0;
        DB::table('tbl_subcategorie')
                ->where('subcate_id', $id)
                ->update($data);
        return redirect('sub_categorie_manage')->with('message', 'Sub Categorie Unpublish Sucessfully');
    }

    public function publishSubCategorie($id) {
        $data = array();
        $data['publication_status'] = 1;
        DB::table('tbl_subcategorie')
                ->where('subcate_id', $id)
                ->update($data);
        return redirect('sub_categorie_manage')->with('message', 'Sub Categorie Publish Sucessfully');
    }

    public function deleteSubCategorie($id) {
        $photoDelete = DB::table('tbl_subcategorie')
                ->where('subcate_id', $id)
                ->first();
        DB::table('tbl_subcategorie')
                ->where('subcate_id', $id)
                ->delete();
        unlink($photoDelete->sub_category_photo);
        return redirect('sub_categorie_manage')->with('message', 'Sub Categorie Delete Sucessfully');
    }

    public function editSubCategorie($id) {
         $allSubCategories = DB::table('tbl_subcategorie')
                        ->where('subcate_id',$id)
                        ->join('tbl_categorie', 'tbl_subcategorie.subcate_id', '=', 'tbl_categorie.Cate_id')
                        ->select('tbl_subcategorie.*', 'tbl_categorie.category_name')
                        ->first();
         
        return view('admin.subcategorie.editSubcategorieContent',['allSubCategories'=>$allSubCategories]);
    }
    
    public function updateSubCategorie(Request $request){
        $data=array();
        $data['sub_categorie_name']=$request->sub_categorie_name;
        $data['sub_categorie_description']=$request->sub_categorie_description;
        DB::table('tbl_subcategorie')
                ->where('subcate_id',$request->sub_categorie_id)
                ->update($data);
        return redirect('sub_categorie_manage')->with('message', 'Sub Categorie Update Sucessfully');
    }

    private function photo(Request $request) {
        $categorie_photo = $request->file('sub_category_photo');
        $getExtension = $categorie_photo->getClientOriginalExtension();
        $uploadPath = 'sub_categorie_photo/';
        $name = str_random(20);
        $imageName = $name . '.' . $getExtension;
        $imageUrl = $uploadPath . $imageName;
        Image::make($categorie_photo)->resize(204, 177)->save($uploadPath . $imageName);
        return $imageUrl;
    }

}
