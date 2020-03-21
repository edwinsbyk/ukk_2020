<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Pelayanan Masyarakat Medan">
    <meta name="keywords" content="">

    <title><?= $title ?></title>

    <!-- Styles -->
    <link href="<?= base_url('assets/'); ?>css/page.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url('assets/'); ?>img/apple-touch-icon.png">
    <link rel="icon" href="<?= base_url('assets/'); ?>img/favicon.png">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" data-navbar="fixed">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
          <a class="navbar-brand" href="#">
            <img class="logo-dark" src="<?= base_url('assets/'); ?>img/logo.png" alt="logo">
            <img class="logo-light" src="<?= base_url('assets/'); ?>img/logo.png" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <nav class="nav nav-navbar ml-auto">
            <a class="nav-link" href="<?= base_url('auth/'); ?>">Login</a>
            <a class="nav-link" href="#section-faq">Dashboard</a>
          </nav>
        </section>

      </div>
    </nav><!-- /.navbar -->