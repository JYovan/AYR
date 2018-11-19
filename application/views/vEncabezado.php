<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php print base_url(); ?>img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php print base_url(); ?>img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php print base_url(); ?>img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php print base_url(); ?>img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php print base_url(); ?>img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php print base_url(); ?>img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php print base_url(); ?>img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php print base_url(); ?>img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php print base_url(); ?>img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php print base_url(); ?>img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php print base_url(); ?>img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php print base_url(); ?>img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php print base_url(); ?>img/favicon-16x16.png">
        <link rel="manifest" href="<?php print base_url(); ?>img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Control de Trabajo</title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php print base_url(); ?>js/jquery-3.2.1.min.js"></script>
        <!--Estilo principal-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-flaty.css">
        <!--Submenu-->
        <link href="<?php print base_url('js/submenu-boostrap4/bootstrap-4-navbar.min.css') ?>" rel="stylesheet">

        <!--DataTables Plugin-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/tabletools/master/DataTables/datatables.min.css">
        <script src="<?php echo base_url(); ?>js/tabletools/master/DataTables/datatables.min.js"></script>

        <script src="<?php echo base_url(); ?>js/tabletools/master/DataTables/datatables.min.js"></script>
        <script src="<?php echo base_url(); ?>js/tabletools/master/DataTables/JSZip-3.1.3/jszip.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/tabletools/master/DataTables/Buttons-1.5.1/js/buttons.html5.min.js" type="text/javascript"></script>
        <!--select2 control-->
        <script src="<?php echo base_url(); ?>js/selectize/js/standalone/selectize.min.js"></script>
        <link href="<?php echo base_url(); ?>js/selectize/css/selectize.bootstrap.css" rel="stylesheet" />

        <!--Third Party-->

        <!-- PivotTable.js libs from ../dist -->
        <script  src="<?php print base_url(); ?>js/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="<?php print base_url(); ?>js/pivot/dist/pivot.css">
        <script  src="<?php print base_url(); ?>js/pivot/dist/pivot.js"></script>

        <!--Pace loading and performance for web applications-->
        <script src="<?php print base_url(); ?>js/pace.min.js"></script>
        <link href="<?php print base_url(); ?>css/pace.css" rel="stylesheet" />
        <!--Font Awesome Icons-->
        <script defer src="<?php print base_url(); ?>js/fontawesome-all.js"></script>
        <link rel="stylesheet" href="<?php print base_url(); ?>css/animate.min.css">
        <!--HoldOn Stupid Accions-->
        <link href="<?php print base_url(); ?>css/HoldOn.min.css" rel="stylesheet">
        <script src="<?php print base_url(); ?>js/HoldOn/HoldOn.min.js"></script>
        <!--HoldOn Stupid Accions-->
        <script src="<?php print base_url(); ?>js/touch/jquery.touch.min.js"></script>
        <!--MasekdAll-->
        <script src="<?php print base_url(); ?>js/inputmask/dependencyLibs/inputmask.dependencyLib.jquery.js"></script>
        <script src="<?php print base_url(); ?>js/inputmask/jquery.inputmask.bundle.js"></script>
        <script src="<?php print base_url(); ?>js/inputmask/inputmask.js"></script>
        <script src="<?php print base_url(); ?>js/inputmask/inputmask.extensions.js"></script>
        <script src="<?php print base_url(); ?>js/inputmask/inputmask.numeric.extensions.js"></script>
        <script src="<?php print base_url(); ?>js/inputmask/inputmask.date.extensions.js"></script>
        <script src="<?php print base_url(); ?>js/inputmask/inputmask.phone.extensions.js"></script>
        <script src="<?php print base_url(); ?>js/inputmask/jquery.inputmask.min.js"></script>


        <!--Masked number format money etc-->
        <script src="<?php print base_url(); ?>js/jquery.maskedinput.min.js"></script>
        <!--Masked number format money etc-->
        <script src="<?php print base_url(); ?>js/jquery.maskMoney.min.js"></script>
        <!--Modales simplificados-->
        <script src="<?php print base_url(); ?>js/swal/sweetalert.min.js"></script>

        <!--Notifiers-->
        <script src="<?php echo base_url(); ?>js/notify/bootstrap-notify-3.1.3/bootstrap-notify.min.js"></script>
        <!--jQuery Number Format-->
        <script src="<?php echo base_url(); ?>js/jnumber/jquery.number.min.js"></script>
        <!--JS XLXS API-->
        <script src="<?php echo base_url(); ?>js/js-xlsx/jszip.js"></script>
        <script src="<?php echo base_url(); ?>js/js-xlsx/xlsx.js"></script>

        <!-- Progress bar CSS -->
        <link href="<?php print base_url('css/progress-wizard.min.css') ?>" rel="stylesheet">

        <!--FancyBoxJS-->
        <link rel="stylesheet" href="<?php echo base_url("js/fancybox/jquery.fancybox.min.css"); ?>" />
        <script src="<?php echo base_url("js/fancybox/jquery.fancybox.min.js"); ?>"></script>

        <!--Final Modifiers for CSS-->
<!--        <link href="<?php print base_url(); ?>css/style.css" rel="stylesheet" />-->

<!--        <script src="<?php echo base_url(); ?>js/scripts.js"></script>-->


        <!--Cargar scripts de validacion y configuraciones-->

        <?php $this->load->view('vStyle') ?>
        <?php $this->load->view('vScripts') ?>

    </head>
