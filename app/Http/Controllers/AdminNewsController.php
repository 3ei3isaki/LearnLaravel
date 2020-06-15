<?php

namespace App\Http\Controllers;

use App\Categorys;
use App\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index()
    {
        $data = News::paginate(20);

        return view('admin', ['page' => 'news', 'data' => $data]);
    }


    public function getAdd()
    {
        $CategoryData = Categorys::all();

        return view('admin', [
            'page' => 'add_news',
            'category_data' => $CategoryData
        ]);
    }

    public function postAdd(Request $req)
    {
        if (!$req->filled(['title', 'description', 'info', 'cate_id', 'url', 'image_url'])) {
            return redirect()->route('adminNewsGetAdd')->withInput();
        }

        $news = new News($req->input());
        $news->save();

        return redirect()->route("adminNews");
    }

    public function getEdit($id)
    {
        $CategoryData = Categorys::all();
        $newsItem = News::find($id);

        return view('admin', [
            'page' => 'edit_news',
            'category_data' => $CategoryData,
            'news_item' => $newsItem
        ]);
    }

    public function postEdit(Request $req, $id)
    {
        if (!$req->filled(['title', 'description', 'info', 'cate_id', 'url', 'image_url'])) {
            return redirect()->route('adminNewsGetEdit')->withInput();
        }

        $news = News::find($id);
        $news->title = $req->input('title');
        $news->description = $req->input('description');
        $news->info = $req->input('info');
        $news->cate_id = $req->input('cate_id');
        $news->url = $req->input('url');
        $news->image_url = $req->input('image_url');
        $news->save();

        return redirect()->route("adminNews");
    }

    public function delete($id)
    {
        News::destroy($id);
    }
}
