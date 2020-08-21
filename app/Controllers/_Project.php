<?php

namespace App\Controllers;

use Mpdf\Mpdf;
use App\Models\ProjectModel;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Project extends BaseController
{
  protected $projectModel;
  public function __construct()
  {
    $this->projectModel = new ProjectModel();
    // $this->Mpdf = new Mpdf;
  }
  //--------------------------------------------------------------------

  public function index()
  {
    $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $project = $this->projectModel->search($keyword);
    } else {
      $project = $this->projectModel;
    }

    $test = $this->projectModel->noUrut();
    $counter = $this->projectModel->kodeUser();
    $urutan = (int) substr($counter, 3, 3);
    $urutan++;
    $huruf = "USR-";
    $autourut = $huruf . sprintf("%03s", $urutan);

    $data = [
      'title' => 'List User',
      'project' => $project->paginate(10, 'id'),
      'pager' => $this->projectModel->pager,
      'currentPage' => $currentPage,
      // 'validation' => \Config\Services::validation(),
      // 'project' => $this->projectModel->findAll(),
      // 'project' => $project,
      // 'project' => $project->paginate(),
      'test' => $test,
      'kode' => $autourut,
    ];
    return view('project/index', $data);
  }

  //--------------------------------------------------------------------
  public function detail($slug)
  {
    $data = [
      'title' => 'Detail Project',
      'project' => $this->projectModel->getProject($slug)
    ];

    // Jika data tidak ada ditabel
    if (empty($data['project'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang anda cari adalah :  '  . $slug .  ' dan tidak ada dalam database kami.');
    }
    return view('project/detail', $data);
  }
  //--------------------------------------------------------------------
  public function search()
  {
    $data = [
      'title' => 'Form search data',
      'project' => $this->projectModel->getProject()
    ];

    return view('project/search', $data);
  }
  //--------------------------------------------------------------------

  public function data()
  {
    $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $project = $this->projectModel->search($keyword);
    } else {
      $project = $this->projectModel;
    }

    // $test = $this->projectModel->noUrut();
    // $counter = $this->projectModel->kodeUser();
    // $urutan = (int) substr($counter, 3, 3);
    // $urutan++;
    // $huruf = "USR-";
    // $autourut = $huruf . sprintf("%03s", $urutan);

    $data = [
      'title' => 'List User',
      'project' => $project->paginate(10, 'id'),
      'pager' => $this->projectModel->pager,
      'currentPage' => $currentPage,
      'message' => 'Akses User Panel!'
      // 'validation' => \Config\Services::validation(),
      // 'tema' => $tema,
      // 'project' => $this->projectModel->findAll(),
      // 'kode' => $autourut,
      // 'project' => $project,
      // 'project' => $project->paginate(),
      // 'test' => $test,

    ];
    return view('project/lakip_index', $data);
  }
  //--------------------------------------------------------------------

  public function detailid($id)
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

    // $tema = $this->projectModel->listTema(); getProject
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

  public function add()
  {
    // $counter = $this->projectModel->kodeUser();
    // $urutan = (int) substr($counter, 3, 3);
    // $urutan++;
    // $huruf = "USR-";
    // $autourut = $huruf . sprintf("%03s", $urutan);

    $maxkode = $this->projectModel->noUrut();
    $noUrut = (int) substr($maxkode, 3, 3);
    $noUrut++;
    $char = "USR-";
    $newID = $char . sprintf("%03s", $noUrut);

    $data = [
      'title' => 'Tambah User',
      'validation' => \Config\Services::validation(),
      // 'kode' => $autourut,
      'newID' => $newID,

    ];
    return view('project/add_user', $data);
  }
  //--------------------------------------------------------------------

  public function editing($slug)
  {
    $data = [
      'title' => 'Form Ubah Data',
      'validation' => \Config\Services::validation(),
      'project' => $this->projectModel->getProject($slug),
    ];

    return view('project/user_edit', $data);
  }
  //--------------------------------------------------------------------

  public function edit($slug)
  {
    // $counter = $this->projectModel->kodeUser();
    // $urutan = (int) substr($counter, 3, 3);
    // $urutan++;
    // $huruf = "USR-";
    // $autourut = $huruf . sprintf("%03s", $urutan);

    // $maxkode = $this->projectModel->noUrut();
    // $noUrut = (int) substr($maxkode, 3, 3);
    // $noUrut++;
    // $char = "USR-";
    // $newID = $char . sprintf("%03s", $noUrut);

    $data = [
      'title' => 'Ubah User',
      'validation' => \Config\Services::validation(),
      'project' => $this->projectModel->getProject($slug),
      // 'kode' => $autourut,
      // 'newID' => $newID,

    ];
    return view('project/edit_user', $data);
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
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'instansi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kabupaten' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'tema' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'lokasi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'hotel' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'room' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'checkin' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'checkout' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kontribusi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kodeqr' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
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
      return redirect()->to('/project/add')->withInput();
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

  public function simpan()
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
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'instansi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kabupaten' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'tema' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'lokasi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'hotel' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'room' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'checkin' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'checkout' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kontribusi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kodeqr' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
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

    return redirect()->to('/project/data');
  }

  //--------------------------------------------------------------------
  public function delete($id)
  {
    // cari gambar berdasarkan id
    $project = $this->projectModel->find($id);
    // cek jika file gambarnya default.jpg
    if ($project['kodeqr'] != 'default.jpg') {
      // Hapus gambar
      unlink('assets/images/' . $project['kodeqr']);
    }

    $this->projectModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');

    return redirect()->to('/project');
  }


  //--------------------------------------------------------------------
  public function update($id)
  {
    dd($this->request->getVar());

    // cek judul
    $projectLama = $this->projectModel->getProject($this->request->getVar('slug'));
    if ($projectLama['userid'] == $this->request->getVar('userid')) {
      $rule_userid = 'required';
    } else {
      $rule_userid = 'required|is_unique[db_project.userid]';
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
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'jabatan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'instansi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kabupaten' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'tema' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'lokasi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'hotel' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'room' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'checkin' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'checkout' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'kontribusi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
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
      // $validation = \Config\Services::validation();
      // return redirect()->to('/lakip/create')->withInput()->with('validation', $validation);
      return redirect()->to('/project/edit/' . $this->request->getVar('slug'))->withInput();
    }


    //  ambil gambar
    // $fileSampul = $this->request->getFile('sampul');
    // // cek gambar apakah tetap pakai gambar lama
    // if ($fileSampul->getError() == 4) {
    //   $namaSampul = $this->request->getVar('sampulLama');
    // } else {
    //   // Generate nama sampul random
    //   $namaSampul = $fileSampul->getRandomName();
    //   // pindahkan file ke folder image
    //   $fileSampul->move('images', $namaSampul);
    //   // hapus file yang lama
    //   unlink('images/' . $this->request->getVar('sampulLama'));
    // }


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





    // // ambil gambar<===
    // $fileGambar = $this->request->getFile('kodeqr');
    // // Apakah tidak ada gambar yang di upload
    // if ($fileGambar->getError() == 4) {
    //   $namakodeqr = 'default.png';
    // } else {
    //   // Generate nama kodeqr random<===
    //   $namakodeqr = $fileGambar->getRandomName();
    //   // pindahkan file ke folder img<===
    //   $fileGambar->move('assets/images', $namakodeqr);
    //   // ambil nama file<===
    //   // $namakodeqr = $fileGambar->getName(); <====
    // }


    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->projectModel->save([
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

    return redirect()->to('/project/<?= $project["id"]; ?>');
  }












  //--------------------------------------------------------------------

  public function about()
  {
    // $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    // $keyword = $this->request->getVar('keyword');
    // if ($keyword) {
    // $lakip = $this->projectModel->search($keyword);
    // } else {
    // $lakip = $this->projectModel;
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
