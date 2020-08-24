<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $this->cachePage(38);
    return view('welcome_message');
  }

  //--------------------------------------------------------------------

  function showme($page = 'home')
  {
    echo 'This page is: ' . $page;
    echo 'This page is: ' . $page;
    echo 'This page is: ' . $page;
  }
  //--------------------------------------------------------------------

}