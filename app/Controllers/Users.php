<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        echo view('users');
    }

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function show($id = null)
    {
        $results = $this->model->find($id);
        return view('table_view',['title'=>"Users", 'results'=>[$results]]);
    }


    public function new()
    {
        $db = db_connect();
        $fields = $db->getFieldNames("users");
        $fields = array_diff($fields,['user_id']);
        return view('insert_view',['title'=>"Add Users",
            'fields'=>$fields,'tablename'=>"users",'route_table'=>'users']);
    }


    public function create()
    {
        try{
            $db = db_connect();
            $data = $this->request->getPost();
            foreach($data as $key=>$value){
                $data[$key] = $db->escapeString($value);
            }
            $lastId = $db->query("select max(user_id) as id from users")->getResultArray();
            $newId = intval($lastId[0]['id']) + 1;
            $data['user_id'] = $newId;
            $this->model->insert($data);
            $this->response->redirect('/users/'. $newId);
        }
        catch(Exception $ex){
            return "Bad stuff";
        }


    }


    public function edit($id = null)
    {
        $results = $this->model->find($id);
        unset($results['users_id']);
        return view('update_view',['title'=>'Users','results'=>$results,
            'pk'=>$id]);
    }


    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->where('user_id',$id)->set($data)->update();
        $this->response->redirect("/users/$id");
    }

}
