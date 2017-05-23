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
        <title>Control de Trabajo A&R</title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php print base_url(); ?>js/jquery-3.2.1.min.js"></script> 

        <!--DataTables Plugin-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/tabletools/master/DataTables/datatables.min.css">
        <script src="<?php echo base_url(); ?>js/tabletools/master/DataTables/datatables.min.js"></script>

        <!--select2 control-->

        <script src="<?php echo base_url(); ?>js/select2/select2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/select2/select2.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>





        <!-- Validacion forms -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/additional-methods.min.js">
        <script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>


        <!-- Bootstrap -->
        <link href="<?php print base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

        <!--End Bootstrap-->
        <script src="<?php print base_url(); ?>js/bootstrap.min.js"></script> 
        <!--Third Party-->
        <!--Pace loading and performance for web applications-->
        <script src="<?php print base_url(); ?>js/pace.min.js"></script>
        <link href="<?php print base_url(); ?>css/pace.css" rel="stylesheet" />
        <!--Font Awesome Icons-->
        <link rel="stylesheet" href="<?php print base_url(); ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php print base_url(); ?>css/animate.css">
        <!--HoldOn Stupid Accions-->
        <link href="<?php print base_url(); ?>css/HoldOn.min.css" rel="stylesheet">
        <script src="<?php print base_url(); ?>js/HoldOn.min.js"></script>

        <!--Notifiers-->
        <script src="<?php echo base_url(); ?>js/notify/bootstrap-notify-3.1.3/bootstrap-notify.min.js"></script>   
        <!--Date picker--> 
        <link href="<?php echo base_url(); ?>js/datepicker/datepicker3.css" rel="stylesheet"/> 
        <script src="<?php echo base_url(); ?>js/datepicker/bootstrap-datepicker.min.js"></script>

        <!--JS XLXS API-->

        <script src="<?php echo base_url(); ?>js/js-xlsx/dist/cpexcel.js"></script>
        <script src="<?php echo base_url(); ?>js/js-xlsx/shim.js"></script>
        <script src="<?php echo base_url(); ?>js/js-xlsx/jszip.js"></script>
        <script src="<?php echo base_url(); ?>js/js-xlsx/xlsx.js"></script>

        <!--Final Modifiers for CSS-->
        <link href="<?php print base_url(); ?>css/style.min.css" rel="stylesheet" /> 
        <script src="<?php echo base_url(); ?>js/scripts.min.js"></script>

    </head>
    <script>
        var base_url = "<?php print base_url(); ?>";
        $(function () {
//            $("table.display").DataTable(tableOptions);
            $('table').css('display', 'block');
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
            });
            $('a[data-toggle="collapse"]').on('shown.bs.tab', function (e) {
                $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
            });
            $("select").select2({
                placeholder: "SELECCIONE UNA OPCIÓN",
                allowClear: true
            });

            $('.modal').on('shown.bs.modal', function (e) {
                $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
            });
            $('[data-provide="datepicker"]').on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
        });


        function onNotify(span, message, type) {
            $.notify({
                title: span,
                message: message
            }, {
                type: type,
                z_index: 3031,

                placement: {
                    from: "top",
                    align: "center"
                }
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
        }

    </script>