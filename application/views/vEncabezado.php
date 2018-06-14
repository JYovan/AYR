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
<!--        <script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>-->
        <!--Third Party-->
        <!--Pace loading and performance for web applications-->
        <script src="<?php print base_url(); ?>js/pace.min.js"></script>
        <link href="<?php print base_url(); ?>css/pace.css" rel="stylesheet" />
        <!--Font Awesome Icons-->
        <script defer src="<?php print base_url(); ?>js/fontawesome-all.js"></script>
        <link rel="stylesheet" href="<?php print base_url(); ?>css/animate.min.css">
        <!--HoldOn Stupid Accions-->
        <link href="<?php print base_url(); ?>css/HoldOn.min.css" rel="stylesheet">
        <script src="<?php print base_url(); ?>js/HoldOn/HoldOn.min.js"></script>

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

        <!--Time picker-->
        <link href="<?php echo base_url(); ?>js/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <script src="<?php echo base_url(); ?>js/timepicker/bootstrap-timepicker.min.js"></script>
        <!--jQuery Number Format-->
        <script src="<?php echo base_url(); ?>js/jnumber/jquery.number.min.js"></script>
        <!--JS XLXS API-->
        <script src="<?php echo base_url(); ?>js/js-xlsx/dist/cpexcel.js"></script>
        <script src="<?php echo base_url(); ?>js/js-xlsx/shim.js"></script>
        <script src="<?php echo base_url(); ?>js/js-xlsx/jszip.js"></script>
        <script src="<?php echo base_url(); ?>js/js-xlsx/xlsx.js"></script>

        <!-- Progress bar CSS -->
        <link href="<?php print base_url('css/progress-wizard.min.css') ?>" rel="stylesheet">

        <!--Final Modifiers for CSS-->
        <link href="<?php print base_url(); ?>css/style.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>js/scripts.js"></script>

    </head>
    <script>
        var base_url = "<?php print base_url(); ?>";
        $(function () {

            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();

            $('.numbersOnly').keypress(function (event) {
                var charCode = (event.which) ? event.which : event.keyCode;
                if (
                        (charCode !== 45 || $(this).val().indexOf('-') !== -1) && // “-” CHECK MINUS, AND ONLY ONE.
                        (charCode !== 46 || $(this).val().indexOf('.') !== -1) && // “.” CHECK DOT, AND ONLY ONE.
                        (charCode < 48 || charCode > 57))
                    return false;

                return true;
            });



            $(window).click(function () {
                if (parseInt($('#myNav').width()) > 0) {
                    closeNav();
                }
            });


//            $("select").select2({
//                placeholder: "Selecciona una opción",
//                allowClear: true,
//                autofocusInputOnOpen: false
//            });

            $("select").selectize({
                hideSelected: true
            });


            $('.modal').on('shown.bs.modal', function (e) {
                $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
            });

            $('[data-provide="datepicker"]').inputmask({alias: "date"})
            $('[data-provide="datepicker"]').addClass("notEnter");
            
            $('[data-provide="timepicker"]').timepicker(
                    {
                        disableFocus: true,
                        showInputs: false,
                        showSeconds: true,
                        showMeridian: false,
                        defaultValue: '12:45:30'
                    }
            );
        });
        function onNotify(span, message, type) {
            swal((type === 'danger') ? 'ERROR' : 'ATENCIÓN', message, (type === 'danger') ? 'warning' : 'info');
        }
        function isValid(p) {
            var inputs = $('#' + p).find("input.form-control:required").length;
            var inputs_textarea = $('#' + p).find("textarea.form-control:required").length;
            var selects = $('#' + p).find("select.required").length;
            var valid_inputs = 0;
            var valid_inputs_textarea = 0;
            var valid_selects = 0;
            $.each($('#' + p).find("input.form-control:required"), function () {
                var e = $(this).parent().find("small.text-danger");
                if ($(this).val() === '' && e.length === 0) {
                    $(this).parent().find("label").after("<small class=\"text-danger\"> Este campo es obligatorio</small>");
                    $(this).css("border", "1px solid #d01010");
                    valido = false;
                } else {
                    if ($(this).val() !== '') {
                        $(this).css("border", "1px solid #ccc");
                        $(this).parent().find("small.text-danger").remove();
                        valid_inputs += 1;
                    }
                }
            });
            $.each($('#' + p).find("textarea.form-control:required"), function () {
                var e = $(this).parent().find("small.text-danger");
                if ($(this).val() === '' && e.length === 0) {
                    $(this).parent().find("label").after("<small class=\"text-danger\"> Este campo es obligatorio</small>");
                    $(this).css("border", "1px solid #d01010");
                    valido = false;
                } else {
                    if ($(this).val() !== '') {
                        $(this).css("border", "1px solid #ccc");
                        $(this).parent().find("small.text-danger").remove();
                        valid_inputs_textarea += 1;
                    }
                }
            });
            $.each($('#' + p).find("select.required"), function () {
                var e = $(this).parent().find("small.text-danger");
                if ($(this).val() === '' && e.length === 0) {
                    $(this).after("<small class=\"text-danger\"> Este campo es obligatorio</small>");
                    $(this).parent().find(".selectize-input").css("border", "1px solid #d01010");
                    valido = false;
                } else {
                    if ($(this).val() !== '') {
                        $(this).parent().find(".selectize-input").css("border", "1px solid #ccc");
                        $(this).parent().find("small.text-danger").remove();
                        valid_selects += 1;
                    }
                }
            });
            if (valid_inputs === inputs && valid_selects === selects && valid_inputs_textarea === inputs_textarea) {
                valido = true;
            }
        }
    </script>
