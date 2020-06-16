<?php

namespace App\Http\Controllers;

use App\Categorys;
use Illuminate\Http\Request;

class AdminCategorysController extends Controller
{


    public function index()
    {
        $data = Categorys::orderBy('created_at', 'DESC')->paginate(20);

        return view('admin', ['page' => 'categorys', 'data' => $data]);
    }


    public function getAdd()
    {
        return view('admin', [
            'err' => null,
            'page' => 'add_categorys'
        ]);
    }

    public function postAdd(Request $req)
    {
        if (!$req->filled(['name'])) {
            return redirect()->route('adminCategorysGetAdd')->withInput();
        }

        $categorys = new Categorys($req->input());
        $categorys->save();

        return redirect()->route("adminCategorys");
    }

    public function getEdit($id)
    {
        $categorysItem = Categorys::find($id);

        return view('admin', [
            'page' => 'edit_categorys',
            'err' => Session('err', null),
            'categorys_item' => $categorysItem
        ]);
    }

    public function putEdit(Request $req, $id)
    {
        if (!$req->filled(['name'])) {
            return redirect()->route('adminCategorysGetEdit', ['id' => $id])->withInput()->with([
                'err' => 'Sửa thông tin thất bại! Vui lòng điền lại đầy đủ thông tin'
            ]);
        }

        $categorys = Categorys::find($id);
        $categorys->name = $req->input('name');
        $categorys->save();

        return redirect()->route("adminCategorys");
    }

    public function delete($id)
    {
        Categorys::destroy($id);
    }
}
