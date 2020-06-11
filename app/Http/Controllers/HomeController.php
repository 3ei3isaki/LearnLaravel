<?php

namespace App\Http\Controllers;

use App\Categorys;
use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newsRawDatas = News::all()->take(20)->toArray();
        $categorysData = Categorys::all();

        $newsDatas = [];
        $largeNewsData = array_shift($newsRawDatas);
        $smallNewsData = [];
        array_push($smallNewsData, array_shift($newsRawDatas));
        array_push($smallNewsData, array_shift($newsRawDatas));

        foreach ($newsRawDatas as $item) {
            $item['cate_name'] = Categorys::find($item['cate_id'])['name'];

            array_push($newsDatas, $item);
        }

        return view('home', [
            'categorys_data' => $categorysData,
            'large_news_data' => $largeNewsData,
            'small_news_data' => $smallNewsData,
            'news_data' => $newsDatas
        ]);
    }
}
