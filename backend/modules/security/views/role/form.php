
<?php $this->title = 'Role';?>
<div class="x_title">
    <h4>
        <i class="fa fa-home" style="font-size:30px">
        </i>
        <a href="<?php echo Yii::$app->homeUrl?>">
            Inicio
        </a>
        /

        <a href="<?php echo Yii::$app->homeUrl.'security' ?>">
            Security</a>
        /
        <a href="#">Role</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Role-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Role</span>
                        <span class="caption-helper">datos del role</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_role" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'security/role/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="role_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Role</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_role</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_role?>" placeholder="Escriba el Name_role..." required  type="text" id="name_role" name="Role[name_role]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskrole" name="taskrole">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_role" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>security/role" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Role-->
