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
    $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $lakip = $this->lakipModel->search($keyword);
    } else {
      $lakip = $this->lakipModel;
    }
    $data = [
      'title' => 'Data',
      // 'lakip' => $this->lakipModel->findAll(),
      'lakip' => $lakip->paginate(10, 'id'),
      'pager' => $this->lakipModel->pager,
      'currentPage' => $currentPage,
      'message' => 'Welcome to my Blog!'
    ];
    return view('home/data', $data);
  }
  //--------------------------------------------------------------------

  public function detail($id)
  {
    $data = [
      'title' => 'Data',
      'lakip' => $this->lakipModel->find($id),

    ];
    return view('home/detail', $data);
  }
  //--------------------------------------------------------------------

  public function about()
  {
    // $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    // $keyword = $this->request->getVar('keyword');
    // if ($keyword) {
    //   $lakip = $this->lakipModel->search($keyword);
    // } else {
    //   $lakip = $this->lakipModel;
    // }
    $data = [
      'title' => 'About',
      'lakip' => $this->lakipModel->findAll(),
      // 'lakip' => $lakip->paginate(10, 'id'),
      // 'pager' => $this->lakipModel->pager,
      // 'currentPage' => $currentPage,

    ];
    return view('home/about', $data);
  }
}