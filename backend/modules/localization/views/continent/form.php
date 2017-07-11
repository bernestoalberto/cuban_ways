
<?php $this->title = 'Continent';?>
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
        <a href="#">Continent</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Continent-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Continent</span>
                        <span class="caption-helper">datos del continent</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_continent" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'localization/continent/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="continent_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Continent</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_continent</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_continent?>" placeholder="Escriba el Name_continent..." required  type="text" id="name_continent" name="Continent[name_continent]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskcontinent" name="taskcontinent">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_continent" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>localization/continent" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Continent-->
