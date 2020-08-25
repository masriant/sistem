<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    // $this->cachePage(38);
    // return view('welcome_message');
    // echo 'This is pages controler';
    // main/previews/ => 
    echo view('main/previews/header');
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
  function tampil($page = 'contact')
  {
    // main/_partials/ => template/_partials
    return view('pages/' . $page);
  }
}