<!-- Image and text -->
<!-- <nav class="navbar navbar-light bg-light"> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lakip">Lakip</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lakip/data">Data</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lakip/about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/lakip/datatables">Datatables</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </ul>
      <form method="POST" action="">
        <select class="form-select form-select-sm btn-outline-danger mr-2" aria-label=".form-select-sm"
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
    <!-- <form class="d-flex">
      <input class="form-control mr-2" type="search" id="myInput" placeholder="Search" aria-label="Search">
      <button class="btn btn-sm btn-outline-success" type="submit">Search</button>
    </form> -->
  </div>
  <div class="dropdown">
    <button class="btn btn-bd-light dropdown-toggle" id="bd-versions" data-toggle="dropdown" aria-expanded="false"
      data-display="static">
      Masrianto
    </button>
    <ul class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">


      <li>
        <a class="dropdown-item current" aria-current="true" href="https://www.lainungan.com"> Lainungan</a>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="https://www.masrianto.com">Masrianto</a></li>
      <li><a class="dropdown-item" href="https://www.lakip.co.id">Lakip</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="">All versions</a></li>
    </ul>
  </div>
  </div>
</nav>