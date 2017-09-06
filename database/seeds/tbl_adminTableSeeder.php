<?php

use Illuminate\Database\Seeder;

class tbl_adminTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tbl_admin')->insert([
            'name' => 'parimal',
            'email' => 'parimal.reg@gmail.com',
            'password' => md5('demo125'),
        ]);
    }

}
