/*Generado by Pro Generator */
/*@author Charlietyn  */
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/

var ComponentsHousing = function () {
    var initComponent = function () {

        /*Housing Formulario*/
        Housing_characteristics.gridDataSource.read();
        Housing.housing_form = $('#housing_form');
        //form MODALS
        Housing.housing_characteristics_housing_form= $('#housing_characteristics_housing_form');
        Housing.service_housing_form = $('#service_housing_form');
        Housing.housing_season_price_form = $('#housing_season_price_form');
        //form TABS
        Housing.form_tab_general_data = $('#form_tab_general_data');
        Housing.form_tab_housing_address = $('#form_tab_housing_address');
        Housing.form_tab_housing_characteristics = $('#form_tab_housing_characteristics');
        Housing.form_tab_housing_services = $('#form_tab_housing_services');
        Housing.form_tab_housing_price_season = $('#form_tab_housing_price_season');
        Housing.form_tab_housing_owner = $('#form_tab_housing_owner');

        //components
        Housing_address.combobox_town = $("#id_town_combo").select2({
            language: "es",
            width:'100%',
            ajax: {
                url: urlhome + "localization/town/list_json",
                dataType: 'json',
                delay: 100,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        combo: true
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.data,
                    };
                },
                cache: true
            }
        });
        Housing.combobox_housing_state_rent = $("#id_housing_state_rent_combo").select2({
            language: "es",
            ajax: {

                url: urlhome + "housing/housing_state_rent/list_json",
                dataType: 'json',
                delay: 100,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        combo: true
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.data,
                    };
                },
                cache: true
            }
        });
        Housing.combobox_housing_type = $("#id_housing_type_combo").select2({
            language: "es",

            ajax: {

                url: urlhome + "housing/housing_type/list_json",
                dataType: 'json',
                delay: 100,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        combo: true
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.data,
                    };
                },
                cache: true
            }
        });
        Housing_season_price.combobox_coin_type=$("#id_coin_type_combo").select2({
            language: "es",
            ajax: {
                url: urlhome+"nomenclature/coin_type/list_json",
                dataType: 'json',
                delay: 100,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        combo:true
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.data,
                    };
                },
                cache: true
            }
        });
        Housing_season_price.combobox_season=$("#id_season_combo").select2({
            language: "es",
            ajax: {
                url: urlhome+"nomenclature/season/list_json",
                dataType: 'json',
                delay: 100,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        combo:true
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.data,
                    };
                },
                cache: true
            }
        });
        Housing.combobox_owner = $("#id_owner_combo").select2({
            language: "es",
            ajax: {
                url: urlhome + "housing/owner/list_json",
                dataType: 'json',
                delay: 100,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        combo: true
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.data,
                    };
                },
                cache: true
            }
        });
        /*Date Range Picker  createdat*/
        $("#createdat").daterangepicker({
            singleDatePicker: true,
            startDate: moment(),
            format: 'MM/DD/YYYY',
            showDropdowns: true,
            readonly: true

        });
        Housing.createdat = $("#createdat").data('daterangepicker');

        /*Grid Housing*/
        var $kgridhousing = $("#gridselection_housing").kendoGrid({
            dataSource: Housing.gridDataSource,
            height: "10%",
            filterable: true,
            sortable: true,
            change: Housing.change,
            resizable: true,
            dataBound: Housing.dataBound,
            dataBinding: Housing.dataBinding,
            pageable: {
                buttonCount: 5,
                refresh: true,
                pageSizes: [2, 10, 20, 30, 50, 100]
            },
            columns: [
                {
                    field: "",
                    title: "",
                    width: '3%',
                    headerTemplate: "<input class='check_grid' id='all_check_housing' type='checkbox'/>",
                    template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
                }
                ,

                {
                    field: "id_housing",
                    template: '<div id="item" data-text="#: id_housing#">#: id_housing#</div>',
                    title: "Id_housing",
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,

                {
                    field: "name_housing",
                    template: '<div id="item" data-text="#: name_housing#">#: name_housing#</div>',
                    title: "Name_housing",
                    width: '6%',
                    type: "string"
                }
                ,

                {
                    field: "keywords_housing",
                    template: '<div id="item" data-text="#: keywords_housing#">#: keywords_housing#</div>',
                    title: "Keywords_housing",
                    width: '6%',
                    type: "string"
                }
                ,

                {
                    field: "announce",
                    template: '<div id="item" data-text="#: announce#">#: announce#</div>',
                    title: "Announce",
                    width: '6%',
                    type: "string"
                }
                ,

                {
                    field: "description",
                    template: '<div id="item" data-text="#: description#">#: description#</div>',
                    title: "Description",
                    width: '6%',
                    type: "string"
                }
                ,

                {
                    field: "id_housing_type",
                    title: "Id_housing_type",
                    template: '<div id="item" data-text="#: id_housing_type#">#: id_housing_type#</div>',
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,

                {
                    field: "id_housing_state_rent",
                    title: "Id_housing_state_rent",
                    template: '<div id="item" data-text="#: id_housing_state_rent#">#: id_housing_state_rent#</div>',
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,

                {
                    field: "createdat",
                    title: "Createdat",
                    width: '6%',
                    type: "date",
                    format: "{0:dd-MM-yyyy}"
                }
                ,

                {
                    field: "id_housing_address",
                    title: "Id_housing_address",
                    template: '<div id="item" data-text="#: id_housing_address#">#: id_housing_address#</div>',
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,

                {
                    field: "id_owner",
                    title: "Id_owner",
                    template: '<div id="item" data-text="#: id_owner#">#: id_owner#</div>',
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,
                {

                    template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>" +
                    "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
                    name: 'edit',
                    headerTemplate: "<p>Acciones</p>",
                    width: '10%'
                }
            ]
        });
        Housing.gridhousing = $("#gridselection_housing").data('kendoGrid');

        /*Grid Housing_characteristics*/
        var $kgridhousing_characteristics = $("#gridselection_housing_characteristics").kendoGrid({
            dataSource: Housing.gridDataSourceHC,
            height: "10%",
            filterable: true,
            sortable: true,
            change: Housing_characteristics.change,
            resizable: true,
            dataBound: Housing_characteristics.dataBound,
            dataBinding: Housing_characteristics.dataBinding,
            pageable: {
                buttonCount: 5,
                refresh: true,
                pageSizes: [2, 10, 20, 30, 50, 100]
            },
            columns: [
                {
                    field: "",
                    title: "",
                    width: '10%',
                    headerTemplate: "<input class='check_grid' id='all_check_housing_characteristics' type='checkbox'/>",
                    template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
                    hidden: false
                }
                ,

                {
                    field: "id_housing_characteristics",
                    template: '<div id="item" data-text="#: id_housing_characteristics#">#:id_housing_characteristics#</div>',
                    title: "Id_housing_characteristics",
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,

                {
                    field: "name_housing_characteristics",
                    template: '<div id="item" data-text="#: name_housing_characteristics#">#:name_housing_characteristics#</div>',
                    title: "Name_housing_characteristics",
                    width: '95%',
                    type: "string"
                }
            ]
        });
        Housing.gridhousing_characteristics = $("#gridselection_housing_characteristics").data('kendoGrid');

        /*Grid Housing_characteristics_housing*/
        var $kgridhousing_characteristics_housing = $("#gridselection_housing_characteristics_housing").kendoGrid({
            dataSource: Housing.gridDataSourceHCH,
            height: "10%",
            filterable: true,
            sortable: true,
            change: Housing_characteristics_housing.change,
            resizable: true,
            dataBound: Housing_characteristics_housing.dataBound,
            dataBinding: Housing_characteristics_housing.dataBinding,
            pageable: {
                buttonCount: 5,
                refresh: true,
                pageSizes: [2, 10, 20, 30, 50, 100]
            },
            columns: [
                {
                    field: "",
                    title: "",
                    width: '10%',
                    headerTemplate: "<input class='check_grid' id='all_check_housing_characteristics_housing' type='checkbox'/>",
                    template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
                    hidden: false
                }
                ,
                {
                    field: "name_housing_characteristics",
                    title: "Name_housing_characteristics",
                    template: '<div id="item" data-text="#: name_housing_characteristics#">#: name_housing_characteristics#</div>',
                    width: '60%',
                    type: "string"
                }
                ,
                {
                    field: "count_housing_characteristics",
                    template: '<div id="item" data-text="#: count_housing_characteristics#">#if( count_housing_characteristics==null){#<span>No tiene</span>#}else{##: count_housing_characteristics##}#</div>',
                    title: "Count_housing_characteristics",
                    width: '20%',
                    type: "number"
                }
                ,
                {
                    template: "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_characteristics_housing(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",

                    name: 'edit',
                    headerTemplate: "Acciones",
                    width: '15%'
                }
            ]
        });
        Housing.gridhousing_characteristics_housing = $("#gridselection_housing_characteristics_housing").data('kendoGrid');

        /*Grid Housing_service*/
        var $kgridhousing_service = $("#gridselection_housing_service").kendoGrid({
            dataSource: Housing_service.gridDataSource,
            height: "10%",
            filterable: true,
            sortable: true,
            change: Housing_service.change,
            resizable: true,
            dataBound: Housing_service.dataBound,
            dataBinding: Housing_service.dataBinding,
            pageable: {
                buttonCount: 5,
                refresh: true,
                pageSizes: [2, 10, 20, 30, 50, 100]
            },
            columns: [
                {
                    field: "",
                    title: "",
                    width: '5%',
                    headerTemplate: "<input class='check_grid' id='all_check_housing_service' type='checkbox'/>",
                    template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
                    hidden: false
                }
                ,

                {
                    field: "id_service",
                    template: '<div id="item" data-text="#: id_service#">#:id_service#</div>',
                    title: "Id_service",
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,

                {
                    field: "name_service",
                    template: '<div id="item" data-text="#: name_service#">#:name_service#</div>',
                    title: "Name_service",
                    width: '25%',
                    type: "string"
                }
                ,

                {
                    field: "description_service",
                    template: '<div id="item" data-text="#: description_service#">#if( description_service==null){#<span>No tiene</span>#}else{##: description_service##}#</div>',
                    title: "Description_service",
                    width: '45%',
                    type: "string"
                }


            ]
        });
        Housing.gridhousing_service = $("#gridselection_housing_service").data('kendoGrid');

        /*Grid Service_housing*/
        var $kgridservice_housing = $("#gridselection_service_housing").kendoGrid({
            dataSource: Service_housing.gridDataSource,
            height: "10%",
            filterable: true,
            sortable: true,
            change: Service_housing.change,
            resizable: true,
            dataBound: Service_housing.dataBound,
            dataBinding: Service_housing.dataBinding,
            pageable: {
                buttonCount: 5,
                refresh: true,
                pageSizes: [2, 10, 20, 30, 50, 100]
            },
            columns: [
                {
                    field: "",
                    title: "",
                    width: '10%',
                    headerTemplate: "<input class='check_grid' id='all_check_service_housing' type='checkbox'/>",
                    template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
                    hidden: false
                }
                ,

                {
                    field: "id_service_housing",
                    template: '<div id="item" data-text="#: id_service_housing#">#:id_service_housing#</div>',
                    title: "Id_service_housing",
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,

                {
                    field: "id_service",
                    title: "Id_service",
                    template: '<div id="item" data-text="#: id_service#">#:id_service#</div>',
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,
                {
                    field: "name_service",
                    title: "Name_service",
                    template: '<div id="item" data-text="#: name_service#">#: name_service#</div>',
                    width: '40%',
                    type: "string"
                }

                ,
                {
                    field: "price",
                    template: '<div id="item" data-text="#: price#">#:price#</div>',
                    title: "Price",
                    width: '20%',
                    type: "string"
                }
                ,

                {
                    field: "canceled",
                    template: '<div id="item" data-text="#: canceled#">#:canceled#</div>',
                    title: "Canceled",
                    width: '20%',
                    type: "string"
                }
                ,
                {
                    template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_service_housing(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>" +
                    "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_service_housing(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
                    name: 'edit',
                    headerTemplate: "Acciones",
                    width: '15%'
                }
            ]
        });
        Housing.gridservice_housing = $("#gridselection_service_housing").data('kendoGrid');

        /*Grid Housing_season_price*/
        var $kgridhousing_season_price = $("#gridselection_housing_season_price").kendoGrid({
            dataSource: Housing_season_price.gridDataSource,
            height: "10%",
            filterable: true,
            sortable: true,
            change: Housing_season_price.change,
            resizable: true,
            dataBound: Housing_season_price.dataBound,
            dataBinding: Housing_season_price.dataBinding,
            pageable: {
                buttonCount: 5,
                refresh: true,
                pageSizes: [2, 10, 20, 30, 50, 100]
            },
            columns: [
                {
                    field: "",
                    title: "",
                    width: '8%',
                    headerTemplate: "<input class='check_grid' id='all_check_housing_season_price' type='checkbox'/>",
                    template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
                    hidden: false
                }
                ,

                {
                    field: "id_housing_season_price",
                    template: '<div id="item" data-text="#: id_housing_season_price#">#:id_housing_season_price#</div>',
                    title: "Id_housing_season_price",
                    width: '0%',
                    type: "number",
                    hidden: true
                }

                ,
                {
                    field: "id_season",
                    title: "Id_season",
                    template: '<div id="item" data-text="#: id_season#">#:id_season#</div>',
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,
                {
                    field: "name_season",
                    title: "Name_season",
                    template: '<div id="item" data-text="#: name_season#">#: name_season#</div>',
                    width: '15%',
                    type: "string"
                }
                ,

                {
                    field: "price_housing_season",
                    template: '<div id="item" data-text="#: price_housing_season#">#:price_housing_season#</div>',
                    title: "Price_housing_season",
                    width: '12%',
                    type: "string"
                }
                ,

                {
                    field: "comition",
                    template: '<div id="item" data-text="#: comition#">#:comition#</div>',
                    title: "Comition",
                    width: '10%',
                    type: "string"
                }
                ,
                {
                    field: "id_coin_type",
                    title: "Id_coin_type",
                    template: '<div id="item" data-text="#: id_coin_type#">#:id_coin_type#</div>',
                    width: '0%',
                    type: "number",
                    hidden: true
                }
                ,
                {
                    field: "name_coin",
                    title: "Name_coin",
                    template: '<div id="item" data-text="#: name_coin#">#: name_coin#</div>',
                    width: '10%',
                    type: "string"
                }
                ,
                {
                    field: "booking_deposit",
                    template: '<div id="item" data-text="#: booking_deposit#">#if( booking_deposit==null){#<span>No tiene</span>#}else{##: booking_deposit##}#</div>',
                    title: "Booking_deposit",
                    width: '10%',
                    type: "string"
                }
                ,

                {
                    field: "comition_for_publicitiy",
                    template: '<div id="item" data-text="#: comition_for_publicitiy#">#if( comition_for_publicitiy==null){#<span>No tiene</span>#}else{##: comition_for_publicitiy##}#</div>',
                    title: "Comition_for_publicitiy",
                    width: '10%',
                    type: "string"
                }
                ,

                {
                    template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_season_price(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>" +
                    "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_season_price(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
                    name: 'edit',
                    headerTemplate: "Acciones",
                    width: '10%'
                }
            ]
        });
        Housing.gridhousing_season_price = $("#gridselection_housing_season_price").data('kendoGrid');

        /*Form Validation Import*/
        $('#importar_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es v�lido',
            fields: {
                'importar_excel': {
                    group: '.form-group',
                    validators: {
                        file: {
                            extension: 'xls,xlsx',
                            message: 'Debe tener una extension válida para Excel'
                        }
                        ,
                        notEmpty: {
                            message: 'Entre la dirección del Excel'
                        }
                    }
                },
            }
        });
        Housing.importarbootstrapValidator = $('#importar_form').data('bootstrapValidator');

        /*Form Validation_MODAL   housing_characteristics_housing_form  */
        $('#housing_characteristics_housing_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_characteristics_housing[count_housing_characteristics]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el count_housing_characteristics'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El count_housing_characteristics no puede tener mas de 10 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

            if(data.element[0].type.lastIndexOf("select")==0)
            {
                $('#select2-'+data.element[0].id+'-container').html('');
            }
            else
                $('#'+data.element[0].id).val('')
        });
        Housing.bootstrapValidator_modal_Housing_characteristics_housing=$('#housing_characteristics_housing_form').data('bootstrapValidator');

        /*Form Validation_MODAL  service_housing_form*/
        $('#service_housing_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Service_housing[price]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el price'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El price no puede tener mas de 8 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

            if(data.element[0].type.lastIndexOf("select")==0)
            {
                $('#select2-'+data.element[0].id+'-container').html('');
            }
            else
                $('#'+data.element[0].id).val('')
        });
        Housing.bootstrapValidator_modal_Service_housing=$('#service_housing_form').data('bootstrapValidator');

        /*Form Validation_MODAL housing_season_price_form*/
        $('#housing_season_price_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_season_price[price_housing_season]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el price_housing_season'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El price_housing_season no puede tener mas de 8 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[comition]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el comition'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El comition no puede tener mas de 8 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[id_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_housing'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_housing no puede tener mas de 10 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[id_season]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_season'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_season no puede tener mas de 10 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[id_coin_type]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_coin_type'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_coin_type no puede tener mas de 10 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[comition_for_publicitiy]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 17,
                            message: 'El comition_for_publicitiy no puede tener mas de 17 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[date_start_publicity]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el date_start_publicity'
                        },
                        stringLength: {
                            max: 13,
                            message: 'El date_start_publicity no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[date_end_publicity]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_end_publicity no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[booking_deposit]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 17,
                            message: 'El booking_deposit no puede tener mas de 17 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[date_start]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_start no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[date_end]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_end no puede tener mas de 13 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

            if(data.element[0].type.lastIndexOf("select")==0)
            {
                $('#select2-'+data.element[0].id+'-container').html('');
            }
            else
                $('#'+data.element[0].id).val('')
        });
        Housing.bootstrapValidator_modal_Housing_season_price=$('#housing_season_price_form').data('bootstrapValidator');

        /*Form Validation_tab_general_data*/
        $('#form_tab_general_data').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es válido',
            fields: {
                'Housing[name_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el nombre del alojamiento'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El nombre del alojamiento no puede tener más de 100 carácteres'
                        },
                    }
                }
                ,
                'Housing[keywords_housing]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 100,
                            message: 'Las palabras claves no pueden tener más de 100 carácteres'
                        },
                    }
                }
                ,
                'Housing[announce]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el anuncio del alojamiento'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El anuncio del alojamiento no puede tener más de 100 carácteres'
                        },
                    }
                }
                ,
                'Housing[description]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre la descripción'
                        },
                        stringLength: {
                            max: 2147483647,
                            message: 'La  descripción no puede tener más de 2147483647 carácteres'
                        },
                    }
                }
                ,
                'Housing[id_housing_type]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el tipo de alojamiento'
                        }
                    }
                }

            }
        }).on('error.field.bv', function (e, data) {

            if (data.element[0].type.lastIndexOf("select") == 0) {
                $('#select2-' + data.element[0].id + '-container').html('');
            }
            else
                $('#' + data.element[0].id).val('')
        });
        Housing.bootstrapValidator= $('#form_tab_general_data').data('bootstrapValidator');

        /*Form Validation_tab_housing_address*/
        $('#form_tab_housing_address').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es válido',
            fields: {
                'Housing_address[id_town]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el municipio'
                        }
                    }
                }
                ,
                'Housing_address[number_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el número de la casa '
                        },
                        stringLength: {
                            max: 10,
                            message: 'El número de la casa no puede tener más de 10 carácteres'
                        },
                    }
                }
                ,
                'Housing_address[main_street]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre la calle principal'
                        },
                        stringLength: {
                            max: 30,
                            message: 'La calle principal no puede tener más de 30 carácteres'
                        },
                    }
                }
                ,
                'Housing_address[between_first]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 30,
                            message: 'La primera entre calle no puede tener más de 30 carácteres'
                        },
                    }
                }
                ,
                'Housing_address[between_second]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 30,
                            message: 'La segunda entre calle no puede tener más de 30 carácteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

            if(data.element[0].type.lastIndexOf("select")==0)
            {
                $('#select2-'+data.element[0].id+'-container').html('');
            }
            else
                $('#'+data.element[0].id).val('')
        });
        Housing.bootstrapValidator_tab_Housing_address=$('#form_tab_housing_address').data('bootstrapValidator');

        /*Form Validation_tab_housing_characteristics*/
        $('#form_tab_housing_characteristics').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_characteristics_housing[id_housing_characteristics]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_housing_characteristics'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_housing_characteristics no puede tener mas de 10 caracteres'
                        },
                    }
                }
                ,
                'Housing_characteristics_housing[id_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_housing'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_housing no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_housing del housing_characteristics_housing ya esta insertado',
                            url:urlhome+'housing/housing_characteristics_housing/findbyukjson',
                            delay:250,
                            data: function(validator, $field, value) {
                                return {
                                    'Housing_characteristics_housing[id_housing_characteristics_housing]': validator.getFieldElements('Housing_characteristics_housing[id_housing_characteristics_housing]').val(),
                                    id_housing_characteristics_housing: validator.getFieldElements('Housing_characteristics_housing[id_housing_characteristics_housing]').val(),
                                }
                            }
                        }
                    }
                }
                ,
                'Housing_characteristics_housing[count_housing_characteristics]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el count_housing_characteristics'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El count_housing_characteristics no puede tener mas de 10 caracteres'
                        },
                    }
                }
                ,
                'Housing_characteristics_housing[cancelled]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el cancelled'
                        },
                        stringLength: {
                            max: 1,
                            message: 'El cancelled no puede tener mas de 1 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

            if(data.element[0].type.lastIndexOf("select")==0)
            {
                $('#select2-'+data.element[0].id+'-container').html('');
            }
            else
                $('#'+data.element[0].id).val('')
        });
        Housing.bootstrapValidator_tab_Housing_characteristics_housing=$('#form_tab_housing_characteristics').data('bootstrapValidator');

        /*Form Validation tab_housing_services*/
        $('#form_tab_housing_services').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Service_housing[price]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el price'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El price no puede tener mas de 8 caracteres'
                        },
                    }
                }
                ,
                'Service_housing[canceled]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el canceled'
                        },
                        stringLength: {
                            max: 1,
                            message: 'El canceled no puede tener mas de 1 caracteres'
                        },
                    }
                }
                ,
                'Service_housing[id_service]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_service'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_service no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_service del service_housing ya esta insertado',
                            url:urlhome+'housing/service_housing/findbyukjson',
                            delay:250,
                            data: function(validator, $field, value) {
                                return {
                                    'Service_housing[id_housing]': validator.getFieldElements('Service_housing[id_housing]').val(),
                                    id_service_housing: validator.getFieldElements('Service_housing[id_service_housing]').val(),
                                }
                            }
                        }
                    }
                }
                ,
                'Service_housing[id_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_housing'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_housing no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_housing del service_housing ya esta insertado',
                            url:urlhome+'housing/service_housing/findbyukjson',
                            delay:250,
                            data: function(validator, $field, value) {
                                return {
                                    'Service_housing[id_service]': validator.getFieldElements('Service_housing[id_service]').val(),
                                    id_service_housing: validator.getFieldElements('Service_housing[id_service_housing]').val(),
                                }
                            }
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

            if(data.element[0].type.lastIndexOf("select")==0)
            {
                $('#select2-'+data.element[0].id+'-container').html('');
            }
            else
                $('#'+data.element[0].id).val('')
        });
        Housing.bootstrapValidator_tab_Service_housing=$('#form_tab_housing_services').data('bootstrapValidator');

        /*Form Validation tab_hausing_price_season*/
        $('#form_tab_housing_price_season').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_season_price[price_housing_season]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el price_housing_season'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El price_housing_season no puede tener mas de 8 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[comition]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el comition'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El comition no puede tener mas de 8 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[cretedat]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el cretedat'
                        },
                        stringLength: {
                            max: 13,
                            message: 'El cretedat no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[id_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_housing'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_housing no puede tener mas de 10 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[id_season]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_season'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_season no puede tener mas de 10 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[id_coin_type]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_coin_type'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_coin_type no puede tener mas de 10 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[comition_for_publicitiy]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 17,
                            message: 'El comition_for_publicitiy no puede tener mas de 17 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[date_start_publicity]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el date_start_publicity'
                        },
                        stringLength: {
                            max: 13,
                            message: 'El date_start_publicity no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[date_end_publicity]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_end_publicity no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[booking_deposit]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 17,
                            message: 'El booking_deposit no puede tener mas de 17 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[date_start]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_start no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Housing_season_price[date_end]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_end no puede tener mas de 13 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

            if(data.element[0].type.lastIndexOf("select")==0)
            {
                $('#select2-'+data.element[0].id+'-container').html('');
            }
            else
                $('#'+data.element[0].id).val('')
        });
        Housing.bootstrapValidator_tab_Housing_season_price=$('#form_tab_housing_price_season').data('bootstrapValidator');

        /*Form Validation tab_owner*/
        $('#form_tab_housing_owner').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Owner[name_owner]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_owner'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_owner no puede tener mas de 100 caracteres'
                        },
                    }
                }
                ,
                'Owner[lastname_owner]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el lastname_owner'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El lastname_owner no puede tener mas de 100 caracteres'
                        },
                    }
                }
                ,
                'Owner[datebirth]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El datebirth no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Owner[email]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el email'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El email no puede tener mas de 100 caracteres'
                        },
                    }
                }
                ,
                'Owner[phone]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el phone'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El phone no puede tener mas de 100 caracteres'
                        },
                    }
                }
                ,
                'Owner[createdat]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el createdat'
                        },
                        stringLength: {
                            max: 13,
                            message: 'El createdat no puede tener mas de 13 caracteres'
                        },
                    }
                }
                ,
                'Owner[identification]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el identification'
                        },
                        stringLength: {
                            max: 15,
                            message: 'El identification no puede tener mas de 15 caracteres'
                        },
                        remote: {

                            message: 'Este identification del owner ya esta insertado',
                            url:urlhome+'housing/owner/findbyukjson',
                            delay:250,
                            data: function(validator, $field, value) {
                                return {
                                    id_owner: validator.getFieldElements('Owner[id_owner]').val(),
                                }
                            }
                        }
                    }
                }
                ,
                'Owner[name_owner_incharge]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 100,
                            message: 'El name_owner_incharge no puede tener mas de 100 caracteres'
                        },
                    }
                }
                ,
                'Owner[lastname_owner_incharge]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 100,
                            message: 'El lastname_owner_incharge no puede tener mas de 100 caracteres'
                        },
                    }
                }
                ,
                'Owner[bank_account]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 50,
                            message: 'El bank_account no puede tener mas de 50 caracteres'
                        },
                    }
                }
                ,
                'Owner[photo]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 150,
                            message: 'El photo no puede tener mas de 150 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

            $('#'+data.element[0].id).val('')
        });
        Housing.bootstrapValidator_tab_Owner=$('#form_tab_housing_owner').data('bootstrapValidator');

    }
    return {
        //main function to initiate the module
        init: function () {
            //Para chequear todos los elementos
            FormDropzone.init();
            initComponent();
           //Para chequear todos los elementos
            $('#all_check_housing').click(function () {
                var c = this.checked;
                $('#gridselection_housing :checkbox').prop('checked', c);
            });

            $('#all_check_housing_characteristics').click(function () {
                var c = this.checked;
                $('#gridselection_housing_characteristics :checkbox').prop('checked', c);
            });

            $('#all_check_housing_characteristics_housing').click(function () {
                var c = this.checked;
                $('#gridselection_housing_characteristics_housing :checkbox').prop('checked', c);
            });


            $('#all_check_housing_service').click(function () {
                var c = this.checked;
                $('#gridselection_housing_service :checkbox').prop('checked', c);
            });

            $('#all_check_service_housing').click(function () {
                var c = this.checked;
                $('#gridselection_service_housing :checkbox').prop('checked', c);
            });

             $('#all_check_housing_season_price').click(function () {
             var c = this.checked;
             $('#gridselection_housing_season_price :checkbox').prop('checked',c);
             });



            //Convertir a Icheck
            $('#all_check_housing').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
            $('#all_check_housing_characteristics_housing').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });

            $('#all_check_housing_characteristics').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });

            $('#all_check_service_housing').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });

            $('#all_check_housing_service').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });

            $('#all_check_housing_season_price').iCheck({
             checkboxClass: 'icheckbox_square-blue',
             radioClass: 'iradio_square-blue',
             increaseArea: '20%'
             });

           //Para deschequear y chequear todos los elementos
            $('#all_check_housing').on('ifChecked', function (event) {
                $('.check_row').iCheck('check');
            });
            $('#all_check_housing').on('ifUnchecked', function (event) {
                $('.check_row').iCheck('uncheck');
            });


            $('#all_check_housing_characteristics').on('ifChecked', function (event) {
                $('.check_row').iCheck('check');
            });
            $('#all_check_housing_characteristics').on('ifUnchecked', function (event) {
                $('.check_row').iCheck('uncheck');
            });

            $('#all_check_housing_characteristics_housing').on('ifChecked', function (event) {
                $('.check_row').iCheck('check');
            });
            $('#all_check_housing_characteristics_housing').on('ifUnchecked', function (event) {
                $('.check_row').iCheck('uncheck');
            });

            $('#all_check_housing_service').on('ifChecked', function (event) {
                $('.check_row').iCheck('check');
            });
            $('#all_check_housing_service').on('ifUnchecked', function (event) {
                $('.check_row').iCheck('uncheck');
            });

            $('#all_check_service_housing').on('ifChecked', function (event) {
                $('.check_row').iCheck('check');
            });
            $('#all_check_service_housing').on('ifUnchecked', function (event) {
                $('.check_row').iCheck('uncheck');
            });

            $('#all_check_housing_season_price').on('ifChecked', function (event) {
                $('.check_row').iCheck('check');
            });
            $('#all_check_housing_season_price').on('ifUnchecked', function (event) {
                $('.check_row').iCheck('uncheck');
            });

        }
    };

}();

