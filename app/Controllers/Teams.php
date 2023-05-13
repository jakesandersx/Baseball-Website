<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlayersModel;
use App\Models\TeamHitStatsModel;
use App\Models\TeamPitchStatsModel;
use App\Models\PitchStatsModel;
use App\Models\HitStatsModel;
use App\Models\TeamsModel;

class Teams extends BaseController
{
    public function index()
    {
        echo view('teams');
    }

    public function individual_team($team)
    {
        echo view('teams/' . $team);
    }

    public function individual_team_hitting_stats($team){
        $this->model = new HitStatsModel();
        $results = $this->model->where('team_name', $team)->findAll();
        return view('/individual_views/teams_view', ['title' => "2022 $team Batting Statistics", 'results' => $results]);
    }

    public function individual_team_pitching_stats($team){
        $this->model = new PitchStatsModel();
        $results = $this->model->where('team_name', $team)->findAll();
        return view('/individual_views/teams_view', ['title' => "2022 $team Pitching Statistics", 'results' => $results]);
    }

    public function roster($team){
        $this->model = new PlayersModel();
        $results = $this->model->where('team_name', $team)->orderBy('player_id')->findAll();
        return view('/individual_views/teams_view', ['title' => "2022 $team Roster", 'results' => $results]);
    }

    public function __construct()
    {
        $this->model = new TeamsModel();
    }

    public function show($id = null)
    {
        $results = $this->model->find($id);
        return view('table_view',['title'=>"Teams", 'results'=>[$results]]);
    }


    public function new()
    {
        $db = db_connect();
        $fields = $db->getFieldNames("teams");
        $fields = array_diff($fields,['teams_id']);
        return view('insert_view',['title'=>"Add Team Stats",
            'fields'=>$fields,'tablename'=>"teams",'route_table'=>'teams']);
    }


    public function create()
    {
        try{
            $db = db_connect();
            $data = $this->request->getPost();
            foreach($data as $key=>$value){
                $data[$key] = $db->escapeString($value);
            }
            $lastId = $db->query("select max(team_id) as id from team_pitching_stats")->getResultArray();
            $newId = intval($lastId[0]['id']) + 1;
            $data['team_id'] = $newId;
            $this->model->insert($data);
            $this->response->redirect('/teams/'. $newId);
        }
        catch(Exception $ex){
            return "Bad stuff";
        }


    }


    public function edit($id = null)
    {
        $results = $this->model->find($id);
        unset($results['team_id']);
        return view('update_view',['title'=>'Teams','results'=>$results,
            'pk'=>$id]);
    }


    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->where('team_id',$id)->set($data)->update();
        $this->response->redirect("/teams/$id");
    }

}
