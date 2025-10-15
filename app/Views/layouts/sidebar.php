<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?= base_url('dashboard') ?>" class="site_title"><i class="fa fa-sheqel"></i><span> Dinerandote</span></a>
    </div>
    <div class="clearfix"></div>

    <!-- Sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i> Panel General</a></li>
          <li><a href="<?= base_url('profile') ?>"><i class="fa fa-user"></i> Perfil</a></li>
          <li><a href="#"><i class="fa fa-graduation-cap"></i> Educandote <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?= base_url('learning') ?>"><i class="fa fa-university"></i>Educacion Financiera</a></li>
              <li><a href="#"><i class="fa fa-tachometer"></i>Perfil Financiero</a></li>
              <li><a href="#"><i class="fa fa-calculator"></i>Simuladores</a></li>
              <li><a href="#"><i class="fa fa-file-excel-o"></i>Reportes</a></li>
            </ul>
          </li>
          <li><a href="#"><i class=" fa fa-bar-chart"></i> IA score</a></li>
          <li><a href="#"><i class=" fa fa-file-text"></i> Reportes</a></li>
          <li><a href="#"><i class=" fa fa-newspaper-o"></i> Noticias Financiero</a></li>
          <li><a href="#"><i class="fa fa-cogs"></i> Configuración <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#"><i class="fa fa-user"></i>Usuarios</a></li>
              <li><a href="#"><i class="fa fa-shield"></i>Roles</a></li>
              <li><a href="#"><i class="fa fa-th-large"></i>Modulos</a></li>
              <li><a href="#"><i class="fa fa-database"></i>Backup</a></li>
            </ul>
          </li>
          <li><a href="#"><i class=" fa fa-share-square-o"></i> Gestionar API</a></li>
        </ul>
      </div>
    </div>
    <!-- /Sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Mantenimiento">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Bloquear">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Cerrar" href="<?= site_url('logout') ?>">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer  buttons -->
  </div>
</div>