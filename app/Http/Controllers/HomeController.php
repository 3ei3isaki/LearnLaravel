<?php

namespace App\Http\Controllers;

use App\Categorys;
use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newsRawDatas = News::paginate(5);
        $categorysData = Categorys::all();

        $newsDatas = [];
        $largeNewsData = [];
        $smallNewsData = [];

        foreach ($newsRawDatas as $index => $item) {
            if ($index == 1) {
                array_push($largeNewsData, $item);
                continue;
            } else if ($index == 2 || $index == 3) {
                array_push($smallNewsData, $item);
                continue;
            }

            array_push($newsDatas, $item);
        }

        return view('home', [
            'rawDatas' => $newsRawDatas,
            'categorys_data' => $categorysData,
            'large_news_data' => $largeNewsData,
            'small_news_data' => $smallNewsData,
            'news_data' => $newsDatas
        ]);
    }
}
