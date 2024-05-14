<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('videos')->delete();
        
        DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2024-05-09 11:26:51',
                'updated_at' => '2024-05-09 11:26:51',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-1',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-2',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-3',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-4',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-3',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-2',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-1',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-2',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-3',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-2',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2024-05-09 11:27:48',
                'updated_at' => '2024-05-09 11:27:48',
                'title' => 'Name Of The Video Goes Here
',
                'video_path' => NULL,
                'image_path' => 'video-4',
            ),
        ));
        
        
    }
}