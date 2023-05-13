<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        return view('header',['title'=>'Profile'])
            .view('profile_view',['title'=>'Profile'])
            .view('footer');
    }
}
