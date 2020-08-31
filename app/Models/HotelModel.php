<?php

namespace App\Models;

use CodeIgniter\Model;


class HotelModel extends Model
{
  protected $table = ['db_hotel'];
  // // protected $table = ['db_project', 'db_hotel', 'db_instansi', 'db_kwitansi', 'db_register', 'db_sertifikat', 'db_content', 'db_tema'];
  protected $useTimestamps = true;
  protected $allowedFields = ['hotel', 'slug', 'alamat', 'kota', 'room', 'marketing', 'contact_marketing', 'status_marketing', 'checkin', 'checkout', 'bed_single', 'bed_double', 'bed_twin', 'meeting_halfday', 'meeting_fullday', 'meeting_fullboard', 'bed_fullboard', 'compliment'];


  // protected $primaryKey = 'id';

  // // protected $returnType     = 'array';

  // protected $createdField  = 'created_at';
  // protected $updatedField  = 'updated_at';
  // protected $deletedField  = 'deleted_at';



  public function getHotel($slug = false)
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

    return $this->table('db_hotel')->like('slug', $keyword)->orLike('nama', $keyword)->orLike('userid', $keyword);
  }

  public function kodeUser()
  {
    return $this->table('db_hotel')->countAll();
  }

  public function noUrut()
  {
    // return $this->table('db_hotel')->getPlatform();
    return $this->table('db_hotel')->countAllResults();
    // $this->query('SELECT MAX(userid) AS `maxkode`  FROM  `db_hotel`');
  }
  // public function update()
  // {
  //   $this->update([$db_hotel = ''[, $set = NULL[, $where = NULL[, $limit = NULL]]]]);
  // }
}