<?php

namespace App\Http\Controllers;

use App\Categorys;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsRawDatas = News::paginate(20);

        $newsDatas = [];

        foreach ($newsRawDatas as $item) {
            $item['cate_name'] = Categorys::find($item['cate_id'])['name'];
            array_push($newsDatas, $item);
        }

        return view('news', [
            'cate_name' => "tổng hợp",
            'rawDatas' => $newsRawDatas,
            'news_data' => $newsDatas
        ]);
    }

    public function category($cateId = 1)
    {
        return view('news', [
            'rawDatas' => Categorys::find($cateId)->paginate(20),
            'cate_name' => Categorys::find($cateId)['name'],
            'news_data' => Categorys::find($cateId)->news
        ]);
    }
}
