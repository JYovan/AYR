<script>


    var buttons = [
        {
            extend: 'excelHtml5',
            text: ' <i class="fa fa-file-excel"></i>',
            titleAttr: 'Excel',
            exportOptions: {
                columns: ':visible'
            }
        }
        ,
        {
            extend: 'colvis',
            text: '<i class="fa fa-columns"></i>',
            titleAttr: 'Seleccionar Columnas',
            exportOptions: {
                modifier: {
                    page: 'current'
                },
                columns: ':visible'
            }
        }

    ];


</script>
<script>
    var base_url = "<?php print base_url(); ?>";

    var isMobile = false;
    function mobilecheck() {
        (function (a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)))
                isMobile = true;
        })(navigator.userAgent || navigator.vendor || window.opera);
        return isMobile;
    }


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
        $("select").not('.NotSelect').selectize({
            hideSelected: true
        });
        $('.modal').on('shown.bs.modal', function (e) {
            $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
        });
        $('[data-provide="datepicker"]').inputmask({alias: "date"});
        $('[data-provide="datepicker"]').addClass("notEnter");
        $('[data-provide="datepicker"]').val();

//            $('[data-provide="timepicker"]').inputmask({mask: "h:s t\\m",
//                placeholder: "hh:mm xm - hh:mm xm",
//                alias: "datetime",
//                hourFormat: "12"
//            });

        $('[data-provide="timepicker"]').inputmask("hh:mm:ss", {
            hourFormat: "24",
            placeholder: "HH:MM:SS",
            insertMode: false,
            showMaskOnHover: false

        }
        );

    });
    function onNotify(span, message, type) {
        swal((type === 'danger') ? 'ERROR' : 'ATENCIÓN', message, (type === 'danger') ? 'warning' : 'info');
    }
    function onNotifyOld(icon, message, type) {
        $.notify({
            icon: icon,
            message: message
        }, {
            type: type,
            z_index: 3031,
            delay: 2000,
            placement: {
                from: "bottom",
                align: "right"
            },
            animate: {
                enter: 'animated flipInX',
                exit: 'animated flipOutX'
            },

        });
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

    function getToday() {
        var date = new Date();

        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10)
            month = "0" + month;
        if (day < 10)
            day = "0" + day;

        var today = day + "-" + month + "-" + year;
        return today;
    }

    function getTodayWithTime() {
        var date = new Date();

        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10)
            month = "0" + month;
        if (day < 10)
            day = "0" + day;

        var today = day + "-" + month + "-" + year;

        var hours = date.getHours();
        var minutes = date.getMinutes();
        var seconds = date.getSeconds();
        var ampm = hours >= 12 ? 'pm' : 'am';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        var strTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;

        return today + ' ' + strTime;
    }

    function getTable(tblname, data) {
        var column = '';
        var i = 0;
        var div = "<div class=\" \">";
        div = "<table id=\"" + tblname + "\" class=\" table table-sm  \"  width=\"100%\">";
        //Create header
        div += "<thead>";
        div += "<tr class=\"\" >";
        for (var key in data[i]) {
            column += "<th>" + key + "</th>";
        }
        div += column;
        div += "</tr></thead>";
        //Create Rows
        div += "<tbody>";
        $.each(data, function (key, value) {
            div += "<tr data-toggle='tooltip' title='Haga clic para editar' >";
            $.each(value, function (key, value) {
                div += "<td>" + value + "</td>";
            });
            div += "</tr>";
        });
        div += "</tbody>";
        //Create Footer
        div += "<tfoot>";
        div += "<tr class=\"\">";
        div += column;
        div += "</tr></tfoot>";
        div += "</table>";
        div += "</div>";
        return div;
    }

    function getTableConceptosTrabajos(tblname, data) {
        var column = '';
        var i = 0;
        var div = "<div class=\" \">";
        div = "<table id=\"" + tblname + "\" class=\"table table-striped table-hover \"  width=\"100%\">";
        //Create header
        div += "<thead>";
        div += "<tr class=\"\" >";
        for (var key in data[i]) {
            column += "<th>" + key + "</th>";
        }
        div += column;
        div += "</tr></thead>";
        //Create Rows
        div += "<tbody>";
        $.each(data, function (key, value) {
            div += "<tr data-toggle='tooltip' title='Haga clic para editar' >";
            $.each(value, function (key, value) {
                div += "<td>" + value + "</td>";
            });
            div += "</tr>";
        });
        div += "</tbody>";
        //Create Footer
        div += "<tfoot>";
        div += "<tr class=\"\">";
        div += column;
        div += "</tr></tfoot>";
        div += "</table>";
        div += "</div>";
        return div;
    }

    function getExt(filename) {
        var dot_pos = filename.lastIndexOf(".");
        if (dot_pos === -1)
            return "";
        return filename.substr(dot_pos + 1).toLowerCase();
    }

    function handleEnter() {
        $('body').on('keydown', 'input, select, textarea:not(.notEnter)', function (e) {
            var self = $(this)
                    , form = self.parents('body')
                    , focusable
                    , next
                    ;
            if (e.keyCode === 13) {
                focusable = form.find('input,a,select,button,textarea').filter(':visible:enabled').not('.disabledForms').not('.notEnter');
                next = focusable.eq(focusable.index(this) + 1);
                if (next.length) {
                    next.focus();
                    next.select();
                }
                return false;
            }
        });
    }

    function getNumber(x) {
        return x.replace(/\s+/g, '').replace(/,/g, "").replace("$", "");
    }

    function getNumberFloat(x) {
        return parseFloat(x.replace(/\s+/g, '').replace(/,/g, "").replace("$", ""));
    }


    var lang = {
        processing: "Cargando datos...",
        search: "Buscar:",
        lengthMenu: "Mostrar _MENU_ Elementos",
        info: "Mostrando  _START_ de _END_ , de _TOTAL_ Elementos.",
        infoEmpty: "Mostrando 0 de 0 A 0 Elementos.",
        infoFiltered: "(Filtrando un total _MAX_ Elementos. )",
        infoPostFix: "",
        loadingRecords: "Procesando los datos...",
        zeroRecords: "No se encontro nada.",
        emptyTable: "No existen datos en la tabla.",
        paginate: {
            first: "Primero",
            previous: "Anterior",
            next: "Siguiente",
            last: "&Uacute;ltimo"
        },
        aria: {
            sortAscending: ": Habilitado para ordenar la columna en orden ascendente",
            sortDescending: ": Habilitado para ordenar la columna en orden descendente"
        },
        buttons: {
            copyTitle: 'Registros copiados a portapapeles',
            copyKeys: 'Copiado con teclas clave.',
            copySuccess: {
                _: ' %d Registros copiados',
                1: ' 1 Registro copiado'
            }
        }
    };


    /*******************************************************************************
     * VAR FOR TEMPORAL DATA
     *******************************************************************************/
    var temp = 0;
    /*******************************************************************************
     * EVENT FOR CLICK ROW
     *******************************************************************************/
    var selected = [];
    /*******************************************************************************
     * OPTIONS FOR TABLES
     *******************************************************************************/
    var tableOptions = {
        "dom": 'Bfrtip',
        buttons: buttons,
        language: {
            processing: "Proceso en curso...",
            search: "Buscar:",
            lengthMenu: "Mostrar _MENU_ Elementos",
            info: "Mostrando  _START_ de _END_ , de _TOTAL_ Elementos.",
            infoEmpty: "Mostrando 0 de 0 A 0 Elementos.",
            infoFiltered: "(Filtrando un total _MAX_ Elementos. )",
            infoPostFix: "",
            loadingRecords: "Procesando los datos...",
            zeroRecords: "No se encontro nada.",
            emptyTable: "No existen datos en la tabla.",
            paginate: {
                first: "Primero",
                previous: "Anterior",
                next: "Siguiente",
                last: "&Uacute;ltimo"
            },
            aria: {
                sortAscending: ": Habilitado para ordenar la columna en orden ascendente",
                sortDescending: ": Habilitado para ordenar la columna en orden descendente"
            },
            buttons: {
                copyTitle: 'Registros copiados a portapapeles',
                copyKeys: 'Copiado con teclas clave.',
                copySuccess: {
                    _: ' %d Registros copiados',
                    1: ' 1 Registro copiado'
                }
            }
        },
        "autoWidth": true,
        "colReorder": true,
        "displayLength": 12,
        "bStateSave": true,
        "bLengthChange": false,
        "deferRender": true,
        "scrollY": false,
        "scrollX": true,
        "scrollCollapse": false,
        "aaSorting": [
            [0, 'desc']
        ]
                //    ,
                //    "columnDefs": [
                //        {"width": "20%", "targets": [0]}
                //    ]
    };

</script>
