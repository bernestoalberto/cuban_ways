
<?php $this->title = 'Owner';?>
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
			<span class="m-r-10" data-translate="title_manage_Owner">Owner</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>
<!--Inicio de Formulario Owner-->
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Insertar Owner</span>
                        <span class="caption-helper">datos del owner</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_owner" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="<?php echo Yii::$app->homeUrl.'housing/owner/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="owner_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Owner</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Name_owner</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_owner?>" placeholder="Escriba el Name_owner..." required  type="text" id="name_owner" name="Owner[name_owner]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Lastname_owner</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->lastname_owner?>" placeholder="Escriba el Lastname_owner..." required  type="text" id="lastname_owner" name="Owner[lastname_owner]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Datebirth</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->datebirth?>" placeholder="Escriba el Datebirth..."   type="text" id="datebirth" name="Owner[datebirth]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Email</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->email?>" placeholder="Escriba el Email..." required  type="text" id="email" name="Owner[email]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Phone</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->phone?>" placeholder="Escriba el Phone..." required  type="text" id="phone" name="Owner[phone]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Createdat</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->createdat?>" placeholder="Escriba el Createdat..." required  type="text" id="createdat" name="Owner[createdat]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Identification</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->identification?>" placeholder="Escriba el Identification..." required  type="text" id="identification" name="Owner[identification]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Name_owner_incharge</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->name_owner_incharge?>" placeholder="Escriba el Name_owner_incharge..."   type="text" id="name_owner_incharge" name="Owner[name_owner_incharge]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Lastname_owner_incharge</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->lastname_owner_incharge?>" placeholder="Escriba el Lastname_owner_incharge..."   type="text" id="lastname_owner_incharge" name="Owner[lastname_owner_incharge]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Bank_account</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->bank_account?>" placeholder="Escriba el Bank_account..."   type="text" id="bank_account" name="Owner[bank_account]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Photo</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="<?= $model->photo?>" placeholder="Escriba el Photo..."   type="text" id="photo" name="Owner[photo]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                             <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">

                             <input  value="<?=$action?>" type="hidden" id="taskowner" name="taskowner">
        				</div>
        				<div class="modal-footer">
            				<button type="submit" id="btnaction_owner" class="btn green">Aceptar</button>
            				<a  href= "<?php echo Yii::$app->homeUrl ?>housing/owner" class="btn default">Cancelar</a>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Owner-->
