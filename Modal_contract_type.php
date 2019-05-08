<?php
<div class="modal fade" id="type" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog">
        <form action="http://localhost/perfexcrm/admin/contracts/type" id="contract-type-form" method="post" accept-charset="utf-8" novalidate="novalidate">
<input type="hidden" name="csrf_token_name" value="5f5ae6d0c727ce4fa062a431963393e9">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">
                    <span class="edit-title">Editar tipo de contrato</span>
                    <span class="add-title">Nuevo tipo de contrato</span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="additional"></div>
                        <div class="form-group" app-field-wrapper="name"><label for="name" class="control-label"> <small class="req text-danger">* </small>Nombre</label><input type="text" id="name" name="name" class="form-control" value=""></div>                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info">Guardar</button>
            </div>
        </div><!-- /.modal-content -->
        </form>    </div><!-- /.modal-dialog -->
</div>