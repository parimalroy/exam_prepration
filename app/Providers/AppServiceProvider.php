<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use View;
class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        view()->composer('frontEnd.layouts.header', function() {
            $allPublicationCategories = DB::table('tbl_categorie')
                    ->select('*')
                    ->where('publicatin_status', 1)
                    ->take(7)
                    ->get();
            
            View::share('allPublicationCategories', $allPublicationCategories);
        });
        view()->composer('frontEnd.layouts.footer', function() {
            $allPublicationExamCategories = DB::table('tbl_exam_cate')
                    ->select('*')
                    ->where('publication_status',1)
                    ->take(3)
                    ->get();
            
            View::share('allPublicationExamCategories', $allPublicationExamCategories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
