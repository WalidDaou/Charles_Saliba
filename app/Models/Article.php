<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    static public function getArticles()
    {
        $articles = [
            (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ], (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ], (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ], (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ], (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ], (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ], (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ], (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ], (object)[
                'id' => '1',
                'title' => 'The Global Leader Of Today',
                'date' => '18-4-2024',
                'link-file' => 'nnnfvawnlnfoal'
            ],

        ];

        return $articles;
    }
}
