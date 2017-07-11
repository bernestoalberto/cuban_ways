/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


$("#btn_modal_housing_state_rent").click(function() {
	Housing_state_rent.oldElement=null;
    Housing_state_rent.housing_state_rent_form.data('bootstrapValidator').resetForm(true);
    $('#housing_state_rent_form')[0].reset();
	 $("#title_housing_state_rent").html('Insertar Housing_state_rent');
	 $("#taskhousing_state_rent").val('insert');
    $("#modal_housing_state_rent").modal();
	});

$("#reload_housing_state_rent").click(function() {
	if($('#taskhousing_state_rent').val()!='update') {
		Housing_state_rent.housing_state_rent_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Housing_state_rent.housing_state_rent_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_housing_state_rent").val(Housing_state_rent.oldElement.id_housing_state_rent);
	 	$("#name_housing_state_rent").val(Housing_state_rent.oldElement.name_housing_state_rent);
	 	$('#id_housing_state_rent').val(Housing_state_rent.oldElement.id_housing_state_rent);
	 	$("#taskhousing_state_rent").val('update');
		Housing_state_rent.housing_state_rent_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_housing_state_rent").click(function() {
				var list='';
				var filters =  Housing_state_rent.gridDataSource.filter();
				if(filters) {
					var allData = Housing_state_rent.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Housing_state_rent.gridDataSource.data();
				$('#housing_state_rent_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_housing_state_rent").click(function() {
    $('#list_housing_state_rent_pdf').modal();
    $("#tbody_table_housing_state_rent").html('');
    var list='';
    var filters =  Housing_state_rent.gridDataSource.filter();
    if(filters) {
        var allData = Housing_state_rent.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Housing_state_rent.gridDataSource.data();
    list.forEach(Housing_state_rent.list_pdf);
});

$("#export_housing_state_rent_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_housing_state_rent_pdf"))
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
		            $('#list_housing_state_rent_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Housing_state_rent_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_housing_state_rent_importar").click(function() {
	$('#import_housing_state_rent').modal();
});


$("#importar_housing_state_rent_excel").click(function() {
		if(Housing_state_rent.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/housing_state_rent/load_excel";
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
									Housing_state_rent.gridDataSource.read();
									$('#import_housing_state_rent').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_housing_state_rent(e) {

    Housing_state_rent.housing_state_rent_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Housing_state_rent.finditem(e.id);
	 Housing_state_rent.oldElement= dataItem;
	 $('#id_housing_state_rent').val(dataItem.id_housing_state_rent);
	 	$("#id_housing_state_rent").val(Housing_state_rent.oldElement.id_housing_state_rent);
	 	$("#name_housing_state_rent").val(Housing_state_rent.oldElement.name_housing_state_rent);
	 $("#taskhousing_state_rent").val('update');
	 $("#title_housing_state_rent").html('Actualizar Housing_state_rent');
	 $("#modal_housing_state_rent").modal();
	}


//Boton Accion
$('#btnaction_housing_state_rent').click(function () {
    Housing_state_rent.housing_state_rent_form.data('bootstrapValidator').validate();
        if(Housing_state_rent.housing_state_rent_form.data('bootstrapValidator').isValid())
			{
       		var housing_state_rent={};
       		housing_state_rent.name_housing_state_rent=$("#name_housing_state_rent").val();
       		var url=urlhome+"housing/housing_state_rent/create";
        	if($('#taskhousing_state_rent').val()=="update")
        		{
            		var url=urlhome+"housing/housing_state_rent/update";
            		housing_state_rent.id_housing_state_rent=Housing_state_rent.oldElement.id_housing_state_rent;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Housing_state_rent:housing_state_rent,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskhousing_state_rent').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El housing_state_rent fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskhousing_state_rent').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Housing_state_rent.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_housing_state_rent").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_housing_state_rent").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_housing_state_rent(e)
				{
				    var dataItem=Housing_state_rent.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Housing_state_rent?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing_state_rent/delete",
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
				                    Housing_state_rent.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_state_rent.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_housing_state_rent').click(function(){
        var checkbox_checked=$('#gridselection_housing_state_rent .check_row:checked');

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
                      var dataItem=Housing_state_rent.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/housing_state_rent/delete",
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
				                    Housing_state_rent.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_state_rent.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
