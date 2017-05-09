<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        
            
        <link rel="apple-touch-icon" sizes="57x57" href="<?php print base_url();?>img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php print base_url();?>img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php print base_url();?>img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php print base_url();?>img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php print base_url();?>img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php print base_url();?>img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php print base_url();?>img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php print base_url();?>img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php print base_url();?>img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php print base_url();?>img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php print base_url();?>img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php print base_url();?>img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php print base_url();?>img/favicon-16x16.png">
        <link rel="manifest" href="<?php print base_url();?>img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Control de Trabajo A&R</title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php print base_url(); ?>js/jquery-3.2.1.min.js"></script> 
        
        
        <!--select2 control-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/select2/select2.min.css">
        <script src="<?php echo base_url(); ?>js/select2/select2.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        
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
        <!--Final Modifiers for CSS-->
        <link href="<?php print base_url(); ?>css/style.min.css" rel="stylesheet" /> 
    </head>
   <script>
            var base_url = "<?php print base_url(); ?>"; 
            $(function () { 
//                $.fn.dataTable.tables({visible: true, api: true})
//                        .columns.adjust();
                $(".modal").on('hidden.bs.modal', function () {
                    $(".modal input").val("");
                });
                $("select").select2({
                    placeholder: "SELECCIONE UNA OPCIÓN",
                    allowClear: true
                });
            });


            function onNotify(span, message, type) {
                if (type === "danger") {
                    beep();
                }
                if (type === "success") {
                    beeds();
                }
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