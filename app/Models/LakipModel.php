<?php

namespace App\Models;

use CodeIgniter\Model;

class LakipModel extends Model
{
  protected $table = 'lakip';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'alamat', 'kodeqr'];

  protected $primaryKey = 'id';

  // protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // protected $validationRules    = [];
  // protected $validationMessages = [];
  // protected $skipValidation     = false;

  public function getLakip($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }

  public function search($keyword)
  {
    // $builder = $this->table('lakip');
    // $builder->like('name', $data);
    // $builder->like('alamat', $data);
    // $builder->like('kodeqr', $data);
    // return $builder;

    return $this->table('lakip')->like('nama', $keyword)->orLike('alamat', $keyword)->orLike('kodeqr', $keyword);
  }

  public function kodeUser()
  {
    return $this->table('lakip')->countAll();
  }

  public function kwitansiUrut()
  {
    return $this->table('lakip')->count();
  }
}