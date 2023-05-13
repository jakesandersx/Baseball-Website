<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LogoutController extends BaseController
{
    public function index()
    {
       $session = session();
       $session->destroy();
       $this->response->redirect('/login');
    }
}
