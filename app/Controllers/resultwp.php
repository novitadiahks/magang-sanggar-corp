<?php
namespace App\Controllers;
use App\Models\modelWP;

class resultwp extends BaseController
{
    public function index()
    {
        $wp = new modelWP();
        $data1 = [
            'tampildata' => $wp->tampildata()->getResult()
        ];
        // $data2 = [
        //     'tampilmodel' => $wp->tampilmodel()->getResult()
        // ];
        return view('resultwp', $data1);
    }
}

