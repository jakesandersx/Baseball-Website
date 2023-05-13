<?php

namespace App\Controllers;

use App\Models\TeamHitStatsModel;
use CodeIgniter\RESTful\ResourceController;

class TeamHittingStats extends ResourceController
{


    public function __construct()
    {
        $this->model = new TeamHitStatsModel();
    }

    public function show($id = null)
    {
        //$model = new EmployeeModel();
        $results = $this->model->find($id);
        return view('table_view',['title'=>"Team Hitting Stats", 'results'=>[$results]]);
    }


    public function new()
    {
        $db = db_connect();
        $fields = $db->getFieldNames("team_hitting_stats");
        $fields = array_diff($fields,['player_id']);
        return view('insert_view',['title'=>"Add Team Stats",
            'fields'=>$fields,'tablename'=>"team_hitting_stats",'route_table'=>'team_hitting_stats']);
    }


    public function create()
    {
        try{
            $db = db_connect();
            $data = $this->request->getPost();
            foreach($data as $key=>$value){
                $data[$key] = $db->escapeString($value);
            }
            $lastId = $db->query("select max(team_id) as id from team_hitting_stats")->getResultArray();
            $newId = intval($lastId[0]['id']) + 1;
            $data['team_id'] = $newId;
            $this->model->insert($data);
            $this->response->redirect('/team_hitting_stats/'. $newId);
        }
        catch(Exception $ex){
            return "Bad stuff";
        }


    }


    public function edit($id = null)
    {
        $results = $this->model->find($id);
        unset($results['team_id']);
        return view('update_view',['title'=>'Team Hitting Stats','results'=>$results,
            'pk'=>$id]);
    }


    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->where('team_id',$id)->set($data)->update();
        $this->response->redirect("/team_hitting_stats/$id");
    }


    public function delete($id = null)
    {
        //
    }
}

