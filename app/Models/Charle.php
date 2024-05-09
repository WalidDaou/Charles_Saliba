<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charle extends Model
{
    use HasFactory;

    static function getCHarles()
    {
        $charles = [
            (object)[
                'title' => "Standing Positions",
                'info' => "Founder and CEO at HR Works s.a.l., Organizational & Human Capital Consulting Firm. separator Co-founder at SME Platform s.a.l., specialized in supporting Institutional practice in SMEs. separator  Co-founder and President of the “Lebanese Consultants Association”, an NGO for organizing and exposing the Consulting Sector in Lebanon. separator Public Speaker on Organizational Performance Strategies, Leadership, and Human Capital Issues. separator Author and Thinker on Leadership, Talent Disruption, and Human Capital Dynamics.",


            ],
            (object)[
                'title' => "Advisory Positions",
                'info' => "Founder and CEO at HR Works s.a.l., Organizational & Human Capital Consulting Firm. separator Co-founder at SME Platform s.a.l., specialized in supporting Institutional practice in SMEs. separator  Co-founder and President of the “Lebanese Consultants Association”, an NGO for organizing and exposing the Consulting Sector in Lebanon. ",


            ],
        ];

        return $charles;
    }


    static function getPreviously()
    {

        $Previously = (object)[
            (object) [
                'date' => '2011 - 2014',
                'content' => 'Owner and Publisher of “The HR Review Magazine”'
            ],
            (object) [
                'date' => '2010 - 2014',
                'content' => 'Partner & CEO at SoftSource s.a.l.”'
            ],
            (object) [
                'date' => '2012 - 2017',
                'content' => 'Partner at Lebanese Adventure, an Experiential Learning and Eco Education Company”'
            ],
            (object) [
                'date' => '2011 - 2014',
                'content' => 'Owner and Publisher of “The HR Review Magazine”'
            ],
            (object) [
                'date' => '2010 - 2014',
                'content' => 'Partner & CEO at SoftSource s.a.l.”'
            ],
            (object) [
                'date' => '2012 - 2017',
                'content' => 'Partner at Lebanese Adventure, an Experiential Learning and Eco Education Company”'
            ],
        ];


        return $Previously;
    }

    static function getExpertises()
    {
        $expertises =
            [
                (object)[
                    'title' => 'Functional Expertise',

                    'content' => 'Operating Models , Organizational Development  , Human Capital , Governance , Performance Creation,  Leadership Development , Change Management ',
                    'second_content' => '',

                ],
                (object)[
                    'title' => 'Functional Expertise',

                    'content' => 'Operating Models , Organizational Development  , Human Capital , Governance , Performance Creation,  Leadership Development , Change Management ',

                    'second_content' => 'Operating Models , Organizational Development  , Human Capital , Governance , Performance Creation,  Leadership Development , Change Management ',

                ],
            ];
        return $expertises;
    }
}
