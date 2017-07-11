
<?php $this->title = 'Housing_characteristics_housing';?>
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
			<span class="m-r-10" data-translate="title_manage_Housing_characteristics_housing">Housing_characteristics_housing</span>
		 </a>
    </h4>
    <div class="clearfix"></div>
</div>

    <!--  Inicio Portlet -->
    <div class="portlet portlet box blue-hoki">
        <div class="portlet-title ">
            <div class="caption">
                <span data-translate="title_manage_Housing_characteristics_housing"></span>Listado de Housing_characteristics_housing
            </div>
        </div>
    </div>
    <!--  Fin Portlet -->
 <div class="DTTT_container btn-group" style="margin-right: 50px">
        <a id="pdf_housing_characteristics_housing" title="View print view" id="ToolTables_table-editable_1"
           class="btn btn-default DTTT_button DTTT_button_print">
            <span><i class="icon-printer"></i></span></a>
        <a id="ToolTables_table-editable_2" class="btn btn-default DTTT_button DTTT_button_xls">
            <span><i class="fa fa-file-excel-o"></i></span></a>
    </div>
<div class="actions">
        <div class="btn-group">
        <button id="btn_modal_housing_characteristics_housing"  type="button" class="btn btn-dark btn-rounded">
            <i class='fa fa-plus'></i>
            <span class="hidden-480" data-translate="btn_new"></span>
        </button>
        <button id="deletebutton_housing_characteristics_housing"  type="button" class="btn btn-dark btn-rounded btn-danger">
            <i class='fa fa-trash-o'></i>
            <span class="hidden-480" data-translate="btn_delete">Eliminar</span>
        </button>
    </div>
</div>
        <div class="portlet-body">
            <div style="" class="table-container">
                <div class="content box box-primary">
                    <div id="gridselection_housing_characteristics_housing"  style="width:100%"></div>
                </div>
            </div>
        </div>
<!--Inicio de Ventana Housing_characteristics_housing-->
    <div id="modal_housing_characteristics_housing" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <span data-translate="title_add_housing_characteristics_housing"></span>
					  </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_characteristics_housing" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="housing_characteristics_housing_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_characteristics_housing</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_characteristics_housing" class="control-label col-md-6">Id_housing_characteristics</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing_characteristics..." required   id="id_housing_characteristics_combo" name="Housing_characteristics_housing[id_housing_characteristics]" onkeypress="return permite(event,'car')" >

											</select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_characteristics_housing" class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..." required   id="id_housing_combo" name="Housing_characteristics_housing[id_housing]" onkeypress="return permite(event,'car')" >

											</select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_characteristics_housing" class="control-label col-md-6">Count_housing_characteristics</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Count_housing_characteristics..." required  type="number" id="count_housing_characteristics" name="Housing_characteristics_housing[count_housing_characteristics]" onkeypress="return permite(event,'num')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label data-translate="housing_characteristics_housing" class="control-label col-md-6">Cancelled</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Cancelled..." required  type="text" id="cancelled" name="Housing_characteristics_housing[cancelled]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskhousing_characteristics_housing" name="taskhousing_characteristics_housing">
        					  <input value="-1"  type="hidden" id="id_housing_characteristics_housing" name="Housing_characteristics_housing[id_housing_characteristics_housing]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_housing_characteristics_housing" class="btn btn-dark btn-rounded"> <span class="hidden-480" data-translate="btn_ok"></span>Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default btn-rounded"><span class="hidden-480" data-translate="btn_cancel"></span>Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Housing_characteristics_housing-->
<!--Inicio de Ventana Housing_characteristics_housing-->
    <div id="list_housing_characteristics_housing_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_characteristics_housing" >Listado de Housing_characteristics_housing</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				 <div class="actions">
                  <div  class="btn-group">
                    <button  id="export_housing_characteristics_housing_pdf" type="button" class="btn  btn-rounded btn-danger">
                        <i class='fa fa-file-pdf-o'></i>
                        <span class="hidden-480" data-translate="btn_pdf">Exportar PDF</span>
                    </button>
                    <button id="excel_housing_characteristics_housing" type="button" id="excel_housing_characteristics_housing" class="btn btn-success btn-rounded">
                        <i class='fa fa-file-excel-o'></i>
                        <span class="hidden-480" data-translate="btn_excel">Exportar Excel</span>
                    </button>
                  </div>
                </div>
                <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_housing_characteristics_housing_pdf">
						<div class="pdf-header">
							<h2 data-translate="tittle_pdf_Housing_characteristics_housing">Listado de Housing_characteristics_housing</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			name_housing_characteristics
			</th>
		<th>
			name_housing
			</th>
		<th>
			count_housing_characteristics
			</th>
		<th>
			cancelled
			</th>

		        					</thead>
									<tbody id="tbody_table_housing_characteristics_housing">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Housing_characteristics_housing-->
<!--                Ventana para importar -->

 <div id="import_housing_characteristics_housing" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_characteristics_housing" >Importar de Housing_characteristics_housing</span>
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
			                            <button type="button" id="importar_housing_characteristics_housing_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="housing_characteristics_housing/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="housing_characteristics_housing_export" name="housing_characteristics_housing_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
