
<?php $this->title = 'Permission_role';?>
<?php 
		if(count($this->css)>0)
			foreach($this->css as $css)
			{
				echo '<link href="'.$css.'" rel="stylesheet">';
			}
		?>
<div class="x_title">
    <h4>
        <i class="fa fa-home" style="font-size:30px">
        </i>
        <a href="<?php echo Yii::$app->homeUrl?>">
            <span class="m-r-10" data-translate="home">Inicio</span>
        </a>
        /

        <a href="<?php echo Yii::$app->homeUrl.'security' ?>">
            <span class="m-r-10" data-translate="Security">Security</span>
        /
        <a href="#">
			<span class="m-r-10" data-translate="title_manage_Permission_role">Permission_role</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>

    <!--  Inicio Portlet -->
    <div class="portlet portlet box blue-hoki">
        <div class="portlet-title ">
            <div class="caption">
                <span data-translate="title_manage_Permission_role"></span>Listado de Permission_role
            </div>
        </div>
    </div>
    <!--  Fin Portlet -->
 <div class="DTTT_container btn-group" style="margin-right: 50px">
        <a id="pdf_permission_role" title="View print view" id="ToolTables_table-editable_1"
           class="btn btn-default DTTT_button DTTT_button_print">
            <span><i class="icon-printer"></i></span></a>
        <a id="ToolTables_table-editable_2" class="btn btn-default DTTT_button DTTT_button_xls">
            <span><i class="fa fa-file-excel-o"></i></span></a>
    </div>
<div class="actions">
        <div class="btn-group">
        <button id="btn_modal_permission_role"  type="button" class="btn btn-dark btn-rounded">
            <i class='fa fa-plus'></i>
            <span class="hidden-480" data-translate="btn_new"></span>
        </button>
        <button id="deletebutton_permission_role"  type="button" class="btn btn-dark btn-rounded btn-danger">
            <i class='fa fa-trash-o'></i>
            <span class="hidden-480" data-translate="btn_delete">Eliminar</span>
        </button>
    </div>
</div>
        <div class="portlet-body">
            <div style="" class="table-container">
                <div class="content box box-primary">
                    <div id="gridselection_permission_role"  style="width:100%"></div>
                </div>
            </div>
        </div>
<!--Inicio de Ventana Permission_role-->
    <div id="modal_permission_role" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <span data-translate="title_add_permission_role"></span>
					  </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_permission_role" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="permission_role_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Permission_role</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="permission_role" class="control-label col-md-6">Id_role</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_role..." required   id="id_role_combo" name="Permission_role[id_role]" onkeypress="return permite(event,'car')" >

											</select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="permission_role" class="control-label col-md-6">Id_permission</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_permission..." required   id="id_permission_combo" name="Permission_role[id_permission]" onkeypress="return permite(event,'car')" >

											</select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskpermission_role" name="taskpermission_role">
        					  <input value="-1"  type="hidden" id="id_permission_role" name="Permission_role[id_permission_role]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_permission_role" class="btn btn-dark btn-rounded"> <span class="hidden-480" data-translate="btn_ok"></span>Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default btn-rounded"><span class="hidden-480" data-translate="btn_cancel"></span>Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Permission_role-->
<!--Inicio de Ventana Permission_role-->
    <div id="list_permission_role_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_permission_role" >Listado de Permission_role</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				 <div class="actions">
                  <div  class="btn-group">
                    <button  id="export_permission_role_pdf" type="button" class="btn  btn-rounded btn-danger">
                        <i class='fa fa-file-pdf-o'></i>
                        <span class="hidden-480" data-translate="btn_pdf">Exportar PDF</span>
                    </button>
                    <button id="excel_permission_role" type="button" id="excel_permission_role" class="btn btn-success btn-rounded">
                        <i class='fa fa-file-excel-o'></i>
                        <span class="hidden-480" data-translate="btn_excel">Exportar Excel</span>
                    </button>
                  </div>
                </div>
                <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_permission_role_pdf">
						<div class="pdf-header">
							<h2 data-translate="tittle_pdf_Permission_role">Listado de Permission_role</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			name_role
			</th>
		<th>
			name_permission
			</th>

		        					</thead>
									<tbody id="tbody_table_permission_role">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Permission_role-->
<!--                Ventana para importar -->

 <div id="import_permission_role" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_permission_role" >Importar de Permission_role</span>
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
			                            <button type="button" id="importar_permission_role_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="permission_role/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="permission_role_export" name="permission_role_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
