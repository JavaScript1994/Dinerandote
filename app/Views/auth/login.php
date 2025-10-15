<?= $this->extend('layouts/auth') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('body') ?>
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form class="login100-form validate-form" method="post" action="<?= base_url('login') ?>">
        <div class="logo-area">
          <img src="<?= base_url('public/assets/images/background_login_001-.png') ?>" alt="Logo de Dinerándote" class="login-logo-img">
        </div>
        <span class="login100-form-title p-b-36">
          Plataforma Horus
        </span>
        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="email">
          <span class="focus-input100"></span>
          <span class="label-input100">Email</span>
        </div>


        <div class="wrap-input100 validate-input" data-validate="Password is required">
          <input class="input100" type="password" name="password">
          <span class="focus-input100"></span>
          <span class="label-input100">Password</span>
        </div>

        <div class="container-login100-form-btn">
          <button type="submit" class="login100-form-btn">
            Acceder
          </button>
        </div>
        <div class="login100-form-copyright"> Copyright &copy; 2024 - 2025 Dinerandote</div>
      </form>

      <div class="login100-more" style="background-image: url('<?= base_url('public/assets/images/Dinerandote.jpg') ?>');">
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>