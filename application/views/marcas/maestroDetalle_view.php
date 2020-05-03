<div class="box">
    <div class="box-header">
        <h3 class="box-title">Listado de Marcas</h3>
        <div align="right">
            <button type="button" class="btn btn-success fa fa-plus-square" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> Nueva Marca</button>  
        </div>
    </div>

    <!--El modal para insertar nueva marca--> 
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insertar nueva marca</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" action="<?php echo site_url('marcas/insertar'); ?>" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="mmarca" class="col-form-label">Marca:</label>
                            <input type="text" required class="form-control" id="mmarca" name = "marca">
                        </div>
                        <div class="form-group">
                            <label for="mfechafundacion" class="col-form-label">Fecha Fundación:</label>
                            <input type="date" required  class="form-control" id="mfechafundacion" name = "fecha">
                        </div>
                        <div class="form-group">
                            <label for="mpropietario" class="col-form-label">Propietario:</label>
                            <input type="text" required class="form-control" id="mpropietario" name = "propietario">
                        </div>
                        <div class="form-group">
                            <label for="mimagen" class="col-form-label">Insertar imagen:</label>
                            <input type="file" required class="form-control" name="imagen">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div></form>
            </div>
        </div>
    </div>

    <!--El modal para editar nueva marca--> 
    <div class="modal fade" id="editandomarca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editando Marca</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" action="<?php echo site_url('marcas/editarmarca'); ?>" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="text" hidden="" id="midmarca" name = "eidmarca" >
                        </div>
                        <div class="form-group">
                            <label for="mmarca" class="col-form-label">Marca:</label>
                            <input type="text" required class="form-control" id="memarca" name = "emarca">
                        </div>
                        <div class="form-group">
                            <label for="mfechafundacion" class="col-form-label">Fecha Fundación:</label>
                            <input type="date" required class="form-control" id="mefechafundacion" name = "efecha">
                        </div>
                        <div class="form-group">
                            <label for="mpropietario" class="col-form-label">Propietario:</label>
                            <input type="text" required class="form-control" id="mepropietario" name = "epropietario">
                        </div>
                        <div class="form-group">
                            <label for="mimagen" required class="col-form-label">Insertar imagen:</label>
                            <input type="file" class="form-control" id="mimagen" name="eimagen">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div></form>
            </div>
        </div>
    </div>


    <!--Tabla maestra-->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Mostrar <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entradas</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Buscar: <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">Codigo</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 194.333px;">Marca</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 171px;">Fecha Fundacion</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 133.667px;">Propietario</th>
                        </thead>
                        <tbody>
                            <?php foreach ($consulta as $fila): ?>
                                <tr role="row" class="odd">
                                    <td><?php echo $fila->id; ?></td>
                                    <td><?php echo $fila->nombreMarca; ?></td>
                                    <td><?php echo $fila->fechaFundacion; ?></td>
                                    <td><?php echo $fila->propietario; ?></td>
                                    <?php $datos=$fila->id."||".$fila->nombreMarca."||".$fila->fechaFundacion."||".$fila->propietario."||".$fila->enlaceFoto; ?>
                                    <td><img src="<?php echo base_url("content/img/" . $fila->enlaceFoto) ?>" class="img-thumbnail" width="100" height="100"></td>
                                    <td><a class="btn btn-info" href="<?= site_url('marcas/detalle/' . $fila->id) ?>">Detalle</a></td>
                                    <td><a class="btn btn-warning" data-toggle="modal" data-target="#editandomarca" data-whatever="@mdo" onclick="agregarform('<?php echo $datos ?>')">Editar</a></td>
                                    <td><a class="btn btn-danger" href="<?= site_url('marcas/eliminarmarca/' . $fila->id) ?>">Eliminar</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>                

                        </tfoot>
                    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Mostrando 1 de 10 de 57 entradas</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
    </div>
    <!-- /.box-body -->
</div>




<div class="box">
    <div class="box-header">
        <h3 class="box-title">Listado de Estilos</h3>
        <div align="right"> 
            <button type="button" class="btn btn-success fa fa-plus-square" data-toggle="modal" data-target="#crearestilo" data-whatever="@mdo"> Nuevo Estilo</button>  
        </div>
    </div>

    <!--El modal para insertar nuevo estilo--> 
    <div class="modal fade" id="crearestilo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insertar nuevo estilo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('marcas/insertardetalle'); ?>" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="mseleccionarmarca" class="col-form-label">Marca:</label>
                            <select id="cbmarcas" class="form-control" name="cbmarcas">
                                <?php foreach ($consulta as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->nombreMarca; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="mestilo" class="col-form-label">Estilo:</label>
                            <input type="text" required class="form-control" id="mestilo" name = "estilo">
                        </div>
                        <div class="form-group">
                            <label for="mfechacreacion" class="col-form-label">Fecha Creacion:</label>
                            <input type="date" required class="form-control" id="mfechacreacion" name = "fechacreacion">
                        </div>
                        <div class="form-group">
                            <label for="mfechalanzamiento" class="col-form-label">Fecha de Lanzamiento:</label>
                            <input type="date" required class="form-control" id="mfechalanzamiento" name = "fechalanzamiento">
                        </div>
                        <div class="form-group">
                            <label for="mdisenador" class="col-form-label">Diseñador:</label>
                            <input type="text" required class="form-control" id="mdisenador" name = "disenador">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Crear Estilo</button>
                    </div></form>
            </div>
        </div>
    </div>



    
    
    <!--El modal para editar estilo--> 
    <div class="modal fade" id="editandoestilo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editando estilo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('marcas/editandoDetalle'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" hidden="" id="eidestilo" name = "eidestilo" >
                        </div>

                        <div class="form-group">
                            <label for="mseleccionarmarca" class="col-form-label">Marca:</label>
                            <select id="ecbmarcas" class="form-control" name="ecbmarcas">
                                <?php foreach ($consulta as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->nombreMarca; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="mestilo" class="col-form-label">Estilo:</label>
                            <input type="text" required class="form-control" id="eestilo" name = "eestilo">
                        </div>
                        <div class="form-group">
                            <label for="mfechacreacion" class="col-form-label">Fecha Creacion:</label>
                            <input type="date" required class="form-control" id="efechacreacion" name = "efechacreacion">
                        </div>
                        <div class="form-group">
                            <label for="mfechalanzamiento" class="col-form-label">Fecha de Lanzamiento:</label>
                            <input type="date" required class="form-control" id="efechalanzamiento" name = "efechalanzamiento">
                        </div>
                        <div class="form-group">
                            <label for="mdisenador" class="col-form-label">Diseñador:</label>
                            <input type="text" required class="form-control" id="edisenador" name = "edisenador">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Guardar Estilo</button>
                    </div></form>
            </div>
        </div>
    </div>


    <!-- tabla detalle -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Mostrar <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entradas</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Buscar: <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">Codigo</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 194.333px;">Marca</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 194.333px;">Estilo</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 133.667px;">Fecha creación</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 133.667px;">Fecha Lanzamiento</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 133.667px;">Diseñador</th>
                        </thead>
                        <tbody>
                            <?php foreach ($det as $fil): ?>
                                <tr role="row" class="odd">
                                    <td><?php echo $fil->idEstilo; ?></td>
                                    <td><?php echo $fil->nombreMarca; ?></td>
                                    <td><?php echo $fil->nombreEstilo; ?></td>
                                    <td><?php echo $fil->fechaCreacion; ?></td>
                                    <td><?php echo $fil->fechaLanzamiento; ?></td>
                                    <td><?php echo $fil->disenador; ?></td>
                                    <?php $datose=$fil->idEstilo."||".$fil->nombreMarca."||".$fil->nombreEstilo."||".$fil->fechaCreacion."||".$fil->fechaLanzamiento."||".$fil->disenador; ?>
                                    <td><a class="btn btn-warning" data-toggle="modal" data-target="#editandoestilo" data-whatever="@mdo" onclick="eform('<?php echo $datose ?>')">Editar</a></td>
                                    <td><a class="btn btn-danger" href="<?= site_url('marcas/eliminarestilo/' . $fil->idEstilo) ?>">Eliminar</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>                

                        </tfoot>
                    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Mostrando 1 de 10 de 57 entradas</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
    </div>
    <!-- /.box-body -->
</div>          

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>









