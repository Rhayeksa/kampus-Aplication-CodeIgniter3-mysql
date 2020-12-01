<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="<?php echo base_url('assets/favicon.ico'); ?>" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

  <title>Page | <?= $title ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>">Kampus App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Privacy_policy">Privacy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Term">Term</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Disclaimer">Disclaimer</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Page
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url(); ?>Mahasiswa">Mahasiswa</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url(); ?>Dosen">Dosen</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url(); ?>Mata_kuliah">Mata Kuliah</a>
              <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url(); ?>Hasil_study">Hasil Study</a> -->
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">