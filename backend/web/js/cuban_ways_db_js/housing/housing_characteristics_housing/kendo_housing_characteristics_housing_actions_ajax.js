/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:28 GMT-05:00 2016*/


$("#btn_modal_housing_characteristics_housing").click(function() {
	Housing_characteristics_housing.oldElement=null;
    $('#select2-id_housing-container').html('');
    Housing_characteristics_housing.combobox_housing.append('<option selected="" value=""></option>').change();
    $('#select2-id_housing_characteristics-container').html('');
    Housing_characteristics_housing.combobox_housing_characteristics.append('<option selected="" value=""></option>').change();
    Housing_characteristics_housing.housing_characteristics_housing_form.data('bootstrapValidator').resetForm(true);
    $('#housing_characteristics_housing_form')[0].reset();
	 $("#title_housing_characteristics_housing").html('Insertar Housing_characteristics_housing');
	 $("#taskhousing_characteristics_housing").val('insert');
	$('#select2-id_housing_combo-container').html('');
	$('#select2-id_housing_characteristics_combo-container').html('');
    $("#modal_housing_characteristics_housing").modal();
	});

$("#reload_housing_characteristics_housing").click(function() {
	if($('#taskhousing_characteristics_housing').val()!='update') {
    $('#select2-id_housing-container').html('');
    Housing_characteristics_housing.combobox_housing.append('<option selected="" value=""></option>').change();
    $('#select2-id_housing_characteristics-container').html('');
    Housing_characteristics_housing.combobox_housing_characteristics.append('<option selected="" value=""></option>').change();
		Housing_characteristics_housing.housing_characteristics_housing_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Housing_characteristics_housing.housing_characteristics_housing_form.data('bootstrapValidator').resetForm(true);
	 	$("#count_housing_characteristics").val(Housing_characteristics_housing.oldElement.count_housing_characteristics);
	 	$("#cancelled").val(Housing_characteristics_housing.oldElement.cancelled);
	 	$("#id_housing_characteristics_housing").val(Housing_characteristics_housing.oldElement.id_housing_characteristics_housing);
	 	Housing_characteristics_housing.combobox_housing.append('<option selected="" value="'+Housing_characteristics_housing.oldElement.id_housing+'">'+Housing_characteristics_housing.oldElement.name_housing+'</option>').change();
	 	Housing_characteristics_housing.combobox_housing.val(Housing_characteristics_housing.oldElement.id_housing);
	 	Housing_characteristics_housing.combobox_housing_characteristics.append('<option selected="" value="'+Housing_characteristics_housing.oldElement.id_housing_characteristics+'">'+Housing_characteristics_housing.oldElement.name_housing_characteristics+'</option>').change();
	 	Housing_characteristics_housing.combobox_housing_characteristics.val(Housing_characteristics_housing.oldElement.id_housing_characteristics);
	 	$('#id_housing_characteristics_housing').val(Housing_characteristics_housing.oldElement.id_housing_characteristics_housing);
	 	$("#taskhousing_characteristics_housing").val('update');
		Housing_characteristics_housing.housing_characteristics_housing_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_housing_characteristics_housing").click(function() {
				var list='';
				var filters =  Housing_characteristics_housing.gridDataSource.filter();
				if(filters) {
					var allData = Housing_characteristics_housing.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Housing_characteristics_housing.gridDataSource.data();
				$('#housing_characteristics_housing_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_housing_characteristics_housing").click(function() {
    $('#list_housing_characteristics_housing_pdf').modal();
    $("#tbody_table_housing_characteristics_housing").html('');
    var list='';
    var filters =  Housing_characteristics_housing.gridDataSource.filter();
    if(filters) {
        var allData = Housing_characteristics_housing.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Housing_characteristics_housing.gridDataSource.data();
    list.forEach(Housing_characteristics_housing.list_pdf);
});

$("#export_housing_characteristics_housing_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_housing_characteristics_housing_pdf"))
		        .then(function(group) {
		            // Render the result as a PDF file
		            return kendo.drawing.exportPDF(group, {
		                paperSize: "auto",
		                margin: { left: "1cm", top: "1cm", right: "1cm", bottom: "1cm" }
		            });
		        })
		        .done(function(data) {
		            // Save the PDF file
		            $('body').modalmanager('removeLoading');
		            $('#list_housing_characteristics_housing_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Housing_characteristics_housing_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_housing_characteristics_housing_importar").click(function() {
	$('#import_housing_characteristics_housing').modal();
});


$("#importar_housing_characteristics_housing_excel").click(function() {
		if(Housing_characteristics_housing.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/housing_characteristics_housing/load_excel";
						$.ajax({
							type: "POST",
							url:url,
							contentType:false, //Debe estar en false para que pase el objeto sin procesar
							data:data, //Le pasamos el objeto que creamos con los archivos
							processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
							cache:false, //Para que el formulario no guarde cache
							success:function(response){
								var result=jQuery.parseJSON(response);
								if(!result.success)
								{
									$('#text-error').html(result.message);
									$.smallBox({
										title: '',
										content:$('#message-error').html(),
										color: "#BA0916",
										timeout: 6000
									})
								}
								else
								{
									Housing_characteristics_housing.gridDataSource.read();
									$('#import_housing_characteristics_housing').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_housing_characteristics_housing(e) {

    Housing_characteristics_housing.housing_characteristics_housing_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Housing_characteristics_housing.finditem(e.id);
	 Housing_characteristics_housing.oldElement= dataItem;
	 $('#id_housing_characteristics_housing').val(dataItem.id_housing_characteristics_housing);
	 	$("#count_housing_characteristics").val(Housing_characteristics_housing.oldElement.count_housing_characteristics);
	 	$("#cancelled").val(Housing_characteristics_housing.oldElement.cancelled);
	 	$("#id_housing_characteristics_housing").val(Housing_characteristics_housing.oldElement.id_housing_characteristics_housing);
	 	Housing_characteristics_housing.combobox_housing.append('<option selected="" value="'+Housing_characteristics_housing.oldElement.id_housing+'">'+Housing_characteristics_housing.oldElement.name_housing+'</option>').change();
	 	Housing_characteristics_housing.combobox_housing.val(Housing_characteristics_housing.oldElement.id_housing);
	 	Housing_characteristics_housing.combobox_housing_characteristics.append('<option selected="" value="'+Housing_characteristics_housing.oldElement.id_housing_characteristics+'">'+Housing_characteristics_housing.oldElement.name_housing_characteristics+'</option>').change();
	 	Housing_characteristics_housing.combobox_housing_characteristics.val(Housing_characteristics_housing.oldElement.id_housing_characteristics);
	 $("#taskhousing_characteristics_housing").val('update');
	 $("#title_housing_characteristics_housing").html('Actualizar Housing_characteristics_housing');
	 $("#modal_housing_characteristics_housing").modal();
	}


//Boton Accion
$('#btnaction_housing_characteristics_housing').click(function () {
    Housing_characteristics_housing.housing_characteristics_housing_form.data('bootstrapValidator').validate();
        if(Housing_characteristics_housing.housing_characteristics_housing_form.data('bootstrapValidator').isValid())
			{
       		var housing_characteristics_housing={};
       		housing_characteristics_housing.count_housing_characteristics=$("#count_housing_characteristics").val();
       		housing_characteristics_housing.cancelled=$("#cancelled").val();
       		housing_characteristics_housing.id_housing=Housing_characteristics_housing.combobox_housing.val();
       		housing_characteristics_housing.id_housing_characteristics=Housing_characteristics_housing.combobox_housing_characteristics.val();
       		var url=urlhome+"housing/housing_characteristics_housing/create";
        	if($('#taskhousing_characteristics_housing').val()=="update")
        		{
            		var url=urlhome+"housing/housing_characteristics_housing/update";
            		housing_characteristics_housing.id_housing_characteristics_housing=Housing_characteristics_housing.oldElement.id_housing_characteristics_housing;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Housing_characteristics_housing:housing_characteristics_housing,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskhousing_characteristics_housing').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El housing_characteristics_housing fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskhousing_characteristics_housing').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Housing_characteristics_housing.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_housing_characteristics_housing").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_housing_characteristics_housing").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_housing_characteristics_housing(e)
				{
				    var dataItem=Housing_characteristics_housing.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Housing_characteristics_housing?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing_characteristics_housing/delete",
				                data:{
				                    array:JSON.stringify(array),
				                    _backendCSRF:_csrf
				                },
				                success:function(response){
				                    if(response.success==true) {
				                        img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
				                            NotificationW8('#2D8F3C','Elemento eliminado correctamente', response.message, 5000,img)
			                    }
				                    else
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.message ,5000,img)
				                    }
				                    Housing_characteristics_housing.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_characteristics_housing.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_housing_characteristics_housing').click(function(){
        var checkbox_checked=$('#gridselection_housing_characteristics_housing .check_row:checked');

        if(checkbox_checked.length==0)
        {

            $.smallBox({
                title: "<span class='fa fa-trash-o'></span>     Eliminar Elemento ",
                content: "<p>Debe seleccionar al menos un elemento a eliminar</p>",
                color: "#F2092A",
                timeout: 1000,
                top:10
            })
        }
        else {
            var array=[];
            checkbox_checked.each(function(){
                      var dataItem=Housing_characteristics_housing.finditem($(this).attr('id'));
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
                if(a=="Aceptar")
                {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing_characteristics_housing/delete",
				                data:{
				                    array:JSON.stringify(array),
				                    _backendCSRF:_csrf
				                },
				                success:function(response){
				                    if(response.success==true) {
				                        img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
				                            NotificationW8('#2D8F3C','Elemento eliminado correctamente', response.message, 5000,img)
			                    }
				                    else
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.message ,5000,img)
				                    }
				                    Housing_characteristics_housing.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_characteristics_housing.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
