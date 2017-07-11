
<?php $this->title = 'Availability_state';?>
<div class="x_title">
    <h4>
        <i class="fa fa-home" style="font-size:30px">
        </i>
        <a href="<?php echo Yii::$app->homeUrl?>">
            Inicio
        </a>
        /

        <a href="<?php echo Yii::$app->homeUrl.'nomenclature' ?>">
            Nomenclature</a>
        /
        <a href="#">Availability_state</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Availability_state-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Availability_state</span>
                        <span class="caption-helper">datos del availability_state</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_availability_state" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'nomenclature/availability_state/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="availability_state_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Availability_state</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Availability_state</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->availability_state?>" placeholder="Escriba el Availability_state..." required  type="text" id="availability_state" name="Availability_state[availability_state]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskavailability_state" name="taskavailability_state">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_availability_state" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>nomenclature/availability_state" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Availability_state-->
