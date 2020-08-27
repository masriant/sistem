<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Dashboard extends BaseController
{
  public function index()
  {
    $model = new BlogModel();
    $data['news'] = $model->getPosts();
    // $data = [];

    echo view('main/previews/header', $data);
    echo view('dashboard');
    echo view('main/previews/footer');
  }

  //--------------------------------------------------------------------

}