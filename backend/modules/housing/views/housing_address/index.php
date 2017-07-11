
<?php $this->title = 'Housing_address';?>
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
			<span class="m-r-10" data-translate="title_manage_Housing_address">Housing_address</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>

    <!--  Inicio Portlet -->
    <div class="portlet portlet box blue-hoki">
        <div class="portlet-title ">
            <div class="caption">
                <span data-translate="title_manage_Housing_address"></span>Listado de Housing_address
            </div>
        </div>
    </div>
    <!--  Fin Portlet -->
 <div class="DTTT_container btn-group" style="margin-right: 50px">
        <a id="pdf_housing_address" title="View print view" id="ToolTables_table-editable_1"
           class="btn btn-default DTTT_button DTTT_button_print">
            <span><i class="icon-printer"></i></span></a>
        <a id="ToolTables_table-editable_2" class="btn btn-default DTTT_button DTTT_button_xls">
            <span><i class="fa fa-file-excel-o"></i></span></a>
    </div>
<div class="actions">
        <div class="btn-group">
        <button id="btn_modal_housing_address"  type="button" class="btn btn-dark btn-rounded">
            <i class='fa fa-plus'></i>
            <span class="hidden-480" data-translate="btn_new"></span>
        </button>
        <button id="deletebutton_housing_address"  type="button" class="btn btn-dark btn-rounded btn-danger">
            <i class='fa fa-trash-o'></i>
            <span class="hidden-480" data-translate="btn_delete"></span>
        </button>
    </div>
</div>
        <div class="portlet-body">
            <div style="" class="table-container">
                <div class="content box box-primary">
                    <div id="gridselection_housing_address"  style="width:100%"></div>
                </div>
            </div>
        </div>
<!--Inicio de Ventana Housing_address-->
    <div id="modal_housing_address" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <span data-translate="title_add_housing_address"></span>
					  </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_address" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="housing_address_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_address</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Id_town</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_town..." required   id="id_town_combo" name="Housing_address[id_town]" onkeypress="return permite(event,'car')" >

											</select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Length</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Length..."   type="text" id="length" name="Housing_address[length]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Latitude</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Latitude..."   type="text" id="latitude" name="Housing_address[latitude]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Number_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Number_housing..." required  type="text" id="number_housing" name="Housing_address[number_housing]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Main_street</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Main_street..." required  type="text" id="main_street" name="Housing_address[main_street]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Between_first</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Between_first..."   type="text" id="between_first" name="Housing_address[between_first]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_address" class="control-label col-md-6">Between_second</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Between_second..."   type="text" id="between_second" name="Housing_address[between_second]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskhousing_address" name="taskhousing_address">
        					  <input value="-1"  type="hidden" id="id_housing_address" name="Housing_address[id_housing_address]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_housing_address" class="btn btn-dark btn-rounded"> <span class="hidden-480" data-translate="btn_ok"></span>Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default btn-rounded"><span class="hidden-480" data-translate="btn_cancel"></span>Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Housing_address-->
<!--Inicio de Ventana Housing_address-->
    <div id="list_housing_address_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_address" >Listado de Housing_address</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				 <div class="actions">
                  <div  class="btn-group">
                    <button  id="export_housing_address_pdf" type="button" class="btn  btn-rounded btn-danger">
                        <i class='fa fa-file-pdf-o'></i>
                        <span class="hidden-480" data-translate="btn_pdf">Exportar PDF</span>
                    </button>
                    <button id="excel_housing_address" type="button" id="excel_housing_address" class="btn btn-success btn-rounded">
                        <i class='fa fa-file-excel-o'></i>
                        <span class="hidden-480" data-translate="btn_excel">Exportar Excel</span>
                    </button>
                  </div>
                </div>
                <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_housing_address_pdf">
						<div class="pdf-header">
							<h2 data-translate="tittle_pdf_Housing_address">Listado de Housing_address</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			name_town
			</th>
		<th>
			length
			</th>
		<th>
			latitude
			</th>
		<th>
			number_housing
			</th>
		<th>
			main_street
			</th>
		<th>
			between_first
			</th>
		<th>
			between_second
			</th>

		        					</thead>
									<tbody id="tbody_table_housing_address">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Housing_address-->
<!--                Ventana para importar -->

 <div id="import_housing_address" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_address" >Importar de Housing_address</span>
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
			                            <button type="button" id="importar_housing_address_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="housing_address/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="housing_address_export" name="housing_address_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
