
<?php $this->title = 'Coin_type';?>
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
        <a href="#">Coin_type</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Coin_type-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Coin_type</span>
                        <span class="caption-helper">datos del coin_type</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_coin_type" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'nomenclature/coin_type/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="coin_type_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Coin_type</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_coin</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_coin?>" placeholder="Escriba el Name_coin..." required  type="text" id="name_coin" name="Coin_type[name_coin]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Abbrv_coin</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->abbrv_coin?>" placeholder="Escriba el Abbrv_coin..." required  type="text" id="abbrv_coin" name="Coin_type[abbrv_coin]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskcoin_type" name="taskcoin_type">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_coin_type" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>nomenclature/coin_type" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Coin_type-->
