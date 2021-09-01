<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')-> insert([
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'skill1' => 'HTML',
            'pctskill1' => 100,
            'skill2' => 'CSS',
            'pctskill2' => 90,
            'skill3' => 'JavaScript',
            'pctskill3' => 75,
            'skill4' => 'PHP',
            'pctskill4' => 80,
            'skill5' => 'WordPress/CMS',
            'pctskill5' => 90,
            'skill6' => 'Photoshop',
            'pctskill6' => 55,
        ]);
    }
}
