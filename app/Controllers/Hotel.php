<?php

namespace App\Controllers;

use App\Models\HotelModel;
use CodeIgniter\Validation\Rules;


class Hotel extends BaseController
{
  // protected $helpers = ['url', 'form', 'array', 'text', 'security', 'number', 'html', 'filesystem', 'date', 'cookie'];

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
      'title' => 'List Hotel',
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

  public function create()
  {
    $noUrut = $this->hotelModel->noUrut();
    // $noUrut = (int) substr($maxkode, 3, 3);
    $noUrut++;
    $char = "HTL-";
    $newID = $char . sprintf("%03s", $noUrut);


    $data = [
      'title' => 'Tambah Hotel',
      'validation' => \Config\Services::validation(),
      'newID' => $newID,

    ];
    return view('hotel/add_hotel', $data);
  }

  //--------------------------------------------------------------------
  public function delete($id)
  {
    $this->hotelModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');

    return redirect()->to('/hotel');
  }
  //--------------------------------------------------------------------
  public function save()
  {
    // validasi input 
    if (!$this->validate([
      'hotel' => [
        'rules' => 'required|is_unique[db_hotel.hotel]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'alamat' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'kota' => [
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
      'marketing' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'contact_marketing' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'status_marketing' => [
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
      'bed_single' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'bed_double' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'bed_twin' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'meeting_halfday' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'meeting_fullday' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'meeting_fullboard' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'meeting_fullday' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'bed_fullboard' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'compliment' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ]
    ])) {

      return redirect()->to('/hotel/create')->withInput();
    }


    $slug = url_title($this->request->getVar('hotel'), '-', true);
    $this->hotelModel->save([
      'hotel'                  => $this->request->getVar('hotel'),
      'slug'                   => $slug,
      'alamat'                 => $this->request->getVar('alamat'),
      'kota'                   => $this->request->getVar('kota'),
      'room'                   => $this->request->getVar('room'),
      'marketing'              => $this->request->getVar('marketing'),
      'contact_marketing'      => $this->request->getVar('contact_marketing'),
      'status_marketing'       => $this->request->getVar('status_marketing'),
      'checkin'                => $this->request->getVar('checkin'),
      'checkout'               => $this->request->getVar('checkout'),
      'bed_single'             => $this->request->getVar('bed_single'),
      'bed_double'             => $this->request->getVar('bed_double'),
      'bed_twin'               => $this->request->getVar('bed_twin'),
      'meeting_halfday'        => $this->request->getVar('meeting_halfday'),
      'meeting_fullday'        => $this->request->getVar('meeting_fullday'),
      'meeting_fullboard'      => $this->request->getVar('meeting_fullboard'),
      'bed_fullboard'          => $this->request->getVar('bed_fullboard'),
      'compliment'             => $this->request->getVar('compliment'),
      'created_at'             => $this->request->getVar('created_at'),
      'updated_at'             => $this->request->getVar('updated_at'),

    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/hotel');
  }
  //--------------------------------------------------------------------
  public function edit($slug)
  {
    $data = [
      'title' => 'Ubah Hotel',
      'validation' => \Config\Services::validation(),
      'hotel' => $this->hotelModel->getHotel($slug)
    ];

    return view('hotel/edit_hotel', $data);
  }

  //--------------------------------------------------------------------
  public function update($id)
  {
    $this->hotelModel = new HotelModel();

    // cek judul
    $hotelLama = $this->hotelModel->getHotel($this->request->getVar('slug'));
    if ($hotelLama['hotel'] == $this->request->getVar('hotel')) {
      $rule_hotel = 'required';
    } else {
      $rule_hotel = 'required|is_unique[db_hotel.hotel]';
    }
    // validasi input 
    if (!$this->validate([
      'hotel' => [
        'rules' => $rule_hotel,
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'alamat' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'kota' => [
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
      'marketing' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'contact_marketing' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'status_marketing' => [
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
      'bed_single' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'bed_double' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'bed_twin' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'meeting_halfday' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'meeting_fullday' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'meeting_fullboard' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'bed_fullboard' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ],
      'compliment' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
        ]
      ]
    ])) {

      return redirect()->to('/hotel/edit/' . $this->request->getVar('slug'))->withInput();
    }
    // dd($this->request->getVar());


    $slug = url_title($this->request->getVar('hotel'), '-', true);
    $this->hotelModel->save = ([
      'id'                     => $id, //session()->get($id),
      'hotel'                  => $this->request->getVar('hotel'),
      'slug'                   => $slug,
      'alamat'                 => $this->request->getVar('alamat'),
      'kota'                   => $this->request->getVar('kota'),
      'room'                   => $this->request->getVar('room'),
      'marketing'              => $this->request->getVar('marketing'),
      'contact_marketing'      => $this->request->getVar('contact_marketing'),
      'status_marketing'       => $this->request->getVar('status_marketing'),
      'checkin'                => $this->request->getVar('checkin'),
      'checkout'               => $this->request->getVar('checkout'),
      'bed_single'             => $this->request->getVar('bed_single'),
      'bed_double'             => $this->request->getVar('bed_double'),
      'bed_twin'               => $this->request->getVar('bed_twin'),
      'meeting_halfday'        => $this->request->getVar('meeting_halfday'),
      'meeting_fullday'        => $this->request->getVar('meeting_fullday'),
      'meeting_fullboard'      => $this->request->getVar('meeting_fullboard'),
      'bed_fullboard'          => $this->request->getVar('bed_fullboard'),
      'compliment'             => $this->request->getVar('compliment'),
      'updated_at'             => $this->request->getVar('updated_at')
    ]);
    session()->setFlashdata('pesan', 'Data berhasil diupdate.');

    return redirect()->to('/hotel');
  }












  //--------------------------------------------------------------------

  // public function about()
  // {
  //   // $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
  //   // $keyword = $this->request->getVar('keyword');
  //   // if ($keyword) {
  //   // $lakip = $this->hotelModel->search($keyword);
  //   // } else {
  //   // $lakip = $this->hotelModel;
  //   // }
  //   $data = [
  //     'title' => 'About',
  //     'lakip' => $this->hotelModel->findAll(),
  //     'count' => $this->hotelModel->countAll(),
  //     'flat' => $this->hotelModel->getPlatform(),
  //     'versi' => $this->hotelModel->getVersion(),
  //     'getLastQuery' => $this->hotelModel->getLastQuery(),



  //     // 'lakip' => $lakip->paginate(10, 'id'),
  //     // 'pager' => $this->hotelModel->pager,
  //     // 'currentPage' => $currentPage,

  //   ];
  //   return view('home/about', $data);
  // }
  //--------------------------------------------------------------------

  //   public function datatables()
  //   {
  //     $data = [
  //       'title' => 'About',
  //       'lakip' => $this->hotelModel->findAll(),
  //     ];
  //     return view('home/datatables', $data);
  //   }
  //   //--------------------------------------------------------------------

  //   public function pdf()
  //   {
  //     $lakip = $this->hotelModel->findAll();
  //     $this->Mpdf = new Mpdf;
  //     $data = [
  //       'title' => 'PDF',
  //       'lakip' => $lakip,
  //     ];
  //     return view('home/makepdf', $data);
  //   }
  //   //--------------------------------------------------------------------

  //   public function invoice()
  //   {
  //     $lakip = $this->hotelModel->findAll();
  //     $this->Mpdf = new Mpdf;
  //     $data = [
  //       'title' => 'PDF',
  //       'lakip' => $lakip,
  //     ];
  //     return view('home/makepdf', $data);
  //   }
  //   //--------------------------------------------------------------------

  //   public function getpdf()
  //   {
  //     $lakip = $this->hotelModel->findAll();
  //     // $this->Mpdf = new Mpdf;
  //     // $data = [
  //     // 'lakip' => $lakip,
  //     // ];
  //     $mpdf = new \Mpdf\Mpdf([
  //       'mode' => 'utf-8',
  //       'margin_top' => 30,
  //       'format' => 'A4', 'L'
  //     ]);

  //     $mpdf->SetHeader('<img src="assets/brand/lakip.jpeg" width="70" />|<p>LEMBAGA ADMINISTRASI KEUANGAN DAN ILMU
  //   PEMERINTAHAN</p>
  // <p>SKT DITJEN POLPUM KEMENDAGRI NOMOR : 001-00-00/034/I/2019</p>
  // <p>Sekretariat : Jln. Serdang Baru Raya No. 4B, Kemayoran - Jakarta 10650</p>
  // <p>Website : www.lakip.co.id E-mail : admin@lakip.co.id Telp./Fax. 021-42885718</p>
  // |');

  //     $tgl_cetak = date('d F Y H:i:s');
  //     $mpdf->SetFooter(base_url() . '|{PAGENO}|' . $tgl_cetak);

  //     $html = '
  // <!DOCTYPE html>
  // <html lang="en">

  // <head>
  //   <meta charset="UTF-8">
  //   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  //   <link href="/css/mypdf.css" type="text/css" rel="stylesheet" media="mpdf" />
  //   <title>PDF</title>
  // </head>

  // <body>
  //   <h3>List Peserta</h3>
  //   <table class="table table-bordered table-hover">
  //     <thead class="table-dark">
  //       <tr>
  //         <th scope="col">No</th>
  //         <th scope="col">Nama</th>
  //         <th scope="col">Alamat</th>
  //         <th scope="col">Kode</th>
  //       </tr>
  //     </thead>';
  //     $i = 1;
  //     foreach ($lakip as $row) {
  //       $html .= '<tr>
  //       <td>' . $i++ . '</td>
  //       <td>' . $row["nama"] . '</td>
  //       <td>' . $row["alamat"] . '</td>
  //       <td>' . $row["kodeqr"] . '</td>
  //     </tr>';
  //     }
  //     $html .= '
  //   </table>
  // </body>

  // </html>';


  //     $mpdf->WriteHTML($html);

  //     return redirect()->to($mpdf->Output('filename.pdf', 'I'));
  //   }
}