<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= $title ?><?= $this->endSection() ?>

<?= $this->section('body') ?>

<div class="row">
    <div class="col-md-3 widget widget_tally_box">
        <div class="x_panel ui-ribbon-container fixed_height_390">
            <div class="ui-ribbon-wrapper">
                <div class="ui-ribbon">
                    Nuevo
                </div>
            </div>
            <div class="x_title">
                <h2>Nivel Basico</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div style="text-align: center; margin-bottom: 17px">
                    <i class="fa fa-youtube-play fa-5x" aria-hidden="true"></i>
                </div>
            </div>
            <h3 class="name_title">Ahorrar</h3>
            <p>Description</p>
            <div class="divider"></div>
            <p>Coordinar tus gastos mensual te ayuda a mejorar tu salud Financiera</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>