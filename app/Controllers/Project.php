<?php

namespace App\Controllers;

use Mpdf\Mpdf;
use App\Models\ProjectModel;
// use App\Models\projectModel;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Project extends BaseController
{
  // protected $projectModel;
  public function __construct()
  {
    $this->projectModel = new ProjectModel();
    $this->Mpdf = new Mpdf;
  }
  //--------------------------------------------------------------------

  public function index()
  {
    $counter = $this->projectModel->kodeUser();
    $urutan = (int) substr($counter, 3, 3);
    $urutan++;
    $huruf = "USR-";
    $autourut = $huruf . sprintf("%03s", $urutan);

    $data = [
      'title' => 'Tambah User',
      'validation' => \Config\Services::validation(),
      // 'tema' => $tema,
      // 'lakip' => $lakip,
      'kode' => $autourut,


    ];
    return view('project/index', $data);
  }

  //--------------------------------------------------------------------

  public function data()
  {
    $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $lakip = $this->projectModel->search($keyword);
    } else {
      $lakip = $this->projectModel;
    }
    $data = [
      'title' => 'Data',
      'lakip' => $this->projectModel->getAll(),
      'lakip' => $lakip->paginate(),
      'lakip' => $lakip->paginate(10, 'id'),
      'pager' => $this->projectModel->pager,
      'currentPage' => $currentPage,
      'message' => 'Admin Panel!'
    ];
    return view('project/lakip_index', $data);
  }
  //--------------------------------------------------------------------

  public function detail($id)
  {
    $data = [
      'title' => 'Sertifikat',
      'lakip' => $this->projectModel->find($id),

    ];
    return view('project/detail', $data);
  }
  //--------------------------------------------------------------------

  public function datauser($id)
  {
    $data = [
      'title' => 'Data User ID',
      'lakip' => $this->projectModel->find($id),

    ];
    return view('project/detail-id', $data);
  }
  //--------------------------------------------------------------------

  public function kwitansi($id)
  {
    $lakip = $this->projectModel->find($id);
    $counter = $this->projectModel->kodeUser();
    $urutan = (int) substr($counter, 3, 3);
    $urutan++;
    $huruf = "LKP";
    $autourut = $huruf . sprintf("%03s", $urutan);

    $data = [
      'title' => 'Kwitansi',
      'kontribusi' => 4500000,
      'lakip' => $lakip,
      'kode' => $autourut,


    ];
    return view('project/kwitansi-user', $data);
  }
  //--------------------------------------------------------------------

  public function userid($id)
  {
    $lakip = $this->projectModel->find($id);
    $counter = $this->projectModel->kodeUser();
    $urutan = (int) substr($counter, 3, 3);
    $urutan++;
    $huruf = "LKP";
    $autourut = $huruf . sprintf("%03s", $urutan);

    $data = [
      'title' => 'Data User',
      'lakip' => $lakip,
      'kode' => $autourut,


    ];
    return view('project/detail-user', $data);
  }
  //--------------------------------------------------------------------

  public function create()
  {

    // $tema = $this->projectModel->listTema();
    // $lakip = $this->projectModel->findAll();
    $counter = $this->projectModel->kodeUser();
    $urutan = (int) substr($counter, 3, 3);
    $urutan++;
    $huruf = "USR-";
    $autourut = $huruf . sprintf("%03s", $urutan);

    $data = [
      'title' => 'Tambah User',
      'validation' => \Config\Services::validation(),
      // 'tema' => $tema,
      // 'lakip' => $lakip,
      'kode' => $autourut,


    ];
    return view('project/create_user', $data);
  }
  //--------------------------------------------------------------------
  public function save()
  {
    // validasi input 
    if (!$this->validate([
      'userid' => [
        'rules' => 'required|is_unique[db_project.userid]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'nama' => [
        'rules' => 'required|is_unique[db_project.nama]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'jabatan' => [
        'rules' => 'required|is_unique[db_project.jabatan]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'instansi' => [
        'rules' => 'required|is_unique[db_project.instansi]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kabupaten' => [
        'rules' => 'required|is_unique[db_project.kabupaten]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'tema' => [
        'rules' => 'required|is_unique[db_project.tema]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'lokasi' => [
        'rules' => 'required|is_unique[db_project.lokasi]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'hotel' => [
        'rules' => 'required|is_unique[db_project.hotel]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'room' => [
        'rules' => 'required|is_unique[db_project.room]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'checkin' => [
        'rules' => 'required|is_unique[db_project.checkin]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'checkout' => [
        'rules' => 'required|is_unique[db_project.checkout]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kontribusi' => [
        'rules' => 'required|is_unique[db_project.kontribusi]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kodeqr' => [
        'rules' => 'required|is_unique[db_project.kodeqr]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
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
      // $validation = \Config\Services::validation();
      // return redirect()->to('/lakip/create')->withInput()->with('validation', $validation);
      return redirect()->to('/project/create')->withInput();
    }

    // ambil gambar<===
    $filekodeqr = $this->request->getFile('kodeqr');
    // Apakah tidak ada gambar yang di upload
    if ($filekodeqr->getError() == 4) {
      $namakodeqr = 'default.png';
    } else {
      // Generate nama kodeqr random<===
      $namakodeqr = $filekodeqr->getRandomName();
      // pindahkan file ke folder img<===
      $filekodeqr->move('assets/images', $namakodeqr);
      // ambil nama file<===
      // $namakodeqr = $filekodeqr->getName(); <====
    }


    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->projectModel->save([
      'userid' => $this->request->getVar('userid'),
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'jabatan' => $this->request->getVar('jabatan'),
      'instansi' => $this->request->getVar('instansi'),
      'kabupaten' => $this->request->getVar('kabupaten'),
      'tema' => $this->request->getVar('tema'),
      'lokasi' => $this->request->getVar('lokasi'),
      'hotel' => $this->request->getVar('hotel'),
      'room' => $this->request->getVar('room'),
      'checkin' => $this->request->getVar('checkin'),
      'checkout' => $this->request->getVar('checkout'),
      'kontribusi' => $this->request->getVar('kontribusi'),
      'kodeqr' => $this->request->getVar('kodeqr'),
      'kodeqr' => $namakodeqr
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/project');
  }













  //--------------------------------------------------------------------

  public function about()
  {
    // $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    // $keyword = $this->request->getVar('keyword');
    // if ($keyword) {
    //   $lakip = $this->projectModel->search($keyword);
    // } else {
    //   $lakip = $this->projectModel;
    // }
    $data = [
      'title' => 'About',
      'lakip' => $this->projectModel->findAll(),
      'count' => $this->projectModel->countAll(),
      'flat' => $this->projectModel->getPlatform(),
      'versi' => $this->projectModel->getVersion(),
      'getLastQuery' => $this->projectModel->getLastQuery(),



      // 'lakip' => $lakip->paginate(10, 'id'),
      // 'pager' => $this->projectModel->pager,
      // 'currentPage' => $currentPage,

    ];
    return view('home/about', $data);
  }
  //--------------------------------------------------------------------

  public function datatables()
  {
    $data = [
      'title' => 'About',
      'lakip' => $this->projectModel->findAll(),
    ];
    return view('home/datatables', $data);
  }
  //--------------------------------------------------------------------

  public function pdf()
  {
    $lakip = $this->projectModel->findAll();
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
    $lakip = $this->projectModel->findAll();
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
    $lakip = $this->projectModel->findAll();
    // $this->Mpdf = new Mpdf;
    // $data = [
    //   'lakip' => $lakip,
    // ];
    $mpdf = new \Mpdf\Mpdf([
      'mode' => 'utf-8',
      'margin_top' => 30,
      'format' => 'A4', 'L'
    ]);

    $mpdf->SetHeader('<img src="assets/brand/lakip.jpeg" width="70" />|<p>LEMBAGA ADMINISTRASI KEUANGAN DAN ILMU PEMERINTAHAN</p>
    <p>SKT DITJEN POLPUM KEMENDAGRI NOMOR : 001-00-00/034/I/2019</p> 
    <p>Sekretariat : Jln. Serdang Baru Raya No. 4B, Kemayoran - Jakarta 10650</p>
    <p>Website : www.lakip.co.id E-mail : admin@lakip.co.id Telp./Fax. 021-42885718</p>
    |');

    $tgl_cetak = date('d F Y H:i:s');
    $mpdf->SetFooter(base_url() . '|{PAGENO}|' . $tgl_cetak);

    $html = '<!DOCTYPE html>
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
      $html  .= '<tr>
               <td>' . $i++ . '</td>
               <td>' . $row["nama"] . '</td>
               <td>' . $row["alamat"] . '</td>
               <td>' . $row["kodeqr"] . '</td>      
               </tr>';
    }
    $html .= '</table>
</body>
</html>';


    $mpdf->WriteHTML($html);

    return redirect()->to($mpdf->Output('filename.pdf', 'I'));
  }
}