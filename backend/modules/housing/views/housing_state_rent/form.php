
<?php $this->title = 'Housing_state_rent';?>
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
        <a href="#">Housing_state_rent</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Housing_state_rent-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Housing_state_rent</span>
                        <span class="caption-helper">datos del housing_state_rent</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_state_rent" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'housing/housing_state_rent/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="housing_state_rent_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_state_rent</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_housing_state_rent</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_housing_state_rent?>" placeholder="Escriba el Name_housing_state_rent..." required  type="text" id="name_housing_state_rent" name="Housing_state_rent[name_housing_state_rent]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskhousing_state_rent" name="taskhousing_state_rent">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_housing_state_rent" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>housing/housing_state_rent" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Housing_state_rent-->
