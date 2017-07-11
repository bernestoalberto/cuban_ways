/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/



$("#reload_housing_availability").click(function() {
	if($('#taskhousing_availability').val()!='update') {
    $('#select2-id_availability_state-container').html('');
    Housing_availability.combobox_availability_state.append('<option selected="" value=""></option>').change();
    $('#select2-id_housing-container').html('');
    Housing_availability.combobox_housing.append('<option selected="" value=""></option>').change();
    $('#select2-id_usuario-container').html('');
    Housing_availability.combobox_usuario.append('<option selected="" value=""></option>').change();
		Housing_availability.housing_availability_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Housing_availability.housing_availability_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_housing_availability").val(Housing_availability.oldElement.id_housing_availability);
	 	$("#description_housing_availability").val(Housing_availability.oldElement.description_housing_availability);
	 	$("#date_start").val(Housing_availability.oldElement.date_start);
	 	$("#date_end").val(Housing_availability.oldElement.date_end);
	 	Housing_availability.combobox_availability_state.append('<option selected="" value="'+Housing_availability.oldElement.id_availability_state+'">'+Housing_availability.oldElement.availability_state+'</option>').change();
	 	Housing_availability.combobox_availability_state.val(Housing_availability.oldElement.id_availability_state);
	 	Housing_availability.combobox_housing.append('<option selected="" value="'+Housing_availability.oldElement.id_housing+'">'+Housing_availability.oldElement.name_housing+'</option>').change();
	 	Housing_availability.combobox_housing.val(Housing_availability.oldElement.id_housing);
	 	Housing_availability.combobox_usuario.append('<option selected="" value="'+Housing_availability.oldElement.id_usuario+'">'+Housing_availability.oldElement.username+'</option>').change();
	 	Housing_availability.combobox_usuario.val(Housing_availability.oldElement.id_usuario);
	 	$('#id_housing_availability').val(Housing_availability.oldElement.id_housing_availability);
	 	$("#taskhousing_availability").val('update');
		Housing_availability.housing_availability_form.data('bootstrapValidator').validate();
	}
});

$("#pdf_housing_availability").click(function() {
    $('#list_housing_availability_pdf').modal();
    $("#tbody_table_housing_availability").html('');
    var list='';
    var filters =  Housing_availability.gridDataSource.filter();
    if(filters) {
        var allData = Housing_availability.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Housing_availability.gridDataSource.data();
    list.forEach(Housing_availability.list_pdf);
});

	$("#excel_housing_availability").click(function() {
				var list='';
				var filters =  Housing_availability.gridDataSource.filter();
				if(filters) {
					var allData = Housing_availability.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Housing_availability.gridDataSource.data();
				$('#housing_availability_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#export_housing_availability_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_housing_availability_pdf"))
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
		            $('#list_housing_availability_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Housing_availability_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_housing_availability_importar").click(function() {
	$('#import_housing_availability').modal();
});


$("#importar_housing_availability_excel").click(function() {
		if(Housing_availability.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/housing_availability/load_excel";
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
									Housing_availability.gridDataSource.read();
									$('#import_housing_availability').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

//Para chequear todos los elementos
$('#all_check_housing_availability').click(function () {
    var c = this.checked;
    $('#gridselection_housing_availability :checkbox').prop('checked',c);
});

//Eliminar elemento
				function delete_element_housing_availability(e)
				{
				    var dataItem=Housing_availability.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Housing_availability?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing_availability/delete",
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
				                    Housing_availability.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_availability.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_housing_availability').click(function(){
        var checkbox_checked=$('#gridselection_housing_availability .check_row:checked');

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
                      var dataItem=Housing_availability.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/housing_availability/delete",
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
				                    Housing_availability.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_availability.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
