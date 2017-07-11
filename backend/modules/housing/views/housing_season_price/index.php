
<?php $this->title = 'Housing_season_price';?>
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
        <a href="#">Housing_season_price</a>
    </h4>
    <div class="clearfix"></div>
</div>
			<section class="content-header">
            		<h1>
            		<i class="fa fa-circle-o"></i>Housing_season_price</h1>
    		</section>

    <!--  Inicio Portlet -->
    <div class="portlet portlet box blue-hoki">
        <div class="portlet-title ">
            <div class="caption">
                <i class="icon-grid"></i>Listado de Housing_season_price
            </div>
            <div class="actions">
                <div id="btn_modal_housing_season_price" class="btn default green-meadow-stripe">
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
                            <a  id="pdf_housing_season_price">
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
                            <a  id="excel_housing_season_price_importar">
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
                    <div id="gridselection_housing_season_price"  style="width:100%"></div>
                </div>
            </div>
        </div>
        <!--  Final Portlet -->

    </div>
    <!--  Fin Portlet -->
<!--Inicio de Ventana Housing_season_price-->
    <div id="modal_housing_season_price" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_season_price" >Insertar Housing_season_price</span>
                        <span class="caption-helper">datos del housing_season_price</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing_season_price" href="" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="housing_season_price_form">
                        <div class="form-body">
                            <h3 class="form-section">Datos del Housing_season_price</h3>
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Price_housing_season</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Price_housing_season..." required  type="text" id="price_housing_season" name="Housing_season_price[price_housing_season]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Comition</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Comition..." required  type="text" id="comition" name="Housing_season_price[comition]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Cretedat</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Cretedat..." required  type="text" id="cretedat" name="Housing_season_price[cretedat]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_housing</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing..." required   id="id_housing_combo" name="Housing_season_price[id_housing]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_season</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_season..." required   id="id_season_combo" name="Housing_season_price[id_season]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Id_coin_type</label>
                        				<div class="input-icon right col-lg-12" >

                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_coin_type..." required   id="id_coin_type_combo" name="Housing_season_price[id_coin_type]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Comition_for_publicitiy</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Comition_for_publicitiy..."   type="text" id="comition_for_publicitiy" name="Housing_season_price[comition_for_publicitiy]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_start_publicity</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Date_start_publicity..." required  type="text" id="date_start_publicity" name="Housing_season_price[date_start_publicity]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_end_publicity</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Date_end_publicity..."   type="text" id="date_end_publicity" name="Housing_season_price[date_end_publicity]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Booking_deposit</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Booking_deposit..."   type="text" id="booking_deposit" name="Housing_season_price[booking_deposit]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_start</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Date_start..."   type="text" id="date_start" name="Housing_season_price[date_start]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
                        				<label class="control-label col-md-6">Date_end</label>
                        				<div class="input-icon right col-lg-12" >

                            				<input class="form-control" value="" placeholder="Escriba el Date_end..."   type="text" id="date_end" name="Housing_season_price[date_end]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskhousing_season_price" name="taskhousing_season_price">
        					  <input value="-1"  type="hidden" id="id_housing_season_price" name="Housing_season_price[id_housing_season_price]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_housing_season_price" class="btn green">Aceptar</button>
            				<button type="button" data-dismiss="modal" class="btn default">Cancelar</button>
        				</div>
    				</form>
    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!--                Fin de Ventana Housing_season_price-->
<!--Inicio de Ventana Housing_season_price-->
    <div id="list_housing_season_price_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_season_price" >Listado de Housing_season_price</span>
                    </div>
                    <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                    </div>
                </div>
				<button type="button" id="export_housing_season_price_pdf" class="btn green pull-right">Exportar PDF</button>
 				<button type="button" id="excel_housing_season_price" class="btn green pull-right">Exportar Excel</button>
                 <div class="portlet-body form">
                    


		        	<div class="pdf-page size-a4" id="table_housing_season_price_pdf">
						<div class="pdf-header">
							<h2>Listado de Housing_season_price</h2>
						</div>
						<div class="pdf-body">
							<div style="" class="k-grid k-widget" data-role="grid" id="grid">
								<table class="table table-striped">
									<thead>
		<th>
			price_housing_season
			</th>
		<th>
			comition
			</th>
		<th>
			cretedat
			</th>
		<th>
			name_housing
			</th>
		<th>
			name_season
			</th>
		<th>
			name_coin
			</th>
		<th>
			comition_for_publicitiy
			</th>
		<th>
			date_start_publicity
			</th>
		<th>
			date_end_publicity
			</th>
		<th>
			booking_deposit
			</th>
		<th>
			date_start
			</th>
		<th>
			date_end
			</th>

		        					</thead>
									<tbody id="tbody_table_housing_season_price">
		        					</tbody>
								</table>
							</div>
						</div>
                			</div>
            		</div>
        		</div>
    		</div>
    	</div>
    <!--                Fin de Ventana Housing_season_price-->
<!--                Ventana para importar -->

 <div id="import_housing_season_price" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_season_price" >Importar de Housing_season_price</span>
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
			                            <button type="button" id="importar_housing_season_price_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="housing_season_price/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="housing_season_price_export" name="housing_season_price_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
