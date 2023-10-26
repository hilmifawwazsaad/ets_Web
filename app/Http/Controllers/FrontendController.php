<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $news = News::all();
        return view('front.home', [
            'categories' => $categories,
            'news' => $news
        ]);
    }

    public function detail($slug){
        $categories = Categories::all();
        $news = News::where('slug', $slug)->first();
        $newpost = News::orderBy('created_at', 'DESC')->limit(2)->get();

        return view('front.news.detail-news', [
            'news' => $news,
            'categories' => $categories,
            'newpost' => $newpost
        ]);
    }
}
