<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    static public function getVideos()
    {
        $videos = [
            (object)[
                'id' => '1',
                'title' => 'Name Of The Video Goes Here',
                'video_path' => '',
                'image_path'=> 'video-1',
            ],
            (object)[
                'id' => '2',
                'title' => 'Name Of The Video Goes Here',
                'video_path' => '',
                'image_path'=> 'video-2',
            ],
            (object)[
                'id' => '3',
                'title' => 'Name Of The Video Goes Here',
                'video_path' => '',
                'image_path'=> 'video-3',
            ],
            
            (object)[
                'id' => '4',
                'title' => 'Name Of The Video Goes Here',
                'video_path' => '',
                'image_path'=> 'video-4',
            ],

            (object)[
                'id' => '5',
                'title' => 'Name Of The Video Goes Here',
                'video_path' => '',
                'image_path'=> 'video-5',
            ],
        ];

        return $videos ;
    }
}
