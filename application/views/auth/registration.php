
  <body class="layout-centered bg-img" style="background-image: url(../assets/img/bg/4.jpg);">


    <!-- Main Content -->
    <main class="main-content">

      <div class="bg-white rounded shadow-7 w-400 mw-100 p-6">
        <h5 class="mb-7">Create an account</h5>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?= base_url('auth/registration'); ?>">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Nama Anda"> <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Alamat Email"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" name="password1" placeholder="Password"><?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" name="password2" placeholder="Password (confirm)">
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
        <p class="text-center text-muted small-2">Already a member? <a href="user-login.html">Login here</a></p>
      </div>

    </main><!-- /.main-content -->

