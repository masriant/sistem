<?php

namespace App\Controllers;

use App\Models\LakipModel;
use Mpdf\Mpdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Lakip extends BaseController
{
  protected $lakipModel;
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
      'message' => 'Welcome to my Blog!'
    ];
    return view('home/data', $data);
  }
  //--------------------------------------------------------------------

  public function detail($id)
  {
    $data = [
      'title' => 'Data',
      'lakip' => $this->lakipModel->find($id),

    ];
    return view('home/detail', $data);
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
    $this->lakipModel->findAll();
    $this->Mpdf = new Mpdf;
    $data = [
      'title' => 'PDF',
      'lakip' => $this->lakipModel->findAll(),
    ];
    return view('home/makepdf', $data);
  }
  //--------------------------------------------------------------------

  public function getpdf()
  {
    $lakip = $this->lakipModel->findAll();
    $this->Mpdf = new Mpdf;
    $mpdf = new \Mpdf\Mpdf([
      'mode' => 'utf-8',
      'format' => 'A4', 'L',
      'margin_top' => 30,
    ]);

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
    $header = '<!--mpdf

<htmlpageheader name="letterheader">
    <table width="100%" style=" font-family: sans-serif;">
        <tr>
          <td width="50%" style="color:#0000BB; "><span style="font-weight: bold; font-size: 14pt;">Acme Trading Co.</span><br />123 Anystreet<br />Your City<br />GD12 4LP<br /><span style="font-size: 15pt;">☎</span> 01777 123 567</td>
          <td width="50%" style="text-align: right; vertical-align: top;">Invoice No.<br /><span style="font-weight: bold; font-size: 12pt;">0012345</span></td>
        </tr>
    </table>
    <div style="margin-top: 1cm; text-align: right; font-family: sans-serif;">
        {DATE jS F Y}
    </div>
</htmlpageheader>

<htmlpagefooter name="letterfooter2">
    <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; font-family: sans-serif; ">
        Page {PAGENO} of {nbpg}
    </div>
</htmlpagefooter>
mpdf-->

<style>
    @page {
        margin-top: 2.5cm;
        margin-bottom: 2.5cm;
        margin-left: 2cm;
        margin-right: 2cm;
        footer: html_letterfooter2;
        background-color: pink;
    }
  
    @page :first {
        margin-top: 8cm;
        margin-bottom: 4cm;
        header: html_letterheader;
        footer: _blank;
        resetpagenum: 1;
        background-color: yellow;
    }
  
    @page letterhead :first {
        margin-top: 8cm;
        margin-bottom: 4cm;
        header: html_letterheader;
        footer: _blank;
        resetpagenum: 1;
        background-color: lightblue;
    }
    .letter {
        page-break-before: always;
        page: letterhead;
    }
</style>';

    $firstletter = '<div>Dear Sir or Madam,<br />
Contents of your letter...
<pagebreak />
... more letter on page 2 ...
<pagebreak />
... more letter on page 3 ...
</div>';

    $letter = '<div class="letter">Dear Sir or Madam,<br />
Contents of your letter...
<pagebreak />
... more letter on page 2 ...
<pagebreak />
... more letter on page 3 ...
</div>';

    // require __DIR__ . '/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();

    $mpdf->WriteHTML($header);
    $mpdf->WriteHTML($firstletter);
    $mpdf->WriteHTML($letter);
    $mpdf->WriteHTML($letter);
    $tgl_cetak = date('d F Y H:i:s');
    $mpdf->SetFooter(base_url() . '|{PAGENO}|' . $tgl_cetak);

    $mpdf->WriteHTML($html);

    $filename = "Data ";
    $tgl_cetak = date('dmY His');


    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . $tgl_cetak . '.pdf"');
    header('Cache-Control: max-age=0');


    return redirect()->to($mpdf->Output('filename.pdf', 'I'));
  }
}
