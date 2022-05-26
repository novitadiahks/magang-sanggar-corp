<?php

namespace App\Models;

use CodeIgniter\Model;

class modelNB extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('invest')->get();
    }

    function pumur()
    {
        $builder = $this->db->table('invest');

        $builder->select('umur');
        $query = $builder->get();

        return $query;
    }

    function pstatus()
    {
        $builder = $this->db->table('invest');

        $builder->select('status');
        $query = $builder->get();

        return $query;
    }

    function phasil()
    {
        $builder = $this->db->table('invest');

        $builder->select('penghasilan');
        $query = $builder->get();

        return $query;    
    }

    function phutang()
    {
        $builder = $this->db->table('invest');

        $builder->select('hutang');
        $query = $builder->get();

        return $query;    
    }

    function invest()
    {
        $builder = $this->db->table('invest');

        $builder->select('invest');
        $query = $builder->get();

        return $query;    
    }
}
