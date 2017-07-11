
<?php $this->title = 'Housing_image';?>
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

        <a href="<?php echo Yii::$app->homeUrl.'housing' ?>">
            Housing</a>
        /
        <a href="#">Housing_image</a>
    </h4>
    <div class="clearfix"></div>
</div>
			<section class="content-header">
            		<h1>
            		<i class="fa fa-circle-o"></i>Housing_image</h1>
    		</section>

    <!--  Inicio Portlet -->
    <div class="portlet portlet box blue-hoki">
        <div class="portlet-title ">
            <div class="caption">
                <i class="icon-grid"></i>Listado de Housing_image
            </div>
            <div class="actions">
                <div id="btn_modal_housing_image" class="btn default green-meadow-stripe">
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
                            <a  id="pdf_housing_image">
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
                            <a  id="excel_housing_image_importar">
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
                    <div id="gridselection_housing_image"  style="width:100%"></div>
                </div>
            </div>
        </div>
        <!--  Final Portlet -->

    </div>
    <!--  Fin Portlet -->
<!--Inicio de Ventana Housing_image-->
    <div id="modal_housing_image" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_image" >Insertar Housing_image</span>
                        <span class="caption-helper">datos del housing_image</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_image" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="housing_image_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_image</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Image</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Image..." required  type="text" id="image" name="Housing_image[image]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..." required   id="id_housing_combo" name="Housing_image[id_housing]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskhousing_image" name="taskhousing_image">
        					  <input value="-1"  type="hidden" id="id_housing_image" name="Housing_image[id_housing_image]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_housing_image" class="btn green">Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default">Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Housing_image-->
<!--Inicio de Ventana Housing_image-->
    <div id="list_housing_image_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_image" >Listado de Housing_image</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				<button type="button" id="export_housing_image_pdf" class="btn green pull-right">Exportar PDF</button>
 				<button type="button" id="excel_housing_image" class="btn green pull-right">Exportar Excel</button>
                 <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_housing_image_pdf">
						<div class="pdf-header">
							<h2>Listado de Housing_image</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			image
			</th>
		<th>
			name_housing
			</th>

		        					</thead>
									<tbody id="tbody_table_housing_image">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Housing_image-->
<!--                Ventana para importar -->

 <div id="import_housing_image" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_image" >Importar de Housing_image</span>
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
			                            <button type="button" id="importar_housing_image_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="housing_image/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="housing_image_export" name="housing_image_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
