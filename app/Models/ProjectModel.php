<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
  protected $table = ['db_project'];
  // protected $table = ['db_project', 'db_hotel', 'db_instansi', 'db_kwitansi', 'db_register', 'db_sertifikat', 'db_content', 'db_tema'];

  protected $useTimestamps = true;
  protected $allowedFields = ['userid', 'nama', 'slug', 'jabatan', 'instansi', 'kabupaten', 'tema', 'lokasi', 'hotel', 'room', 'checkin', 'checkout', 'kontribusi', 'kodeqr'];

  protected $primaryKey = 'id';

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;

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

    return $this->table('db_project')->like('nama', $keyword)->orLike('lokasi', $keyword)->orLike('userid', $keyword);
  }

  public function kodeUser()
  {
    return $this->table('db_project')->countAll();
  }

  public function noUrut()
  {
    return $this->table('db_project')->count();
  }
  // public function getAll()
  // {
  //   return $this->db->get->table($this->table, ["db_tema"])->result();
  // }
}