<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    static public function getJournays()
    {
        $journey = (object) [
            (object)[
                'id' => '1',
                'date' => '1974',
                'content' => 'Born in Saida to father Samir and mother Hayat of Majdelyoun a village to the east of Saida'
            ],
            (object)[
                'id' => '1',
                'date' => '1978 - 1985',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

            (object)[
                'id' =>  '',
                'date' => '1985 - 1988',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

            (object)[
                'id' =>  '',
                'date' => '1988 - 1992',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

            (object)[
                'id' =>  '',
                'date' => '1988 - 1992',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

            (object)[
                'id' =>  '',
                'date' => '1988 - 1992',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

            (object)[
                'id' =>  '',
                'date' => '1988 - 1992',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

            (object)[
                'id' =>  '',
                'date' => '1988 - 1992',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

            (object)[
                'id' =>  '',
                'date' => '1988 - 1992',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

            (object)[
                'id' =>  '',
                'date' => '1988 - 1992',
                'content' => 'Sidoon National School till Grade 5, then displaced by war to Beirut'
            ],

        ];
        return $journey;
    }
}
