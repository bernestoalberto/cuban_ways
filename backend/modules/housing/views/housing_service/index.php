
<?php $this->title = 'Housing_service';?>
<?php 
		if(count($this->css)>0)
			foreach($this->css as $css)
			{
				echo '<link href="'.$css.'" rel="stylesheet">';
			}
		?>

<div class="header">
    <h3>
       <strong><span data-translate="title_manage_housing_service"></span></strong>
    </h3>

    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo Yii::$app->homeUrl ?>">
                    <i class="fa fa-home" style="font-size:30px"></i>
                </a>
            </li>
            <li>
                <a data-translate="menu_house"> </a>
            </li>
            <li>
                <a data-translate="item_menu_housing_service"> </a>
            </li>
            <li class="active">
                <span data-translate="title_manage_housing_service"> </span>
            </li>
        </ol>
    </div>
</div>


<!--  End header manage -->
<!-- Start zone btn_generic_actions-->
<div class="DTTT_container btn-group" style="margin-right: 15px">
    <a id="pdf_housing_service" class="btn btn-default DTTT_button DTTT_button_pdf">
        <span><i class="fa fa-file-pdf-o"></i></span></a>
</div>
<!-- End zone btn_generic_actions-->

<!-- Start zone btn_actions-->
<!-- Start zone btn_actions-->
<div class="actions">
    <div class="btn-group">
        <button id="btn_modal_housing_service" type="button" class="btn btn-dark btn-rounded">
            <i class='fa fa-plus'></i>
            <span class="hidden-480" data-translate="btn_new"></span>
        </button>
        <button id="deletebutton_housing_service" type="button" class="btn btn-dark btn-rounded btn-danger">
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
            <div id="gridselection_housing_service" class="table table-striped" style="width:100%"></div>
        </div>
    </div>
</div>
<!-- End zone contex_grid-->
<!--  Final Portlet -->
<!--  Fin Portlet -->
<!--Inicio insert/update housing_service-->
<div id="modal_housing_service" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false"
     data-attention-animation="true" data-width="760">
    <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icons-office-52"></i></button>
        <h4 class="modal-title"><strong><span data-translate="title_add_housing_service"></span></strong></h4>
    </div>
    <div class="modal-body">
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="#" class="horizontal-form" enctype="multipart/form-data" id="housing_service_form">
                <div class="form-body">
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>* <span data-translate="housing_service"></span></label>
                                <div class="input-icon right col-lg-12">
                                    <input class="form-control" value="" placeholder="Escriba el Name_housing_service..."
                                           required type="text" id="name_service"
                                           name="Housing_service[name_service]"
                                           onkeypress="return permite(event,'num_car')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->

                    <!--/row-->
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label data-translate="housing_service_description" class="control-label col-md-6"></label>
                                <div class="input-icon right col-lg-12" >

                                    <textarea class="form-control" value="" placeholder="Escriba el Description_service..." required  id="description_service" name="Housing_service[description_service]" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->

                    <input value="insert" type="hidden" id="taskhousing_service" name="taskhousing_service">
                    <input value="-1" type="hidden" id="id_housing_service" name="housing_service[id_housing_service]">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button type="button" id="btnaction_housing_service" class="btn btn-dark btn-rounded">
                                <span class="hidden-480" data-translate="btn_ok">
                    </button>
                    <button type="button" data-dismiss="modal" class="btn default btn-rounded">
                        <span class="hidden-480" data-translate="btn_cancel"></span>
                    </button>
                </div>
                </div>
            </form>
            <!-- END FORM-->
            </div>
    </div>
</div>


<!--                Fin de insert/update housing_service-->
<!--Inicio de export housing_service-->
<div id="list_housing_service_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static"
     data-keyboard="false" data-attention-animation="true" data-width="90%">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    </div>
    <div class="modal-body">
        <div class="portlet light bg-inverse">
            <div class="portlet-title">
                <div style="margin-bottom:1px" class="pull-right">
                    <button type="button" id="export_housing_service_pdf" class="btn  btn-rounded btn-danger">
                        <span class="hidden-480" data-translate="btn_export_pfd"></span>
                    </button>
                    <button type="button" id="excel_housing_service" class="btn btn-success btn-rounded">
                        <span class="hidden-480" data-translate="btn_export_excel"></span>
                    </button>
                </div>
            </div>


            <div class="portlet-body form">


                <div class="pdf-page size-a4" id="table_housing_service_pdf">
                    <div class="portlet portlet box blue-hoki" style="margin-top: 10px;">
                        <div class="portlet-title ">
                            <div class="caption">
                                <span data-translate="title_list_housing_service"></span>
                            </div>
                        </div>
                    </div>
                    <div class="pdf-body">
                        <div style="" class="k-grid k-widget" data-role="grid" id="grid">
                            <table class="table table-striped">
                                <thead>
                                <th>
		<span class="control-label col-md-6"
              data-translate="housing_service"></span>
                                </th>
                                <th>
		<span class="control-label col-md-6"
              data-translate="housing_service_description"></span>
                                </th>
                                </thead>
                                <tbody id="tbody_table_housing_service">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--                Fin de export housing_service-->





<!--                Ventana para importar -->

 <div id="import_housing_service" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="true" data-width="50%">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    </div>
			    <div class="modal-body">
			        <div class="portlet light bg-inverse">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-equalizer font-red-sunglo"></i>
			                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_housing_service" >Importar de Housing_service</span>
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
			                            <button type="button" id="importar_housing_service_excel" class="btn green pull-right">Importar</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			</div>
        <form action="housing_service/excel" method="post" id="form_excel_export" style="display: none">
	    	<input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
	    	<input type="hidden" id="housing_service_export" name="housing_service_export" value="">
		</form>
<?php 
		if(!$index)
		if(count($this->js)>0)
			foreach($this->js as $js)
			{
				echo '<script src="'.$js.'" ><script/>';
			}
		?>
