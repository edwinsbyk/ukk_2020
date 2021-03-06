<body class="layout-centered bg-img" style="background-image: url(../assets/img/bg/4.jpg);">


  <!-- Main Content -->
  <main class="main-content">

    <div class="bg-white rounded shadow-7 w-400 mw-100 p-6">
      <h5 class="mb-7">Create an account</h5>
      <?= $this->session->flashdata('message'); ?>
      <form method="post" action="<?= base_url('auth/registration'); ?>">
        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Nama Anda" value="<?= set_value('name'); ?>"> <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" name="password1" placeholder="Password"><?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" name="password2" placeholder="Ulangi password">
        </div>

        <div class="form-group py-3">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <label class="custom-control-label">I agree to the <a class="ml-1" href="terms.html">terms of service</a></label>
          </div>
        </div>

        <div class="form-group">
          <button class="btn btn-block btn-primary" type="submit">Register</button>
        </div>
      </form>
      <p class="text-center text-muted small-2">Sudah memiliki akun?<a href="<?= base_url('auth') ?>">Login here</a></p>
    </div>

  </main><!-- /.main-content -->