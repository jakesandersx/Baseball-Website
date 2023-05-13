<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GamesModel;

class Scores extends BaseController
{
    public function index()
    {
        $this->model = new GamesModel();
        $results = $this->model->findAll();
        return view('/individual_views/scores_view', ['title' => "2022 Game Results", 'results' => $results]);
    }

    public function scores_of_team($team){
        $this->model = new GamesModel();
        $where = "home_team_name = '$team' OR away_team_name = '$team'";
        $results = $this->model->where($where)->findAll();
        return view('/individual_views/scores_view', ['title' => "2022 $team Results", 'results' => $results]);
    }
}
