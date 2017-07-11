
<?php $this->title = 'Owner';?>
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

        <a href="<?php echo Yii::$app->homeUrl.'housing' ?>">
            <span class="m-r-10" data-translate="Housing">Housing</span>
        /
        <a href="#">
			<span class="m-r-10" data-translate="title_manage_Owner">Owner</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>

    <!--  Inicio Portlet -->
    <div class="portlet portlet box blue-hoki">
        <div class="portlet-title ">
            <div class="caption">
                <span data-translate="title_manage_Owner"></span>Listado de Owner
            </div>
        </div>
    </div>
    <!--  Fin Portlet -->
 <div class="DTTT_container btn-group" style="margin-right: 50px">
        <a id="pdf_owner" title="View print view" id="ToolTables_table-editable_1"
           class="btn btn-default DTTT_button DTTT_button_print">
            <span><i class="icon-printer"></i></span></a>
        <a id="ToolTables_table-editable_2" class="btn btn-default DTTT_button DTTT_button_xls">
            <span><i class="fa fa-file-excel-o"></i></span></a>
    </div>
<div class="actions">
        <div class="btn-group">
        <button id="btn_modal_owner"  type="button" class="btn btn-dark btn-rounded">
            <i class='fa fa-plus'></i>
            <span class="hidden-480" data-translate="btn_new"></span>
        </button>
        <button id="deletebutton_owner"  type="button" class="btn btn-dark btn-rounded btn-danger">
            <i class='fa fa-trash-o'></i>
            <span class="hidden-480" data-translate="btn_delete">Eliminar</span>
        </button>
    </div>
</div>
        <div class="portlet-body">
            <div style="" class="table-container">
                <div class="content box box-primary">
                    <div id="gridselection_owner"  style="width:100%"></div>
                </div>
            </div>
        </div>
<!--Inicio de Ventana Owner-->
    <div id="modal_owner" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <span data-translate="title_add_owner"></span>
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

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="owner_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Owner</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Name_owner</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Name_owner..." required  type="text" id="name_owner" name="Owner[name_owner]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Lastname_owner</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Lastname_owner..." required  type="text" id="lastname_owner" name="Owner[lastname_owner]" onkeypress="return permite(event,'num_car')">
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

                            				<input class="form-control" value="" placeholder="Escriba el Datebirth..."   type="text" id="datebirth" name="Owner[datebirth]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Email</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Email..." required  type="text" id="email" name="Owner[email]" onkeypress="return permite(event,'num_car')">
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

                            				<input class="form-control" value="" placeholder="Escriba el Phone..." required  type="text" id="phone" name="Owner[phone]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Createdat</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Createdat..." required  type="text" id="createdat" name="Owner[createdat]" onkeypress="return permite(event,'date')">
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

                            				<input class="form-control" value="" placeholder="Escriba el Identification..." required  type="text" id="identification" name="Owner[identification]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Name_owner_incharge</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Name_owner_incharge..."   type="text" id="name_owner_incharge" name="Owner[name_owner_incharge]" onkeypress="return permite(event,'num_car')">
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

                            				<input class="form-control" value="" placeholder="Escriba el Lastname_owner_incharge..."   type="text" id="lastname_owner_incharge" name="Owner[lastname_owner_incharge]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="owner" class="control-label col-md-6">Bank_account</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Bank_account..."   type="text" id="bank_account" name="Owner[bank_account]" onkeypress="return permite(event,'num_car')">
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

                            				<input class="form-control" value="" placeholder="Escriba el Photo..."   type="text" id="photo" name="Owner[photo]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskowner" name="taskowner">
        					  <input value="-1"  type="hidden" id="id_owner" name="Owner[id_owner]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_owner" class="btn btn-dark btn-rounded"> <span class="hidden-480" data-translate="btn_ok"></span>Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default btn-rounded"><span class="hidden-480" data-translate="btn_cancel"></span>Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Owner-->
<!--Inicio de Ventana Owner-->
    <div id="list_owner_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_owner" >Listado de Owner</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				 <div class="actions">
                  <div  class="btn-group">
                    <button  id="export_owner_pdf" type="button" class="btn  btn-rounded btn-danger">
                        <i class='fa fa-file-pdf-o'></i>
                        <span class="hidden-480" data-translate="btn_pdf">Exportar PDF</span>
                    </button>
                    <button id="excel_owner" type="button" id="excel_owner" class="btn btn-success btn-rounded">
                        <i class='fa fa-file-excel-o'></i>
                        <span class="hidden-480" data-translate="btn_excel">Exportar Excel</span>
                    </button>
                  </div>
                </div>
                <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_owner_pdf">
						<div class="pdf-header">
							<h2 data-translate="tittle_pdf_Owner">Listado de Owner</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			name_owner
			</th>
		<th>
			lastname_owner
			</th>
		<th>
			datebirth
			</th>
		<th>
			email
			</th>
		<th>
			phone
			</th>
		<th>
			createdat
			</th>
		<th>
			identification
			</th>
		<th>
			name_owner_incharge
			</th>
		<th>
			lastname_owner_incharge
			</th>
		<th>
			bank_account
			</th>
		<th>
			photo
			</th>

		        					</thead>
									<tbody id="tbody_table_owner">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Owner-->
<!--                Ventana para importar -->

 <div id="import_owner" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_owner" >Importar de Owner</span>
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
			                            <button type="button" id="importar_owner_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="owner/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="owner_export" name="owner_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
