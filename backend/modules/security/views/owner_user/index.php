
<?php $this->title = 'Owner_user';?>
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
			<span class="m-r-10" data-translate="title_manage_Owner_user">Owner_user</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>

    <!--  Inicio Portlet -->
    <div class="portlet portlet box blue-hoki">
        <div class="portlet-title ">
            <div class="caption">
                <span data-translate="title_manage_Owner_user"></span>Listado de Owner_user
            </div>
        </div>
    </div>
    <!--  Fin Portlet -->
 <div class="DTTT_container btn-group" style="margin-right: 50px">
        <a id="pdf_owner_user" title="View print view" id="ToolTables_table-editable_1"
           class="btn btn-default DTTT_button DTTT_button_print">
            <span><i class="icon-printer"></i></span></a>
        <a id="ToolTables_table-editable_2" class="btn btn-default DTTT_button DTTT_button_xls">
            <span><i class="fa fa-file-excel-o"></i></span></a>
    </div>
<div class="actions">
        <div class="btn-group">
        <button id="btn_modal_owner_user"  type="button" class="btn btn-dark btn-rounded">
            <i class='fa fa-plus'></i>
            <span class="hidden-480" data-translate="btn_new"></span>
        </button>
        <button id="deletebutton_owner_user"  type="button" class="btn btn-dark btn-rounded btn-danger">
            <i class='fa fa-trash-o'></i>
            <span class="hidden-480" data-translate="btn_delete">Eliminar</span>
        </button>
    </div>
</div>
        <div class="portlet-body">
            <div style="" class="table-container">
                <div class="content box box-primary">
                    <div id="gridselection_owner_user"  style="width:100%"></div>
                </div>
            </div>
        </div>
<!--Inicio de Ventana Owner_user-->
    <div id="modal_owner_user" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <span data-translate="title_add_owner_user"></span>
					  </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_owner_user" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="owner_user_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Owner_user</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner_user" class="control-label col-md-6">Id_owner</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_owner..." required   id="id_owner_combo" name="Owner_user[id_owner]" onkeypress="return permite(event,'car')" >

											</select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner_user" class="control-label col-md-6">Id_usuario</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_usuario..." required   id="id_usuario_combo" name="Owner_user[id_usuario]" onkeypress="return permite(event,'car')" >

											</select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskowner_user" name="taskowner_user">
        					  <input value="-1"  type="hidden" id="id_owner_user" name="Owner_user[id_owner_user]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_owner_user" class="btn btn-dark btn-rounded"> <span class="hidden-480" data-translate="btn_ok"></span>Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default btn-rounded"><span class="hidden-480" data-translate="btn_cancel"></span>Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Owner_user-->
<!--Inicio de Ventana Owner_user-->
    <div id="list_owner_user_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_owner_user" >Listado de Owner_user</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				 <div class="actions">
                  <div  class="btn-group">
                    <button  id="export_owner_user_pdf" type="button" class="btn  btn-rounded btn-danger">
                        <i class='fa fa-file-pdf-o'></i>
                        <span class="hidden-480" data-translate="btn_pdf">Exportar PDF</span>
                    </button>
                    <button id="excel_owner_user" type="button" id="excel_owner_user" class="btn btn-success btn-rounded">
                        <i class='fa fa-file-excel-o'></i>
                        <span class="hidden-480" data-translate="btn_excel">Exportar Excel</span>
                    </button>
                  </div>
                </div>
                <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_owner_user_pdf">
						<div class="pdf-header">
							<h2 data-translate="tittle_pdf_Owner_user">Listado de Owner_user</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			name_owner
			</th>
		<th>
			username
			</th>

		        					</thead>
									<tbody id="tbody_table_owner_user">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Owner_user-->
<!--                Ventana para importar -->

 <div id="import_owner_user" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_owner_user" >Importar de Owner_user</span>
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
			                            <button type="button" id="importar_owner_user_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="owner_user/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="owner_user_export" name="owner_user_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
