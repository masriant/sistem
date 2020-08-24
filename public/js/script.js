// previewImg
function previewImg() {

  const sampul = document.querySelector('#sampul');
  const sampulLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.img-preview');

  sampulLabel.textContent = sampul.files[0].name;

  const fileSampul = new FileReader();
  fileSampul.readAsDataURL(sampul.files[0]);

  fileSampul.onload = function (e) {
    imgPreview.src = e.target.result;
  }
}

// previewImg
function previewImg() {

  const kodeqr = document.querySelector('#kodeqr');
  const kodeqrLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.img-preview');

  kodeqrLabel.textContent = kodeqr.files[0].name;

  const fileKodeqr = new FileReader();
  fileKodeqr.readAsDataURL(kodeqr.files[0]);

  fileKodeqr.onload = function (e) {
    imgPreview.src = e.target.result;
  }
}

// previewImg Compliment
function previewImg() {

  const compliment = document.querySelector('#compliment');
  const complimentLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.img-preview');

  complimentLabel.textContent = compliment.files[0].name;

  const fileCompliment = new FileReader();
  fileCompliment.readAsDataURL(compliment.files[0]);

  fileCompliment.onload = function (e) {
    imgPreview.src = e.target.result;
  }
}

function myFunction() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

// Fungsi terbilang Rupiah
var angka = document.getElementById('angka');
angka.addEventListener('keyup', function (e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatangka() untuk mengubah angka yang di ketik menjadi format angka
  angka.value = terbilang(this.value, '$');
});

/* Fungsi terbilang */
function terbilang(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split = number_string.split(','),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }

  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? '$' + rupiah : '');
}





// Fungsi Rupiah
var rupiah = document.getElementById('rupiah');
rupiah.addEventListener('keyup', function (e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split = number_string.split(','),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }

  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}

// fungsi slug
function url() {
  var judul = $('#title').val();
  $('#slug').val(createslug(judul));
}

function createslug(text) {
  return text.toString().toLowerCase()
    .replace(/\s+/g, '-') // Replace spaces with -
    .replace(/[^\w\-]+/g, '') // Remove all non-word chars
    .replace(/\-\-+/g, '-') // Replace multiple - with single -
    .replace(/^-+/, '') // Trim - from start of text
    .replace(/-+$/, ''); // Trim - from end of text
}

var sekdes_nip = "<//?php echo $desa['sekdes_nip'] ?>";
var kades_nip = "<//?php echo $desa['kades_nip'] ?>";
var kades = "<//?php echo $desa['kades'] ?>";
var sekdes = "<//?php echo $desa['sekdes'] ?>";
var tt_kades = "<//?php echo $desa['tt_kades'] ?>";
var tt_sekdes = "<//?php echo $desa['tt_sekdes'] ?>";
var jenis_surat = "<//?php echo $jenis_surat ?>";

function isi_nip(elm) {
  if ($(elm).val() == "kades") {
    $("#tanda_tangan").val(kades);
    $("#nip").val(kades_nip);
    $("#pejabat").html(tt_kades);
    $("#nama_pejabat").html("<span style='text-transform:uppercase;text-decoration:underline'>" + kades + "</span>");
  } else {
    $("#tanda_tangan").val(sekdes);
    $("#nip").val(sekdes_nip);
    $("#pejabat").html(tt_sekdes);
    $("#nama_pejabat").html("<span style='text-transform:uppercase;text-decoration:underline'>" + sekdes +
      "</span><br />" + sekdes_nip);
  }
}

function tambah_pengikut(elm) {
  // menambahkan field baru untuk menambah pengikut yang pindah
  var no = $("#tab_pengikut tr").length;
  var kosong = 0;
  $(".ikut").each(function () {
    if ($(this).val() == "") {
      kosong++;
    }
  })
  $("#jum_pengikut").val(no); // jumlah pengikut	
  if ((kosong == 0) || (no == 1)) {
    var input_baru = "<tr><td>" + no + "</td>";
    input_baru +=
      "<td><input type='text' name='nama_pengikut' style='width:90px;padding:0px;margin:0px' class='ikut'/></td>";
    input_baru +=
      "<td><select name='j_kel_pengikut' style='width:80px;padding:0px;margin:0px' class='ikut'><option value='L'>Laki - laki</option><option value='P'>Perempuan</option></select></td>";
    input_baru +=
      "<td><input type='text' name='umur_pengikut' style='width:30px;padding:0px;margin:0px' class='ikut'/></td>";
    input_baru +=
      "<td><input type='text' name='hub_pengikut' style='width:60px;padding:0px;margin:0px' class='ikut'/></td>";
    input_baru +=
      "<td><input type='text' name='status_pengikut' style='width:80px;padding:0px;margin:0px' class='ikut'/></td></tr>";
    $(input_baru).appendTo($("#tab_pengikut"));
  }
}

function cetak(elm) {
  $(elm).css("display", "none");
  window.print();
}
$(function () {
  var nama_surat = "<//?php echo $nama_surat ?>";
  if (nama_surat == "lainnya") {
    nama_surat = prompt("Surat keterangan untuk ........");
    $("#nama_surat").text(nama_surat);
  }
  awal();
  $(".manual").blur(function () {
    if ($(this).val() == "") {
      $(this).focus();
    } else {
      $(this).nextAll(".manual").first().focus();
    }
  })
  $("#nama").autocomplete({
    source: function (request, response) {
      // fungsi yang akan mengambil data dari file cari2.php dalam bentuk json
      var sql = "SELECT no_ktp, nama, agama,t_lahir,tgl_lahir,j_kel, w_negara,";
      sql += "pendidikan, pekerjaan, s_nikah, alamat,rt,rw,dusun FROM v_detail_warga ";
      sql += " WHERE nama LIKE '";
      $.post("data.php", {
        data: request.term,
        sql: sql
      }, function (hasil) {
        response($.map(hasil, function (item) {
          return {
            // label untuk pilihan
            label: item.nama + " --no ktp -- " + item.no_ktp,
            value: item.nama,
            no_ktp: item.no_ktp,
            agama: item.agama,
            t_lahir: item.t_lahir,
            tgl_lahir: item.tgl_lahir,
            j_kel: item.j_kel,
            w_negara: item.w_negara,
            pendidikan: item.pendidikan,
            pekerjaan: item.pekerjaan,
            s_nikah: item.s_nikah,
            alamat: item.alamat,
            rt: item.rt,
            rw: item.rw,
            dusun: item.dusun
          }
        }))
      }, "json");
    },
    minLength: 2,
    select: function (event, ui) {
      // isi otomatis field lainnya
      $("#no_ktp").val(ui.item.no_ktp);
      $("#agama").val(ui.item.agama);
      $("#t_lahir").val(ui.item.t_lahir + ",  " + ui.item.tgl_lahir);
      $("#j_kel").val(ui.item.j_kel);
      $("#w_negara").val(ui.item.w_negara);
      $("#pendidikan").val(ui.item.pendidikan);
      $("#pekerjaan").val(ui.item.pekerjaan);
      $("#s_nikah").val(ui.item.s_nikah);
      $("#alamat").val(ui.item.alamat + " RT " + ui.item.rt + " RW " + ui.item.rw + " Dusun " + ui.item
        .dusun);
      $(".isian").attr("disabled", false);
      $(".isian:not(:first)").attr("readonly", true);
      $(".manual:first").focus();
    }
  })
  // event ketika form disubmit
  $("#form").submit(function () {
    // harus diisi semua
    var inputan = $(".tampil");
    for (i = 0; i < inputan.length; i++) {
      if ($(inputan).eq(i).val() == "") {
        $(".ket").eq(i).html("harus diisi").css({
          "display": "block"
        });
        $(inputan).eq(i).focus();
        return false;
      } else {
        $(".ket").eq(i).empty().css({
          "display": "none"
        });
      }
    }
    var ada_error = 0;
    // khusus untuk surat keterangan pindah
    $(".ikut").each(function () {
      if ($(this).val() == "") {
        $("div.info").html("Harus diisi semua").addClass("gagal");
        ada_error++;
      }
    })
    if (ada_error == 0) {
      var nama_surat = $("#nama_surat").parent().text();
      var nomer_surat = "<//?php echo $nomer_surat; ?>";
      var input = $(this).serializeArray();
      var url = $(this).attr("action");
      var t_tangan = $("#tanda_tangan").val();
      var nip = $("#nip").val();
      var nama_warga = $("#nama").val();
      var id_warga = $("#no_ktp").val();
      // cetak surat 
      //	 $.post("template_surat/surat_ket.php",{nama_surat:nama_surat,no_surat:nomer_surat,data:input,ttd:t_tangan,nip:nip,id_warga:id_warga},function(data){
      // hapus dulu isi dari content_surat
      $("#content_surat").empty();
      $(this).find(".tampil").each(function () {
        var self = $(this);
        var label = self.prev("label").clone().children().remove().end().text();
        $("<label>" + label + "</label><span class='titik'>:</span><span class='s_kanan'>" + self.val() +
          "</span><br />").appendTo("#content_surat");
      })
      // hanya untuk surak keterangan pindah saja (SKP)
      if (jenis_surat == "SKP") {
        var jum_kolom_pengikut = 5;
        var baris = '';
        if ($("#jum_pengikut").val() == 0) {
          baris = '<tr><td>1</td><td>Nihil</td><td>==</td><td>==</td><td>==</td><td>==</td></tr>';
        } else {
          var jum_baris_pengikut = $(".ikut").length / jum_kolom_pengikut;
          for (var i = 0; i < jum_baris_pengikut; i++) {
            var no_pengikut = parseInt(i) + 1;
            var index_ikut = i * jum_kolom_pengikut;
            var batas_ikut = parseInt(index_ikut) + parseInt(jum_kolom_pengikut);
            baris += '<tr><td>' + no_pengikut + '</td>';
            for (var j = index_ikut; j < batas_ikut; j++) {
              baris += '<td>' + $(".ikut").eq(j).val() + '</td>';
            }
            baris += '</tr>';
          }
        }
        var tabel_pengikut = '<div class="table" style="clear:both;position:relative;background:none">';
        tabel_pengikut += '<table class="data" cellpadding="0" cellspacing="0">';
        tabel_pengikut +=
          '<tr><th>No</th><th>Nama</th><th>L/P</th><th>Umur</th><th>Hubungan</th><th>Status</th></tr>';
        tabel_pengikut += baris;
        tabel_pengikut += '</table>';
        $(tabel_pengikut).appendTo("#content_surat");
      }
      // tempat untuk tanda tangan pemohon surat
      $("#nama_pemohon").html("<span style='text-transform:uppercase;text-decoration:underline'>" + $("#nama")
        .val() + "</span>");

      var tampil_isi = $("#surat_tampil").html();
      $("<div></div>").html(tampil_isi).dialog({
        title: 'Cetak Surat',
        show: 'slide',
        hide: 'slide',
        dialogClass: 'dialog',
        width: '500px',
        buttons: {
          OK: function () {
            $(this).dialog('close');
            $("#stylized,.top-bar").hide();
            $("#surat_tampil").show();
            $("#cetak").show();
            $.post(url, {
              jenis_surat: jenis_surat,
              no_surat: nomer_surat,
              nama_surat: nama_surat,
              data: input,
              ttd: t_tangan,
              nip: nip,
              id_warga: id_warga,
              nama_warga: nama_warga
            }, function (data) {
              if (data == 1) {
                //window.print();
                //	$("#cetak").click();
              } else {
                alert("belum disimpan");
              }
            })


          },
          Batal: function () {
            $(this).dialog('close');
          }
        }
      })
    } else {
      $("div.info").fadeIn();
    }
    // akhir cetak surat
    /*
      
    */
    return false;
  })

})