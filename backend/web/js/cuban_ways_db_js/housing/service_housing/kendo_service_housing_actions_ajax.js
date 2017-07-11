/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


$("#btn_modal_service_housing").click(function() {
	Service_housing.oldElement=null;
    $('#select2-id_housing-container').html('');
    Service_housing.combobox_housing.append('<option selected="" value=""></option>').change();
    $('#select2-id_service-container').html('');
    Service_housing.combobox_housing_service.append('<option selected="" value=""></option>').change();
    Service_housing.service_housing_form.data('bootstrapValidator').resetForm(true);
    $('#service_housing_form')[0].reset();
	 $("#title_service_housing").html('Insertar Service_housing');
	 $("#taskservice_housing").val('insert');
	$('#select2-id_housing_combo-container').html('');
	$('#select2-id_service_combo-container').html('');
    $("#modal_service_housing").modal();
	});

$("#reload_service_housing").click(function() {
	if($('#taskservice_housing').val()!='update') {
    $('#select2-id_housing-container').html('');
    Service_housing.combobox_housing.append('<option selected="" value=""></option>').change();
    $('#select2-id_service-container').html('');
    Service_housing.combobox_housing_service.append('<option selected="" value=""></option>').change();
		Service_housing.service_housing_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Service_housing.service_housing_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_service_housing").val(Service_housing.oldElement.id_service_housing);
	 	$("#price").val(Service_housing.oldElement.price);
	 	$("#canceled").val(Service_housing.oldElement.canceled);
	 	Service_housing.combobox_housing.append('<option selected="" value="'+Service_housing.oldElement.id_housing+'">'+Service_housing.oldElement.name_housing+'</option>').change();
	 	Service_housing.combobox_housing.val(Service_housing.oldElement.id_housing);
	 	Service_housing.combobox_housing_service.append('<option selected="" value="'+Service_housing.oldElement.id_service+'">'+Service_housing.oldElement.name_service+'</option>').change();
	 	Service_housing.combobox_housing_service.val(Service_housing.oldElement.id_service);
	 	$('#id_service_housing').val(Service_housing.oldElement.id_service_housing);
	 	$("#taskservice_housing").val('update');
		Service_housing.service_housing_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_service_housing").click(function() {
				var list='';
				var filters =  Service_housing.gridDataSource.filter();
				if(filters) {
					var allData = Service_housing.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Service_housing.gridDataSource.data();
				$('#service_housing_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_service_housing").click(function() {
    $('#list_service_housing_pdf').modal();
    $("#tbody_table_service_housing").html('');
    var list='';
    var filters =  Service_housing.gridDataSource.filter();
    if(filters) {
        var allData = Service_housing.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Service_housing.gridDataSource.data();
    list.forEach(Service_housing.list_pdf);
});

$("#export_service_housing_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_service_housing_pdf"))
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
		            $('#list_service_housing_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Service_housing_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_service_housing_importar").click(function() {
	$('#import_service_housing').modal();
});


$("#importar_service_housing_excel").click(function() {
		if(Service_housing.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/service_housing/load_excel";
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
									Service_housing.gridDataSource.read();
									$('#import_service_housing').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_service_housing(e) {

    Service_housing.service_housing_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Service_housing.finditem(e.id);
	 Service_housing.oldElement= dataItem;
	 $('#id_service_housing').val(dataItem.id_service_housing);
	 	$("#id_service_housing").val(Service_housing.oldElement.id_service_housing);
	 	$("#price").val(Service_housing.oldElement.price);
	 	$("#canceled").val(Service_housing.oldElement.canceled);
	 	Service_housing.combobox_housing.append('<option selected="" value="'+Service_housing.oldElement.id_housing+'">'+Service_housing.oldElement.name_housing+'</option>').change();
	 	Service_housing.combobox_housing.val(Service_housing.oldElement.id_housing);
	 	Service_housing.combobox_housing_service.append('<option selected="" value="'+Service_housing.oldElement.id_service+'">'+Service_housing.oldElement.name_service+'</option>').change();
	 	Service_housing.combobox_housing_service.val(Service_housing.oldElement.id_service);
	 $("#taskservice_housing").val('update');
	 $("#title_service_housing").html('Actualizar Service_housing');
	 $("#modal_service_housing").modal();
	}


//Boton Accion
$('#btnaction_service_housing').click(function () {
    Service_housing.service_housing_form.data('bootstrapValidator').validate();
        if(Service_housing.service_housing_form.data('bootstrapValidator').isValid())
			{
       		var service_housing={};
       		service_housing.price=$("#price").val();
       		service_housing.canceled=$("#canceled").val();
       		service_housing.id_housing=Service_housing.combobox_housing.val();
       		service_housing.id_service=Service_housing.combobox_housing_service.val();
       		var url=urlhome+"housing/service_housing/create";
        	if($('#taskservice_housing').val()=="update")
        		{
            		var url=urlhome+"housing/service_housing/update";
            		service_housing.id_service_housing=Service_housing.oldElement.id_service_housing;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Service_housing:service_housing,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskservice_housing').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El service_housing fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskservice_housing').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Service_housing.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_service_housing").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_service_housing").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_service_housing(e)
				{
				    var dataItem=Service_housing.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Service_housing?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/service_housing/delete",
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
				                    Service_housing.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Service_housing.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_service_housing').click(function(){
        var checkbox_checked=$('#gridselection_service_housing .check_row:checked');

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
                      var dataItem=Service_housing.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/service_housing/delete",
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
				                    Service_housing.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Service_housing.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
