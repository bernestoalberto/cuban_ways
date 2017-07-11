
<?php $this->title = 'Country';?>
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
        <a href="#">Country</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Country-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Country</span>
                        <span class="caption-helper">datos del country</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_country" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'localization/country/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="country_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Country</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_country</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_country?>" placeholder="Escriba el Name_country..." required  type="text" id="name_country" name="Country[name_country]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Ie_code_country</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->ie_code_country?>" placeholder="Escriba el Ie_code_country..." required  type="text" id="ie_code_country" name="Country[ie_code_country]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Code_country</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->code_country?>" placeholder="Escriba el Code_country..." required  type="text" id="code_country" name="Country[code_country]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Prefix</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->prefix?>" placeholder="Escriba el Prefix..." required  type="number" id="prefix" name="Country[prefix]" onkeypress="return permite(event,'num')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_continent</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_continent..." required   id="id_continent_combo" name="Country[id_continent]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Subcontinent</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->subcontinent?>" placeholder="Escriba el Subcontinent..."   type="text" id="subcontinent" name="Country[subcontinent]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Iso_money</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->iso_money?>" placeholder="Escriba el Iso_money..."   type="text" id="iso_money" name="Country[iso_money]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Money_name</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->money_name?>" placeholder="Escriba el Money_name..."   type="text" id="money_name" name="Country[money_name]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskcountry" name="taskcountry">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_country" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>localization/country" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Country-->
