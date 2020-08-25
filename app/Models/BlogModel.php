<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
  protected $table = 'blog_post';
  protected $useTimestamps = true;
  protected $allowedFields = ['title', 'body', 'slug'];

  public function getPosts($slug = null)
  {
    if (!$slug) {
      return $this->findAll();
    }

    return $this->asArray()
      ->where(['slug' => $slug])
      ->first();
  }
}