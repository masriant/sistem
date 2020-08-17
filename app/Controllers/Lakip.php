<?php

namespace App\Controllers;

use Mpdf\Mpdf;
use App\Models\LakipModel;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Lakip extends BaseController
{
  // protected $lakipModel;
  public function __construct()
  {
    $this->lakipModel = new LakipModel();
    $this->Mpdf = new Mpdf;
  }
  //--------------------------------------------------------------------

  public function index()
  {

    $data = [
      'title' => 'Home',
      'message' => 'Welcome to my Blog!'

    ];
    return view('home/default', $data);
  }

  //--------------------------------------------------------------------

  public function data()
  {
    $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $lakip = $this->lakipModel->search($keyword);
    } else {
      $lakip = $this->lakipModel;
    }
    $data = [
      'title' => 'Data',
      // 'lakip' => $this->lakipModel->findAll(),
      'lakip' => $lakip->paginate(10, 'id'),
      'pager' => $this->lakipModel->pager,
      'currentPage' => $currentPage,
      'message' => 'Admin Panel!'
    ];
    return view('home/data', $data);
  }
  //--------------------------------------------------------------------

  public function detail($id)
  {
    $data = [
      'title' => 'Sertifikat',
      'lakip' => $this->lakipModel->find($id),

    ];
    return view('home/detail', $data);
  }
  //--------------------------------------------------------------------

  public function datauser($id)
  {
    $data = [
      'title' => 'Data User ID',
      'lakip' => $this->lakipModel->find($id),

    ];
    return view('home/detail-id', $data);
  }
  //--------------------------------------------------------------------

  public function kwitansi($id)
  {
    $data = [
      'title' => 'Kwitansi',
      'lakip' => $this->lakipModel->find($id),

    ];
    return view('home/kwitansi-user', $data);
  }
  //--------------------------------------------------------------------

  public function userid($id)
  {
    $data = [
      'title' => 'Data User',
      'lakip' => $this->lakipModel->find($id),

    ];
    return view('home/detail-user', $data);
  }
  //--------------------------------------------------------------------

  public function about()
  {
    // $currentPage = $this->request->getVar('page_id') ? $this->request->getVar('page_id') : 1;
    // $keyword = $this->request->getVar('keyword');
    // if ($keyword) {
    //   $lakip = $this->lakipModel->search($keyword);
    // } else {
    //   $lakip = $this->lakipModel;
    // }
    $data = [
      'title' => 'About',
      'lakip' => $this->lakipModel->findAll(),
      // 'lakip' => $lakip->paginate(10, 'id'),
      // 'pager' => $this->lakipModel->pager,
      // 'currentPage' => $currentPage,

    ];
    return view('home/about', $data);
  }
  //--------------------------------------------------------------------

  public function datatables()
  {
    $data = [
      'title' => 'About',
      'lakip' => $this->lakipModel->findAll(),
    ];
    return view('home/datatables', $data);
  }
  //--------------------------------------------------------------------

  public function pdf()
  {
    $lakip = $this->lakipModel->findAll();
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
    $lakip = $this->lakipModel->findAll();
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
    $lakip = $this->lakipModel->findAll();
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