<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">
  <div class="row">
    <div class="col-3">


      <form method="POST" action="">
        <select class="form-select form-select-sm" aria-label=".form-select-sm"
          onChange="document.location.href=this.options[this.selectedIndex].value;">
          <option selected>Open select menu</option>
          <option value="data">Data</option>
          <option value="about">About</option>
          <option value="datatables">Table</option>
        </select>
      </form>
      <?php

      if (isset($_GET["data"])) {
        header("location:lakip/data");
      } elseif (isset($_GET["datatables"])) {
        header("location:lakip/datatables");
      }

      ?>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="bd-intro pt-md-3 pl-lg-4">
        <h1 class="bd-title" id="content"><?= $title; ?></h1>
        <p class="bd-lead">Percobaan.</p>

      </div>
      <div>
        <h1>
          <?=
            $count . '<br>',
            $flat . '<br>',
            $versi . '<br>',
            $getLastQuery . '<br>'





          ?>
        </h1>
      </div>


      <main class="bd-content order-1 pl-lg-4">
        <p>Lakip is maintained by the founding team and a small group of invaluable core contributors, with the
          massive support and involvement of our community.</p>

        <div class="list-group mb-3">
          <?php $i = 1; ?>
          <?php foreach ($lakip as $row) : ?>
          <a class="list-group-item list-group-item-action d-flex align-items-center"
            href="<?= base_url(); ?>/lakip/detail/<?= $row['id']; ?>">
            <img src="https://github.com/mdo.png" alt="@lakip" width="32" height="32" class="rounded mr-2"
              loading="lazy">
            <span><?= $i++; ?>.
              <strong><?= $row['nama']; ?></strong>@lakip.co.id
            </span>
          </a>
          <?php endforeach; ?>
        </div>
        <p>Get involved with Lakip development by <a href="https://github.com/twbs/bootstrap/issues/new">opening an
            issue</a> or submitting a pull request. Read our <a
            href="https://github.com/twbs/bootstrap/blob/v5.0.0-alpha1/.github/CONTRIBUTING.md">contributing
            guidelines</a>
          for information on how we develop.</p>

      </main>
    </div>
  </div>
  <div class="row">
    <div class="col">

    </div>
  </div>


</section>

<main class="container">

  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body">

    <section class="u-align-left u-clearfix u-image u-section-1" id="carousel_7451" data-image-width="1600"
      data-image-height="900">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div
                class="u-border-radius-34 u-container-style u-layout-cell u-left-cell u-opacity u-opacity-90 u-palette-1-light-3 u-right-cell u-shape-round u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">

                  <p class="u-text u-text-default u-text-1">Pemesanan Penukaran UPK 75 Tahun RI di Kantor Bank Indonesia
                  </p>
                  <div id="disc">
                    <p class="u-text u-text-default u-text-d">Anda dapat memilih waktu penukaran Uang Peringatan
                      Kemerdekaan 75 Tahun Republik Indonesia. <br>Saat ini, waktu penukaran yang dapat Anda pilih
                      sampai dengan tanggal &nbsp;<b id="tgl">30/9/2020</b>&nbsp; sesuai dengan kapasitas penukaran UPK
                      75 tahun RI di lokasi yang dipilih</p>
                  </div>
                  <div class="u-expanded-width u-form u-form-1">
                    <form action="/Order/Schedule" autocomplete="off"
                      class="u-clearfix u-form-spacing-26 u-form-vertical u-inner-form" method="post" role="form"
                      style="padding: 7px;">
                      <div class="notify"><span id="notifyType" class=""></span></div>
                      <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-1"
                        style="display:none;">
                        <input type="text" id="expEnd" value="9/30/2020" />
                        <input type="text" id="expStart" value="8/21/2020" />
                        <label for="select-649e" class="u-form-control-hidden u-label">Select</label>
                        <div class="col-md-4">
                          <select
                            class="u-border-1 u-border-grey-30 u-border-radius-15 u-input u-input-round u-white u-input-1"
                            id="Type_list" name="TypeBank" required="required">
                            <option value="1">Bank Indonesia</option>
                          </select>
                        </div>
                      </div>
                      <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-1">
                        <label for="select-649e" class="u-form-control-hidden u-label">Select</label>

                        <div class="u-form-select-wrapper">
                          <select
                            class="u-border-1 u-border-grey-30 u-border-radius-15 u-input u-input-round u-white u-input-1"
                            id="province_list" name="ProvinceId">
                            <option value="0">Pilih Provinsi</option>
                            <option value="1_000|11">ACEH</option>
                            <option value="1_000|51">BALI</option>
                            <option value="1_000|36">BANTEN</option>
                            <option value="1_000|17">BENGKULU</option>
                            <option value="1_000|34">DAERAH ISTIMEWA YOGYAKARTA</option>
                            <option value="1_000|31">DKI JAKARTA</option>
                            <option value="1_000|75">GORONTALO</option>
                            <option value="1_000|15">JAMBI</option>
                            <option value="1_000|32">JAWA BARAT</option>
                            <option value="1_000|33">JAWA TENGAH</option>
                            <option value="1_000|35">JAWA TIMUR</option>
                            <option value="1_000|61">KALIMANTAN BARAT</option>
                            <option value="1_000|63">KALIMANTAN SELATAN</option>
                            <option value="1_000|62">KALIMANTAN TENGAH</option>
                            <option value="1_000|64">KALIMANTAN TIMUR</option>
                            <option value="1_000|65">KALIMANTAN UTARA</option>
                            <option value="1_000|19">KEPULAUAN BANGKA BELITUNG</option>
                            <option value="1_000|21">KEPULAUAN RIAU</option>
                            <option value="1_000|18">LAMPUNG</option>
                            <option value="1_000|81">MALUKU</option>
                            <option value="1_000|82">MALUKU UTARA</option>
                            <option value="1_000|52">NUSA TENGGARA BARAT</option>
                            <option value="1_000|53">NUSA TENGGARA TIMUR</option>
                            <option value="1_000|91">PAPUA</option>
                            <option value="1_000|92">PAPUA BARAT</option>
                            <option value="1_000|14">RIAU</option>
                            <option value="1_000|76">SULAWESI BARAT</option>
                            <option value="1_000|73">SULAWESI SELATAN</option>
                            <option value="1_000|72">SULAWESI TENGAH</option>
                            <option value="1_000|74">SULAWESI TENGGARA</option>
                            <option value="1_000|71">SULAWESI UTARA</option>
                            <option value="1_000|13">SUMATERA BARAT</option>
                            <option value="1_000|16">SUMATERA SELATAN</option>
                            <option value="1_000|12">SUMATERA UTARA</option>
                          </select>
                          <i class="fa fa-arrow-circle-right u-caret" aria-hidden="true"></i>
                        </div>
                      </div>
                      <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-2">
                        <label for="select-1e48" class="u-form-control-hidden u-label">Select</label>
                        <div class="u-form-select-wrapper">
                          <select
                            class="u-border-1 u-border-grey-30 u-border-radius-15 u-input u-input-round u-white u-input-2"
                            disabled="True" id="institution_list" name="InstitutionId" required="required">
                            <option value="0">Pilih Lokasi Penukaran</option>
                            <option value="1_000|92>d874711a-53a5-4124-9fbb-a5c293defd24">KPw BI Prov. Papua Barat -
                              Manokwari
                            </option>
                            <option value="1_000|91>a2550081-eb13-48d7-8f36-322bb179cddf">KPw BI Prov. Papua - Jayapura
                            </option>
                            <option value="1_000|82>2d76025b-7680-4ef6-afcc-905ad7e9279e">KPw BI Prov. Maluku Utara -
                              Ternate
                            </option>
                            <option value="1_000|81>42bc2ed7-87bf-4eac-87a2-d966d04add49">KPw BI Prov. Maluku - Ambon
                            </option>
                            <option value="1_000|76>797a660f-0e7a-4ea8-9d59-fd055987ef58">KPw BI Prov. Sulawesi Barat -
                              Mamuju
                            </option>
                            <option value="1_000|75>2ceb1f80-2667-4953-af43-4aeb76e9f4bb">KPw BI Prov. Gorontalo -
                              Gorontalo
                            </option>
                            <option value="1_000|74>da6ccf57-f4e3-4414-a27c-2393b310da3c">KPw BI Prov. Sulawesi Tenggara
                              - Kendari
                            </option>
                            <option value="1_000|73>455b346b-69b6-417b-b95a-d325667ffe35">KPw BI Prov. Sulawesi Selatan
                              - Makassar
                            </option>
                            <option value="1_000|72>02d4cf6f-4f0c-4c90-bf53-50292bcd8fe0">KPw BI Prov. Sulawesi Tengah -
                              Palu
                            </option>
                            <option value="1_000|71>554aaa2e-9f77-44b5-84d4-7faf33bd9481">KPw BI Prov. Sulawesi Utara -
                              Manado
                            </option>
                            <option value="1_000|65>6bba1dd9-5a64-45aa-b5f3-b25f7a434dd0">KPw BI Prov. Kalimantan Utara
                              - Tarakan
                            </option>
                            <option value="1_000|64>a61d7510-ff3c-4878-a534-e98b09a923ea">KPw BI Balikpapan
                            </option>
                            <option value="1_000|64>8f0af91f-6265-4d3a-9ee5-0ee12ed92739">KPw BI Prov. Kalimantan Timur
                              - Samarinda
                            </option>
                            <option value="1_000|63>634f0032-f56b-48dd-9b57-6a3f2156dbc3">KPw BI Prov. Kalimantan
                              Selatan - Banjarmasin
                            </option>
                            <option value="1_000|62>a5be228d-120c-4ab8-8126-6d19b62577dd">KPw BI Prov. Kalimantan Tengah
                              - Palangkaraya
                            </option>
                            <option value="1_000|61>52f987c3-7e2a-41db-9e9f-a9f12fa1af7b">KPw BI Prov. Kalimantan Barat
                              - Pontianak
                            </option>
                            <option value="1_000|53>fc9be24f-5506-440c-8201-54afebde22cd">KPw BI Prov. Nusa Tenggara
                              Timur - Kupang
                            </option>
                            <option value="1_000|52>9143ab10-237f-46b4-b776-1567a1e5b078">KPw BI Prov. Nusa Tenggara
                              Barat - Mataram
                            </option>
                            <option value="1_000|51>1b97d641-68eb-417e-bdc2-2c203e628e5a">KPw BI Prov. Bali - Denpasar
                            </option>
                            <option value="1_000|36>e15eabdb-f3a4-4671-a89c-d61cd1c4451e">KPw BI Prov. Banten - Serang
                            </option>
                            <option value="1_000|35>e9c6ea04-9f58-45db-9d96-a32aa132047e">KPw BI Jember
                            </option>
                            <option value="1_000|35>d7952a67-7cfa-4e42-8985-e70ccb482b12">KPw BI Kediri
                            </option>
                            <option value="1_000|35>b4edab6e-6aa6-4027-848b-ee9f4147e4ee">KPw BI Malang
                            </option>
                            <option value="1_000|35>09decc7b-bd29-4e47-beb6-4acc89c82920">KPw BI Prov. Jawa Timur -
                              Surabaya
                            </option>
                            <option value="1_000|34>e519e688-38ff-42e5-84c9-90fb3e8a93da">KPw BI Prov. D.I. Yogyakarta -
                              Yogyakarta
                            </option>
                            <option value="1_000|33>4f6c6b07-c653-4391-a37c-488d43f4b4ab">KPw BI Prov. Jawa Tengah -
                              Semarang
                            </option>
                            <option value="1_000|33>d2fadc6b-8e40-4684-a11d-5557b1cccd89">KPw BI Purwokerto
                            </option>
                            <option value="1_000|33>57dd0f78-eb32-4970-a329-181ec6460368">KPw BI Solo
                            </option>
                            <option value="1_000|33>be06bcb1-eeac-4a82-9eee-03d786aaeb46">KPw BI Tegal
                            </option>
                            <option value="1_000|32>41160f19-0d1d-4ede-85e7-b9a83039c914">KPw BI Cirebon
                            </option>
                            <option value="1_000|32>953b33cb-dfb5-4c24-a033-e5187c696a78">KPw BI Prov. Jawa Barat -
                              Bandung
                            </option>
                            <option value="1_000|32>cd0e3247-b5b2-4b8f-b877-1a7b4183b466">KPw BI Tasikmalaya
                            </option>
                            <option value="1_000|31>f27cbbb6-e771-44ae-91b9-fa9d11c2c5f3">Kantor Pusat Bank Indonesia -
                              Jakarta</option>
                            <option value="1_000|21>4b4e5f4f-cefd-4986-9644-d3ef47083bb2">KPw BI Prov. Kepulauan Riau -
                              Batam
                            </option>
                            <option value="1_000|19>ba5de268-d9cd-40cd-a051-2e863a120eb7">KPw BI Prov. Kep. Bangka
                              Belitung - Pangkal Pinang
                            </option>
                            <option value="1_000|18>09ef1e82-15b1-4ba8-a92b-726c25567892">KPw BI Prov. Lampung - Bandar
                              Lampung
                            </option>
                            <option value="1_000|17>79b153e9-e72f-415f-8d39-733ed09b4b27">KPw BI Prov. Bengkulu -
                              Bengkulu
                            </option>
                            <option value="1_000|16>bacff387-d50e-4f86-94b2-0e4505300e50">KPw BI Prov. Sumatera Selatan
                              - Palembang
                            </option>
                            <option value="1_000|15>cb860cc6-ecca-4cfb-b293-d7600e69b374">KPw BI Prov. Jambi - Jambi
                            </option>
                            <option value="1_000|14>01c6246c-bf3e-402c-b2f3-0066844b1e51">KPw BI Prov. Riau - Pekanbaru
                            </option>
                            <option value="1_000|13>b32a8937-380b-41ca-b0e3-cc13874f1de1">KPw BI Prov. Sumatera Barat -
                              Padang
                            </option>
                            <option value="1_000|12>c88f369b-f01b-4e17-a3ed-12134d7851f9">KPw BI Pematang Siantar
                            </option>
                            <option value="1_000|12>8ec38c3a-32d0-4b0e-9537-1d23c181086e">KPw BI Prov. Sumatera Utara -
                              Medan
                            </option>
                            <option value="1_000|12>b03e6b83-3ff1-40a5-9204-982bef2c18a2">KPw BI Sibolga
                            </option>
                            <option value="1_000|11>5d168133-fb4d-4e9c-afcd-96a682302de6">KPw BI Lhokseumawe
                            </option>
                            <option value="1_000|11>d4e3422b-4416-45d5-8177-885eb71c7e1e">KPw BI Prov. Aceh - Banda Aceh
                            </option>
                          </select>
                          <i class="fa fa-arrow-circle-right u-caret" aria-hidden="true"></i>
                        </div>
                      </div>
                      <div class="u-form-date u-form-group u-form-partition-factor-3 u-form-group-3 input-daterange">

                        <input id="Tanggal" type="text"
                          class="u-border-1 u-border-grey-30 u-border-radius-15 u-input u-input-round u-white u-input-3"
                          readonly required="required" style="cursor:pointer;text-align:left;background-color:#fff"
                          value="" />
                        <i class="fa fa-calendar"></i>
                        <label for="date-73df" class="u-form-control-hidden u-label">Date</label>
                        <input type="hidden" name="Tanggal" value="" />

                      </div>
                      <div class="u-align-right u-form-group u-form-submit u-form-group-4">

                        <input type="submit" value="Pesan"
                          class="u-border-0 u-border-radius-15 u-btn u-btn-round u-btn-submit u-custom-color-3 u-btn-1 pesanbtn" />

                      </div>
                    </form>
                  </div>



                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="disclaimer">
          <span class="dis-1">
            Penukaran UPK 75 Tahun RI Dapat Dilakukan mulai 18 Agustus 2020 di Kantor Bank Indonesia Terdekat, dengan
            Membawa KTP Asli dan Bukti Pemesanan, <a href="/Order/MekanismePenukaran" id="syaratLink">Lihat Mekanisme
              Penukaran</a>
          </span>
        </div>
      </div>
      <div id="hiddenModal">
        <div>
          <label class="control-label col-md-3" for="Lokasi_Penukaran__" style="text-align: left">Lokasi Penukaran
            *</label>
          <div>
            <select class="form-control" id="province_list2" name="ProvinceId">
              <option value="0">Pilih Provinsi</option>
              <option value="1_000|11">ACEH</option>
              <option value="1_000|51">BALI</option>
              <option value="1_000|36">BANTEN</option>
              <option value="1_000|17">BENGKULU</option>
              <option value="1_000|34">DAERAH ISTIMEWA YOGYAKARTA</option>
              <option value="1_000|31">DKI JAKARTA</option>
              <option value="1_000|75">GORONTALO</option>
              <option value="1_000|15">JAMBI</option>
              <option value="1_000|32">JAWA BARAT</option>
              <option value="1_000|33">JAWA TENGAH</option>
              <option value="1_000|35">JAWA TIMUR</option>
              <option value="1_000|61">KALIMANTAN BARAT</option>
              <option value="1_000|63">KALIMANTAN SELATAN</option>
              <option value="1_000|62">KALIMANTAN TENGAH</option>
              <option value="1_000|64">KALIMANTAN TIMUR</option>
              <option value="1_000|65">KALIMANTAN UTARA</option>
              <option value="1_000|19">KEPULAUAN BANGKA BELITUNG</option>
              <option value="1_000|21">KEPULAUAN RIAU</option>
              <option value="1_000|18">LAMPUNG</option>
              <option value="1_000|81">MALUKU</option>
              <option value="1_000|82">MALUKU UTARA</option>
              <option value="1_000|52">NUSA TENGGARA BARAT</option>
              <option value="1_000|53">NUSA TENGGARA TIMUR</option>
              <option value="1_000|91">PAPUA</option>
              <option value="1_000|92">PAPUA BARAT</option>
              <option value="1_000|14">RIAU</option>
              <option value="1_000|76">SULAWESI BARAT</option>
              <option value="1_000|73">SULAWESI SELATAN</option>
              <option value="1_000|72">SULAWESI TENGAH</option>
              <option value="1_000|74">SULAWESI TENGGARA</option>
              <option value="1_000|71">SULAWESI UTARA</option>
              <option value="1_000|13">SUMATERA BARAT</option>
              <option value="1_000|16">SUMATERA SELATAN</option>
              <option value="1_000|12">SUMATERA UTARA</option>
            </select>
          </div>
          <div>

          </div>
        </div>

        <div>
          <label class="control-label col-md-3" for="" style="text-align: left"> </label>
          <div>
            <div>
              <select class="form-control" disabled="True" id="institution_list2" name="InstitutionId">
                <option value="0">Pilih Lokasi Penukaran</option>
                <option value="1_000|92>d874711a-53a5-4124-9fbb-a5c293defd24">KPw BI Prov. Papua Barat - Manokwari
                </option>
                <option value="1_000|91>a2550081-eb13-48d7-8f36-322bb179cddf">KPw BI Prov. Papua - Jayapura
                </option>
                <option value="1_000|82>2d76025b-7680-4ef6-afcc-905ad7e9279e">KPw BI Prov. Maluku Utara - Ternate
                </option>
                <option value="1_000|81>42bc2ed7-87bf-4eac-87a2-d966d04add49">KPw BI Prov. Maluku - Ambon
                </option>
                <option value="1_000|76>797a660f-0e7a-4ea8-9d59-fd055987ef58">KPw BI Prov. Sulawesi Barat - Mamuju
                </option>
                <option value="1_000|75>2ceb1f80-2667-4953-af43-4aeb76e9f4bb">KPw BI Prov. Gorontalo - Gorontalo
                </option>
                <option value="1_000|74>da6ccf57-f4e3-4414-a27c-2393b310da3c">KPw BI Prov. Sulawesi Tenggara - Kendari
                </option>
                <option value="1_000|73>455b346b-69b6-417b-b95a-d325667ffe35">KPw BI Prov. Sulawesi Selatan - Makassar
                </option>
                <option value="1_000|72>02d4cf6f-4f0c-4c90-bf53-50292bcd8fe0">KPw BI Prov. Sulawesi Tengah - Palu
                </option>
                <option value="1_000|71>554aaa2e-9f77-44b5-84d4-7faf33bd9481">KPw BI Prov. Sulawesi Utara - Manado
                </option>
                <option value="1_000|65>6bba1dd9-5a64-45aa-b5f3-b25f7a434dd0">KPw BI Prov. Kalimantan Utara - Tarakan
                </option>
                <option value="1_000|64>a61d7510-ff3c-4878-a534-e98b09a923ea">KPw BI Balikpapan
                </option>
                <option value="1_000|64>8f0af91f-6265-4d3a-9ee5-0ee12ed92739">KPw BI Prov. Kalimantan Timur - Samarinda
                </option>
                <option value="1_000|63>634f0032-f56b-48dd-9b57-6a3f2156dbc3">KPw BI Prov. Kalimantan Selatan -
                  Banjarmasin
                </option>
                <option value="1_000|62>a5be228d-120c-4ab8-8126-6d19b62577dd">KPw BI Prov. Kalimantan Tengah -
                  Palangkaraya
                </option>
                <option value="1_000|61>52f987c3-7e2a-41db-9e9f-a9f12fa1af7b">KPw BI Prov. Kalimantan Barat - Pontianak
                </option>
                <option value="1_000|53>fc9be24f-5506-440c-8201-54afebde22cd">KPw BI Prov. Nusa Tenggara Timur - Kupang
                </option>
                <option value="1_000|52>9143ab10-237f-46b4-b776-1567a1e5b078">KPw BI Prov. Nusa Tenggara Barat - Mataram
                </option>
                <option value="1_000|51>1b97d641-68eb-417e-bdc2-2c203e628e5a">KPw BI Prov. Bali - Denpasar
                </option>
                <option value="1_000|36>e15eabdb-f3a4-4671-a89c-d61cd1c4451e">KPw BI Prov. Banten - Serang
                </option>
                <option value="1_000|35>e9c6ea04-9f58-45db-9d96-a32aa132047e">KPw BI Jember
                </option>
                <option value="1_000|35>d7952a67-7cfa-4e42-8985-e70ccb482b12">KPw BI Kediri
                </option>
                <option value="1_000|35>b4edab6e-6aa6-4027-848b-ee9f4147e4ee">KPw BI Malang
                </option>
                <option value="1_000|35>09decc7b-bd29-4e47-beb6-4acc89c82920">KPw BI Prov. Jawa Timur - Surabaya
                </option>
                <option value="1_000|34>e519e688-38ff-42e5-84c9-90fb3e8a93da">KPw BI Prov. D.I. Yogyakarta - Yogyakarta
                </option>
                <option value="1_000|33>4f6c6b07-c653-4391-a37c-488d43f4b4ab">KPw BI Prov. Jawa Tengah - Semarang
                </option>
                <option value="1_000|33>d2fadc6b-8e40-4684-a11d-5557b1cccd89">KPw BI Purwokerto
                </option>
                <option value="1_000|33>57dd0f78-eb32-4970-a329-181ec6460368">KPw BI Solo
                </option>
                <option value="1_000|33>be06bcb1-eeac-4a82-9eee-03d786aaeb46">KPw BI Tegal
                </option>
                <option value="1_000|32>41160f19-0d1d-4ede-85e7-b9a83039c914">KPw BI Cirebon
                </option>
                <option value="1_000|32>953b33cb-dfb5-4c24-a033-e5187c696a78">KPw BI Prov. Jawa Barat - Bandung
                </option>
                <option value="1_000|32>cd0e3247-b5b2-4b8f-b877-1a7b4183b466">KPw BI Tasikmalaya
                </option>
                <option value="1_000|31>f27cbbb6-e771-44ae-91b9-fa9d11c2c5f3">Kantor Pusat Bank Indonesia - Jakarta
                </option>
                <option value="1_000|21>4b4e5f4f-cefd-4986-9644-d3ef47083bb2">KPw BI Prov. Kepulauan Riau - Batam
                </option>
                <option value="1_000|19>ba5de268-d9cd-40cd-a051-2e863a120eb7">KPw BI Prov. Kep. Bangka Belitung -
                  Pangkal Pinang
                </option>
                <option value="1_000|18>09ef1e82-15b1-4ba8-a92b-726c25567892">KPw BI Prov. Lampung - Bandar Lampung
                </option>
                <option value="1_000|17>79b153e9-e72f-415f-8d39-733ed09b4b27">KPw BI Prov. Bengkulu - Bengkulu
                </option>
                <option value="1_000|16>bacff387-d50e-4f86-94b2-0e4505300e50">KPw BI Prov. Sumatera Selatan - Palembang
                </option>
                <option value="1_000|15>cb860cc6-ecca-4cfb-b293-d7600e69b374">KPw BI Prov. Jambi - Jambi
                </option>
                <option value="1_000|14>01c6246c-bf3e-402c-b2f3-0066844b1e51">KPw BI Prov. Riau - Pekanbaru
                </option>
                <option value="1_000|13>b32a8937-380b-41ca-b0e3-cc13874f1de1">KPw BI Prov. Sumatera Barat - Padang
                </option>
                <option value="1_000|12>c88f369b-f01b-4e17-a3ed-12134d7851f9">KPw BI Pematang Siantar
                </option>
                <option value="1_000|12>8ec38c3a-32d0-4b0e-9537-1d23c181086e">KPw BI Prov. Sumatera Utara - Medan
                </option>
                <option value="1_000|12>b03e6b83-3ff1-40a5-9204-982bef2c18a2">KPw BI Sibolga
                </option>
                <option value="1_000|11>5d168133-fb4d-4e9c-afcd-96a682302de6">KPw BI Lhokseumawe
                </option>
                <option value="1_000|11>d4e3422b-4416-45d5-8177-885eb71c7e1e">KPw BI Prov. Aceh - Banda Aceh
                </option>
              </select>;
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-section-2" id="sec-717b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-subtitle">
          <p>
            <span class="u-text u-text-default u-text-1">Uang Peringatan 75 Tahun Kemerdekaan Republik Indonesia</span>
          </p>
        </div>
        <div class="u-expanded-width u-list u-repeater u-list-1">
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-1">
            <div
              class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1 u-container-layout-box">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-1"
                src="/Content/images/homepage/tema.png">
              <a href="/Order/Tema" class="x-btn u-border-radius-35 u-btn u-btn-round tem-btn">TEMA</a>

              <h6 class="u-text u-text-default u-text-2">&nbsp;</h6>
              <p class="u-text u-text-3">Uang Peringatan Kemerdekaan 75 Tahun Republik Indonesia (UPK 75 Tahun RI)
                dikeluarkan oleh Bank Indonesia sebagai bentuk persembahan rasa syukur atas anugerah kemerdekaan dan
                pencapaian hasil pembangunan selama 75 tahun kemerdekaan Indonesia.</p>
              <a href="/Order/Tema"
                class="u-btn u-btn-rectangle u-button-style u-none u-text-custom-color-2 u-btn-1">Selengkapnya</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
            <div
              class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2 u-container-layout-box">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-2" src="/Content/images/mrt_new.png"
                data-image-width="275" data-image-height="183">
              <a href="/Order/Ciri" class="x-btn u-border-radius-35 u-btn u-btn-round cir-btn">CIRI-CIRI</a>
              <h6 class="u-text u-text-default u-text-4"> &nbsp;</h6>
              <p class="u-text u-text-5">UPK 75 Tahun RI dicetak menggunakan <i>durable paper</i>, dengan desain dan
                unsur pengaman menggunakan teknologi terkini. Inovasi dalam pencetakan tersebut menjadikan UPK 75 Tahun
                RI semakin mudah untuk dikenali ciri keasliannya, namun sulit untuk dipalsukan.</p>
              <a href="/Order/Ciri"
                class="u-btn u-btn-rectangle u-button-style u-none u-text-custom-color-2 u-btn-2">Selengkapnya</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-3">
            <div
              class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3 u-container-layout-box">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-3"
                src="/Content/images/homepage/ciri.jpg">
              <a href="/Order/MekanismePenukaran"
                class="x-btn u-border-radius-35 u-btn u-btn-round mkn-btn">PENUKARAN</a>
              <h6 class="u-text u-text-default u-text-6">&nbsp; </h6>
              <p class="u-text u-text-default u-text-7">UPK 75 Tahun RI nominal Rp75.000 dapat dimiliki dengan
                menukarkan uang senilai Rp75.000. Satu KTP hanya dapat digunakan untuk penukaran 1 (satu) lembar UPK 75
                Tahun RI.</p>
              <a href="/Order/MekanismePenukaran"
                class="u-btn u-btn-rectangle u-button-style u-none u-text-custom-color-2 u-btn-3">Selengkapnya</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-3">
            <div
              class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3 u-container-layout-box">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-3" src="/Content/images/money_3.jpg">
              <a href="/Order/FAQ" class="x-btn u-border-radius-35 u-btn u-btn-round hub-btn"
                style="font-size:0.75rem; padding: 14px 14px 14px 14px;">BANTUAN & TANYA JAWAB</a>
              <h6 class="u-text u-text-default u-text-6">&nbsp; </h6>
              <p class="u-text u-text-default u-text-7">Pengeluaran UPK 75 Tahun RI merupakan kali keempat Bank
                Indonesia mengeluarkan uang dalam rangka peringatan HUT Kemerdekaan RI. Informasi lebih lanjut seputar
                UPK 75 Tahun RI dapat diakses melalui menu Bantuan dan FAQ.</p>
              <a href="/Order/FAQ"
                class="u-btn u-btn-rectangle u-button-style u-none u-text-custom-color-2 u-btn-3">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>


  <script src="/Scripts/bootstrap-datepicker.min.js" defer></script>

  <script>
  function selectElement(id, valueToSelect) {
    let element = document.getElementById(id);
    element.value = valueToSelect;
  }

  function showOnly(id, text, id2, defVal, defText) {
    $(id).children('option').remove();
    var option = document.createElement("option");
    option.text = defText;
    option.value = defVal;
    $(id).append(option);
    $(id).append($(id2).children("option[value*='" + text + "']").clone());
  }
  var d_bank = "000";
  var d_prov = "0";
  var d_city = "00.00";
  var d_inst = "0";
  $(document).ready(function() {
    var pathname = window.location.pathname;
    var holidayUrl = 'GetHoliday';
    if (pathname.indexOf("Order") < 0) {
      holidayUrl = 'Order/GetHoliday';
    }
    var start = $('#expStart').val();
    var end = $('#expEnd').val();
    var date = new Date(start);
    var endDate = new Date(end);

    var disabledDates = []
    $.ajax({
      url: holidayUrl,
      dataType: 'json',
      async: false,

      success: function(data) {
        $.each(data, function(index, item) {

          disabledDates.push(item);
        });
      }
    });

    $('.input-daterange').datepicker({
      format: 'dd M yyyy',
      autoclose: true,
      enableOnReadonly: true,
      clearBtn: true,
      todayHighlight: true,
      language: "id",

      startDate: date,
      endDate: endDate,
      maxViewMode: 0,
      datesDisabled: disabledDates,
    });

    $("#Type_list").val('1');
    var id = $("#Type_list").val();
    $('#pilihLokasi').toggle(false);
    if (id == 1) {
      selectElement('province_list', d_prov);
      $("#province_list").attr("disabled", false);
      var fbank = $("#Type_list").val() + "_000"
      showOnly('#province_list', fbank, '#province_list2', d_prov, "Pilih Provinsi");

    } else if (id == "2") {
      selectElement('province_list', d_prov);
      $("#province_list").attr("disabled", true);
    }

    $("#province_list").change(function() {
      var idtp = $("#Type_list").val();
      var id = $("#province_list").val();
      if (idtp == '1') {
        if (id == '0') {
          selectElement('institution_list', d_inst);
          $("#institution_list").attr("disabled", true);

        } else {
          selectElement('institution_list', d_inst);
          $("#institution_list").attr("disabled", false);
          var fProv = $("#province_list").val() + ">"
          showOnly('#institution_list', fProv, '#institution_list2', d_inst, "Pilih Lokasi Penukaran");

        }
      } else if (idtp == '2') {
        if (id == '0') {
          selectElement('city_list', d_city);
          $("#institution_list").attr("disabled", true);
          selectElement('institution_list', d_inst);
          $("#institution_list").attr("disabled", true);
        } else {
          selectElement('city_list', d_city);
          $("#city_list").attr("disabled", false);
          selectElement('institution_list', d_inst);
          $("#institution_list").attr("disabled", true);
          var fprov = $("#province_list").val();
          showOnly('#city_list', fprov, '#city_list2', d_city, "Pilih Kota");
        }
      }
    });

    $('.input-daterange input[type=text]').each(function() {
      var $datepicker = $(this);
      $datepicker.on('changeDate', function(event) {
        $(this).closest('.input-daterange').siblings('[name="' + this.id + '"]').val(event.date == null ?
          "" : event.date.toUTCString());
      });
      $datepicker.next().next().click(function() {
        $(this).prev().prev().datepicker('show');
      });
      var dt = $datepicker.datepicker('getDate');
      if (dt != null) {
        dt.setDate(1);
        $datepicker.datepicker('setDate', dt);
      }
    });

    $("form").submit(function(event) {
      var prov = $("#province_list").val();
      var insti = $("#institution_list").val();
      var tanggal = $("#Tanggal").val();

      if (prov == "0") {
        $(".notify").addClass("active");
        $("#notifyType").addClass("failure");
        $("#notifyType").text("Provinsi belum diisi");
        setTimeout(function() {
          $(".notify").removeClass("active");
          $("#notifyType").removeClass("failure");
        }, 5000);
        $('#province_list').focus();
        event.preventDefault();
      }

      //else if (insti == "0") {
      //     $(".notify").addClass("active");
      //     $("#notifyType").addClass("failure");
      //     $("#notifyType").text("Lokasi Penukaran belum diisi");
      //     setTimeout(function () {
      //         $(".notify").removeClass("active");
      //         $("#notifyType").removeClass("failure");
      //     }, 5000);

      //    $('#institution_list').focus();
      //    event.preventDefault();
      // }
      else if (tanggal == "") {
        $(".notify").addClass("active");
        $("#notifyType").addClass("failure");
        $("#notifyType").text("Tanggal Penukaran belum diisi");
        setTimeout(function() {
          $(".notify").removeClass("active");
          $("#notifyType").removeClass("failure");
        }, 5000);
        $('#Tanggal').focus();
        event.preventDefault();
      }

    });

  });
  </script>
  <style>
  #footer {
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 15px;
    background-color: #31363b;
    color: white;
    font-family: Louis George Cafe_0, Neris-SemiBold_0;
  }

  #footer p {
    color: white;
  }

  body {
    padding-bottom: 0px;
  }

  .navbar-inverse {
    background-color: #e5232b;
    border-color: #005596;
  }

  .containerhead {
    background-image: url(/Content/images/homepage/header.png);
    background-repeat: no-repeat;
    position: absolute;
    width: 100%;
    height: 100%;
  }
  </style>
</main><!--  /.container -->







<?= $this->endSection() ?>