<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }
    public function circular()
    {
        return view('admins/admission_circular');
    }
}
