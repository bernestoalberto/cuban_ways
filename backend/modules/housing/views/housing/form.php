<?php $this->title = 'Housing'; ?>
<?php
if (count($this->css) > 0)
    foreach ($this->css as $css) {
        echo '<link href="' . $css . '" rel="stylesheet">';
    }
?>


<div class="header" xmlns="http://www.w3.org/1999/html">
    <h3>
        <strong> <span data-translate="m_housing_create"></span></strong>
    </h3>

    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo Yii::$app->homeUrl ?>">
                    <i class="fa fa-home" style="font-size:30px"></i>
                </a>
            </li>
            <li>
                <a class="" data-translate="menu_house"> </a></li>
            <li>
                <a href="<?php echo Yii::$app->homeUrl ?>/housing/housing" class=""
                   data-translate="item_menu_house_house"> </a>
            </li>
            <li class="active">
                <span class="" data-translate="m_housing_create_ele">
                </span>
            </li>
        </ol>
    </div>
</div>


<!--  End header manage -->

<div class="">
    <div class="portlet light bg-inverse">
        <div class="portlet-body form">
            <!--            <form action="-->
            <?php ////echo Yii::$app->homeUrl.'housing/housing/'.$action?><!--<!--" method="post" class="horizontal-form" enctype="multipart/form-data"   id="housing_form">-->
            <div class="form-body">
                <div class="col-md portlets ui-sortable">
                    <div class="panel">
                        <div class="panel-content" id="tabs">
                            <ul class="nav nav-tabs nav-primary">
                                <li class="active">
                                    <a aria-expanded="true" href="#tab2_1" data-toggle="tab">
                                        <i class="icon-home"></i>
                                        <span data-translate="m_housing_tab_general_data"> </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a aria-expanded="false" href="#tab2_2" data-toggle="tab">
                                        <i class="icon-location-pin icons"></i>
                                        <span data-translate="m_housing_tab_address"> </span>
                                    </a>
                                </li>

                                <li class="">
                                    <a aria-expanded="false" href="#tab2_3" data-toggle="tab">
                                        <i class="icon-user"></i>
                                        <span data-translate="m_housing_tab_characteristics"> </span>
                                    </a>
                                </li>

                                <li class="">
                                    <a aria-expanded="false" href="#tab2_4" data-toggle="tab">
                                        <i class="icon-cloud-download"></i>
                                        <span data-translate="m_housing_tab_service"> </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a aria-expanded="false" href="#tab2_5" data-toggle="tab">
                                        <i class="icon-tag"></i>
                                        <span data-translate="m_housing_tab_price"> </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a aria-expanded="false" href="#tab2_6" data-toggle="tab">
                                        <i class="icon-picture"></i>
                                        <span data-translate="m_housing_tab_image"> </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a aria-expanded="false" href="#tab2_7" data-toggle="tab">
                                        <i class="icons-faces-users-01"></i>
                                        <span data-translate="m_housing_tab_owner"> </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!--                               tab_housing_general_data-->
                                <div class="tab-pane fade active in" id="tab2_1">
                                    <form id="form_tab_general_data">
                                        <div class="row" style="margin-bottom: 15px;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-6">*
                                                        <span data-translate="item_menu_name_housing"> </span>
                                                    </label>

                                                    <div class="input-icon right col-lg-12">
                                                        <input class="form-control" value="<?= $model->name_housing ?>"
                                                               placeholder="Escriba el Name_housing..." required
                                                               type="text"
                                                               id="name_housing" name="Housing[name_housing]"
                                                               onkeypress="return permite(event,'num_car')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-6">*
                                                        <span data-translate="announce_housing"> </span>
                                                    </label>

                                                    <div class="input-icon right col-lg-12">
                                                        <input class="form-control" value="<?= $model->announce ?>"
                                                               placeholder="Escriba el Announce..." required type="text"
                                                               id="announce" name="Housing[announce]"
                                                               onkeypress="return permite(event,'num_car')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row" style="margin-bottom: 15px;">
                                            <div class="col-md-6">
                                                <div class="row" style="margin-bottom: 15px;">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-6">*
                                                            <span data-translate="id_housing_type"> </span>
                                                        </label>

                                                        <div class="input-icon right col-lg-12">
                                                            <select class="form-control" style="width: 300px;"
                                                                    placeholder="Escriba el Id_housing_type..." required
                                                                    id="id_housing_type_combo"
                                                                    name="Housing[id_housing_type]"
                                                                    onkeypress="return permite(event,'car')"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 15px;">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-6">
                                                            <span data-translate="keywords_housing"> </span>
                                                        </label>

                                                        <div class="input-icon right col-lg-12">
                                                            <input class="form-control"
                                                                   value="<?= $model->keywords_housing ?>"
                                                                   placeholder="Escriba el Keywords_housing..."
                                                                   type="text"
                                                                   id="keywords_housing"
                                                                   name="Housing[keywords_housing]"
                                                                   onkeypress="return permite(event,'num_car')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-6">*
                                                        <span data-translate="housing_announce_description"></span>
                                                    </label>

                                                    <div class="input-icon right col-lg-12">
                                                    <textarea class="form-control" value=""
                                                              placeholder="Escriba el Description..." required
                                                              id="description" name="Housing[description]"
                                                              rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--                               tab_housing_localization-->
                                <div class="tab-pane fade in" id="tab2_2">
                                    <div style="" class="table-container">
                                        <form id="form_tab_housing_address">
                                            <div class="form-body">
                                                <div class="row" style="margin-bottom: 15px;">
                                                    <div class="col-md-6">
                                                        <div class="row" style="margin-bottom: 15px;">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-6">*
                                                                        <span class=""
                                                                              data-translate="name_town"></span>
                                                                    </label>

                                                                    <div class="input-icon right col-lg-12">

                                                                        <select class="form-control"
                                                                                style="width: 300px;"
                                                                                placeholder="Escriba el Id_town..."
                                                                                required id="id_town_combo"
                                                                                name="Housing_address[id_town]"
                                                                                onkeypress="return permite(event,'car')">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row" style="margin-bottom: 15px;">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label col-md-6">*
                                                                        <span class=""
                                                                              data-translate="number_housing"></span>
                                                                    </label>

                                                                    <div class="input-icon right col-lg-12">

                                                                        <input class="form-control" value=""
                                                                               placeholder="Escriba el Number_housing..."
                                                                               required type="text"
                                                                               id="number_housing"
                                                                               name="Housing_address[number_housing]"
                                                                               onkeypress="return permite(event,'num_car')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row" style="margin-bottom: 15px;">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label col-md-6">*
                                                                        <span class=""
                                                                              data-translate="main_street"></span></label>

                                                                    <div class="input-icon right col-lg-12">

                                                                        <input class="form-control" value=""
                                                                               placeholder="Escriba el Main_street..."
                                                                               required type="text" id="main_street"
                                                                               name="Housing_address[main_street]"
                                                                               onkeypress="return permite(event,'num_car')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row" style="margin-bottom: 15px;">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label col-md-6">
                                                                        <span class=""
                                                                              data-translate="between_first"></span></label>

                                                                    <div class="input-icon right col-lg-12">

                                                                        <input class="form-control" value=""
                                                                               placeholder="Escriba el Between_first..."
                                                                               type="text" id="between_first"
                                                                               name="Housing_address[between_first]"
                                                                               onkeypress="return permite(event,'num_car')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label col-md-6"> <span class=""
                                                                                                              data-translate="between_second"></span>
                                                                    </label>

                                                                    <div class="input-icon right col-lg-12">

                                                                        <input class="form-control" value=""
                                                                               placeholder="Escriba el Between_second..."
                                                                               type="text" id="between_second"
                                                                               name="Housing_address[between_second]"
                                                                               onkeypress="return permite(event,'num_car')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                    </div>
                                                    <div class="col-md-6">
                                                            <span class="hidden-480"
                                                                  data-translate="selection_map"></span>
                                                    </div>
                                                </div>
                                                <input value="insert" type="hidden" id="taskhousing_address"
                                                       name="taskhousing_address">
                                                <input value="-1" type="hidden" id="id_housing_address"
                                                       name="Housing_address[id_housing_address]">
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    </div>
                                </div>
                                <!--                               tab_housing_characteristics-->
                                <div class="tab-pane fade" id="tab2_3">
                                    <div style="" class="table-container">
                                        <form id="form_tab_housing_characteristics">
                                            <h3>
                                                <span data-translate="housing_characteristics_housing"></span>
                                            </h3>
                                            <!-- Start zone btn_actions-->
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <button id="btn_modal_housing_characteristics_housing" type="button"
                                                            class="btn btn-dark btn-rounded">
                                                        <i class='fa fa-plus'></i>
                                                        <span class="hidden-480" data-translate="btn_new"></span>
                                                    </button>
                                                    <button id="deletebutton_housing_characteristics_housing" type="button"
                                                            class="btn btn-dark btn-rounded btn-danger">
                                                        <i class='fa fa-trash-o'></i>
                                                        <span class="hidden-480" data-translate="btn_delete"></span>
                                                    </button>

                                                </div>
                                            </div>
                                            <!-- End zone btn_actions-->

                                            <div class="content box box-primary">
                                                <div id="gridselection_housing_characteristics_housing"
                                                     class="table table-striped"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--                               tab_housing_service-->
                                <div class="tab-pane fade " id="tab2_4">
                                    <div style="" class="table-container">
                                        <form id="form_tab_housing_services">
                                            <h3>
                                                <span data-translate="housing_service_housing"></span>
                                            </h3>
                                            <!-- Start zone btn_actions-->
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <button id="btn_modal_service_housing" type="button"
                                                            class="btn btn-dark btn-rounded">
                                                        <i class='fa fa-plus'></i>
                                                        <span class="hidden-480" data-translate="btn_new"></span>
                                                    </button>
                                                    <button id="deletebutton_season" type="button"
                                                            class="btn btn-dark btn-rounded btn-danger">
                                                        <i class='fa fa-trash-o'></i>
                                                        <span class="hidden-480" data-translate="btn_delete"></span>
                                                    </button>

                                                </div>
                                            </div>
                                            <!-- End zone btn_actions-->

                                            <div class="content box box-primary">
                                                <div id="gridselection_service_housing"
                                                     class="table table-striped"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--                               tab_housing_price-->
                                <div class="tab-pane fade " id="tab2_5">
                                    <div style="" class="table-container">
                                        <form id="form_tab_housing_price_season">
                                            <h3>
                                                <span data-translate="list_housing_price_season"></span>
                                            </h3>
                                            <!-- Start zone btn_actions-->
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <button id="btn_modal_housing_season_price" type="button"
                                                            class="btn btn-dark btn-rounded">
                                                        <i class='fa fa-plus'></i>
                                                        <span class="hidden-480" data-translate="btn_new"></span>
                                                    </button>
                                                    <button id="deletebutton_season" type="button"
                                                            class="btn btn-dark btn-rounded btn-danger">
                                                        <i class='fa fa-trash-o'></i>
                                                        <span class="hidden-480" data-translate="btn_delete"></span>
                                                    </button>

                                                </div>
                                            </div>
                                            <!-- End zone btn_actions-->
                                            <div class="content box box-primary">
                                                <div id="gridselection_housing_season_price"
                                                     class="table table-striped"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--                               tab_housing_photo-->
                                <div class="tab-pane fade " id="tab2_6">
                                    <p>
                                        &nbsp; This plugins works only on Latest Chrome, Firefox, Safari, Opera &amp;
                                        Internet Explorer 10.
                                    </p>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
						<span class="label label-danger">
						NOTE: </span>
                                                &nbsp; This plugins works only on Latest Chrome, Firefox, Safari, Opera
                                                & Internet Explorer 10.
                                            </p>

                                            <form
                                                action="<?php echo Yii::$app->homeUrl . 'housing/housing/' . $action ?>"
                                                class="dropzone" id="my-dropzone" method="get">
                                                <input type="hidden" name="_backendCSRF"
                                                       value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!--                               tab_housing_owner-->
                                <div class="tab-pane fade " id="tab2_7">
                                    <div class="table-container">
                                        <form id="form_tab_housing_owner">
                                            <div class="row" style="margin-bottom: 15px;">
                                                <div class="col-md-6">
                                                    <div class="row" style="margin-bottom: 15px;">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">*
                                                                    <span data-translate="name_owner"></span>
                                                                </label>
                                                                <div class="input-icon right col-lg-12">

                                                                    <input class="form-control" value=""
                                                                           placeholder="Escriba el Name_owner..."
                                                                           required
                                                                           type="text" id="name_owner"
                                                                           name="Owner[name_owner]"
                                                                           onkeypress="return permite(event,'num_car')">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 15px;">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6"">*
                                                                <span data-translate="lastname_owner"></span>
                                                                </label>
                                                                <div class="input-icon right col-lg-12">

                                                                    <input class="form-control" value=""
                                                                           placeholder="Escriba el Lastname_owner..."
                                                                           required type="text" id="lastname_owner"
                                                                           name="Owner[lastname_owner]"
                                                                           onkeypress="return permite(event,'num_car')">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 15px;">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">*
                                                                    <span data-translate="owner_identification"></span>
                                                                </label>

                                                                <div class="input-icon right col-lg-12">

                                                                    <input class="form-control" value=""
                                                                           placeholder="Escriba el Identification..."
                                                                           required type="text" id="identification"
                                                                           name="Owner[identification]"
                                                                           onkeypress="return permite(event,'num_car')">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group pull-right">
                                                        <label data-translate="photo_user"
                                                               class="control-label col-md-6"></label>
                                                        <div class="input-icon right col-lg-12">
                                                            <img alt="" id="image_user"
                                                                 style="margin-right: 20px;margin-bottom: 20px"
                                                                 class="img-circle pull-left"
                                                                 src="/cuban_ways/backend/web//image/users/user.jpg"
                                                                 height="150px" width="150px">
                                                        </div>
                                                        <div class="input-icon right col-lg-12">
									<span class="btn btn-default btn-file">
										<span class="fileinput-new" data-translate="select_image"></span>
                            		<input class="form-control" value="" placeholder="Escriba el Photo..." type="text"
                                           id="photo" name="Owner[photo]" onkeypress="return permite(event,'num_car')">
                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 5px;">
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-6">*
                                                        <span data-translate="email"></span>
                                                    </label>
                                                    <div class="input-icon right col-lg-12">
                                                        <input class="form-control" value=""
                                                               placeholder="Escriba el Email..." required type="text"
                                                               id="email" name="Owner[email]"
                                                               onkeypress="return permite(event,'num_car')">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-6"
                                                               data-translate="bank_account"></label>

                                                        <div class="input-icon right col-lg-12">

                                                            <input class="form-control" value=""
                                                                   placeholder="Escriba el Bank_account..." type="text"
                                                                   id="bank_account" name="Owner[bank_account]"
                                                                   onkeypress="return permite(event,'num_car')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row" style="margin-bottom: 15px;">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md12">*
                                                            <span data-translate="phone"></span>
                                                        </label>

                                                        <div class="input-icon right col-lg-12">

                                                            <input class="form-control" value=""
                                                                   placeholder="Escriba el Phone..." required
                                                                   type="text"
                                                                   id="phone" name="Owner[phone]"
                                                                   onkeypress="return permite(event,'num_car')">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-12"
                                                               data-translate="name_owner_incharge"></label>

                                                        <div class="input-icon right col-lg-12">

                                                            <input class="form-control" value=""
                                                                   placeholder="Escriba el Name_owner_incharge..."
                                                                   type="text" id="name_owner_incharge"
                                                                   name="Owner[name_owner_incharge]"
                                                                   onkeypress="return permite(event,'num_car')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row" style="margin-bottom: 15px;">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-6"
                                                               data-translate="datebirth_owner"></label>

                                                        <div class="input-group right col-lg-12">

                                                            <input class="form-control" value=""
                                                                   placeholder="Escriba el Datebirth..." type="text"
                                                                   id="datebirth" name="Owner[datebirth]"
                                                                   onkeypress="return permite(event,'date')">
                                                            <span class="input-group-addon"><i class="icon-user p-0"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-12"
                                                               data-translate="lastname_owner_incharge"></label>

                                                        <div class="input-icon right col-lg-12">

                                                            <input class="form-control" value=""
                                                                   placeholder="Escriba el Lastname_owner_incharge..."
                                                                   type="text" id="lastname_owner_incharge"
                                                                   name="Owner[lastname_owner_incharge]"
                                                                   onkeypress="return permite(event,'num_car')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->

                                            <input value="insert" type="hidden" id="taskowner" name="taskowner">
                                            <input value="-1" type="hidden" id="id_owner" name="Owner[id_owner]">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <input type="hidden" name="_backendCSRF" value="<?php echo Yii::$app->getRequest()->csrfToken ?>">
                <input value="<?= $action ?>" type="hidden" id="taskhousing" name="taskhousing">
            </div>
            <div class="modal-footer">
                <div class="btn-group">
                    <button type="button" id=""
                            class="btn btn-primary btn-rounded">
                        <span class="hidden-480" data-translate="btn_back"></span>
                    </button>
                    <button id="btnaction_housing" class="btn btn-dark btn-rounded">
                        <span class="hidden-480" data-translate="btn_ok"></span>
                    </button>
                    <a href="<?php echo Yii::$app->homeUrl ?>housing/housing" class="btn default btn-rounded"
                       data-translate="btn_cancel"> </a>
                </div>
            </div>
            <!--            </form>-->
            <!-- END FORM-->
        </div>
    </div>
</div>
<!--                Fin de Ventana Housing-->


<!--start MODALSSS-->

<!--start modal housing_characteristics_housing-->
<div id="modal_housing_characteristics_housing" role="dialog" class="modal fade"
     tabindex="-1" data-backdrop="static" data-keyboard="false"
     data-attention-animation="true" data-width="760">
    <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="icons-office-52"></i></button>
        <h4 class="modal-title"><strong><span
                    data-translate="housing_characteristics_add"></span></strong>
        </h4>
    </div>
    <div class="modal-body">
        <div class="tools">
            <a title="" data-original-title="" href="" class="collapse">
            </a>
            <a title="" data-original-title=""
               id="reload_housing_characteristics_housing" href="" class="reload">
            </a>
        </div>

        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="#" class="horizontal-form" enctype="multipart/form-data"
                  id="housing_characteristics_housing_form">
                <div class="form-body">
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-6">
                            <div class="form-group" style="margin-top: 5px">*
                                <span data-translate="count_asigned"></span>
                                <input class="form-control" value="1" min="1"
                                       placeholder="Escriba el Count_housing_characteristics..."
                                       type="number" required
                                       id="count_housing_characteristics"
                                       name="Housing_characteristics_housing[count_housing_characteristics]"
                                       onkeypress="return permite(event,'num')">
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="content box box-primary">
                                    <label>*
                                        <span data-translate="list_housing_characteristics_wihtout_asigned"></span>
                                    </label>
                                    <div id="gridselection_housing_characteristics"
                                         class="table table-striped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input value="insert" type="hidden"
                           id="taskhousing_characteristics_housing"
                           name="taskhousing_characteristics_housing">
                    <input value="-1" type="hidden" id="id_housing_characteristics"
                           name="Housing_characteristics_housing[id_housing_characteristics]">
                    <input value="-1" type="hidden" id="id_housing"
                           name="Housing_characteristics_housing[id_housing]">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">

                        <button type="button"
                                id="btnaction_housing_characteristics_housing"
                                class="btn btn-dark btn-rounded">
                            <span class="hidden-480" data-translate="btn_ok"></span>
                        </button>
                        <button type="button" data-dismiss="modal"
                                class="btn default btn-rounded">
                                                                <span class="hidden-480"
                                                                      data-translate="btn_cancel"></span>
                        </button>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
</div>
<!--end modal housing_characteristics_housing-->

<!--start modal service_housing-->
<div id="modal_service_housing" role="dialog" class="modal fade" tabindex="-1"
     data-backdrop="static" data-keyboard="false"
     data-attention-animation="true" data-width="760">
    <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true"><i class="icons-office-52"></i></button>
        <h4 class="modal-title"><strong><span
                    data-translate="housing_service_add"></span></strong></h4>
    </div>
    <div class="modal-body">
        <div class="tools">
            <a title="" data-original-title="" href="" class="collapse">
            </a>
            <a title="" data-original-title="" id="reload_housing_service"
               href="" class="reload">
            </a>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="#" class="horizontal-form"
                  enctype="multipart/form-data" id="service_housing_form">
                <div class="form-body">
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-6">
                            <div class="form-group" style="margin-top: 5px">
                                <label>*
                                <span data-translate="price"></span></label>
                                <input class="form-control" value=""
                                       placeholder="Escriba el Price..."
                                       required type="number" id="price"
                                       name="Service_housing[price]"
                                       onkeypress="return permite(event,'num_car')">
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="content box box-primary">
                                    <label>* <span
                                            data-translate="list_housing_service_wihtout_asigned"></span></label>
                                    <div id="gridselection_housing_service"
                                         class="table table-striped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input value="insert" type="hidden" id="taskservice_housing"
                           name="taskservice_housing">
                    <input value="-1" type="hidden" id="id_service_housing"
                           name="Service_housing[id_service_housing]">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" id="btnaction_service_housing"
                                class="btn btn-dark btn-rounded">
                                                                    <span class="hidden-480"
                                                                          data-translate="btn_ok"></span>
                        </button>
                        <button type="button" data-dismiss="modal"
                                class="btn default btn-rounded">
                                                                <span class="hidden-480"
                                                                      data-translate="btn_cancel"></span>
                        </button>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
            <!-- END FORM-->
        </div>
    </div>
</div>
<!--end modal service_housing-->

<!--start modal housind_price_season-->
<div id="modal_housing_season_price" role="dialog" class="modal fade"
     tabindex="-1"
     data-backdrop="static" data-keyboard="false"
     data-attention-animation="true" data-width="800">
    <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true"><i class="icons-office-52"></i></button>
        <h4 class="modal-title"><strong><span
                    data-translate="housing_price_season_add"></span></strong>
        </h4>
    </div>
    <div class="modal-body">
        <div class="tools">
            <a title="" data-original-title="" href="" class="collapse">
            </a>
            <a title="" data-original-title="" id="reload_housing_season_price"
               href="" class="reload">
            </a>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="#" class="horizontal-form"
                  enctype="multipart/form-data" id="housing_season_price_form">
                <div class="form-body">
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-6">*
                                    <span
                                        data-translate="name_touristic_season"></span>
                                </label>
                                <div class="input-icon right col-lg-12">
                                    <select class="form-control"
                                            style="width: 300px;"
                                            placeholder="Escriba el Id_season..."
                                            required id="id_season_combo"
                                            name="Housing_season_price[id_season]"
                                            onkeypress="return permite(event,'car')"></select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-6"
                                       data-translate="price_comition_housing"></label>
                                <div class="input-icon right col-lg-12">
                                    <input class="form-control" value=""
                                           placeholder="Escriba el Comition..."
                                           type="number"
                                           id="comition"
                                           name="Housing_season_price[comition]"
                                           onkeypress="return permite(event,'num_car')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-6">*
                                    <span  data-translate="price" ></span>
                                </label>
                                <div class="input-icon right col-lg-12">
                                    <input class="form-control" value=""
                                           placeholder="Escriba el Price_housing_season..."
                                           required type="number"
                                           id="price_housing_season"
                                           name="Housing_season_price[price_housing_season]"
                                           onkeypress="return permite(event,'num_car')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-6"
                                       data-translate="booking_deposit"></label>
                                <div class="input-icon right col-lg-12">
                                    <input class="form-control" value=""
                                           placeholder="Escriba el Booking_deposit..."
                                           type="number" id="booking_deposit"
                                           name="Housing_season_price[booking_deposit]"
                                           onkeypress="return permite(event,'num_car')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-6">*
                                    <span
                                        data-translate="coin_type"></span>
                                </label>
                                <div class="input-icon right col-lg-12">
                                    <select class="form-control"
                                            style="width: 300px;"
                                            placeholder="Escriba el Id_coin_type..."
                                            required id="id_coin_type_combo"
                                            name="Housing_season_price[id_coin_type]"
                                            onkeypress="return permite(event,'car')"></select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-6"
                                       data-translate="comition_for_publicitiy"></label>
                                <div class="input-icon right col-lg-12">
                                    <input class="form-control" value=""
                                           placeholder="Escriba el Comition_for_publicitiy..."
                                           type="number"
                                           id="comition_for_publicitiy"
                                           name="Housing_season_price[comition_for_publicitiy]"
                                           onkeypress="return permite(event,'num_car')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-12"
                                       data-translate="date_range_tourist_season"></label>

                                <div class="input-icon right col-lg-12">

                                    <input class="form-control" value=""
                                           placeholder="Escriba el Date_start..."
                                           type="text" id="date_start"
                                           name="Housing_season_price[date_start]"
                                           onkeypress="return permite(event,'date')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-12"
                                       data-translate="date_range_publicity"></label>
                                <div class="input-icon right col-lg-12">
                                    <input class="form-control" value=""
                                           placeholder="Escriba el Date_start_publicity..."
                                           required type="text"
                                           id="date_start_publicity"
                                           name="Housing_season_price[date_start_publicity]"
                                           onkeypress="return permite(event,'date')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <input value="insert" type="hidden"
                           id="taskhousing_season_price"
                           name="taskhousing_season_price">
                    <input value="-1" type="hidden"
                           id="id_housing_season_price"
                           name="Housing_season_price[id_housing_season_price]">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button"
                                id="btnaction_housing_season_price"
                                class="btn btn-dark btn-rounded">
                                                                    <span class="hidden-480"
                                                                          data-translate="btn_ok"></span>
                        </button>
                        <button type="button" data-dismiss="modal"
                                class="btn default btn-rounded">
                                                                <span class="hidden-480"
                                                                      data-translate="btn_cancel"></span>
                        </button>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
            <!-- END FORM-->
        </div>
    </div>
</div>
<!--end modal housind_price_season-->
<!--end MODALSSS-->




