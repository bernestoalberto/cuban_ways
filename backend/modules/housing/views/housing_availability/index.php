
<?php $this->title = 'Housing_availability';?>
<?php 
		if(count($this->css)>0)
			foreach($this->css as $css)
			{
				echo '<link href="'.$css.'" rel="stylesheet">';
			}
		?>
<!-- Start zone navigation menu-->
<div class="x_title" style="box-sizing: border-box;">
	<i class="fa fa-home" style="font-size:30px"></i>

    <span>
        <a href="<?php echo Yii::$app->homeUrl ?>">
			<span class="m-r-10" data-translate="home"> </span>
		</a>
        |
        <span class="m-l-10 m-r-10" data-translate="menu_house"> </span>
        |
        <span class="m-l-10" data-translate="item_menu_availability_state"> </span>
    </span>

	<div class="clearfix"></div>
</div>
<!-- End zone navigation menu-->

    <!--  Inicio Portlet -->
<!--  Start header manage -->

<!--  End header manage -->

<!-- Start zone btn_generic_actions-->
<div>
	<div class="DTTT_container btn-group" style="margin-right: 50px">
		<a id="pdf_season" class="btn btn-default DTTT_button DTTT_button_pdf" >
			<span><i class="fa fa-file-pdf-o"></i></span></a>
		<a id="excel_season" class="btn btn-default DTTT_button DTTT_button_xls">
			<span><i class="fa fa-file-excel-o"></i></span></a>

	</div>
	<!-- End zone btn_generic_actions-->

            <div class="actions">
                <div id="btn_modal_housing_availability" class="btn default green-meadow-stripe">
                    <i class="fa fa-plus"></i>
						<span class="hidden-480">
						Nuevo </span>
                </div>
                <div class="btn-group">
                    <a class="btn default green-meadow-stripe dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="fa fa-share"></i>
							<span class="hidden-480">
							Exportar </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a  id="pdf_housing_availability">
                            <i class='fa fa-file-pdf-o font-red'></i>
                            <i class='fa fa-file-excel-o font-green'></i>
                            Exportar a PDF o Excel</a>
				             </li>
                    </ul>
                </div>
                <div class="btn-group">
                    <a class="btn default green-meadow-stripe dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="fa fa-mail-reply"></i>
							<span class="hidden-480">
							Importar </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
						<li>
                            <a  id="excel_housing_availability_importar">
                                <i class="fa fa-file-excel-o font-green"></i>
                                Importar a Excel </a>
						</li>
                    </ul>
                </div>
            </div>

        <div class="portlet-body">
            <div style="" class="table-container">
                <div class="content box box-primary">
                    <div id="gridselection_housing_availability"  style="width:100%"></div>
                </div>
            </div>
        </div>
        <!--  Final Portlet -->

    <!--  Fin Portlet -->
<!--Inicio de Ventana Housing_availability-->
    <div id="modal_housing_availability" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_availability" >Insertar Housing_availability</span>
                        <span class="caption-helper">datos del housing_availability</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_availability" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="housing_availability_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_availability</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_start</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Date_start..." required  type="text" id="date_start" name="Housing_availability[date_start]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_end</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Date_end..."   type="text" id="date_end" name="Housing_availability[date_end]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_availability_state</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_availability_state..."    id="id_availability_state_combo" name="Housing_availability[id_availability_state]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..."    id="id_housing_combo" name="Housing_availability[id_housing]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_usuario</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_usuario..." required   id="id_usuario_combo" name="Housing_availability[id_usuario]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskhousing_availability" name="taskhousing_availability">
        					  <input value="-1"  type="hidden" id="id_housing_availability" name="Housing_availability[id_housing_availability]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_housing_availability" class="btn green">Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default">Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Housing_availability-->
<!--Inicio de Ventana Housing_availability-->
    <div id="list_housing_availability_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_availability" >Listado de Housing_availability</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				<button type="button" id="export_housing_availability_pdf" class="btn green pull-right">Exportar PDF</button>
 				<button type="button" id="excel_housing_availability" class="btn green pull-right">Exportar Excel</button>
                 <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_housing_availability_pdf">
						<div class="pdf-header">
							<h2>Listado de Housing_availability</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			description_housing_availability
			</th>
		<th>
			date_start
			</th>
		<th>
			date_end
			</th>
		<th>
			availability_state
			</th>
		<th>
			name_housing
			</th>
		<th>
			username
			</th>

		        					</thead>
									<tbody id="tbody_table_housing_availability">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Housing_availability-->
<!--                Ventana para importar -->

 <div id="import_housing_availability" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_availability" >Importar de Housing_availability</span>
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
			                            <button type="button" id="importar_housing_availability_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="housing_availability/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="housing_availability_export" name="housing_availability_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
