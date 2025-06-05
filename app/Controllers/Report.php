<?php
namespace App\Controllers;

use App\Models\ConModel;

class Report extends BaseController
{
    public function index()
    {
        $conModel = new ConModel();
        $data['table'] = $conModel->findAll();
        return view('report', $data);
    }

    public function fetch_data()
    {
        // This method is now redundant and can be removed
        $conModel = new ConModel();
        $data['table'] = $conModel->findAll();
        return view('report', $data);
    }
}

