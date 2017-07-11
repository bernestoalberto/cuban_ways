
<?php $this->title = 'Season';?>
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
        <a href="#">Season</a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Season-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Season</span>
                        <span class="caption-helper">datos del season</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_season" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'nomenclature/season/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="season_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Season</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_season</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_season?>" placeholder="Escriba el Name_season..." required  type="text" id="name_season" name="Season[name_season]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_start</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->date_start?>" placeholder="Escriba el Date_start..." required  type="text" id="date_start" name="Season[date_start]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_end</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->date_end?>" placeholder="Escriba el Date_end..." required  type="text" id="date_end" name="Season[date_end]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskseason" name="taskseason">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_season" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>nomenclature/season" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Season-->
