/*Generado by Pro Generator */
/*@author Charlietyn  */
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/


$("#btn_modal_housing_characteristics_housing").click(function () {
    Housing.datasourceHC_function();
    Housing.gridDataSourceHC.read();
    $('#all_check_housing_characteristics').iCheck('uncheck');
    $("#modal_housing_characteristics_housing").modal();
});


$("#btn_modal_service_housing").click(function () {
    $("#modal_service_housing").modal();
});


$("#btn_modal_housing_season_price").click(function () {
    $("#modal_housing_season_price").modal();
});



//Boton MODAL - Accion btnaction_housing_characteristics_housing
$('#btnaction_housing_characteristics_housing').click(function () {
    Housing.housing_characteristics_housing_form.data('bootstrapValidator').validate();
    if(Housing.housing_characteristics_housing_form.data('bootstrapValidator').isValid())
    {
        var checkbox_checked=$('#gridselection_housing_characteristics .check_row:checked');
        if(checkbox_checked.length > 0)
        {
            var array=[];
            checkbox_checked.each(function(){
                    var dataItem=Housing.finditemHC($(this).attr('id'));
                    dataItem.count_housing_characteristics=$('#count_housing_characteristics').val()
                    Housing.datasourceHCH.push(dataItem);
                }
            );
            var array=Housing.datasourceHC_function();
            Housing.datasourceHC_function();
            console.log(array);
            Housing.gridDataSourceHCH.read();
            Housing.gridDataSourceHC.read();
        }
        $("#modal_housing_characteristics_housing").modal('hide');
    }
});

//Boton MODAL -  Accion btnaction_service_housing
$('#btnaction_service_housing').click(function () {
    Housing.service_housing_form.data('bootstrapValidator').validate();
    if(Housing.service_housing_form.data('bootstrapValidator').isValid())
    {
    }
});

//Boton MODAL -  Accion btnaction_housing_season_price
$('#btnaction_housing_season_price').click(function () {
    Housing.housing_season_price_form.data('bootstrapValidator').validate();
    if(Housing.housing_season_price_form.data('bootstrapValidator').isValid())
    {
    }
});



$("#btnaction_housing").click(function () {
    //validando los tabs
    $("#form_tab_general_data").data('bootstrapValidator').validate();
    $("#form_tab_housing_address").data('bootstrapValidator').validate();
    $("#form_tab_housing_characteristics").data('bootstrapValidator').validate();
    $("#form_tab_housing_services").data('bootstrapValidator').validate();
    $("#form_tab_housing_price_season").data('bootstrapValidator').validate();
    $("#form_tab_housing_owner").data('bootstrapValidator').validate();


    //declarando las valiables para almacenar
    //form_tab_general_data
    var Housing = {};
    Housing.name_housing = $('#name_housing').val();
    Housing.announce = $('#announce').val();
    Housing.id_housing_type = $('#id_housing_type').val();
    Housing.keywords_housing = $('#keywords_housing').val();
    Housing.description = $('#description').val();
    //form_tab_housing_address
    var Housing_address = {};
    Housing_address.id_town = $('#id_town').val();
    Housing_address.number_housing = $('#number_housing').val();
    Housing_address.main_street = $('#main_street').val();
    Housing_address.between_first = $('#between_first').val();
    Housing_address.between_second = $('#between_second').val();
    //form_tab_housing_characteristics
    Housing_characteristics_housing.gridDataSourceHCH._data;

    //form_tab_housing_service

    //form_tab_housing_price_season

    //form_tab_housing_image ----to do
    //
    //
    //
    //


    //form_tab_housing_owner
    var Owner = {};
    Owner.name_owner = $('#name_owner').val();
    Owner.lastname_owner = $('#lastname_owner').val();
    Owner.identification = $('#identification').val();
    Owner.photo = $('#photo').val();
    Owner.datebirth = $('#datebirth').val();
    Owner.bank_account = $('#bank_account').val();
    Owner.email = $('#email').val();
    Owner.phone = $('#phone').val();
    Owner.name_owner_incharge = $('#name_owner_incharge').val();
    Owner.lastname_owner_incharge = $('#lastname_owner_incharge').val();
    //Post
});


$("#reload_housing").click(function () {
    if ($('#taskhousing').val() != 'update') {
        $('#select2-id_housing_address-container').html('');
        Housing.combobox_housing_address.append('<option selected="" value=""></option>').change();
        $('#select2-id_housing_state_rent-container').html('');
        Housing.combobox_housing_state_rent.append('<option selected="" value=""></option>').change();
        $('#select2-id_housing_type-container').html('');
        Housing.combobox_housing_type.append('<option selected="" value=""></option>').change();
        $('#select2-id_owner-container').html('');
        Housing.combobox_owner.append('<option selected="" value=""></option>').change();
        Housing.housing_form.data('bootstrapValidator').resetForm(true);
    }
    else {
        Housing.housing_form.data('bootstrapValidator').resetForm(true);
        $("#id_housing").val(Housing.oldElement.id_housing);
        $("#name_housing").val(Housing.oldElement.name_housing);
        $("#keywords_housing").val(Housing.oldElement.keywords_housing);
        $("#announce").val(Housing.oldElement.announce);
        $("#description").val(Housing.oldElement.description);
        $("#createdat").val(Housing.oldElement.createdat);
        Housing.combobox_housing_address.append('<option selected="" value="' + Housing.oldElement.id_housing_address + '">' + Housing.oldElement.id_town + '</option>').change();
        Housing.combobox_housing_address.val(Housing.oldElement.id_housing_address);
        Housing.combobox_housing_state_rent.append('<option selected="" value="' + Housing.oldElement.id_housing_state_rent + '">' + Housing.oldElement.name_housing_state_rent + '</option>').change();
        Housing.combobox_housing_state_rent.val(Housing.oldElement.id_housing_state_rent);
        Housing.combobox_housing_type.append('<option selected="" value="' + Housing.oldElement.id_housing_type + '">' + Housing.oldElement.name_housing_type + '</option>').change();
        Housing.combobox_housing_type.val(Housing.oldElement.id_housing_type);
        Housing.combobox_owner.append('<option selected="" value="' + Housing.oldElement.id_owner + '">' + Housing.oldElement.name_owner + '</option>').change();
        Housing.combobox_owner.val(Housing.oldElement.id_owner);
        $('#id_housing').val(Housing.oldElement.id_housing);
        $("#taskhousing").val('update');
        Housing.housing_form.data('bootstrapValidator').validate();
    }
});

$("#pdf_housing").click(function () {
    $('#list_housing_pdf').modal();
    $("#tbody_table_housing").html('');
    var list = '';
    var filters = Housing.gridDataSource.filter();
    if (filters) {
        var allData = Housing.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list = Housing.gridDataSource.data();
    list.forEach(Housing.list_pdf);
});

$("#excel_housing").click(function () {
    var list = '';
    var filters = Housing.gridDataSource.filter();
    if (filters) {
        var allData = Housing.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list = Housing.gridDataSource.data();
    $('#housing_export').val(JSON.stringify(list));
    $('#form_excel_export').submit();
});

$("#export_housing_pdf").click(function () {
    $('body').modalmanager('loading');
    kendo.drawing.drawDOM($("#table_housing_pdf"))
        .then(function (group) {
            // Render the result as a PDF file
            return kendo.drawing.exportPDF(group, {
                paperSize: "auto",
                margin: {left: "1cm", top: "1cm", right: "1cm", bottom: "1cm"}
            });
        })
        .done(function (data) {
            // Save the PDF file
            $('body').modalmanager('removeLoading');
            $('#list_housing_pdf').modal('hide');
            kendo.saveAs({
                dataURI: data,
                fileName: "Housing_Report_PDF.pdf",
                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
            });
        });
});

$("#excel_housing_importar").click(function () {
    $('#import_housing').modal();
});


$("#importar_housing_excel").click(function () {
    if (Housing.importarbootstrapValidator.isValid()) {
        var data = new FormData();
        var excel = $('#importar_excel')[0].files[0];
        data.append('excel', excel);
        data.append('_backendCSRF', _csrf);
        var url = urlhome + "housing/housing/load_excel";
        $.ajax({
            type: "POST",
            url: url,
            contentType: false, //Debe estar en false para que pase el objeto sin procesar
            data: data, //Le pasamos el objeto que creamos con los archivos
            processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
            cache: false, //Para que el formulario no guarde cache
            success: function (response) {
                var result = jQuery.parseJSON(response);
                if (!result.success) {
                    $('#text-error').html(result.message);
                    $.smallBox({
                        title: '',
                        content: $('#message-error').html(),
                        color: "#BA0916",
                        timeout: 6000
                    })
                }
                else {
                    Housing.gridDataSource.read();
                    $('#import_housing').modal('hide');
                    img = urlhome + "../themes/inrh/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C', 'Los Elementos fueron importados con exito', result.message, 5000, img)
                }

            }
        });
    }
});

//Para chequear todos los elementos
$('#all_check_housing').click(function () {
    var c = this.checked;
    $('#gridselection_housing :checkbox').prop('checked', c);
});

//Eliminar elemento
function delete_element_housing(e) {
    var dataItem = Housing.finditem(e.id);
    var array = [];
    array.push(dataItem);
    $.MetroMessageBox({
            title: "<span class='fa fa-trash-o'></span> Eliminar ",
            content: "<p class='fg-white'>Desea eliminar este Housing?</p> ",
            NormalButton: "#232323",
            ActiveButton: "#008a00 ",
            buttons: " [Cancelar][Aceptar]"
        }, function (a) {
            if (a == "Aceptar") {
                $.ajax({
                    type: "POST",
                    url: urlhome + "/housing/housing/delete",
                    data: {
                        array: JSON.stringify(array),
                        _backendCSRF: _csrf
                    },
                    success: function (response) {
                        if (response.success == true) {
                            img = urlhome + "../themes/make/assets/notifications/img/ok.png ",
                                NotificationW8('#2D8F3C', 'Elemento eliminado correctamente', response.message, 5000, img)
                        }
                        else {
                            img = urlhome + "../themes/make/assets/notifications/img/error.png ",
                                NotificationW8('#D91E18', 'Error en eliminacion', response.message, 5000, img)
                        }
                        Housing.gridDataSource.read();
                    },
                    error: function (response) {
                        if (response) {
                            img = urlhome + "../themes/make/assets/notifications/img/error.png ",
                                NotificationW8('#D91E18', 'Error en eliminacion', response.responseJSON.name, 5000, img)
                        }
                        Housing.gridDataSource.read();
                    }
                });
            }
            else
                close();
        }
    )
}

$('#deletebutton_housing').click(function () {
    var checkbox_checked = $('#gridselection_housing .check_row:checked');

    if (checkbox_checked.length == 0) {

        $.smallBox({
            title: "<span class='fa fa-trash-o'></span>     Eliminar Elemento ",
            content: "<p>Debe seleccionar al menos un elemento a eliminar</p>",
            color: "#F2092A",
            timeout: 1000,
            top: 10
        })
    }
    else {
        var array = [];
        checkbox_checked.each(function () {
                var dataItem = Housing.finditem($(this).attr('id'));
                array.push(dataItem);
            }
        );
        $.MetroMessageBox({
            title: "<span class='fa fa-trash-o'></span> Eliminar ",
            content: "<p class='fg-white'>Desea eliminar los elementos seleccionados?</p> ",
            NormalButton: "#232323",
            ActiveButton: "#008a00 ",
            buttons: " [Cancelar][Aceptar]"
        }, function (a) {
            if (a == "Aceptar") {
                $.ajax({
                    type: "POST",
                    url: urlhome + "/housing/housing/delete",
                    data: {
                        array: JSON.stringify(array),
                        _backendCSRF: _csrf
                    },
                    success: function (response) {
                        if (response.success == true) {
                            img = urlhome + "../themes/make/assets/notifications/img/ok.png ",
                                NotificationW8('#2D8F3C', 'Elemento eliminado correctamente', response.message, 5000, img)
                        }
                        else {
                            img = urlhome + "../themes/make/assets/notifications/img/error.png ",
                                NotificationW8('#D91E18', 'Error en eliminacion', response.message, 5000, img)
                        }
                        Housing.gridDataSource.read();
                    },
                    error: function (response) {
                        if (response) {
                            img = urlhome + "../themes/make/assets/notifications/img/error.png ",
                                NotificationW8('#D91E18', 'Error en eliminacion', response.responseJSON.name, 5000, img)
                        }
                        Housing.gridDataSource.read();
                    }
                });
            }
            else
                close();

        })
    }
});
