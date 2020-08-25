<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
  public function __construct()
  {
  }
  public function index()
  {
    $model = new BlogModel();
    $data['news'] = $model->getPosts();

    // $this->cachePage(38);
    // return view('welcome_message');
    // echo 'This is pages controler';
    // main/previews/ => 
    echo view('main/previews/header', $data);
    echo view('pages/home');
    echo view('main/previews/footer');
  }

  //--------------------------------------------------------------------

  function show($page = 'home')
  {
    if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }
    // main/previews/ => theme/previews
    echo view('main/previews/header');
    echo view('pages/' . $page);
    echo view('main/previews/footer');
  }
  //--------------------------------------------------------------------
  function main($page = 'about')
  {
    // main/previews/ => theme/previews
    echo view('main/previews/header');
    echo view('pages/' . $page);
    echo view('main/previews/footer');
  }
  //--------------------------------------------------------------------
  function contact($page = 'contact')
  {
    // main/_partials/ => template/_partials
    return view('pages/' . $page);
  }
}