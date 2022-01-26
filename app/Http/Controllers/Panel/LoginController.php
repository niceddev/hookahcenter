<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('panel.login');
    }

    public function auth()
    {
        dd(collect(['asd','zxc','qwe']));
        return 'asd';
    }

}
