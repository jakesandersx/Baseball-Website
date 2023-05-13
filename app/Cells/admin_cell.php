<?php
namespace App\Cells;
use \CodeIgniter\View\Cells\Cell;

class admin_cell extends Cell
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
        return view('menu_cells/admin_cell',['tablenames'=>$this->tablenames]);
    }
}
