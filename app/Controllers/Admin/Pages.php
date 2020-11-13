<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        return view('admin/lockscreen');
    }

    public function contact()
    {
        return view('admin/contact');
    }

    public function profile()
    {
        return view('admin/profile');
    }

    public function coba()
    {
        return view('admin/coba');
    }

    //--------------------------------------------------------------------

}
