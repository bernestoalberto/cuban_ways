
<?php $this->title = 'Housing_season_price';?>
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
        <a href="#">Housing_season_price</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Housing_season_price-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Housing_season_price</span>
                        <span class="caption-helper">datos del housing_season_price</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_season_price" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'housing/housing_season_price/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="housing_season_price_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_season_price</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Price_housing_season</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->price_housing_season?>" placeholder="Escriba el Price_housing_season..." required  type="text" id="price_housing_season" name="Housing_season_price[price_housing_season]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Comition</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->comition?>" placeholder="Escriba el Comition..." required  type="text" id="comition" name="Housing_season_price[comition]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Cretedat</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->cretedat?>" placeholder="Escriba el Cretedat..." required  type="text" id="cretedat" name="Housing_season_price[cretedat]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..." required   id="id_housing_combo" name="Housing_season_price[id_housing]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_season</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_season..." required   id="id_season_combo" name="Housing_season_price[id_season]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_coin_type</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_coin_type..." required   id="id_coin_type_combo" name="Housing_season_price[id_coin_type]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Comition_for_publicitiy</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->comition_for_publicitiy?>" placeholder="Escriba el Comition_for_publicitiy..."   type="text" id="comition_for_publicitiy" name="Housing_season_price[comition_for_publicitiy]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_start_publicity</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->date_start_publicity?>" placeholder="Escriba el Date_start_publicity..." required  type="text" id="date_start_publicity" name="Housing_season_price[date_start_publicity]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_end_publicity</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->date_end_publicity?>" placeholder="Escriba el Date_end_publicity..."   type="text" id="date_end_publicity" name="Housing_season_price[date_end_publicity]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Booking_deposit</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->booking_deposit?>" placeholder="Escriba el Booking_deposit..."   type="text" id="booking_deposit" name="Housing_season_price[booking_deposit]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_start</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->date_start?>" placeholder="Escriba el Date_start..."   type="text" id="date_start" name="Housing_season_price[date_start]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_end</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->date_end?>" placeholder="Escriba el Date_end..."   type="text" id="date_end" name="Housing_season_price[date_end]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskhousing_season_price" name="taskhousing_season_price">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_housing_season_price" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>housing/housing_season_price" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Housing_season_price-->
