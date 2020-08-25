<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
  public function index()
  {
    $data = [];

    echo view('main/previews/header', $data);
    echo view('dashboard');
    echo view('main/previews/footer');
  }

  //--------------------------------------------------------------------

}