<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use APP\Models\UserModel;

class Portfolio extends BaseController
{
    public function index()
    {
        return view('portfolio/portfolio');
    }
    public function about()
    {
        return view('portfolio/about');
    }
    public function project()
    {
        return view('portfolio/projects');
    }
    public function contac()
    {
        return view('portfolio/contac');
    }
}
