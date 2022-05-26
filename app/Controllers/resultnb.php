<?php

namespace App\Controllers;

use App\Models\modelNB;

class resultnb extends BaseController
{
    public function index()
    {
        $nb = new modelNB();
        $data1 = [
            'tampildata' => $nb->tampildata()->getResult()
        ];

        $pumur = [
            'pumur' => $nb->pumur()->getResult()
        ];
        $pstatus = [
            'pstatus' => $nb->pstatus()->getResult()
        ];
        $phasil = [
            'phasil' => $nb->phasil()->getResult()
        ];
        $phutang = [
            'phutang' => $nb->phutang()->getResult()
        ];
        $invest = [
            'invest' => $nb->invest()->getResult()
        ];

        return view('resultnb', $data1, $pumur, $pstatus, $phasil, $phutang, $invest);
    }
}
