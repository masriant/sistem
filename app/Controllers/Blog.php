<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends \CodeIgniter\Controller
{
  function post($slug)
  {
    $model = new BlogModel();

    $data['post'] = $model->getPosts($slug);


    // main/previews/ => theme/previews
    echo view('main/previews/header', $data);
    echo view('blog/post');
    echo view('main/previews/footer');
  }
  //--------------------------------------------------------------------
  function create()
  {
    helper('form');
    $model = new BlogModel();

    if (!$this->validate([
      'title' => 'required|min_length[5]|max_length[255]',
      'body'  => 'required'
    ])) {
      echo view('main/previews/header');
      echo view('blog/create');
      echo view('main/previews/footer');
    } else {
      $model->save(
        [
          'title' => $this->request->getVar('title'),
          'body' => $this->request->getVar('body'),
          'slug' => url_title($this->request->getVar('title'))
        ]
      );

      $session = \Config\Services::session();
      $session->setFlashdata('success', 'New post was created!');
      return redirect()->to('/');
    }
  }
}






















//--------------------------------------------------------------------
// function tampil($page = 'contact')
// {
//   // main/_partials/ => template/_partials
//   return view('pages/' . $page);
// }

  // public function index()
  // {
  //   echo view('main/previews/header');
  //   echo view('pages/home');
  //   echo view('main/previews/footer');
  // }

  // //--------------------------------------------------------------------

  // function show($page = 'home')
  // {
  //   if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
  //     // Whoops, we don't have a page for that!
  //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
  //   }
  //   // main/previews/ => theme/previews
  //   echo view('main/previews/header');
  //   echo view('pages/' . $page);
  //   echo view('main/previews/footer');
  // }