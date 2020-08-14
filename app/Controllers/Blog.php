<?php

namespace App\Controllers;

class Blog extends \CodeIgniter\Controller
{
  public function index()
  {
    $data = [
      'page_title' => 'Your title',
      'todo_list' => ['Clean House', 'Call Mom', 'Run Errands'],
      'title'     => "My Real Title",
      'heading'   => "My Real Heading",
      'message' => 'Welcome to my Blog!'
    ];

    // echo view('header');
    // echo view('menu');
    // echo view('default', $data, ['saveData' => true]);
    return view('file_default', $data);
    // echo view('footer');
  }
}