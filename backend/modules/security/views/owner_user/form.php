
<?php $this->title = 'Owner_user';?>
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
			<span class="m-r-10" data-translate="title_manage_Owner_user">Owner_user</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Owner_user-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Owner_user</span>
                        <span class="caption-helper">datos del owner_user</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_owner_user" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'security/owner_user/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="owner_user_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Owner_user</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner_user" class="control-label col-md-6">Id_owner</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_owner..." required   id="id_owner_combo" name="Owner_user[id_owner]" onkeypress="return permite(event,'car')" >

												<?php if($action=='update'){
												echo '<option selected="" value="'.$model->id_owner.'">'.$model->owner->name_owner.'</option>';
												}?>
											</select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner_user" class="control-label col-md-6">Id_usuario</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_usuario..." required   id="id_usuario_combo" name="Owner_user[id_usuario]" onkeypress="return permite(event,'car')" >

												<?php if($action=='update'){
												echo '<option selected="" value="'.$model->id_usuario.'">'.$model->usuario->username.'</option>';
												}?>
											</select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskowner_user" name="taskowner_user">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_owner_user" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>security/owner_user" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Owner_user-->
