
<?php $this->title = 'Housing_image';?>
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
        <a href="#">Housing_image</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Housing_image-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Housing_image</span>
                        <span class="caption-helper">datos del housing_image</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_image" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'housing/housing_image/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="housing_image_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_image</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Image</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->image?>" placeholder="Escriba el Image..." required  type="text" id="image" name="Housing_image[image]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..." required   id="id_housing_combo" name="Housing_image[id_housing]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskhousing_image" name="taskhousing_image">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_housing_image" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>housing/housing_image" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Housing_image-->
