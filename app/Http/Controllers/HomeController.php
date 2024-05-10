<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Authorship;
use App\Models\Book;
use App\Models\Charle;
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

        return view('pages.home-page', ['authorships' => $authorships, 'videos' => $videos, 'books' => $books, 'journey' => $journey]);
    }

    public function renderLeadership($id)
    {

        $leaderships = Authorship::getAuthorships();

        $firstLeadership = Authorship::findOrFail($id);

        $articles = Article::getArticles();

        return view('pages.leadership', ['leaderships' => $leaderships, 'firstLeadership' => $firstLeadership, 'articles' => $articles]);
    }

    public static function renderMedia()
    {

        $videos = Video::paginate(8);

        // $videos = Video::getVideos();


        return view('pages.media', ['videos' => $videos,]);
    }

    public static function renderBooks()
    {

        $books = Book::paginate(9);

        return view('pages.books', ['books' => $books,]);
    }


    public static function renderBook($id)
    {

        $book = Book::findOrFail($id);


        return view('pages.info-book', ['book' => $book,]);
    }

    public static function rendercharles()
    {

        $charles = Charle::getCHarles();

        $Previouslys = Charle::getPreviously();

        $expertises = Charle::getExpertises();

        return view('pages.charles-saliba', ['charles' => $charles, 'previouslys' => $Previouslys, 'expertises'  => $expertises,]);
    }

    public static function contact()
    {

        return view('pages.contact-us');
    }
}
