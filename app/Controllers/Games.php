<?php

namespace App\Controllers;

use App\Models\GamesModel;
use CodeIgniter\RESTful\ResourceController;

class Games extends ResourceController
{


    public function __construct()
    {
        $this->model = new GamesModel();
    }

    public function show($id = null)
    {
        //$model = new EmployeeModel();
        $results = $this->model->find($id);
        return view('table_view',['title'=>"Games", 'results'=>[$results]]);
    }


    public function new()
    {
        $db = db_connect();
        $fields = $db->getFieldNames("games");
        $fields = array_diff($fields,['game_id']);
        return view('insert_view',['title'=>"Add Game",
                'fields'=>$fields,'tablename'=>"games",'route_table'=>'games']);
    }


    public function create()
    {
        try{
            $db = db_connect();
            $data = $this->request->getPost();
            foreach($data as $key=>$value){
                $data[$key] = $db->escapeString($value);
            }
            $lastId = $db->query("select max(game_id) as id from games")->getResultArray();
            $newId = intval($lastId[0]['id']) + 1;
            $data['game_id'] = $newId;
            $this->model->insert($data);
            $this->response->redirect('/games/'. $newId);
        }
        catch(Exception $ex){
            return "Bad stuff";
        }


    }


    public function edit($id = null)
    {
        $results = $this->model->find($id);
        unset($results['game_id']);
        return view('update_view',['title'=>'Game','results'=>$results,
                'pk'=>$id]);
    }


    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->where('game_id',$id)->set($data)->update();
        $this->response->redirect("/games/$id");
    }


    public function delete($id = null)
    {
        //
    }
}

