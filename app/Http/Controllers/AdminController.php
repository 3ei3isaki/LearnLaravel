<?php

namespace App\Http\Controllers;

use App\Categorys;
use App\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $newsCount = News::all()->count();
        $categorysCount = Categorys::all()->count();

        return view('admin', ['page' => 'home', 'data' => [
            'news_count' => $newsCount,
            'categorys_count' => $categorysCount
        ]]);
    }
}
