<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HitStatsModel;
use App\Models\PitchStatsModel;
use App\Models\TeamPitchStatsModel;
use App\Models\TeamHitStatsModel;

class Stats extends BaseController
{
    //public function index()
    //{
     //   echo view('stats');
    //}
    public function __construct()
    {
        $this->model = new HitStatsModel();
    }

    public function index()
    {
        $results = $this->model->findAll();
        return view('stats');
    }

    public function leaders($category)
    {
        if($category == 'IP' || $category == 'strikeouts') {
            $this->model = new PitchStatsModel();
            $results = $this->model->orderBy($category, 'DESC')->select("name, $category")->findAll(5);
            return view('individual_views/league_leaders_view', ['title' => "2022 $category Leaders", 'results' => $results]);
        }
        elseif($category == 'ERA') {
            $this->model = new PitchStatsModel();
            $results = $this->model->orderBy($category, 'ASC')->select("name, $category")->findAll(5);
            return view('individual_views/league_leaders_view', ['title' => "2022 $category Leaders", 'results' => $results]);
        }
        else{
            $results = $this->model->orderBy($category, 'DESC')->select("name, $category")->findAll(5);
            return view('individual_views/league_leaders_view', ['title'=> "2022 $category Leaders", 'results'=>$results]);
        }
    }

    public function team_leaders($category)
    {
        if($category == 'IP' || $category == 'strikeouts') {
            $this->model = new TeamPitchStatsModel();
            $results = $this->model->orderBy($category, 'DESC')->select("team_name, $category")->findAll(4);
            return view('/individual_views/teams_view', ['title' => "2022 Team $category Leaders", 'results' => $results]);
        }
        elseif($category == 'ERA') {
            $this->model = new TeamPitchStatsModel();
            $results = $this->model->orderBy($category, 'ASC')->select("team_name, $category")->findAll(4);
            return view('/individual_views/teams_view', ['title' => "2022 Team $category Leaders", 'results' => $results]);
        }
        else{
            $this->model = new TeamHitStatsModel();
            $results = $this->model->orderBy($category, 'DESC')->select("team_name, $category")->findAll(4);
            return view('/individual_views/teams_view', ['title'=> "2022 Team $category Leaders", 'results'=>$results]);
        }
    }



    public function team_stats(){
        return view('/individual_views/teams_view', ['title'=>'Team Stats']);
    }

    public function league_leaders(){
        return view('league_leaders');
    }
}
