<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','WelcomeController@index');
Route::get('questin_details/{id}','WelcomeController@questionDetails');
Route::get('categorie-details/{id}','WelcomeController@categorieDetails');



Route::get('admin-login','AdminController@index');
Route::post('admin','AdminController@adminLogin');
Route::get('logout','AdminController@adminLogut');
Route::get('admin-deshboard','AdminController@adminDeshboard');


Route::get('categorie_add','CategorieController@addCategorie');
Route::post('categorie-save','CategorieController@saveCategorie');
Route::get('categorie-manage','CategorieController@manageCategorie');
Route::get('categorie-unpublish/{id}','CategorieController@unpublishCategorie');
Route::get('categorie-publish/{id}','CategorieController@PublishCategorie');
Route::get('categorie-delete/{id}','CategorieController@deleteCategorie');
Route::get('categorie-edit/{id}','CategorieController@editCategorie');
Route::post('categorie-update','CategorieController@updateCategorie');



Route::get('examCategorie-addExamCategorie','ExamCategorieController@index');
Route::post('examCategorie-save','ExamCategorieController@saveExamCategorie');
Route::get('examCategorie-manageExamCategorie','ExamCategorieController@manageExamCategorie');
Route::get('examCategorie-unpublish/{id}','ExamCategorieController@UnpublishExamCategorie');
Route::get('examCategorie-publish/{id}','ExamCategorieController@publishExamCategorie');
Route::get('examCategorie-delete/{id}','ExamCategorieController@deleteExamCategorie');


Route::get('examSubCategorie-addExamSubCategorie','ExamSubCategorieController@index');
Route::post('examSubCategorie-save','ExamSubCategorieController@saveExamSubCategorie');
Route::get('examSubCategorie-manageExamSubCategorie','ExamSubCategorieController@manageExamSubCategorie');
Route::get('examCategorie-unpublish/{id}','ExamSubCategorieController@unpublishExamSubCategoriebCategorie-save','ExamSubCategorieController@saveExamSubCategorie');
Route::get('examSubCategorie-manageExamSubCategorie','ExamSubCategorieController@manageExamSubCategorie');
Route::get('examCategorie-unpublish/{id}','ExamSubCategorieController@unpublishExamSubCategorie');
Route::get('examCategorie-publish/{id}','ExamSubCategorieController@publishExamSubCategorie');
Route::get('examCategorie-delete/{id}','ExamSubCategorieController@DeleteExamSubCategorie');



Route::get('question_add','QuestionController@index');
Route::post('question-save','QuestionController@saveQuestion');
Route::get('question_manage','QuestionController@manageQuestion');
Route::get('question_unpublish/{id}','QuestionController@UnpublishQuestion');
Route::get('question_publish/{id}','QuestionController@publishQuestion');

Route::get('sub_categorie_add','SubcategorieController@index');
Route::post('sub_categorie-save','SubcategorieController@saveSubCategorie');
Route::get('sub_categorie_manage','SubcategorieController@manageSubCategorie');
Route::get('sub_categorie_unpublish/{id}','SubcategorieController@unpublishSubCategorie');
Route::get('sub_categorie_publish/{id}','SubcategorieController@publishSubCategorie');
Route::get('sub_categorie_delete/{id}','SubcategorieController@deleteSubCategorie');
Route::get('sub_categorie_edit/{id}','SubcategorieController@editSubCategorie');
Route::post('sub_categorie-update','SubcategorieController@updateSubCategorie');
Route::post('sub_categorie-update','SubcategorieController@updateSubCategorie');
