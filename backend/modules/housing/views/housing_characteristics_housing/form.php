
<?php $this->title = 'Housing_characteristics_housing';?>
<div class="x_title">
    <h4>
        <i class="fa fa-home" style="font-size:30px">
        </i>
        <a href="<?php echo Yii::$app->homeUrl?>">
            <span class="m-r-10" data-translate="home">Inicio</span>
        </a>
        /

        <a href="<?php echo Yii::$app->homeUrl.'housing' ?>">
            <span class="m-r-10" data-translate="Housing">Housing</span>
        /
        <a href="#">
			<span class="m-r-10" data-translate="title_manage_Housing_characteristics_housing">Housing_characteristics_housing</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Housing_characteristics_housing-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Housing_characteristics_housing</span>
                        <span class="caption-helper">datos del housing_characteristics_housing</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_characteristics_housing" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'housing/housing_characteristics_housing/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="housing_characteristics_housing_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_characteristics_housing</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_characteristics_housing" class="control-label col-md-6">Id_housing_characteristics</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing_characteristics..." required   id="id_housing_characteristics_combo" name="Housing_characteristics_housing[id_housing_characteristics]" onkeypress="return permite(event,'car')" >

												<?php if($action=='update'){
												echo '<option selected="" value="'.$model->id_housing_characteristics.'">'.$model->housing_characteristics->name_housing_characteristics.'</option>';
												}?>
											</select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_characteristics_housing" class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..." required   id="id_housing_combo" name="Housing_characteristics_housing[id_housing]" onkeypress="return permite(event,'car')" >

												<?php if($action=='update'){
												echo '<option selected="" value="'.$model->id_housing.'">'.$model->housing->name_housing.'</option>';
												}?>
											</select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_characteristics_housing" class="control-label col-md-6">Count_housing_characteristics</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->count_housing_characteristics?>" placeholder="Escriba el Count_housing_characteristics..." required  type="number" id="count_housing_characteristics" name="Housing_characteristics_housing[count_housing_characteristics]" onkeypress="return permite(event,'num')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_characteristics_housing" class="control-label col-md-6">Cancelled</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->cancelled?>" placeholder="Escriba el Cancelled..." required  type="text" id="cancelled" name="Housing_characteristics_housing[cancelled]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskhousing_characteristics_housing" name="taskhousing_characteristics_housing">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_housing_characteristics_housing" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>housing/housing_characteristics_housing" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Housing_characteristics_housing-->
