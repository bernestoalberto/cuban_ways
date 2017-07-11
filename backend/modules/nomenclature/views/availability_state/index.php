<?php $this->title = 'Availability_state'; ?>
<?php
if (count($this->css) > 0)
    foreach ($this->css as $css) {
        echo '<link href="' . $css . '" rel="stylesheet">';
    }
?>
<!-- Start zone navigation menu-->

<div class="header">
    <h3>
       <strong><span data-translate="title_manage_availability_state"></span></strong>
    </h3>

    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo Yii::$app->homeUrl ?>">
                    <i class="fa fa-home" style="font-size:30px"></i>
                </a>
            </li>
            <li>
                <a data-translate="nomencladores"> </a>
            </li>
            <li>
                <a data-translate="item_menu_availability_state"> </a>
            </li>
            <li class="active">
                <span data-translate="title_manage_availability_state"> </span>
            </li>
        </ol>
    </div>
</div>

<!-- Start zone btn_generic_actions-->
<div class="DTTT_container btn-group" style="margin-right: 15px">
    <a id="pdf_availability_state" class="btn btn-default DTTT_button DTTT_button_pdf">
        <span><i class="fa fa-file-pdf-o"></i></span></a>

</div>
<!-- End zone btn_generic_actions-->

<!-- Start zone btn_actions-->
<div class="actions">
    <div class="btn-group">
        <button  id="btn_modal_availability_state" type="button" class="btn btn-dark btn-rounded">
            <i class='fa fa-plus'></i>
            <span class="hidden-480" data-translate="btn_new"></span>
        </button>
        <button  id="deletebutton_availability_state" type="button" class="btn btn-dark btn-rounded btn-danger">
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
            <div id="gridselection_availability_state" class="table table-striped" style="width:100%"></div>
        </div>
    </div>
</div>
<!-- End zone contex_grid-->
<!--  Fin Portlet -->

<!--Inicio de form insert/update availability_state-->

<div id="modal_availability_state" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static"
     data-keyboard="false" data-attention-animation="true" data-width="760">
    <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icons-office-52"></i></button>
        <h4 class="modal-title"><strong><span data-translate="title_add_availability_state"></span></strong></h4>
    </div>
    <div class="modal-body">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->

                <form action="#" class="horizontal-form" enctype="multipart/form-data" id="availability_state_form">
                    <div class="form-body">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>* <span data-translate="availability_state"></span>
                                    </label>
                                    <div class="input-icon right col-lg-12">
                                        <input class="form-control" value=""
                                               placeholder="Escriba el Availability_state..." required type="text"
                                               id="availability_state" name="Availability_state[availability_state]"
                                               onkeypress="return permite(event,'num_car')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->

                        <input value="insert" type="hidden" id="taskavailability_state" name="taskavailability_state">
                        <input value="-1" type="hidden" id="id_availability_state"
                               name="Availability_state[id_availability_state]">
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                        <button type="button" id="btnaction_availability_state" class="btn btn-dark btn-rounded">
                                <span class="hidden-480" data-translate="btn_ok">
                        </button>
                        <button type="button" data-dismiss="modal" class="btn default btn-rounded">
                            <span class="hidden-480" data-translate="btn_cancel"></span>
                        </button></div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>

    </div>
</div>
<!-- Fin insert/update Availability_state-->


<!--Inicio de export Availability_state-->
<div id="list_availability_state_pdf" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static"
     data-keyboard="false" data-attention-animation="true" data-width="90%">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    </div>
    <div class="modal-body">
        <div class="portlet light bg-inverse">
            <div class="portlet-title">
                <div style="margin-bottom:1px" class="pull-right">
                    <button type="button" id="export_availability_state_pdf" class="btn  btn-rounded btn-danger">
                        <span class="hidden-480" data-translate="btn_export_pfd"></span>
                    </button>
                    <button type="button" id="excel_availability_state" class="btn btn-success btn-rounded">
                        <span class="hidden-480" data-translate="btn_export_excel"></span>
                    </button>
                </div>

            </div>
            <div class="portlet-body form">
                <div class="pdf-page size-a4" id="table_availability_state_pdf">
                    <div class="portlet portlet box blue-hoki" style="margin-top: 10px;">
                        <div class="portlet-title ">
                            <div class="caption">
                                <span data-translate="title_list_availability_state"></span>
                            </div>
                        </div>
                    </div>
                    <div class="pdf-body">
                        <div style="" class="k-grid k-widget" data-role="grid" id="grid">
                            <table class="table table-striped">
                                <thead>
                                <th>
	<span class="control-label col-md-6"
          data-translate="availability_state"></span>

                                </th>

                                </thead>
                                <tbody id="tbody_table_availability_state">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--                Fin de Ventana Availability_state-->
<!--                Ventana para importar -->

<div id="import_availability_state" role="dialog" class="modal fade" tabindex="-1" data-backdrop="static"
     data-keyboard="false" data-attention-animation="true" data-width="50%">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    </div>
    <div class="modal-body">
        <div class="portlet light bg-inverse">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-equalizer font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase" id="title_availability_state">Importar de Availability_state</span>
                </div>
                <div class="tools">
                    <a title="" data-original-title="" href="" class="collapse">
                    </a>
                </div>
            </div>

            <div class="portlet-body form">

                <form method="post" class="horizontal-form" enctype="multipart/form-data" id="importar_form">
                    <div class="col-md-12 pull-right">
                        <div class="col-md-4">
                            <input name="importar_excel" id="importar_excel" data-edit="insertImage" type="file">
                        </div>
                        <div class="col-md-4">
                            <button type="button" id="importar_availability_state_excel" class="btn green pull-right">
                                Importar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<form action="availability_state/excel" method="post" id="form_excel_export" style="display: none">
    <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
    <input type="hidden" id="availability_state_export" name="availability_state_export" value="">
</form>
<?php
if (!$index)
    if (count($this->js) > 0)
        foreach ($this->js as $js) {
            echo '<script src="' . $js . '" ><script/>';
        }
?>
