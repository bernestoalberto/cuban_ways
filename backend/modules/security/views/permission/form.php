
<?php $this->title = 'Permission';?>
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
        <a href="#">Permission</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Permission-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Permission</span>
                        <span class="caption-helper">datos del permission</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_permission" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'security/permission/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="permission_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Permission</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_permission</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_permission?>" placeholder="Escriba el Name_permission..." required  type="text" id="name_permission" name="Permission[name_permission]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Url</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->url?>" placeholder="Escriba el Url..." required  type="text" id="url" name="Permission[url]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskpermission" name="taskpermission">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_permission" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>security/permission" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Permission-->
