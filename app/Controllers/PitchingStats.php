<?php

namespace App\Controllers;

use App\Models\PitchStatsModel;
use CodeIgniter\RESTful\ResourceController;

class PitchingStats extends ResourceController
{


    public function __construct()
    {
        $this->model = new PitchStatsModel();
    }

    public function show($id = null)
    {
        //$model = new EmployeeModel();
        $results = $this->model->find($id);
        return view('table_view',['title'=>"Pitching Stats", 'results'=>[$results]]);
    }


    public function new()
    {
        $db = db_connect();
        $fields = $db->getFieldNames("pitching_stats");
        $fields = array_diff($fields,['player_id']);
        return view('insert_view',['title'=>"Add Player Stats",
            'fields'=>$fields,'tablename'=>"pitching_stats",'route_table'=>'pitching_stats']);
    }


    public function create()
    {
        try{
            $db = db_connect();
            $data = $this->request->getPost();
            foreach($data as $key=>$value){
                $data[$key] = $db->escapeString($value);
            }
            $lastId = $db->query("select max(player_id) as id from pitching_stats")->getResultArray();
            $newId = intval($lastId[0]['id']) + 1;
            $data['player_id'] = $newId;
            $this->model->insert($data);
            $this->response->redirect('/pitching_stats/'. $newId);
        }
        catch(Exception $ex){
            return "Bad stuff";
        }


    }


    public function edit($id = null)
    {
        $results = $this->model->find($id);
        unset($results['player_id']);
        return view('update_view',['title'=>'Pitching Stats','results'=>$results,
            'pk'=>$id]);
    }


    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->where('player_id',$id)->set($data)->update();
        $this->response->redirect("/pitching_stats/$id");
    }


    public function delete($id = null)
    {
        //
    }
}
