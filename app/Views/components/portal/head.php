<meta charset="utf-8" />
<title><?= esc(generatePageTitle() ?? 'Admin Panel') ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>">

<!-- Theme Config Js -->
<script src="<?= base_url('back/js/config.js') ?>"></script>
<!-- Vendor css -->
<link href="<?= base_url('back/css/vendor.min.css') ?>" rel="stylesheet" type="text/css" />
<!-- App css -->
<link href="<?= base_url('back/css/app.min.css') ?>" rel="stylesheet" type="text/css" id="app-style" />
<!-- Icons css -->
<link href="<?= base_url('back/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

<style>
    .error {
        color: red;
    }
</style>