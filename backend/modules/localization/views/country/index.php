
<?php $this->title = 'Country';?>
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
            Inicio
        </a>
        /

        <a href="<?php echo Yii::$app->homeUrl.'localization' ?>">
            Localization</a>
        /
        <a href="#">Country</a>
    </h4>
    <div class="clearfix"></div>
</div>
			<section class="content-header">
            		<h1>
            		<i class="fa fa-circle-o"></i>Country</h1>
    		</section>

    <!--  Inicio Portlet -->
    <div class="portlet portlet box blue-hoki">
        <div class="portlet-title ">
            <div class="caption">
                <i class="icon-grid"></i>Listado de Country
            </div>
            <div class="actions">
                <div id="btn_modal_country" class="btn default green-meadow-stripe">
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
                            <a  id="pdf_country">
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
                            <a  id="excel_country_importar">
                                <i class="fa fa-file-excel-o font-green"></i>
                                Importar a Excel </a>
						</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            <div style="" class="table-container">
                <div class="content box box-primary">
                    <div id="gridselection_country"  style="width:100%"></div>
                </div>
            </div>
        </div>
        <!--  Final Portlet -->

    </div>
    <!--  Fin Portlet -->
<!--Inicio de Ventana Country-->
    <div id="modal_country" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_country" >Insertar Country</span>
                        <span class="caption-helper">datos del country</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_country" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="country_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Country</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Name_country</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Name_country..." required  type="text" id="name_country" name="Country[name_country]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Ie_code_country</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Ie_code_country..." required  type="text" id="ie_code_country" name="Country[ie_code_country]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Code_country</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Code_country..." required  type="text" id="code_country" name="Country[code_country]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Prefix</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Prefix..." required  type="number" id="prefix" name="Country[prefix]" onkeypress="return permite(event,'num')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_continent</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_continent..." required   id="id_continent_combo" name="Country[id_continent]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Subcontinent</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Subcontinent..."   type="text" id="subcontinent" name="Country[subcontinent]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Iso_money</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Iso_money..."   type="text" id="iso_money" name="Country[iso_money]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Money_name</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Money_name..."   type="text" id="money_name" name="Country[money_name]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskcountry" name="taskcountry">
        					  <input value="-1"  type="hidden" id="id_country" name="Country[id_country]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_country" class="btn green">Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default">Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Country-->
<!--Inicio de Ventana Country-->
    <div id="list_country_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_country" >Listado de Country</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				<button type="button" id="export_country_pdf" class="btn green pull-right">Exportar PDF</button>
 				<button type="button" id="excel_country" class="btn green pull-right">Exportar Excel</button>
                 <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_country_pdf">
						<div class="pdf-header">
							<h2>Listado de Country</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			name_country
			</th>
		<th>
			ie_code_country
			</th>
		<th>
			code_country
			</th>
		<th>
			prefix
			</th>
		<th>
			name_continent
			</th>
		<th>
			subcontinent
			</th>
		<th>
			iso_money
			</th>
		<th>
			money_name
			</th>

		        					</thead>
									<tbody id="tbody_table_country">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Country-->
<!--                Ventana para importar -->

 <div id="import_country" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_country" >Importar de Country</span>
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
			                            <button type="button" id="importar_country_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="country/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="country_export" name="country_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
