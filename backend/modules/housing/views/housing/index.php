<?php $this->title = 'Housing';?>
<?php 
		if(count($this->css)>0)
			foreach($this->css as $css)
			{
				echo '<link href="'.$css.'" rel="stylesheet">';
			}
		?>

<!-- Start zone navigation menu-->
<div class="x_title">
    <i class="fa fa-home" style="font-size:30px"></i>

    <span>
        <a href="<?php echo Yii::$app->homeUrl?>" >
            <span class="m-r-10" data-translate="home"> </span>
        </a>
        |
        <span class="m-l-10 m-r-10" data-translate="menu_house"> </span>
        |
        <span class="m-l-10" data-translate="item_menu_house_house"> </span>
    </span>

    <div class="clearfix"></div>
</div>
<!-- End zone navigation menu-->

<!--  Inicio Portlet -->

<!--  Start header manage -->
<div class="portlet portlet box blue-hoki" style="margin-top: 30px;">
    <div class="portlet-title ">
        <div class="caption">
            <span data-translate="title_manage_housing"></span>
        </div>
    </div>
</div>
<!--  End header manage -->

<!-- Start zone btn_generic_actions-->

<div>
    <div class="DTTT_container btn-group" style="margin-right: 15px">
        <a id="pdf_season" class="btn btn-default DTTT_button DTTT_button_pdf">
            <span><i class="fa fa-file-pdf-o"></i></span></a>
        <a id="excel_season" class="btn btn-default DTTT_button DTTT_button_xls">
            <span><i class="fa fa-file-excel-o"></i></span></a>
    </div>
    <!-- End zone btn_generic_actions-->

    <!-- Start zone btn_actions-->
    <div class="actions">
        <div id="btn_modal_housing" class="btn-group">
            <a type="button" href="<?php echo Yii::$app->homeUrl?>/housing/housing/create" class="btn btn-dark btn-rounded !important">
                <i class='fa fa-plus'></i>
                <span class="hidden-480" data-translate="btn_new"></span>
            </a>
            <button id="deletebutton_housing" type="button" class="btn btn-dark btn-rounded btn-danger">
                <i class='fa fa-trash-o'></i>
                <span class="hidden-480" data-translate="btn_delete"></span>
            </button>
        </div>
    </div>
    <!-- End zone btn_actions-->

    <!-- Start zone contex_grid-->
    <div class="portlet-body">
        <div style="" class="table-container">
            <div class="content box box-primary">
                <div id="gridselection_housing" style="width:100%" class="table table-striped"></div>
            </div>
        </div>
    </div>
    <!-- End zone contex_grid-->
    <!--  Final Portlet -->

</div>
<!--  Fin Portlet -->

<!--Inicio de form insert/update Housing-->
    <div id="modal_housing" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet portlet box blue-hoki">
                <div class="portlet-title">
                    <div class="caption">
                        <span data-translate="title_add_housing"></span>
                    </div>
                </div>
                <div class="tools">
                        <a title="" data-original-title="" href="" class="collapse">
                        </a>
                        <a title="" data-original-title="" id="reload_housing" href="" class="reload">
                        </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->

                    <form action="#"  class="horizontal-form" enctype="multipart/form-data"   id="housing_form">
                        <div class="form-body">
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
										<span class="control-label col-md-6" data-translate="item_menu_name_housing"></span>
										<div class="input-icon right col-lg-12">
											<input class="form-control" value="" placeholder="Escriba el Name_housing..." required type="text" id="name_housing" name="Housing[name_housing]" onkeypress="return permite(event,'num_car')">
										</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
										<span class="control-label col-md-6" data-translate="keywords_housing"></span>
                        				<div class="input-icon right col-lg-12" >
                            				<input class="form-control" value="" placeholder="Escriba el Keywords_housing..."   type="text" id="keywords_housing" name="Housing[keywords_housing]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
										<span class="control-label col-md-6" data-translate="announce_housing"></span>
                        				<div class="input-icon right col-lg-12" >
                            				<input class="form-control" value="" placeholder="Escriba el Announce..." required  type="text" id="announce" name="Housing[announce]" onkeypress="return permite(event,'num_car')">
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
										<span class="control-label col-md-6" data-translate="id_housing_type"></span>
                        				<div class="input-icon right col-lg-12" >
                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing_type..." required   id="id_housing_type_combo" name="Housing[id_housing_type]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
										<span class="control-label col-md-6" data-translate="id_housing_state_rent"></span>
                        				<div class="input-icon right col-lg-12" >
                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing_state_rent..." required   id="id_housing_state_rent_combo" name="Housing[id_housing_state_rent]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
										<span class="control-label col-md-6" data-translate="createdat_housing"></span>
									  	<div class="input-icon right col-lg-12" >
                            				<input class="form-control" value="" placeholder="Escriba el Createdat..."   type="text" id="createdat" name="Housing[createdat]" onkeypress="return permite(event,'date')">
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->
                        	<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-6">
                    				<div class="form-group">
										<span class="control-label col-md-6" data-translate="id_housing_address"></span>
                        				<div class="input-icon right col-lg-12" >
                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_housing_address..."    id="id_housing_address_combo" name="Housing[id_housing_address]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
								<div class="col-md-6">
                    				<div class="form-group">
										<span class="control-label col-md-6" data-translate="id_housing_owner"></span>
                        				<div class="input-icon right col-lg-12" >
                            				<select class="form-control" style="width: 300px;" placeholder="Escriba el Id_owner..." required   id="id_owner_combo" name="Housing[id_owner]" onkeypress="return permite(event,'car')" ></select>
                        				</div>
                    				</div>
                				</div>
                        	</div>
							<!--/row-->

                             <input  value="insert" type="hidden" id="taskhousing" name="taskhousing">
        					  <input value="-1"  type="hidden" id="id_housing" name="Housing[id_housing]">
        				</div>
        				<div class="modal-footer">
            				<button type="button" id="btnaction_housing" class="btn btn-dark btn-rounded">
								<span class="hidden-480" data-translate="btn_ok"></span>
							</button>

							<button type="button" data-dismiss="modal" class="btn default btn-rounded">
								<span class="hidden-480" data-translate="btn_cancel"></span>
							</button>
        				</div>
    				</form>
    <!-- END FORM-->
			</div>
		</div>
	</div>
<!-- Fin de form insert/update Housing-->

    <!--                Fin de Ventana Housing-->
<!--Inicio de export Housing-->
    <div id="list_housing_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="90%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div style="margin-bottom:1px" class = "pull-right">
                    <button type="button" id="export_housing_pdf" class="btn  btn-rounded btn-danger">
                        <span class="hidden-480" data-translate="btn_export_pfd"></span>
                    </button>
                    <button type="button" id="excel_housing" class="btn btn-success btn-rounded">
                        <span class="hidden-480" data-translate="btn_export_excel"></span>
                    </button>
                </div>
                <div class="portlet-body form">
		        	<div class="pdf-page size-a4" id="table_housing_pdf">
                        <div class="portlet portlet box blue-hoki" style="margin-top: 10px;">
                            <div class="portlet-title ">
                                <div class="caption">
                                    <span data-translate="title_manage_housing"></span>
                                </div>
                            </div>
                        </div>
						<div class="pdf-body">
                            <div style="" class="panel-content" data-role="grid" id="grid">
                                <table class="table">
                                    <thead>
                                    <th>
                                        <span class="control-label col-md-6"data-translate="name_housing"></span>
                                    </th>
                                    <th>
                                        <span class="control-label col-md-6" data-translate="date_range"></span>
                                    </th>
                                    </thead>
                                    <!--keywords_housing announce description  name_housing_type
                                    name_housing_state_rent createdat id_town name_owner -->
                                    <tbody id="tbody_table_housing">
                                    </tbody>
                                </table>
                            </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    <!--                Fin de Ventana Housing-->
    <!--                Ventana para importar -->

    <div id="import_housing" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing" >Importar de Housing</span>
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
                                <button type="button" id="importar_housing_excel" class="btn green pull-right">Importar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="housing/excel" method="post" id="form_excel_export" style="display: none">
        <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
        <input type="hidden" id="housing_export" name="housing_export" value="">
    </form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
