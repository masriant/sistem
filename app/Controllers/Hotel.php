<?php

namespace App\Controllers;

use Mpdf\Mpdf;
use App\Models\HotelModel;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Hotel extends BaseController
{
  protected $hotelModel;
  public function __construct()
  {
    $this->hotelModel = new HotelModel();
    // $this->Mpdf = new Mpdf;
  }
  //--------------------------------------------------------------------

  public function index()
  {
    $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $hotel = $this->hotelModel->search($keyword);
    } else {
      $hotel = $this->hotelModel;
    }

    $test = $this->hotelModel->noUrut();
    $counter = $this->hotelModel->kodeUser();
    $urutan = (int) substr($counter, 3, 3);
    $urutan++;
    $huruf = "USR-";
    $autourut = $huruf . sprintf("%03s", $urutan);

    $data = [
      'title' => 'List User',
      'hotel' => $hotel->paginate(10, 'id'),
      'pager' => $this->hotelModel->pager,
      'currentPage' => $currentPage,
      'test' => $test,
      'kode' => $autourut,
      'count' => $this->hotelModel->countAll(),
      'versi' => $this->hotelModel->getVersion(),
    ];
    return view('hotel/index', $data);
  }

  //--------------------------------------------------------------------
  public function detail($slug)
  {
    $data = [
      'title' => 'Detail User',
      'hotel' => $this->hotelModel->getHotel($slug)
    ];

    // Jika data tidak ada ditabel
    if (empty($data['hotel'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang anda cari adalah :  '  . $slug .  ' dan tidak ada dalam database kami.');
    }
    return view('hotel/detail', $data);
  }
  //--------------------------------------------------------------------
  public function kwitansi($slug)
  {
    $data = [
      'title' => 'Kwitansi',
      'hotel' => $this->hotelModel->getHotel($slug)
    ];

    // Jika data tidak ada ditabel
    if (empty($data['hotel'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang anda cari adalah :  '  . $slug .  ' dan tidak ada dalam database kami.');
    }
    return view('hotel/kwitansi', $data);
  }
  //--------------------------------------------------------------------
  public function sertifikat($slug)
  {
    $data = [
      'title' => 'Sertifikat',
      'hotel' => $this->hotelModel->getHotel($slug)
    ];

    // Jika data tidak ada ditabel
    if (empty($data['hotel'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang anda cari adalah :  '  . $slug .  ' dan tidak ada dalam database kami.');
    }
    return view('hotel/sertifikat', $data);
  }
  //--------------------------------------------------------------------
  public function print($slug)
  {
    $data = [
      'title' => 'Cetak Kwitansi',
      'hotel' => $this->hotelModel->getHotel($slug)
    ];

    // Jika data tidak ada ditabel
    if (empty($data['hotel'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang anda cari adalah :  '  . $slug .  ' dan tidak ada dalam database kami.');
    }
    return view('hotel/cetak_kwitansi', $data);
  }
  //--------------------------------------------------------------------
  public function search()
  {
    $data = [
      'title' => 'Form search data',
      'hotel' => $this->hotelModel->getHotel()
    ];

    return view('hotel/search', $data);
  }
  //--------------------------------------------------------------------

  public function data()
  {
    $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $hotel = $this->hotelModel->search($keyword);
    } else {
      $hotel = $this->hotelModel;
    }

    $data = [
      'title' => 'List User',
      'hotel' => $hotel->paginate(10, 'id'),
      'pager' => $this->hotelModel->pager,
      'currentPage' => $currentPage,
      'message' => 'Akses User Panel!'

    ];
    return view('hotel/lakip_index', $data);
  }
  //--------------------------------------------------------------------

  // public function detailid($id)
  // {
  //   $data = [
  //     'title' => 'Sertifikat',
  //     'lakip' => $this->hotelModel->find($id),

  //   ];
  //   return view('hotel/detail', $data);
  // }
  //--------------------------------------------------------------------

  // public function datauser($id)
  // {
  //   $data = [
  //     'title' => 'Data User ID',
  //     'lakip' => $this->hotelModel->find($id),

  //   ];
  //   return view('hotel/detail-id', $data);
  // }
  //--------------------------------------------------------------------

  // public function kwitansi($id)
  // {
  //   $lakip = $this->hotelModel->find($id);
  //   $counter = $this->hotelModel->kodeUser();
  //   $urutan = (int) substr($counter, 3, 3);
  //   $urutan++;
  //   $huruf = "LKP";
  //   $autourut = $huruf . sprintf("%03s", $urutan);

  //   $data = [
  //     'title' => 'Kwitansi',
  //     'kontribusi' => 4500000,
  //     'lakip' => $lakip,
  //     'kode' => $autourut,


  //   ];
  //   return view('hotel/kwitansi-user', $data);
  // }
  //--------------------------------------------------------------------

  // public function userid($id)
  // {
  //   $lakip = $this->hotelModel->find($id);
  //   $counter = $this->hotelModel->kodeUser();
  //   $urutan = (int) substr($counter, 3, 3);
  //   $urutan++;
  //   $huruf = "LKP";
  //   $autourut = $huruf . sprintf("%03s", $urutan);

  //   $data = [
  //     'title' => 'Data User',
  //     'lakip' => $lakip,
  //     'kode' => $autourut,


  //   ];
  //   return view('hotel/detail-user', $data);
  // }
  //--------------------------------------------------------------------

  public function create()
  {
    $maxkode = $this->hotelModel->noUrut();
    $noUrut = (int) substr($maxkode, 3, 3);
    $noUrut++;
    $char = "USR-";
    $newID = $char . sprintf("%03s", $noUrut);


    $data = [
      'title' => 'Tambah User',
      'validation' => \Config\Services::validation(),
      'newID' => $newID,

    ];
    return view('hotel/add_user', $data);
  }
  //--------------------------------------------------------------------

  // public function add()
  // {
  // $counter = $this->hotelModel->kodeUser();
  // $urutan = (int) substr($counter, 3, 3);
  // $urutan++;
  // $huruf = "USR-";
  // $autourut = $huruf . sprintf("%03s", $urutan);

  //   $data = [
  //     'title' => 'Tambah User',
  //     'validation' => \Config\Services::validation(),
  //     'newID' => $newID,
  // 'kode' => $autourut,

  //   ];
  //   return view('hotel/create_user', $data);
  // }
  //--------------------------------------------------------------------

  // public function editing($slug)
  // {
  //   $data = [
  //     'title' => 'Form Ubah Data',
  //     'validation' => \Config\Services::validation(),
  //     'hotel' => $this->hotelModel->getHotel($slug),
  //   ];

  //   return view('hotel/edit_user', $data);
  // }
  //--------------------------------------------------------------------

  public function edit($slug)
  {
    $data = [
      'title' => 'Ubah User',
      'validation' => \Config\Services::validation(),
      'hotel' => $this->hotelModel->getHotel($slug),
    ];
    return view('hotel/user_edit', $data);
  }
  //--------------------------------------------------------------------
  public function save()
  {
    // validasi input 
    if (!$this->validate([
      'userid' => [
        'rules' => 'required|is_unique[db_hotel.userid]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'nama' => [
        'rules' => 'required|is_unique[db_hotel.nama]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'jabatan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'instansi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'kabupaten' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'tema' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'lokasi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'hotel' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'room' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'checkin' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'checkout' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'kontribusi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'kodeqr' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'kodeqr' => [
        'rules' => 'max_size[kodeqr,1024]|is_image[kodeqr]|mime_in[kodeqr,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran {field} terlalu besar.',
          'is_image' => 'Yang anda pilih bukan gambar.',
          'mime_in' => 'Yang anda pilih bukan gambar.'
        ]
      ]
    ])) {

      return redirect()->to('/hotel/add')->withInput();
    }

    // ambil gambar<===
    $fileGambar = $this->request->getFile('kodeqr');
    // Apakah tidak ada gambar yang di upload
    if ($fileGambar->getError() == 4) {
      $namakodeqr = 'default.png';
    } else {
      // Generate nama kodeqr random<===
      $namakodeqr = $fileGambar->getRandomName();
      // pindahkan file ke folder img<===
      $fileGambar->move('assets/images', $namakodeqr);
      // ambil nama file<===
      // $namakodeqr = $fileGambar->getName(); <====
    }


    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->hotelModel->save([
      'userid'          => $this->request->getVar('userid'),
      'nama'            => $this->request->getVar('nama'),
      'slug'            => $slug,
      'jabatan'         => $this->request->getVar('jabatan'),
      'instansi'        => $this->request->getVar('instansi'),
      'kabupaten'       => $this->request->getVar('kabupaten'),
      'tema'            => $this->request->getVar('tema'),
      'lokasi'          => $this->request->getVar('lokasi'),
      'hotel'           => $this->request->getVar('hotel'),
      'room'            => $this->request->getVar('room'),
      'checkin'         => $this->request->getVar('checkin'),
      'checkout'        => $this->request->getVar('checkout'),
      'kontribusi'      => $this->request->getVar('kontribusi'),
      'kodeqr'          => $this->request->getVar('kodeqr'),
      'kodeqr'          => $namakodeqr,
      'created_at'      => $this->request->getVar('created_at'),
      'updated_at'      => $this->request->getVar('updated_at'),

    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/hotel');
  }
  //--------------------------------------------------------------------

  // public function simpan()
  // {
  //   // validasi input 
  //   if (!$this->validate([
  //     'userid' => [
  //       'rules' => 'required|is_unique[db_hotel.userid]',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //         'is_unique' => '{field} sudah terdaftar.'
  //       ]
  //     ],
  //     'nama' => [
  //       'rules' => 'required|is_unique[db_hotel.nama]',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //         'is_unique' => '{field} sudah terdaftar.'
  //       ]
  //     ],
  //     'jabatan' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'instansi' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'kabupaten' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'tema' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'lokasi' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'hotel' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'room' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'checkin' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'checkout' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'kontribusi' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'kodeqr' => [
  //       'rules' => 'required',
  //       'errors' => [
  //         'required' => '{field} harus diisi.',
  //       ]
  //     ],
  //     'kodeqr' => [
  //       'rules' => 'max_size[kodeqr,1024]|is_image[kodeqr]|mime_in[kodeqr,image/jpg,image/jpeg,image/png]',
  //       'errors' => [
  //         'max_size' => 'Ukuran {field} terlalu besar.',
  //         'is_image' => 'Yang anda pilih bukan gambar.',
  //         'mime_in' => 'Yang anda pilih bukan gambar.'
  //       ]
  //     ]
  //   ])) {

  //     return redirect()->to('/hotel/create')->withInput();
  //   }

  //   // ambil gambar<===
  //   $fileGambar = $this->request->getFile('kodeqr');
  //   // Apakah tidak ada gambar yang di upload
  //   if ($fileGambar->getError() == 4) {
  //     $namakodeqr = 'default.png';
  //   } else {
  //     // Generate nama kodeqr random<===
  //     $namakodeqr = $fileGambar->getRandomName();
  //     // pindahkan file ke folder img<===
  //     $fileGambar->move('assets/images', $namakodeqr);
  //     // ambil nama file<===
  //     // $namakodeqr = $fileGambar->getName(); <====
  //   }


  //   $slug = url_title($this->request->getVar('nama'), '-', true);
  //   $this->hotelModel->save([
  //     'userid'        => $this->request->getVar('userid'),
  //     'nama'          => $this->request->getVar('nama'),
  //     'slug'          => $slug,
  //     'jabatan'       => $this->request->getVar('jabatan'),
  //     'instansi'      => $this->request->getVar('instansi'),
  //     'kabupaten'     => $this->request->getVar('kabupaten'),
  //     'tema'          => $this->request->getVar('tema'),
  //     'lokasi'        => $this->request->getVar('lokasi'),
  //     'hotel'         => $this->request->getVar('hotel'),
  //     'room'          => $this->request->getVar('room'),
  //     'checkin'       => $this->request->getVar('checkin'),
  //     'checkout'      => $this->request->getVar('checkout'),
  //     'kontribusi'    => $this->request->getVar('kontribusi'),
  //     'kodeqr'        => $this->request->getVar('kodeqr'),
  //     'kodeqr'        => $namakodeqr
  //   ]);

  //   session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

  //   return redirect()->to('/hotel/data');
  // }

  //--------------------------------------------------------------------
  public function delete($id)
  {
    // cari gambar berdasarkan id
    $hotel = $this->hotelModel->find($id);
    // cek jika file gambarnya default.jpg
    if ($hotel['kodeqr'] != 'default.jpg') {
      // Hapus gambar
      unlink('assets/images/' . $hotel['kodeqr']);
    }

    $this->hotelModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');

    return redirect()->to('/hotel');
  }


  //--------------------------------------------------------------------
  public function update($id)
  {
    dd($this->request->getVar());

    // cek judul
    $hotelLama = $this->hotelModel->getHotel($this->request->getVar('slug'));
    if ($hotelLama['userid'] == $this->request->getVar('userid')) {
      $rule_userid = 'required';
    } else {
      $rule_userid = 'required|is_unique[db_hotel.userid]';
    }
    // validasi input 
    if (!$this->validate([
      'userid' => [
        'rules' => $rule_userid,
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'nama' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'jabatan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'instansi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'kabupaten' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'tema' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'lokasi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'hotel' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'room' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'checkin' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'checkout' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'kontribusi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      // 'kodeqr' => [
      //   'rules' => 'required',
      //   'errors' => [
      //     'required' => '{field} harus diisi.',
      //     // 'is_unique' => '{field} sudah terdaftar.'
      //   ]
      // ],
      'kodeqr' => [
        'rules' => 'max_size[kodeqr,1024]|is_image[kodeqr]|mime_in[kodeqr,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran {field} terlalu besar.',
          'is_image' => 'Yang anda pilih bukan gambar.',
          'mime_in' => 'Yang anda pilih bukan gambar.'
        ]
      ]
    ])) {

      return redirect()->to('/hotel/edit/' . $this->request->getVar('slug'))->withInput();
    }


    // ambil gambar
    $fileGambar = $this->request->getFile('kodeqr');
    // cek gambar apakah tetap pakai gambar lama
    if ($fileGambar->getError() == 4) {
      $namaGambar = $this->request->getVar('gambarLama');
    } else {
      // Generate nama sampul random
      $namaGambar = $fileGambar->getRandomName();
      // pindahkan file ke folder image
      $fileGambar->move('assets/images', $namaGambar);
      // hapus file yang lama
      // unlink('assets/images/' . $this->request->getVar('gambarLama'));
    }


    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->hotelModel->save([
      'id'          => $id,
      'userid'      => $this->request->getVar('userid'),
      'nama'        => $this->request->getVar('nama'),
      'slug'        => $slug,
      'jabatan'     => $this->request->getVar('jabatan'),
      'instansi'    => $this->request->getVar('instansi'),
      'kabupaten'   => $this->request->getVar('kabupaten'),
      'tema'        => $this->request->getVar('tema'),
      'lokasi'      => $this->request->getVar('lokasi'),
      'hotel'       => $this->request->getVar('hotel'),
      'room'        => $this->request->getVar('room'),
      'checkin'     => $this->request->getVar('checkin'),
      'checkout'    => $this->request->getVar('checkout'),
      'kontribusi'  => $this->request->getVar('kontribusi'),
      'kodeqr'      => $namaGambar,
      'updated_at'  => $this->request->getVar('updated_at'),
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diupdate.');

    return redirect()->to('/hotel/<?= $hotel["id"]; ?>');
}












//--------------------------------------------------------------------

public function about()
{
// $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
// $keyword = $this->request->getVar('keyword');
// if ($keyword) {
// $lakip = $this->hotelModel->search($keyword);
// } else {
// $lakip = $this->hotelModel;
// }
$data = [
'title' => 'About',
'lakip' => $this->hotelModel->findAll(),
'count' => $this->hotelModel->countAll(),
'flat' => $this->hotelModel->getPlatform(),
'versi' => $this->hotelModel->getVersion(),
'getLastQuery' => $this->hotelModel->getLastQuery(),



// 'lakip' => $lakip->paginate(10, 'id'),
// 'pager' => $this->hotelModel->pager,
// 'currentPage' => $currentPage,

];
return view('home/about', $data);
}
//--------------------------------------------------------------------

public function datatables()
{
$data = [
'title' => 'About',
'lakip' => $this->hotelModel->findAll(),
];
return view('home/datatables', $data);
}
//--------------------------------------------------------------------

public function pdf()
{
$lakip = $this->hotelModel->findAll();
$this->Mpdf = new Mpdf;
$data = [
'title' => 'PDF',
'lakip' => $lakip,
];
return view('home/makepdf', $data);
}
//--------------------------------------------------------------------

public function invoice()
{
$lakip = $this->hotelModel->findAll();
$this->Mpdf = new Mpdf;
$data = [
'title' => 'PDF',
'lakip' => $lakip,
];
return view('home/makepdf', $data);
}
//--------------------------------------------------------------------

public function getpdf()
{
$lakip = $this->hotelModel->findAll();
// $this->Mpdf = new Mpdf;
// $data = [
// 'lakip' => $lakip,
// ];
$mpdf = new \Mpdf\Mpdf([
'mode' => 'utf-8',
'margin_top' => 30,
'format' => 'A4', 'L'
]);

$mpdf->SetHeader('<img src="assets/brand/lakip.jpeg" width="70" />|<p>LEMBAGA ADMINISTRASI KEUANGAN DAN ILMU
  PEMERINTAHAN</p>
<p>SKT DITJEN POLPUM KEMENDAGRI NOMOR : 001-00-00/034/I/2019</p>
<p>Sekretariat : Jln. Serdang Baru Raya No. 4B, Kemayoran - Jakarta 10650</p>
<p>Website : www.lakip.co.id E-mail : admin@lakip.co.id Telp./Fax. 021-42885718</p>
|');

$tgl_cetak = date('d F Y H:i:s');
$mpdf->SetFooter(base_url() . '|{PAGENO}|' . $tgl_cetak);

$html = '
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/mypdf.css" type="text/css" rel="stylesheet" media="mpdf" />
  <title>PDF</title>
</head>

<body>
  <h3>List Peserta</h3>
  <table class="table table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kode</th>
      </tr>
    </thead>';
    $i = 1;
    foreach ($lakip as $row) {
    $html .= '<tr>
      <td>' . $i++ . '</td>
      <td>' . $row["nama"] . '</td>
      <td>' . $row["alamat"] . '</td>
      <td>' . $row["kodeqr"] . '</td>
    </tr>';
    }
    $html .= '
  </table>
</body>

</html>';


$mpdf->WriteHTML($html);

return redirect()->to($mpdf->Output('filename.pdf', 'I'));
}
}