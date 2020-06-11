<?php

namespace App\Http\Controllers;

use App\Categorys;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($page = 1)
    {
        $newsRawDatas = News::all()->take(20);

        $newsDatas = [];

        foreach ($newsRawDatas as $item) {
            $item['cate_name'] = Categorys::find($item['cate_id'])['name'];
            array_push($newsDatas, $item);
        }

        return view('news', [
            'cate_name' => "tổng hợp",
            'news_data' => $newsDatas
        ]);
    }

    public function category($cateId = 1, $page = 1)
    {
        return view('news', [
            'cate_name' => Categorys::find($cateId)['name'],
            'news_data' => Categorys::find($cateId)->news
        ]);
    }
}
