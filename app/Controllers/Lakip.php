<?php

namespace App\Controllers;

use App\Models\LakipModel;

class Lakip extends BaseController
{
  protected $lakipModel;
  public function __construct()
  {
    $this->lakipModel = new LakipModel();
  }
  //--------------------------------------------------------------------

  public function index()
  {
    $data = [
      'title' => 'Home',
      'message' => 'Welcome to my Blog!'
    ];
    return view('home/default', $data);
  }

  //--------------------------------------------------------------------

  public function data()
  {
    $data = [
      'title' => 'Data',
      'lakip' => $this->lakipModel->findAll(),
      'message' => 'Welcome to my Blog!'
    ];
    return view('home/data', $data);
  }
}