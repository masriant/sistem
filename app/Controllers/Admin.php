<?php

namespace App\Controllers;

class Admin extends BaseController
{
  public function index()
  {
    return view('admin/overview');
  }

  //--------------------------------------------------------------------
  public function template()
  {
    return view('admin/template');
  }

  //--------------------------------------------------------------------

}