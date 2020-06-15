<?php

namespace App\Http\Controllers;

use App\Categorys;
use Illuminate\Http\Request;

class AdminCategorysController extends Controller
{


    public function index()
    {
        $data = Categorys::paginate(20);

        return view('admin', ['page' => 'category', 'data' => $data]);
    }


    public function add()
    {
    }


    public function edit()
    {
        # code...
    }


    public function delete()
    {
        # code...
    }
}
