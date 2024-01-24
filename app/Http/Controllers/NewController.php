<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function detail_course_1()
    {
        return view('new/chi-tiet-khoa-hoc-1');
    }

    public function detail_course_2()
    {
        return view('new/chi-tiet-khoa-hoc-2');
    }

}
