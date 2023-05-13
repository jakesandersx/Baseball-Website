<?php
namespace App\Cells;
use \CodeIgniter\View\Cells\Cell;

class stats_cell extends Cell
{
    protected $tablenames;

    public function getTableNames(){
        $db = db_connect();
        $results = $db->query('show tables')->getResultArray();
        $this->tablenames = [];
        for($i=0; $i < count($results); $i++){
            $this->tablenames[] = $results[$i]['Tables_in_sandersbaseball'];
        }
    }

    public function getMenuBar(){
        $this->getTableNames();
        return view('menu_cells/league_leaders_cell',['tablenames'=>$this->tablenames]);
    }
}
