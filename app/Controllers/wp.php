<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\modelWP;

class wp extends Controller
{
    public function index()
    {
        echo View('tampilwp');
    }
}
