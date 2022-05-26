<?php

namespace App\Models;

use CodeIgniter\Model;

class modelWP extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata(){
        return $this->db->table('alterkriteria')->get();
    }
    // function tampilmodel(){
    //     return $this->db->table('alternatif')->get();
    // }
}
