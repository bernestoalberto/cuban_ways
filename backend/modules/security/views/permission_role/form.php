
<?php $this->title = 'Permission_role';?>
<div class="x_title">
    <h4>
        <i class="fa fa-home" style="font-size:30px">
        </i>
        <a href="<?php echo Yii::$app->homeUrl?>">
            <span class="m-r-10" data-translate="home">Inicio</span>
        </a>
        /

        <a href="<?php echo Yii::$app->homeUrl.'security' ?>">
            <span class="m-r-10" data-translate="Security">Security</span>
        /
        <a href="#">
			<span class="m-r-10" data-translate="title_manage_Permission_role">Permission_role</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Permission_role-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Permission_role</span>
                        <span class="caption-helper">datos del permission_role</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_permission_role" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'security/permission_role/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="permission_role_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Permission_role</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="permission_role" class="control-label col-md-6">Id_role</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_role..." required   id="id_role_combo" name="Permission_role[id_role]" onkeypress="return permite(event,'car')" >

												<?php if($action=='update'){
												echo '<option selected="" value="'.$model->id_role.'">'.$model->role->name_role.'</option>';
												}?>
											</select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="permission_role" class="control-label col-md-6">Id_permission</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_permission..." required   id="id_permission_combo" name="Permission_role[id_permission]" onkeypress="return permite(event,'car')" >

												<?php if($action=='update'){
												echo '<option selected="" value="'.$model->id_permission.'">'.$model->permission->name_permission.'</option>';
												}?>
											</select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskpermission_role" name="taskpermission_role">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_permission_role" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>security/permission_role" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Permission_role-->
