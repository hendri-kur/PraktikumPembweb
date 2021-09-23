<?php

namespace App\Controllers;

class Templating extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Blog - Post"
        ];
        //echo view('layouts/header', $data);
        //echo view('layouts/navbar');
        //echo view('v_post');
        //echo view('layouts/footer');
        return view('view_admin');
    }
}
