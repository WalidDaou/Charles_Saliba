<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorship extends Model
{
    use HasFactory;

    static public function getAuthorships()
    {
        $authorships  = [
            (object)[
                'id' => 1,
                'title' => 'Leadership And Governance',
                'logo' => 'authorship-1',
                'types' => 'Leadership,Governance,Management',
                'image' => 'leader-1' 
            ],
            (object)[
                'id' => 2,
                'title' => 'Human Resources',
                'logo' => 'authorship-2',
                'types' => 'Human Resources Strategy,Human Resources Management,Personal Development',
                'image' => 'leader-1' 
            ],
            (object)[
                'id' => 3,
                'title' => 'Socio-Economics',
                'logo' => 'authorship-3',
                'types' => 'Economic Affairs,Social Affairs,Political Affairs,Religious Affairs',
                'image' => 'leader-1' 
            ],
        ];

        return $authorships;
    }
}

