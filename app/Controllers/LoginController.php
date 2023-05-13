<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function loginAuth(){
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email',$email)->first();
        if($data){
            $db_pass = $data['password'];
            $authenticatePassword = password_verify($password,$db_pass);
            if($authenticatePassword){
                $s = [
                    'id'=>$data['id'],
                    'name'=>$data['name'],
                    'email'=> $data['email'],
                    'isLoggedIn' =>TRUE,
                    'isAdmin'=>$data['is_admin'],
                    'member_since'=>$data['created_at'],
                ];
                $session->set($s);
                return redirect()->to('/profile');
            }
            else{
                $session->setFlashdata('msg','Password is incorrect');
                return redirect()->to('/login');
            }
        }
        else{
            $session->setFlashdata('msg','Email does not exist');
            return redirect()->to('/login');
        }
    }
}
