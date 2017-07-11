
<?php $this->title = 'Housing_availability';?>
<div class="x_title">
    <h4>
        <i class="fa fa-home" style="font-size:30px">
        </i>
        <a href="<?php echo Yii::$app->homeUrl?>">
            Inicio
        </a>
        /

        <a href="<?php echo Yii::$app->homeUrl.'housing' ?>">
            Housing</a>
        /
        <a href="#">Housing_availability</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Housing_availability-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Housing_availability</span>
                        <span class="caption-helper">datos del housing_availability</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_availability" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'housing/housing_availability/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="housing_availability_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_availability</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_start</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->date_start?>" placeholder="Escriba el Date_start..." required  type="text" id="date_start" name="Housing_availability[date_start]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_end</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->date_end?>" placeholder="Escriba el Date_end..."   type="text" id="date_end" name="Housing_availability[date_end]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_availability_state</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_availability_state..."    id="id_availability_state_combo" name="Housing_availability[id_availability_state]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..."    id="id_housing_combo" name="Housing_availability[id_housing]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_usuario</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_usuario..." required   id="id_usuario_combo" name="Housing_availability[id_usuario]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskhousing_availability" name="taskhousing_availability">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_housing_availability" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>housing/housing_availability" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Housing_availability-->
