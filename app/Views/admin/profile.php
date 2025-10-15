<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Perfil<?= $this->endSection() ?>

<?= $this->section('body') ?>

<div class="row">
  <!-- Columna izquierda -->
  <div class="col-md-3 col-sm-3 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Perfil de Usuario</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="profile_img text-center">
          <img class="img-responsive avatar-view" src="<?= base_url('public/gentelella/images/img.jpg') ?>" alt="Avatar" style="border-radius: 50%; width:150px; margin:0 auto;">
        </div>
        <h3 class="text-center"></h3>
        <ul class="list-unstyled user_data">
          <li><i class="fa fa-briefcase user-profile-icon"></i> Administrador </li>
          <li><i class="fa fa-map-marker user-profile-icon"></i> Lima, Perú</li>
          <li><i class="fa fa-envelope user-profile-icon"></i> <?= esc($user['email']) ?></li>
        </ul>
        <a class="btn btn-success btn-block" href="#"><i class="fa fa-edit m-right-xs"></i> Editar Perfil</a>
      </div>
    </div>
  </div>

  <!-- Columna derecha -->
  <div class="col-md-9 col-sm-9 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Detalles</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <!-- Tabs -->
        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
          <li class="nav-item active">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#tab_content1" role="tab">Actividad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#tab_content3" role="tab">Configuración</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <!-- Actividad -->
          <div class="tab-pane fade active in" id="tab_content1" role="tabpanel">
            <ul class="list-unstyled timeline">
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">Inicio de sesión</h2>
                    <p class="excerpt">El usuario ingresó al sistema el <strong>30/09/2025</strong> desde la IP <strong>192.168.1.10</strong></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">Actualización de datos</h2>
                    <p class="excerpt">El usuario modificó su correo electrónico.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- Configuración -->
          <div class="tab-pane fade" id="tab_content3" role="tabpanel">
            <form>
              <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" id="email" class="form-control" value="juanperez@email.com">
              </div>
              <div class="form-group">
                <label for="password">Nueva Contraseña:</label>
                <input type="password" id="password" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>