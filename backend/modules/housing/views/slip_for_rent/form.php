
<?php $this->title = 'Slip_for_rent';?>
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
        <a href="#">Slip_for_rent</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Slip_for_rent-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Slip_for_rent</span>
                        <span class="caption-helper">datos del slip_for_rent</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_slip_for_rent" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'housing/slip_for_rent/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="slip_for_rent_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Slip_for_rent</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Code_slip_for_rent</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->code_slip_for_rent?>" placeholder="Escriba el Code_slip_for_rent..." required  type="text" id="code_slip_for_rent" name="Slip_for_rent[code_slip_for_rent]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Createdat</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->createdat?>" placeholder="Escriba el Createdat..." required  type="text" id="createdat" name="Slip_for_rent[createdat]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..." required   id="id_housing_combo" name="Slip_for_rent[id_housing]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_usuario</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_usuario..." required   id="id_usuario_combo" name="Slip_for_rent[id_usuario]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskslip_for_rent" name="taskslip_for_rent">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_slip_for_rent" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>housing/slip_for_rent" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Slip_for_rent-->
