
<?php $this->title = 'Housing_address';?>
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
			<span class="m-r-10" data-translate="title_manage_Housing_address">Housing_address</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Housing_address-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Housing_address</span>
                        <span class="caption-helper">datos del housing_address</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_address" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'housing/housing_address/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="housing_address_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_address</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Id_town</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_town..." required   id="id_town_combo" name="Housing_address[id_town]" onkeypress="return permite(event,'car')" >

												<?php if($action=='update'){
												echo '<option selected="" value="'.$model->id_town.'">'.$model->town->name_town.'</option>';
												}?>
											</select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Length</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->length?>" placeholder="Escriba el Length..."   type="text" id="length" name="Housing_address[length]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Latitude</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->latitude?>" placeholder="Escriba el Latitude..."   type="text" id="latitude" name="Housing_address[latitude]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Number_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->number_housing?>" placeholder="Escriba el Number_housing..." required  type="text" id="number_housing" name="Housing_address[number_housing]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Main_street</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->main_street?>" placeholder="Escriba el Main_street..." required  type="text" id="main_street" name="Housing_address[main_street]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Between_first</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->between_first?>" placeholder="Escriba el Between_first..."   type="text" id="between_first" name="Housing_address[between_first]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Between_second</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->between_second?>" placeholder="Escriba el Between_second..."   type="text" id="between_second" name="Housing_address[between_second]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskhousing_address" name="taskhousing_address">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_housing_address" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>housing/housing_address" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Housing_address-->
