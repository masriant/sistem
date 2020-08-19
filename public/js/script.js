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