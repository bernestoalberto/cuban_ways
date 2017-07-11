
<?php $this->title = 'Reference_point';?>
<div class="x_title">
    <h4>
        <i class="fa fa-home" style="font-size:30px">
        </i>
        <a href="<?php echo Yii::$app->homeUrl?>">
            Inicio
        </a>
        /

        <a href="<?php echo Yii::$app->homeUrl.'localization' ?>">
            Localization</a>
        /
        <a href="#">Reference_point</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Reference_point-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Reference_point</span>
                        <span class="caption-helper">datos del reference_point</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_reference_point" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'localization/reference_point/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="reference_point_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Reference_point</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_reference_point</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_reference_point?>" placeholder="Escriba el Name_reference_point..." required  type="text" id="name_reference_point" name="Reference_point[name_reference_point]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Latitude</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->latitude?>" placeholder="Escriba el Latitude..." required  type="text" id="latitude" name="Reference_point[latitude]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Length</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->length?>" placeholder="Escriba el Length..." required  type="text" id="length" name="Reference_point[length]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Image</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->image?>" placeholder="Escriba el Image..."   type="text" id="image" name="Reference_point[image]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskreference_point" name="taskreference_point">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_reference_point" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>localization/reference_point" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Reference_point-->
