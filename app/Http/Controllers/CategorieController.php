<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use DB;

class CategorieController extends Controller
{
    public function addCategorie(){
        return view('admin.categorie.addCategorieContent');
    }
    
    public function saveCategorie(Request $request){
        $imageUrl=$this->photo($request);
        
        $data= array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publicatin_status']=$request->publicatin_status;
        $data['category_photo']=$request->category_photo=$imageUrl;
        DB::table('tbl_categorie')->insert($data);
        return redirect('categorie_add')->with('message','Categorie Save sucessfully');
    }
    
    public function manageCategorie(){
        $categories=DB::table('tbl_categorie')
                            ->get();
        return view('admin.categorie.manageCategorie',['categories'=>$categories]);
    }
    
    public function unpublishCategorie($id){
        $data=array();
        $data['publicatin_status']=0;
        DB::table('tbl_categorie')
                                ->where('Cate_id',$id)
                                ->update($data);
        return redirect('categorie-manage')->with('message','Uupublish Sucessfully');
    }
    
    public function PublishCategorie($id){
        $data=array();
        $data['publicatin_status']=1;
        DB::table('tbl_categorie')
                ->where('Cate_id',$id)
                ->update($data);
        return redirect('categorie-manage')->with('message','Publish Sucessfully');
    }
    
    public function deleteCategorie($id){
        $ids=DB::table('tbl_categorie')
                ->where('Cate_id',$id)
                ->first();
        DB::table('tbl_categorie')
                    ->where('Cate_id',$id)
//                    ->where(unlink($ids->category_photo))
                    ->delete();
        unlink($ids->category_photo);
                    
        return redirect('categorie-manage')->with('message','Delete Sucessfully');
    }
    
    public function editCategorie($id){
        $categoriesById=DB::table('tbl_categorie')
                            ->where('publicatin_status',1)
                            ->where('Cate_id',$id)
                            ->first();
        return view('admin.categorie.editContent',['categoriesById'=>$categoriesById]);
    }
    public function updateCategorie(Request $request){
        $updateById=array();
        $updateById['category_name']=$request->category_name;
        $updateById['category_description']=$request->category_description;
        DB::table('tbl_categorie')
                ->where('Cate_id',$request->cate_id)
                ->update($updateById);
        return redirect('categorie-manage')->with('message','Update Sucessfully');
                
    }

    private function photo(Request $request){
        $categorie_photo=$request->file('category_photo');
        $getExtension=$categorie_photo->getClientOriginalExtension();
        $uploadPath='categorie_photo/';
        $name= str_random(20);
        $imageName=$name.'.'.$getExtension;
        $imageUrl=$uploadPath.$imageName;
        Image::make($categorie_photo)->resize(204, 177)->save($uploadPath.$imageName);
        return $imageUrl;
    }
    
}
