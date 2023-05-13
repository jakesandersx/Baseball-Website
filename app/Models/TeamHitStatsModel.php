<?php

namespace App\Models;

class TeamHitStatsModel extends \CodeIgniter\Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'team_hitting_stats';
    protected $primaryKey       = 'team_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["team_id", "bat_avg", "runs", "hits", "doubles", "triples", "home_runs", "rbis",
                                    "rbis", "stolen_bases", "walks", "strikeouts"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getPrimaryKeyName(){
        return $this->primaryKey;
    }

}