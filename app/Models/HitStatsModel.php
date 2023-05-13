<?php

namespace App\Models;

class HitStatsModel extends \CodeIgniter\Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'hitting_stats';
    protected $primaryKey       = 'player_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["player_id", "name", "bat_avg", "at_bats", "runs", "hits", "doubles",
                                    "triples", "home_runs", "rbis", "stolen_bases", "walks", "strikeouts"];

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