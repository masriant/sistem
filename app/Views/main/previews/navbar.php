<?php
$uri = service('uri');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- <div class="container-fluid"> -->
  <div class="container">
    <a class="navbar-brand" href="#">
      <!--Navbar</a> -->
      <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""
        loading="lazy">
      Masrianto Blog
      <!-- Bootstrap -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php if (session()->get('isLoggedIn')) : ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
          <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'about' ? 'active' : null) ?>">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'contact' ? 'active' : null) ?>">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'lakip' ? 'active' : null) ?>">
          <a class="nav-link" href="/lakip">Lakip</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'project' ? 'active' : null) ?>">
          <a class="nav-link" href="/project">Project</a>
        </li>
      </ul>
      <!-- </div> -->
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item <?= ($uri->getSegment(1) == 'create' ? 'active' : null) ?>">
          <a class="btn btn-sm btn-outline-success mr-2" href="/blog/create">Create</a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
      <?php else : ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
          <a class="nav-link" href="/">Login</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
          <a class="nav-link" href="/register">Register</a>
        </li>
      </ul>
      <?php endif; ?>
    </div>
</nav>