
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">TRABAJOS</div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default" id="btnConfirmarEliminar"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
                </div>
                <div class="col-md-12" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>





<!--Confirmacion-->


<div id="mdlConfirmar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">ELIMINAR REGISTRO</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>

</div>





<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog super-fullscreen" role="document">

        <div>




            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">NUEVO TRABAJO</h4>
                </div>
                <form id="frmNuevo">
                    <div class="modal-body">
                        <fieldset>
                            <div class="col-6 col-md-12">      
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                                    <li role="presentation" class="active"><a href="#Datos" aria-controls="Datos" role="tab" data-toggle="tab">Datos Generales</a></li>
                                    <li role="presentation"><a href="#Datos2" aria-controls="Datos2" role="tab" data-toggle="tab">Datos del trabajo</a></li>
                                    <li role="presentation"><a href="#Datos3" aria-controls="Datos3" role="tab" data-toggle="tab">Otros Datos</a></li>

                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="Datos">

                                    <div class="col-6 col-md-4">
                                        <label for="">MOVIMIENTO*</label>
                                        <select id="Movimiento" name="Movimiento" class="form-control" required>
                                            <option value=""></option> 
                                            <option value="LICITACIÓN">LICITACIÓN</option> 
                                            <option value="COTIZACIÓN">COTIZACIÓN</option> 
                                            <option value="PRESUPUESTO">PRESUPUESTO</option> 
                                            <option value="ESTIMACIÓN">ESTIMACIÓN</option> 
                                        </select>
                                    </div>



                                    <div class=" col-6 col-md-4">
                                        <label for="">MOV ID</label>
                                        <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" required>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <label for="">FECHA*</label>
                                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 

                                    <div class="col-6 col-md-4">
                                        <label for="">CLIENTE*</label>
                                        <select id="Cliente" name="Cliente" class="form-control" required>
                                            <option value=""></option> 
                                        </select>
                                    </div>


                                    <div class=" col-6 col-md-4">
                                        <label for="">MOV ID</label>
                                        <input type="text" id="ID" name="ID" class="form-control"  placeholder="" required>
                                    </div>


                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Datos2">...</div>
                                <div role="tabpanel" class="tab-pane fade" id="Datos3">...</div>
                            </div>





                            <div class="col-6 col-md-6">
                                <h6>Los campos con * son obligatorios</h6>    

                            </div>
                        </fieldset>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                    <button type="button" class="btn btn-primary" id="btnGuardar">GUARDAR</button>
                </div>
            </div><!-- /.modal-content -->




        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->





    <!--SCRIPT-->
    <script>
        var master_url = base_url + 'index.php/CtrlTrabajos/';
        var btnNuevo = $("#btnNuevo");
        var mdlNuevo = $("#mdlNuevo");



        var btnRefrescar = $("#btnRefrescar");

        $(document).ready(function () {









            btnNuevo.click(function () {

                mdlNuevo.modal('show');
                mdlNuevo.find("input").val("");
                mdlNuevo.find("select").val(null).trigger("change");
            });

        });


        $('#Encabezado a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });


    </script>
    <style>

        .super-fullscreen {
            width: 90% !important; 
            overflow: auto;
        }
        .super-fullscreen {
            width: 90% !important; 
        } 
    </style>