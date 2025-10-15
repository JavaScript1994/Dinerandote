<!DOCTYPE html>
<html lang="es">
<?= $this->include('layouts/header') ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?= $this->include('layouts/top_nav') ?>
            <?= $this->include('layouts/sidebar') ?>
            <div class="right_col" role="main">
                <?= $this->renderSection('body') ?>
            </div>
            <?= $this->include('layouts/footer') ?>
        </div>
    </div>
    <?= $this->include('layouts/scripts') ?>
</body>

</html>