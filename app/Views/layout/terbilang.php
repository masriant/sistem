<?php

function kata($x)
{
  $x = abs($x);
  $angka = array(
    "", "satu", "dua", "tiga", "empat", "lima",
    "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"
  );
  $temp = "";
  if ($x < 12) {
    $temp = " " . $angka[$x];
  } else if ($x < 20) {
    $temp = kata($x - 10) . " belas";
  } else if ($x < 100) {
    $temp = kata($x / 10) . " puluh" . kata($x % 10);
  } else if ($x < 200) {
    $temp = " seratus" . kata($x - 100);
  } else if ($x < 1000) {
    $temp = kata($x / 100) . " ratus" . kata($x % 100);
  } else if ($x < 2000) {
    $temp = " seribu" . kata($x - 1000);
  } else if ($x < 1000000) {
    $temp = kata($x / 1000) . " ribu" . kata($x % 1000);
  } else if ($x < 1000000000) {
    $temp = kata($x / 1000000) . " juta" . kata($x % 1000000);
  } else if ($x < 1000000000000) {
    $temp = kata($x / 1000000000) . " milyar" . kata(fmod($x, 1000000000));
  } else if ($x < 1000000000000000) {
    $temp = kata($x / 1000000000000) . " trilyun" . kata(fmod($x, 1000000000000));
  }
  return $temp;
}

function terbilang($x, $style = 2)
{
  if ($x < 0) {
    $hasil = "minus " . trim(kata($x));
  } else {
    $hasil = trim(kata($x));
  }
  switch ($style) {
    case 1:
      // mengubah semua karakter menjadi huruf besar $style = 1
      $hasil = strtoupper($hasil);
      break;
    case 2:
      // mengubah karakter pertama dari setiap kata menjadi huruf besar $style = 2
      $hasil = ucwords($hasil);
      break;
    case 3:
      // mengubah karakter pertama menjadi huruf besar $style = 3
      $hasil = ucfirst($hasil);
      break;
  }
  return $hasil;
}