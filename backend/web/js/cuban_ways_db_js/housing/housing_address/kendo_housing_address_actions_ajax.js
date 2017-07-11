/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:49 GMT-05:00 2016*/


$("#btn_modal_housing_address").click(function() {
	Housing_address.oldElement=null;
    $('#select2-id_town-container').html('');
    Housing_address.combobox_town.append('<option selected="" value=""></option>').change();
    Housing_address.housing_address_form.data('bootstrapValidator').resetForm(true);
    $('#housing_address_form')[0].reset();
	 $("#title_housing_address").html('Insertar Housing_address');
	 $("#taskhousing_address").val('insert');
	$('#select2-id_town_combo-container').html('');
    $("#modal_housing_address").modal();
	});

$("#reload_housing_address").click(function() {
	if($('#taskhousing_address').val()!='update') {
    $('#select2-id_town-container').html('');
    Housing_address.combobox_town.append('<option selected="" value=""></option>').change();
		Housing_address.housing_address_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Housing_address.housing_address_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_housing_address").val(Housing_address.oldElement.id_housing_address);
	 	$("#length").val(Housing_address.oldElement.length);
	 	$("#latitude").val(Housing_address.oldElement.latitude);
	 	$("#number_housing").val(Housing_address.oldElement.number_housing);
	 	$("#main_street").val(Housing_address.oldElement.main_street);
	 	$("#between_first").val(Housing_address.oldElement.between_first);
	 	$("#between_second").val(Housing_address.oldElement.between_second);
	 	Housing_address.combobox_town.append('<option selected="" value="'+Housing_address.oldElement.id_town+'">'+Housing_address.oldElement.name_town+'</option>').change();
	 	Housing_address.combobox_town.val(Housing_address.oldElement.id_town);
	 	$('#id_housing_address').val(Housing_address.oldElement.id_housing_address);
	 	$("#taskhousing_address").val('update');
		Housing_address.housing_address_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_housing_address").click(function() {
				var list='';
				var filters =  Housing_address.gridDataSource.filter();
				if(filters) {
					var allData = Housing_address.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Housing_address.gridDataSource.data();
				$('#housing_address_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_housing_address").click(function() {
    $('#list_housing_address_pdf').modal();
    $("#tbody_table_housing_address").html('');
    var list='';
    var filters =  Housing_address.gridDataSource.filter();
    if(filters) {
        var allData = Housing_address.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Housing_address.gridDataSource.data();
    list.forEach(Housing_address.list_pdf);
});

$("#export_housing_address_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_housing_address_pdf"))
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
		            $('#list_housing_address_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Housing_address_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_housing_address_importar").click(function() {
	$('#import_housing_address').modal();
});


$("#importar_housing_address_excel").click(function() {
		if(Housing_address.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/housing_address/load_excel";
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
									Housing_address.gridDataSource.read();
									$('#import_housing_address').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_housing_address(e) {

    Housing_address.housing_address_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Housing_address.finditem(e.id);
	 Housing_address.oldElement= dataItem;
	 $('#id_housing_address').val(dataItem.id_housing_address);
	 	$("#id_housing_address").val(Housing_address.oldElement.id_housing_address);
	 	$("#length").val(Housing_address.oldElement.length);
	 	$("#latitude").val(Housing_address.oldElement.latitude);
	 	$("#number_housing").val(Housing_address.oldElement.number_housing);
	 	$("#main_street").val(Housing_address.oldElement.main_street);
	 	$("#between_first").val(Housing_address.oldElement.between_first);
	 	$("#between_second").val(Housing_address.oldElement.between_second);
	 	Housing_address.combobox_town.append('<option selected="" value="'+Housing_address.oldElement.id_town+'">'+Housing_address.oldElement.name_town+'</option>').change();
	 	Housing_address.combobox_town.val(Housing_address.oldElement.id_town);
	 $("#taskhousing_address").val('update');
	 $("#title_housing_address").html('Actualizar Housing_address');
	 $("#modal_housing_address").modal();
	}


//Boton Accion
$('#btnaction_housing_address').click(function () {
    Housing_address.housing_address_form.data('bootstrapValidator').validate();
        if(Housing_address.housing_address_form.data('bootstrapValidator').isValid())
			{
       		var housing_address={};
       		housing_address.length=$("#length").val();
       		housing_address.latitude=$("#latitude").val();
       		housing_address.number_housing=$("#number_housing").val();
       		housing_address.main_street=$("#main_street").val();
       		housing_address.between_first=$("#between_first").val();
       		housing_address.between_second=$("#between_second").val();
       		housing_address.id_town=Housing_address.combobox_town.val();
       		var url=urlhome+"housing/housing_address/create";
        	if($('#taskhousing_address').val()=="update")
        		{
            		var url=urlhome+"housing/housing_address/update";
            		housing_address.id_housing_address=Housing_address.oldElement.id_housing_address;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Housing_address:housing_address,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskhousing_address').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El housing_address fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskhousing_address').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Housing_address.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_housing_address").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_housing_address").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_housing_address(e)
				{
				    var dataItem=Housing_address.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Housing_address?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing_address/delete",
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
				                    Housing_address.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_address.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_housing_address').click(function(){
        var checkbox_checked=$('#gridselection_housing_address .check_row:checked');

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
                      var dataItem=Housing_address.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/housing_address/delete",
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
				                    Housing_address.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_address.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
