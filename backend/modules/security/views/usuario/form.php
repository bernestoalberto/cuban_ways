<?php
$foto='user.jpg';
if($action=='update')
{
	$foto=$model->id_usuario;
	$foto=\backend\modules\security\models\Usuario::findOne($foto);
	$foto=$foto->foto;
}
?>
<?php $this->title = 'Usuario';?>

<div class="header">
	<h3>
		<strong><span data-translate="title_add_user"></span></strong>
	</h3>

	<div class="breadcrumb-wrapper">
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo Yii::$app->homeUrl ?>">
					<i class="fa fa-home" style="font-size:30px"></i>
				</a>
			</li>
			<li>
				<a data-translate="menu_security"> </a>
			</li>
			<li>
				<a data-translate="item_menu_user"> </a>
			</li>
			<li>
				<a data-translate="title_manage_user"> </a>
			</li>
			<li class="active">
				<span data-translate="title_add_user"> </span>
			</li>
		</ol>
	</div>
</div>



<!--Inicio de Formulario Usuario-->
<div  class="panel">
	<div class="modal-body">
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="<?php echo Yii::$app->homeUrl.'security/usuario/'.$action?>" method="post" class="horizontal-form" enctype="multipart/form-data"   id="usuario_form">
				<div class="form-body">
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-md-6">
							<div class="row" style="margin-bottom: 15px;">
								<div class="form-group">
									<label>*
									<span  data-translate="name_user"></span></label>
									<div class="input-icon right col-lg-12" >
										<input class="form-control"
											   value="<?= $model->username?>"
											   placeholder="Escriba el Username..." required  type="text" id="username" name="Usuario[username]" onkeypress="return permite(event,'num_car')">
									</div>
								</div>
							</div>
							<div class="row" style="margin-bottom: 15px;">
								<div class="form-group">
									<label>*
										<span data-translate="password" ></span></label>
									<div class="input-icon right col-lg-12" >
										<input class="form-control" value="<?= $model->pass?>"
											   placeholder="Escriba el Pass..."   type="text" id="pass" required
											   name="Usuario[pass]" onkeypress="return permite(event,'num_car')">
									</div>
								</div>
							</div>
							<div class="row" style="margin-bottom: 15px;">
								<div class="form-group">
									<label>*
										<span  data-translate="confirm_pass"></span>
										</label>
									<div class="input-icon right col-lg-12" >
										<input class="form-control"
											   value="<?= $model->pass?>" placeholder="Escriba el Pass..." required
											   type="text" id="pass" name="Usuario[pass_confirm]"
											   onkeypress="return permite(event,'num_car')">
									</div>
								</div>
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group pull-right">
								<label data-translate="photo_user"></label>
								<div class="input-icon right col-lg-12" >
									<img alt="" height="150px" id="image_user"  width="150px" style="margin-right: 20px;margin-bottom: 20px" class="img-circle pull-left" src="<?php echo Yii::$app->homeUrl.'/image/users/'.$foto?>"/>
								</div>
								<div class="input-icon right col-lg-12" >
									<span class="btn btn-default btn-file">
										<span class="fileinput-new" data-translate="select_image"></span>
                             			<input class="" value="" placeholder="Escoja la foto"   type="file" id="foto" name="Usuario[foto]">
                            		</span>

								</div>
							</div>
						</div>
					</div>
					<!--/row-->
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-md-6">
						</div>
						<div class="col-md-6">
						</div>
					</div>
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>*
									<span  data-translate="email"></span></label>
								<div class="input-icon right col-lg-12" >
									<input class="form-control"
										   value="<?= $model->email?>"
										   placeholder="Escriba el Email..."
										   required  type="text" id="email" name="Usuario[email]">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label data-translate="word_pass">
								</label>
								<div class="input-icon right col-lg-12" >
									<input class="form-control" value="<?= $model->word_pass?>" placeholder="Escriba el Word_pass..." required  type="text" id="word_pass" name="Usuario[word_pass]" onkeypress="return permite(event,'num_car')">
								</div>
							</div>
						</div>
					</div>
					<!--/row-->

					<!--/row-->
					<!--/row-->
					<!--/row-->
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-md-6 pull-right">
							<div class="form-group">
								<label>
									<span data-translate="state_user"></span>
								</label>
								<div class="input-icon right col-lg-12" >
									<input class="" value="<?= $model->state?>"
											<?php if($model->state==1) echo 'checked'?> placeholder="Escriba el State..."   type="checkbox" id="state" name="Usuario[state]">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>*
									<span data-translate="name_role"></span></label>
								<div class="input-icon right col-lg-12" >
									<select  multiple class="form-control" style="width: 300px;" placeholder="Escriba el Id_role..." required   id="id_role_combo" name="Usuario[id_role]" onkeypress="return permite(event,'car')" >
										<?php if($action=='update'){
											echo '<option selected="" value="'.$model->id_role.'">'.$model->role->name_role.'</option>';
										}?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<!--/row-->
					<!--/row-->
					<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
					<input type="hidden" name="Usuario[active]" id="checkstate" value="<?php echo $model->state?>">
					<?php if($action=='update'){?>
						<input type="hidden" name="Usuario[id_usuario]" id="id_usuario" value="<?php echo $model->id_usuario ?>">
					<?php } ?>

					<input  value="<?=$action?>" type="hidden" id="taskusuario" name="taskusuario">
				</div>
				<div class="modal-footer">
					<div class="btn-group">
					<button type="submit" id="btnaction_usuario"class="btn btn-dark btn-rounded"><span class="hidden-480" data-translate="btn_ok"></span></button>
					<a  href= "<?php echo Yii::$app->homeUrl ?>security/usuario"  class="btn default btn-rounded"><span class="hidden-480" data-translate="btn_cancel"></span></a>
				</div></div>

			</form>
			<!-- END FORM-->
		</div>
	</div>
</div>
<!--                Fin de Ventana Usuario-->
