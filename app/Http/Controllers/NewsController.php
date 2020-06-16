<?php

namespace App\Http\Controllers;

use App\Categorys;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsRawDatas = News::orderBy('id', 'DESC')->paginate(15);
        $newsRawDatas;

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
            'rawDatas' => Categorys::find($cateId)->paginate(15),
            'cate_name' => Categorys::find($cateId)['name'],
            'news_data' => News::where("cate_id", $cateId)->paginate(15)
        ]);
    }
}
