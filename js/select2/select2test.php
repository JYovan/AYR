<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SISTEMA DE ATENCIÓN SOCIAL</title>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
        <script src="../jquery-1.9.1.min.js"></script> 
        <!--select2 control-->
        <link rel="stylesheet" href="select2.min.css">
        <script src="select2.min.js"></script>  
        <script> 
            $(function () {
                $(".modal").on('hidden.bs.modal', function () {
                    $(".modal input").val("");
                    $(".modal select").select2("val", "");
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

    </head>
    <body>
        aaa
        <select id="x" name="x" class="">
            <option></option>
            <option value="A">A</option>
            <option value="B">B</option>
        </select>
    </body>