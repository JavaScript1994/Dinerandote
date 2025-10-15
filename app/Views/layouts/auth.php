<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection('title') ?> | Horus</title>
    <link rel="icon" type="image/png" href="<?= base_url('public/assets/images/icons/favicon.ico') ?>" />
    <link rel="stylesheet" href="<?= base_url('public/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/gentelella/vendors/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/gentelella/build/css/custom.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/util.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/main.css') ?>">
</head>

<body>
    <?= $this->renderSection('body') ?>
    <script src="<?= base_url('public/gentelella/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/main.js') ?>"></script>
</body>

</html>