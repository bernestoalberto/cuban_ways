
<?php $this->title = 'Usuario';?>
<?php
if(count($this->css)>0)
	foreach($this->css as $css)
	{
		echo '<link href="'.$css.'" rel="stylesheet">';
	}
?>

<div class="header">
	<h3>
		<strong><span data-translate="title_manage_user"></span></strong>
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
			<li class="active">
				<span data-translate="title_manage_user"> </span>
			</li>
		</ol>
	</div>
</div>

<div class="DTTT_container btn-group" style="margin-right: 50px">
	<a id="pdf_usuario" title="View print view" id="ToolTables_table-editable_1"
	   class="btn btn-default DTTT_button DTTT_button_print">
		<span><i class="fa fa-file-pdf-o"></i></span></a>
</div>
<div class="actions">
	<div class="btn-group">
		<a href="<?= Yii::$app->getHomeUrl()?>security/usuario/create"  type="button" class="btn btn-dark btn-rounded">
			<i class='fa fa-plus'></i>
			<span class="hidden-480" data-translate="btn_new"></span>
		</a>
		<button id="deletebutton_usuario"  type="button" class="btn btn-dark btn-rounded btn-danger">
			<i class='fa fa-trash-o'></i>
			<span class="hidden-480" data-translate="btn_delete"></span>
		</button>
	</div>
</div>


<div class="portlet-body">
	<div style="" class="table-container">
		<div class="content box box-primary">
			<div id="gridselection_usuario"  style="width:100%"></div>
		</div>
	</div>
</div>

<!--Inicio de Ventana Usuario-->
<div id="list_usuario_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	</div>
	<div class="modal-body">
		<div class="portlet light bg-inverse">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-equalizer font-red-sunglo"></i>
					<span class="caption-subject font-red-sunglo bold uppercase" id="title_usuario" >Listado de Usuario</span>
				</div>
				<div class="tools">
					<a title="" data-original-title="" href="" class="collapse">
					</a>
				</div>
			</div>
			<div class="actions">
				<div  class="btn-group">
					<button  id="export_usuario_pdf" type="button" class="btn  btn-rounded btn-danger">
						<i class='fa fa-file-pdf-o'></i>
						<span class="hidden-480" data-translate="btn_pdf">Exportar PDF</span>
					</button>
					<button id="excel_usuario" type="button" id="excel_usuario" class="btn btn-success btn-rounded">
						<i class='fa fa-file-excel-o'></i>
						<span class="hidden-480" data-translate="btn_excel">Exportar Excel</span>
					</button>
				</div>
			</div>
			<div class="portlet-body form">



				<div class="pdf-page size-a4" id="table_usuario_pdf">
					<div class="pdf-header">
						<h2 data-translate="tittle_pdf_Usuario">Listado de Usuario</h2>
					</div>
					<div class="pdf-body">
						<div style="" class="k-grid k-widget" data-role="grid" id="grid">
							<table class="table table-striped">
								<thead>
								<th>
									username
								</th>
								<th>
									pass
								</th>
								<th>
									word_pass
								</th>
								<th>
									email
								</th>
								<th>
									foto
								</th>
								<th>
									auth_key
								</th>
								<th>
									active
								</th>
								<th>
									created_at
								</th>
								<th>
									updated_at
								</th>
								<th>
									type_user
								</th>
								<th>
									state
								</th>
								<th>
									name_role
								</th>
								<th>
									name_owner
								</th>

								</thead>
								<tbody id="tbody_table_usuario">
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--                Fin de Ventana Usuario-->
<!--                Ventana para importar -->

<div id="import_usuario" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	</div>
	<div class="modal-body">
		<div class="portlet light bg-inverse">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-equalizer font-red-sunglo"></i>
					<span class="caption-subject font-red-sunglo bold uppercase" id="title_usuario" >Importar de Usuario</span>
				</div>
				<div class="tools">
					<a title="" data-original-title="" href="" class="collapse">
					</a>
				</div>
			</div>

			<div class="portlet-body form">

				<form method="post" class="horizontal-form" enctype="multipart/form-data"  id="importar_form">
					<div class="col-md-12 pull-right">
						<div class="col-md-4">
							<input name="importar_excel" id="importar_excel" data-edit="insertImage" type="file">
						</div>
						<div class="col-md-4">
							<button type="button" id="importar_usuario_excel" class="btn green pull-right">Importar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<form action="usuario/excel" method="post" id="form_excel_export" style="display: none">
	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	<input type="hidden" id="usuario_export" name="usuario_export" value="">
</form>
<script id="template" type="text/x-kendo-template">
	<img width="120px" height="120px" class="user-image img-circle" src="<?php echo Yii::$app->getHomeUrl()?>image/users/#=target.data('image')#" alt="#=target.data('nombre')#" />
	<p>#=target.data('nombre')#</p>
</script>
<?php
if(!$index)
	if(count($this->js)>0)
		foreach($this->js as $js)
		{
			echo '<script src="'.$js.'" ><script/>';
		}
?>
