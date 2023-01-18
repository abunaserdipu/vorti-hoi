<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CircularModel;
use CodeIgniter\API\ResponseTrait;

class FrontendController extends BaseController
{

    use ResponseTrait;
    public function services()
    {
        $model = new CircularModel();
        $services = $model->orderBy('school_name', "ASC")->findAll();
        return $this->respond($services);
    }
}
