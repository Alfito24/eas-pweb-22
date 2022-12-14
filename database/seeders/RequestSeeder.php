<?php

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Request::create([
            'title'=>'Sensus',
            'student_id'=>1,
            'lecture_acceptance'=>true,
            'admin_acceptance'=>true
        ]);
        Request::create([
            'title'=>'Sensus Penduduk',
            'student_id'=>1,
            'lecture_acceptance'=>false,
            'admin_acceptance'=>false
        ]);
        Request::create([
            'title'=>'Sensus Warga',
            'student_id'=>1,
            'lecture_acceptance'=>false,
            'admin_acceptance'=>false
        ]);
        Request::create([
            'title'=>'Sensus Kesehatan',
            'student_id'=>1,
            'lecture_acceptance'=>false,
            'admin_acceptance'=>false
        ]);
    }
}
