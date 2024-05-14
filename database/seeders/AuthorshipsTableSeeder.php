<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AuthorshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('authorships')->delete();
        
        DB::table('authorships')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Leadership And Governance',
                'logo' => 'authorship-1',
                'types' => 'Leadership,Governance,Management',
                'image' => 'leader-1',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Human Resources',
                'logo' => 'authorship-2',
                'types' => 'Human Resources Strategy,Human Resources Management,Personal Development',
                'image' => 'leader-1',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Socio-Economics',
                'logo' => 'authorship-3',
                'types' => 'Economic Affairs,Social Affairs,Political Affairs,Religious Affairs',
                'image' => 'leader-1',
            ),
        ));
        
        
    }
}