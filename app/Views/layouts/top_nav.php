<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class="navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url('public/gentelella/images/img.jpg') ?>" alt="Foto de perfil"><?= session()->get('name') ?? 'John Doe' ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= site_url('profile') ?>">
                            <i class="fa fa-user"></i> Perfil
                        </a>
                        <a class="dropdown-item" href="<?= site_url('logout') ?>">
                            <i class="fa fa-sign-out pull-right"></i> Cerrar sesión
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->