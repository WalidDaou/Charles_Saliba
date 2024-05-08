<?php

namespace App\Http\Controllers;

use App\Models\Authorship;
use App\Models\Book;
use App\Models\Journey;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function render()
    {

        $authorships = Authorship::getAuthorships();

        $videos = Video::getVideos();

        $books = Book::getBooks();

        $journey = Journey::getJournays();

        return view('pages.home-page', ['authorships' => $authorships, 'videos' => $videos, 'books' => $books , 'journey' => $journey]);
    }
}
